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
use Bookstore\DefaultBundle\Utils\Cart;
use Bookstore\DefaultBundle\Utils\CartItem;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

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
     * Checkout: summery page - Lists all Cart items and show shipping address form.
     *
     * @Route("/cart/checkout", name="cart_checkout")
     * @Method("GET")
     * @Template("@BookstoreDefault/Store/checkout.html.twig")
     */
    public function showCheckOutAction()
    {
        $cart = $this->cart->getItems();

        return array('cart' => $cart);
    }

    /**
     * Checkout process of the cart
     *
     * @Route("/cart/purchase", name="cart_purchase")
     * @Template("@BookstoreDefault/Store/invoice.html.twig")
     */
    public function checkOutAction()
    {
        $cartItems = $this->cart->getItems();
        $cartNetTotal = $this->cart->getTotal();
        $cartTotal = $this->cart->getDiscountTotal();
        $discount = $this->cart->getAppliedDiscount();

        $em = $this->getDoctrine()->getManager();
        // $firstUser = $em->getRepository(User::class)->findOneBy([]); 

        $order = new Order();

        try {
            // $address1
            // $address2
            // $postcode
            // $suburb
            // $state

            $order->setUserId($firstUser->getId());
            $order->setTotal($cartTotal);
            $order->setOrderedAt(new \DateTime());
            $em->persist($order);
            $em->flush();

            foreach ($this->cart->getItems() as $item) {
                $orderBook = new OrderBook();
                $orderBook->setQty($item->getQuantity());
                $orderBook->setOrderId($order->getId());
                $orderBook->setBookId($item->getId());
                $orderBook->setTotal($item->getTotal());
                $em->persist($orderBook);
                $em->flush();
            }

            $this->addFlash('success', 'Checkout completed. Your order will be shipped soon.');
            $this->cart->clear();
        } catch (\Exception $exception) {
            $this->addFlash('danger', 'Error'); // need to log the exception details
        }

        return array(
            'cart' => $cartItems,
            'orderId' => $order->getId(),
            'netTotal' => $cartNetTotal,
            'total' => $cartTotal,
            'discount'=> $discount,
        );
    }
}