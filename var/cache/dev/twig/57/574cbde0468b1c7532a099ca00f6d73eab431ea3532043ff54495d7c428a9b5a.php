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

/* BookstoreDefaultBundle:Store:index.html.twig */
class __TwigTemplate_f6d5ed2dc93a52558d5cea9927f3790c5ef00862fef94f41859ae24c89fd9165 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Store:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Store:index.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "BookstoreDefaultBundle:Store:index.html.twig", 1);
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
        echo "<!-- <section class=\"jumbotron text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\"></div>
        </div>
    </div>
</section> -->
<!-- <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"category.html\">Category</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div> -->
<div class=\"container mb-5\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-3\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header bg-primary text-white text-uppercase\"><i class=\"fa fa-list\"></i> Categories
                </div>
                <ul class=\"list-group category_block\">
                        <li class=\"list-group-item\"><a href=\"/\">All</a></li>
                    ";
        // line 33
        if ((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                echo "                        <!-- <li class=\"list-group-item\"><a href=\"category.html\">Cras justo odio</a></li> -->
                        <li class=\"list-group-item\"><a href=\"/category/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    ";
        }
        // line 39
        echo "                </ul>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"row\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 45
            echo "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("book-covers/book-cover-page-test.png"), "html", null, true);
            echo "\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"><a href=\"book/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" title=\"View Book\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></h4>
                                <p class=\"card-text\"><small>Author: ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 50), "html", null, true);
            echo "</small></p>
                                <div class=\"row\">
                                    <div class=\"col align-self-start\">
                                        <p class=\"btn btn-danger btn-block\">";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 53), 2, ".", ","), "html", null, true);
            echo " \$</p>
                                    </div>
                                    <div class=\"col align-self-start\">
                                        <form action=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" method=\"POST\">
                                            <input type=\"hidden\" name=\"qty\" value=\"1\" />
                                            <button type=\"submit\" class=\"btn btn-block btn-success text-uppercase\"> <i
                                                class=\"fas fa-shopping-cart\"></i> Add to cart </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                <!-- <div class=\"col-12\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
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
        return "BookstoreDefaultBundle:Store:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 67,  160 => 56,  154 => 53,  148 => 50,  142 => 49,  137 => 47,  133 => 45,  129 => 44,  122 => 39,  119 => 38,  109 => 36,  106 => 35,  101 => 34,  99 => 33,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.html.twig' %}

{% block body -%}
<!-- <section class=\"jumbotron text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\"></div>
        </div>
    </div>
</section> -->
<!-- <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"category.html\">Category</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div> -->
<div class=\"container mb-5\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-sm-3\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-header bg-primary text-white text-uppercase\"><i class=\"fa fa-list\"></i> Categories
                </div>
                <ul class=\"list-group category_block\">
                        <li class=\"list-group-item\"><a href=\"/\">All</a></li>
                    {% if(categories) %}
                    {% for category in categories %}
                        <!-- <li class=\"list-group-item\"><a href=\"category.html\">Cras justo odio</a></li> -->
                        <li class=\"list-group-item\"><a href=\"/category/{{ category.id }}\">{{ category.name }}</a></li>
                    {% endfor %}
                    {% endif %}
                </ul>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"row\">
                {% for book in books %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"{{ asset('book-covers/book-cover-page-test.png') }}\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"><a href=\"book/{{ book.id }}\" title=\"View Book\">{{ book.title }}</a></h4>
                                <p class=\"card-text\"><small>Author: {{ book.author }}</small></p>
                                <div class=\"row\">
                                    <div class=\"col align-self-start\">
                                        <p class=\"btn btn-danger btn-block\">{{ book.price | number_format(2, '.', ',') }} \$</p>
                                    </div>
                                    <div class=\"col align-self-start\">
                                        <form action=\"{{ path('cart_add',{'id': book.id}) }}\" method=\"POST\">
                                            <input type=\"hidden\" name=\"qty\" value=\"1\" />
                                            <button type=\"submit\" class=\"btn btn-block btn-success text-uppercase\"> <i
                                                class=\"fas fa-shopping-cart\"></i> Add to cart </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                <!-- <div class=\"col-12\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>

    </div>
</div>

{% endblock %}", "BookstoreDefaultBundle:Store:index.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Store/index.html.twig");
    }
}
