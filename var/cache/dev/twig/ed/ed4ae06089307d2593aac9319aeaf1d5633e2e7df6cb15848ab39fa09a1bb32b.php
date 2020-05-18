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

/* BookstoreDefaultBundle:Store:show.html.twig */
class __TwigTemplate_d17d407b7788b2c907bf22add2d24347d87c9be5811dc1e7310392400b10eafa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Store:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Store:show.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "BookstoreDefaultBundle:Store:show.html.twig", 1);
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

        // line 5
        echo "<div class=\"container mb-5\"></div>
<div class=\"container\">

    <div class=\"card\">
        <div class=\"row\">
            <div class=\"col-sm-5 border-right\">
                <a href=\"#\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("book-covers/book-cover-page-test.png"), "html", null, true);
        echo "\" class=\"img-fluid mx-auto pt-3 pl-3\" style=\"width: 100%;\"></a>
            </div>

            <div class=\"col-sm-7\">
                <article class=\"card-body p-5\">
                    <h3 class=\"title mb-3\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
                    
                    <p class=\"price-detail-wrap\">
                        <span class=\"price h3 text-warning\">
                            <span class=\"currency\">USD </span><span class=\"num\">";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), 2, ".", ","), "html", null, true);
        echo "</span>
                        </span>
                        <span>/per kg</span>
                    </p>
                    <dl class=\"item-property\">
                        <dt>Auther</dt>
                        <dd>
                            <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                        </dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>Publisher</dt>
                        <dd>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "publisher", [], "any", false, false, false, 32), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "publication", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
        echo ")</dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>ISBN</dt>
                        <dd>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "isbn", [], "any", false, false, false, 36), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>Category</dt>
                        <dd>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "category", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</dd>
                    </dl>

                    <hr>
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <dl class=\"param param-inline\">
                                <dt>Quantity: </dt>
                                <dd>
                                    <select class=\"form-control form-control-sm\" id=\"quantity\" name=\"quantity\" style=\"width:70px;\">
                                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "                                            <option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                    </select>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <hr>
                    <!-- <a href=\"#\" class=\"btn btn-lg btn-primary text-uppercase\"> Buy now </a> -->
                    <form action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\" method=\"POST\">
                        <input type=\"hidden\" name=\"qty\" id=\"qty\" value=\"1\" />
                        <button type=\"submit\" class=\"btn btn-lg btn-outline-primary text-uppercase\"> <i
                            class=\"fas fa-shopping-cart\"></i> Add to cart </button>
                            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store");
        echo "\" class=\"btn btn-lg btn-secondary text-uppercase\"> Cancel </a>
                    </form>
                </article>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById(\"quantity\").addEventListener(\"change\", myFunction);
    function myFunction() {
        var select = document.getElementById(\"quantity\");
        // alert(select.value);
        document.getElementById(\"qty\").value = select.value;
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BookstoreDefaultBundle:Store:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  160 => 60,  151 => 53,  142 => 51,  138 => 50,  125 => 40,  118 => 36,  109 => 32,  101 => 27,  91 => 20,  84 => 16,  76 => 11,  68 => 5,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.html.twig' %}

{% block body -%}

<div class=\"container mb-5\"></div>
<div class=\"container\">

    <div class=\"card\">
        <div class=\"row\">
            <div class=\"col-sm-5 border-right\">
                <a href=\"#\"><img src=\"{{ asset('book-covers/book-cover-page-test.png') }}\" class=\"img-fluid mx-auto pt-3 pl-3\" style=\"width: 100%;\"></a>
            </div>

            <div class=\"col-sm-7\">
                <article class=\"card-body p-5\">
                    <h3 class=\"title mb-3\">{{ entity.title }}</h3>
                    
                    <p class=\"price-detail-wrap\">
                        <span class=\"price h3 text-warning\">
                            <span class=\"currency\">USD </span><span class=\"num\">{{ entity.price | number_format(2, '.', ',') }}</span>
                        </span>
                        <span>/per kg</span>
                    </p>
                    <dl class=\"item-property\">
                        <dt>Auther</dt>
                        <dd>
                            <p>{{ entity.author }}</p>
                        </dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>Publisher</dt>
                        <dd>{{ entity.publisher }} ({{ entity.publication | date('Y-m-d') }})</dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>ISBN</dt>
                        <dd>{{ entity.isbn }}</dd>
                    </dl>
                    <dl class=\"param param-feature\">
                        <dt>Category</dt>
                        <dd>{{ entity.category.name }}</dd>
                    </dl>

                    <hr>
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <dl class=\"param param-inline\">
                                <dt>Quantity: </dt>
                                <dd>
                                    <select class=\"form-control form-control-sm\" id=\"quantity\" name=\"quantity\" style=\"width:70px;\">
                                        {% for i in 1..10 %}
                                            <option>{{ i }}</option>
                                        {% endfor %}
                                    </select>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <hr>
                    <!-- <a href=\"#\" class=\"btn btn-lg btn-primary text-uppercase\"> Buy now </a> -->
                    <form action=\"{{ path('cart_add',{'id': entity.id}) }}\" method=\"POST\">
                        <input type=\"hidden\" name=\"qty\" id=\"qty\" value=\"1\" />
                        <button type=\"submit\" class=\"btn btn-lg btn-outline-primary text-uppercase\"> <i
                            class=\"fas fa-shopping-cart\"></i> Add to cart </button>
                            <a href=\"{{ path('store') }}\" class=\"btn btn-lg btn-secondary text-uppercase\"> Cancel </a>
                    </form>
                </article>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById(\"quantity\").addEventListener(\"change\", myFunction);
    function myFunction() {
        var select = document.getElementById(\"quantity\");
        // alert(select.value);
        document.getElementById(\"qty\").value = select.value;
    }
</script>

{% endblock %}", "BookstoreDefaultBundle:Store:show.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Store/show.html.twig");
    }
}
