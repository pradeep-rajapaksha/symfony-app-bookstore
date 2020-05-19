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

/* BookstoreDefaultBundle:Security:login.html.twig */
class __TwigTemplate_658086bce9b2010d98cc51698370775c73e40ef3bcc0d5b901c50ca6da288ced extends \Twig\Template
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
        return "::base.auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BookstoreDefaultBundle:Security:login.html.twig"));

        $this->parent = $this->loadTemplate("::base.auth.html.twig", "BookstoreDefaultBundle:Security:login.html.twig", 1);
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
        echo "<!-- <h4 class=\"mt-5 mb-5\">Category Edit
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\" class=\"float-right btn btn-sm btn-secondary\">Back to the list</a>
    </h4> -->

    ";
        // line 8
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    <div class=\"row justify-content-md-center\">
        <div class=\"col-4\">
            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\" class=\"form-signin\">
                <div class=\"text-center mb-4\">
                    <!-- <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\"> -->
                    <!-- <h1 class=\"h3 mb-3 font-weight-normal\">Floating labels</h1> -->
                    <!-- <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href=\"https://caniuse.com/#feat=css-placeholder-shown\">Works in latest Chrome, Safari, and Firefox.</a></p> -->
                </div>
        
                <div class=\"form-label-group form-group\">
                    <!-- <label for=\"username\">Email address</label> -->
                    <input type=\"email\" name=\"_username\" id=\"username\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email address\" required autofocus>
                </div>
        
                <div class=\"form-label-group form-group\">
                    <!-- <label for=\"password\">Password</label> -->
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                </div>
        
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>
                
                <input type=\"hidden\" name=\"_target_path\" value=\"/store/book\"/>
        
                <button class=\"btn btn-md btn-primary btn-block\" type=\"submit\">Sign in</button>
                <!-- <p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p> -->
            </form>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BookstoreDefaultBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  90 => 14,  85 => 11,  79 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '::base.auth.html.twig' %}

{% block body -%}
    <!-- <h4 class=\"mt-5 mb-5\">Category Edit
        <a href=\"{{ path('category') }}\" class=\"float-right btn btn-sm btn-secondary\">Back to the list</a>
    </h4> -->

    {% if errors %}
        <div class=\"alert alert-danger\">{{ errors.messageKey|trans(errors.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"row justify-content-md-center\">
        <div class=\"col-4\">
            <form action=\"{{ path('login') }}\" method=\"post\" class=\"form-signin\">
                <div class=\"text-center mb-4\">
                    <!-- <img class=\"mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\"> -->
                    <!-- <h1 class=\"h3 mb-3 font-weight-normal\">Floating labels</h1> -->
                    <!-- <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href=\"https://caniuse.com/#feat=css-placeholder-shown\">Works in latest Chrome, Safari, and Firefox.</a></p> -->
                </div>
        
                <div class=\"form-label-group form-group\">
                    <!-- <label for=\"username\">Email address</label> -->
                    <input type=\"email\" name=\"_username\" id=\"username\" class=\"form-control\" value=\"{{ username }}\" placeholder=\"Email address\" required autofocus>
                </div>
        
                <div class=\"form-label-group form-group\">
                    <!-- <label for=\"password\">Password</label> -->
                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                </div>
        
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>
                
                <input type=\"hidden\" name=\"_target_path\" value=\"/store/book\"/>
        
                <button class=\"btn btn-md btn-primary btn-block\" type=\"submit\">Sign in</button>
                <!-- <p class=\"mt-5 mb-3 text-muted text-center\">&copy; 2017-2018</p> -->
            </form>
        </div>
    </div>

{% endblock %}", "BookstoreDefaultBundle:Security:login.html.twig", "/var/www/html/_bookstore/src/Bookstore/DefaultBundle/Resources/views/Security/login.html.twig");
    }
}
