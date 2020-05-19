<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/store')) {
            if (0 === strpos($pathinfo, '/store/book')) {
                // book
                if ('/store/book' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::indexAction',  '_route' => 'book',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_book;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'book'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_book;
                    }

                    return $ret;
                }
                not_book:

                // book_create
                if ('/store/book/' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::createAction',  '_route' => 'book_create',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_book_create;
                    }

                    return $ret;
                }
                not_book_create:

                // book_new
                if ('/store/book/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::newAction',  '_route' => 'book_new',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_book_new;
                    }

                    return $ret;
                }
                not_book_new:

                // book_show
                if (preg_match('#^/store/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_show']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_book_show;
                    }

                    return $ret;
                }
                not_book_show:

                // book_edit
                if (preg_match('#^/store/book/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_edit']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::editAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_book_edit;
                    }

                    return $ret;
                }
                not_book_edit:

                // book_update
                if (preg_match('#^/store/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_update']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::updateAction',));
                    if (!in_array($requestMethod, ['PUT'])) {
                        $allow = array_merge($allow, ['PUT']);
                        goto not_book_update;
                    }

                    return $ret;
                }
                not_book_update:

                // book_delete
                if (preg_match('#^/store/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'book_delete']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\BookController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_book_delete;
                    }

                    return $ret;
                }
                not_book_delete:

            }

            elseif (0 === strpos($pathinfo, '/store/category')) {
                // category
                if ('/store/category' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_category;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'category'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_category;
                    }

                    return $ret;
                }
                not_category:

                // category_create
                if ('/store/category/' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_category_create;
                    }

                    return $ret;
                }
                not_category_create:

                // category_new
                if ('/store/category/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_category_new;
                    }

                    return $ret;
                }
                not_category_new:

                // category_show
                if (preg_match('#^/store/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category_show']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_category_show;
                    }

                    return $ret;
                }
                not_category_show:

                // category_edit
                if (preg_match('#^/store/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category_edit']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::editAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_category_edit;
                    }

                    return $ret;
                }
                not_category_edit:

                // category_update
                if (preg_match('#^/store/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category_update']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::updateAction',));
                    if (!in_array($requestMethod, ['PUT'])) {
                        $allow = array_merge($allow, ['PUT']);
                        goto not_category_update;
                    }

                    return $ret;
                }
                not_category_update:

                // category_delete
                if (preg_match('#^/store/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category_delete']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CategoryController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_category_delete;
                    }

                    return $ret;
                }
                not_category_delete:

            }

            // login
            if ('/store/login' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/store/logout' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        elseif (0 === strpos($pathinfo, '/cart')) {
            // cart_index
            if ('/cart' === $pathinfo) {
                $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::showCartAction',  '_route' => 'cart_index',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_cart_index;
                }

                return $ret;
            }
            not_cart_index:

            // cart_clear
            if ('/cart/clear' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::clearCartAction',  '_route' => 'cart_clear',);
            }

            // coupon_add
            if ('/cart/add-coupon' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::addCouponAction',  '_route' => 'coupon_add',);
            }

            // cart_add
            if (preg_match('#^/cart/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cart_add']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::addToCartAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_cart_add;
                }

                return $ret;
            }
            not_cart_add:

            // cart_remove
            if (0 === strpos($pathinfo, '/cart/remove') && preg_match('#^/cart/remove/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'cart_remove']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::removeCartAction',));
            }

            // cart_checkout
            if ('/cart/checkout' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::checkOutAction',  '_route' => 'cart_checkout',);
            }

            // cart_invoice
            if ('/cart/invoice' === $pathinfo) {
                return array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\CartController::invoiceAction',  '_route' => 'cart_invoice',);
            }

        }

        // show_by_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'show_by_category']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\StoreController::showByCategoryAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_show_by_category;
            }

            return $ret;
        }
        not_show_by_category:

        // bookstore_default_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bookstore_default_default_index']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\DefaultController::indexAction',));
        }

        // store
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\StoreController::indexAction',  '_route' => 'store',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_store;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'store'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_store;
            }

            return $ret;
        }
        not_store:

        // show
        if (0 === strpos($pathinfo, '/book') && preg_match('#^/book/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'show']), array (  '_controller' => 'Bookstore\\DefaultBundle\\Controller\\StoreController::showAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_show;
            }

            return $ret;
        }
        not_show:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
