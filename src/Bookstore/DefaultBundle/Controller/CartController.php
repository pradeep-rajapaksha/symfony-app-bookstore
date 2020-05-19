<?php

namespace Bookstore\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bookstore\DefaultBundle\Entity\Book;
use Bookstore\DefaultBundle\Entity\OrderBook;
use Bookstore\DefaultBundle\Entity\Order;
use Bookstore\DefaultBundle\Entity\User;
use Bookstore\DefaultBundle\Entity\Customer;
use Bookstore\DefaultBundle\Entity\CreateOrderRequest;
use Bookstore\DefaultBundle\Utils\Cart;
use Bookstore\DefaultBundle\Utils\CartItem;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Psr\Log\LoggerInterface;
use Bookstore\DefaultBundle\Form\ShippingDetailsType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CartController extends Controller
{
    /**
     * @var \Symfony\Component\HttpFoundation\Session\Session
     */
    protected $session;

    protected $cart;

    /**
     * The constructor
     */
    public function __construct()
    {
        $storage = new NativeSessionStorage();
        $attributes = new NamespacedAttributeBag();
        
        // Cart details 
        $this->session = new Session($storage, $attributes);
        $this->cart = new Cart($this->session);
    }

    /**
     * Lists all Cart items.
     *
     * @Route("/cart", name="cart_index")
     * @Method("GET")
     * @Template("@BookstoreDefault/Store/cart.html.twig")
     */
    public function showCartAction()
    {
        $cart = $this->cart->getItems();

        return array('cart' => $cart);
    }

    /**
     * Clears the Cart
     *
     * @Route("/cart/clear", name="cart_clear")
     */
    public function clearCartAction()
    {
        $this->cart->clear();

        $this->addFlash('success', 'Cart cleared');

        return $this->redirectToRoute('store');
    }

    /**
     * Adds Coupon to the Cart
     *
     * @Route("/cart/add-coupon", name="coupon_add")
     */
    public function addCouponAction(Request $request)
    {
        $coupon = $request->get('coupon', null);

        if (! empty($coupon)) {
            $this->cart->setCoupon($coupon);
            $this->addFlash('success', 'Coupon redeemed successfully.');
        } else {
            $this->addFlash('danger', 'Coupon code cannot be empty.');
        }

        return $this->redirectToRoute('cart_index');
    }

    /**
     *  Add a book to Cart
     *
     * @Route("/cart/{id}", name="cart_add", requirements={"id": "\d+"}, methods="POST")
     */
    public function addToCartAction(Book $book, Request $request)
    {
        $qty = $request->request->get('qty', '1');

        $item = new CartItem([
            'id' => $book->getId(),
            'name' => $book->getTitle(),
            'price' => $book->getPrice(),
        ]);
        
        $item->setQuantity($qty);
        $item->setCategoryId($book->getCategoryId());
        $this->cart->addItem($item);

        $this->addFlash('success', 'Book added to cart successfully.');

        return $this->redirectToRoute('store');
    }

    /**
     * Removes given book from the cart
     *
     * @Route("/cart/remove/{id}", name="cart_remove", requirements={"id": "\d+"})
     */
    public function removeCartAction(int $id)
    {
        $this->cart->removeItem($id);
        $this->addFlash('success', 'Book removed from the cart.');

        return $this->redirectToRoute('store');
    }

    /**
     * Checkout process of the cart
     *
     * @Route("/cart/checkout", name="cart_checkout")
     * @Template("@BookstoreDefault/Store/checkout.html.twig")
     */
    public function checkOutAction(Request $request)
    {

        $cartItems = $this->cart->getItems();
        $cartNetTotal = $this->cart->getTotal();
        $cartTotal = $this->cart->getDiscountTotal();
        $discount = $this->cart->getAppliedDiscount();

        // create an instance of an empty CreateOrderRequest
        $createOrderRequest = new CreateOrderRequest();

        // create a form but with a request object instead of entity
        $form = $this->createForm(ShippingDetailsType::class, $createOrderRequest);
        $form->add('submit', SubmitType::class, array('label' => 'Pay', 'attr' => array('class' => 'btn btn-success btn-block mt-2')));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {   
            $em = $this->getDoctrine()->getManager();
            
            $email = $createOrderRequest->email;
            $customer = $em->getRepository(Customer::class)->findOneBy(['email' => $email]); 

            if ($customer) {
                echo 'customer found!';
            }
            
            try
            {
                $name = $createOrderRequest->name;
                $email = $createOrderRequest->email;
                $contact = $createOrderRequest->contact;
                $address1 = $createOrderRequest->address1;
                $address2 = $createOrderRequest->address2;
                $postcode = $createOrderRequest->postcode;
                $suburb = $createOrderRequest->suburb;
                $state = $createOrderRequest->state;
                // 
                if (null == $customer) {
                    $customer = new Customer();
                    $customer->setName($name);
                    $customer->setEmail($email);
                    $customer->setContact($contact);
                    
                    $em->persist($customer);
                    $em->flush();
                }
                
                $order = new Order();
                $order->setCustomerId($customer->getId());
                $order->setTotal($cartTotal);
                $order->setOrderedAt(new \DateTime());
                $order->setAddress1($address1);
                $order->setAddress2($address2);
                $order->setPostcode($postcode);
                $order->setSuburb($suburb);
                $order->setState($state);
                // var_dump($order->getState()); exit;

                $em->persist($order);
                $em->flush();
                
                foreach ($this->cart->getItems() as $item) {
                    $orderBook = new OrderBook();
                    $orderBook->setBookId($item->getId());
                    $orderBook->setOrderId($order->getId());
                    $orderBook->setQty($item->getQuantity());
                    $orderBook->setPrice($item->getPrice());
                    $orderBook->setTotal($item->getTotal());
                    
                    $em->persist($orderBook);
                    $em->flush();
                }
                // 
                $this->addFlash('success', 'Order completed.');
                
                $returnData = array(
                    'cart' => $cartItems,
                    'orderId' => $order->getId(),
                    'netTotal' => $cartNetTotal,
                    'total' => $cartTotal,
                    'discount'=> $discount,
                );
                return $this->redirect($this->generateUrl('cart_invoice', $returnData));
            }
            catch (\Exception $exception) {
                // 
                // var_dump('>>>>> exception'); 
                $this->addFlash('danger', 'Error');
            }
        }

        return array(
            'form'   => $form->createView(),
            'cart' => $cartItems,
            'discount' => $discount,
            'netTotal' => $cartNetTotal,
        );
    }

    /**
     * Checkout process of the cart
     *
     * @Route("/cart/invoice", name="cart_invoice")
     * @Template("@BookstoreDefault/Store/invoice.html.twig")
     */
    public function invoiceAction(Request $request)
    {
        $cartItems = $this->cart->getItems();
        $cartNetTotal = $this->cart->getTotal();
        $cartTotal = $this->cart->getDiscountTotal();
        $discount = $this->cart->getAppliedDiscount();

        $order = $request->query->get('orderId', '');

        // clear the cart when invoice printed
        $this->cart->clear();

        return array(
            'cart' => $cartItems,
            'orderId' => str_pad($order, 4, '0', STR_PAD_LEFT),
            'netTotal' => $cartNetTotal,
            'total' => $cartTotal,
            'discount'=> $discount,
        );
    }
}