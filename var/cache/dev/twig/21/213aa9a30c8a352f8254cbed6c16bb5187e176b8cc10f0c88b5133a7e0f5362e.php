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

/* @BookstoreDefault/Store/invoice.html.twig */
class __TwigTemplate_07e3c85a40b6c2fc0ec4f6ff89f5ae122e5f5c488f9ceb266d39a0320d0ba4ad extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BookstoreDefault/Store/invoice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@BookstoreDefault/Store/invoice.html.twig", 1);
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
            
            <h4 class=\"mt-5 mb-5\">Purchase Invoice <span class=\"float-right\">Order #";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</span></h4>
            
            <table id=\"cart\" class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <td>Book Title</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td class=\"text-right\">Sub Total</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                    <tr>
                        <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>\$";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 24), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td data-th=\"Subtotal\" class=\"text-right\">
                            \$";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 26)), 2, ".", ","), "html", null, true);
            echo "
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">Discount ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["discount"]) || array_key_exists("discount", $context) ? $context["discount"] : (function () { throw new RuntimeError('Variable "discount" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " %</td>
                        <td class=\"text-right\"> ";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["netTotal"]) || array_key_exists("netTotal", $context) ? $context["netTotal"] : (function () { throw new RuntimeError('Variable "netTotal" does not exist.', 34, $this->source); })()) * (isset($context["discount"]) || array_key_exists("discount", $context) ? $context["discount"] : (function () { throw new RuntimeError('Variable "discount" does not exist.', 34, $this->source); })())) / 100), 2, ".", ","), "html", null, true);
        echo " </td>
                    </tr>
                    <tr>
                        <th colspan=\"3\">Total</th>
                        <td class=\"text-right\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <td><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i>Back to
                Home</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@BookstoreDefault/Store/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  137 => 38,  130 => 34,  126 => 33,  121 => 30,  111 => 26,  106 => 24,  102 => 23,  96 => 22,  93 => 21,  89 => 20,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-12\">
            
            <h4 class=\"mt-5 mb-5\">Purchase Invoice <span class=\"float-right\">Order #{{ orderId }}</span></h4>
            
            <table id=\"cart\" class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <td>Book Title</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td class=\"text-right\">Sub Total</td>
                    </tr>
                </thead>
                <tbody>
                    {% for item in cart %}
                    <tr>
                        <td><a href=\"{{ path('book_show',{'id': item.id}) }}\">{{ item.name }}</a></td>
                        <td>{{ item.quantity }}</td>
                        <td>\${{ item.price | number_format(2,'.',',') }}</td>
                        <td data-th=\"Subtotal\" class=\"text-right\">
                            \${{ (item.quantity * item.price) | number_format(2,'.',',') }}
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"3\">Discount {{ discount }} %</td>
                        <td class=\"text-right\"> {{ (netTotal * discount / 100) | number_format(2,'.',',') }} </td>
                    </tr>
                    <tr>
                        <th colspan=\"3\">Total</th>
                        <td class=\"text-right\">{{ total }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"row\">
        <td><a href=\"{{ path('homepage') }}\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i>Back to
                Home</a>
    </div>
</div>
{% endblock %}", "@BookstoreDefault/Store/invoice.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Store/invoice.html.twig");
    }
}
