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

/* @BookstoreDefault/Store/checkout.html.twig */
class __TwigTemplate_863cab57d94bc439a5423b0da06e86d6368eda1efccca031687d9ceafd91b20e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/checkout.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@BookstoreDefault/Store/checkout.html.twig", 1);
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

            <h4 class=\"mt-5 mb-5\">Checkout</h4>

            <div class=\"row\">
                <div class=\"col-md-7\">
                    <p class=\"\"><strong>Your Cart</strong></p>
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
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                            <tr>
                                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>\$";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 28), 2, ".", ","), "html", null, true);
            echo "</td>
                                <td data-th=\"Subtotal\" class=\"text-center\">
                                    \$";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 30) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 30)), 2, ".", ","), "html", null, true);
            echo "
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </tbody>
                        <tfoot>
                            <tr class=\"visible-xs\">
                                <td class=\"text-left\" colspan=\"3\"><strong>Total</strong></td>
                                <td class=\"text-center\"><strong>
                                        \$";
        // line 39
        (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "session", [], "any", false, false, false, 39), "get", [0 => "totalPrice"], "method", false, false, false, 39)) ? (print ("0")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "session", [], "any", false, false, false, 39), "get", [0 => "totalPrice"], "method", false, false, false, 39), "html", null, true))));
        echo "
                                    </strong></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class=\"col\">
                    <p class=\"\"><strong>Shipping Details</strong></p>
                    <div class=\"col\">
                        <form action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_purchase");
        echo "\" method=\"POST\">
                            <div class=\"form-group\">
                                <!-- <label for=\"address1\">Address Line 1</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"address1\" placeholder=\"Address Line 1\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"address2\">Address Line 2</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"address2\" placeholder=\"Address Line 2\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"addresspostcode\">Postcode</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"addresspostcode\" placeholder=\"Postcode\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"suburb\">Suburb</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"suburb\" placeholder=\"Suburb\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"state\">State</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"state\" placeholder=\"State\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Pay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@BookstoreDefault/Store/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  129 => 39,  122 => 34,  112 => 30,  107 => 28,  103 => 27,  97 => 26,  94 => 25,  90 => 24,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-12\">

            <h4 class=\"mt-5 mb-5\">Checkout</h4>

            <div class=\"row\">
                <div class=\"col-md-7\">
                    <p class=\"\"><strong>Your Cart</strong></p>
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
                        </tfoot>
                    </table>
                </div>
                <div class=\"col\">
                    <p class=\"\"><strong>Shipping Details</strong></p>
                    <div class=\"col\">
                        <form action=\"{{ path('cart_purchase') }}\" method=\"POST\">
                            <div class=\"form-group\">
                                <!-- <label for=\"address1\">Address Line 1</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"address1\" placeholder=\"Address Line 1\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"address2\">Address Line 2</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"address2\" placeholder=\"Address Line 2\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"addresspostcode\">Postcode</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"addresspostcode\" placeholder=\"Postcode\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"suburb\">Suburb</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"suburb\" placeholder=\"Suburb\">
                            </div>
                            <div class=\"form-group\">
                                <!-- <label for=\"state\">State</label> -->
                                <input type=\"text\" class=\"form-control\" id=\"state\" placeholder=\"State\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Pay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}", "@BookstoreDefault/Store/checkout.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Store/checkout.html.twig");
    }
}
