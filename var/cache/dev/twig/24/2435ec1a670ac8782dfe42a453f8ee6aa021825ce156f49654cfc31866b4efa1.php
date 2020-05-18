<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @BookstoreDefault/Store/cart.html.twig */
class __TwigTemplate_e9384538ecf438712234d3cddc20b086639556d8ea10d10a7060c33ba09ce3bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/cart.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@BookstoreDefault/Store/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-12\">

            <h4 class=\"mt-5 mb-5\"> Your Cart
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"float-right btn btn-sm btn-warning\">Continue Shopping</a>
            </h4>

            ";
        // line 12
        if (twig_test_empty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                <div class=\"alert alert-secondary\" role=\"alert\">
                    Your cart is empty.
                </div>
            ";
        } else {
            // line 17
            echo "                <table id=\"cart\" class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>Book Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class=\"text-center\">Sub Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "                        <tr>
                            <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                            <td>\$";
                // line 32
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 32), 2, ".", ","), "html", null, true);
                echo "</td>
                            <td data-th=\"Subtotal\" class=\"text-center\">
                                \$";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 34) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 34)), 2, ".", ","), "html", null, true);
                echo "
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-sm\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\"> remove
                                </a>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
                    <tfoot>
                        <tr class=\"visible-xs\">
                            <td class=\"text-left\" colspan=\"3\"><strong>Total</strong></td>
                            <td class=\"text-center\"><strong>
                                    \$";
            // line 47
            (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "totalPrice"], "method", false, false, false, 47)) ? (print ("0")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "totalPrice"], "method", false, false, false, 47), "html", null, true))));
            echo "
                                </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class=\"text-right\" colspan=\"4\">
                                <a class=\"btn btn-info\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            echo "\">Clear <i
                                        class=\"fa fa-refresh\"></i></a>
                                <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_checkout");
            echo "\" class=\"btn btn-success\">Checkout <i
                                        class=\"fa fa-angle-right\"></i></a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <form action=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon_add");
            echo "\" method=\"post\">
                                <td><input type=\"text\" name=\"coupon\" class=\"form-control\" value=\"\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"></td>
                                <td><button type=\"submit\" class=\"btn btn-success btn-block\">Redeem Coupon</button></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </form>
                        </tr>
                    </tfoot>
                </table>
            ";
        }
        // line 73
        echo "            
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@BookstoreDefault/Store/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 73,  176 => 63,  171 => 61,  162 => 55,  157 => 53,  148 => 47,  141 => 42,  130 => 37,  124 => 34,  119 => 32,  115 => 31,  109 => 30,  106 => 29,  102 => 28,  89 => 17,  83 => 13,  81 => 12,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-12\">

            <h4 class=\"mt-5 mb-5\"> Your Cart
                <a href=\"{{ path('homepage') }}\" class=\"float-right btn btn-sm btn-warning\">Continue Shopping</a>
            </h4>

            {% if cart is empty %}
                <div class=\"alert alert-secondary\" role=\"alert\">
                    Your cart is empty.
                </div>
            {% else %}
                <table id=\"cart\" class=\"table table-hover table-condensed\">
                    <thead>
                        <tr>
                            <th>Book Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class=\"text-center\">Sub Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in cart %}
                        <tr>
                            <td><a href=\"{{ path('book_show',{'id': item.id}) }}\">{{ item.name }}</a></td>
                            <td>{{ item.quantity }}</td>
                            <td>\${{ item.price | number_format(2,'.',',') }}</td>
                            <td data-th=\"Subtotal\" class=\"text-center\">
                                \${{ (item.quantity * item.price) | number_format(2,'.',',') }}
                            </td>
                            <td>
                                <a class=\"btn btn-danger btn-sm\" href=\"{{ path('cart_remove',{'id': item.id}) }}\"> remove
                                </a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr class=\"visible-xs\">
                            <td class=\"text-left\" colspan=\"3\"><strong>Total</strong></td>
                            <td class=\"text-center\"><strong>
                                    \${{ not app.session.get('totalPrice') ? \"0\" : app.session.get('totalPrice') }}
                                </strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class=\"text-right\" colspan=\"4\">
                                <a class=\"btn btn-info\" href=\"{{ path('cart_clear') }}\">Clear <i
                                        class=\"fa fa-refresh\"></i></a>
                                <a href=\"{{ path('cart_checkout') }}\" class=\"btn btn-success\">Checkout <i
                                        class=\"fa fa-angle-right\"></i></a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <form action=\"{{ path('coupon_add') }}\" method=\"post\">
                                <td><input type=\"text\" name=\"coupon\" class=\"form-control\" value=\"\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"></td>
                                <td><button type=\"submit\" class=\"btn btn-success btn-block\">Redeem Coupon</button></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </form>
                        </tr>
                    </tfoot>
                </table>
            {% endif %}
            
        </div>
    </div>
</div>
{% endblock %}", "@BookstoreDefault/Store/cart.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Store/cart.html.twig");
    }
}
