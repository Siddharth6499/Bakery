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

/* security/login.html.twig */
class __TwigTemplate_e21886324431aa4bdc8aa81b165d3e74426bc2d8b39718a449ee8dd845f959fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["project_name"]) || array_key_exists("project_name", $context) ? $context["project_name"] : (function () { throw new RuntimeError('Variable "project_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " | Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"form login-form\">

            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 14
        echo "            <form method=\"post\">
                <div class=\"form-header\">
                    <h2 class=\"text-center\">Login</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 23
        echo "                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Email</span>
                            <input class=\"form-control\" name=\"email\" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Enter your email\" autofocus>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Password</span>
                            <input class=\"form-control\" name=\"password\" type=\"Password\" placeholder=\"Enter your password\">
                        </div>
                    </div>
                     <div class=\"col-md-6 text-left\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"remember-me\">
                            <label class=\"form-check-label\" for=\"remember-me\">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6 text-right\">
                      <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" > Forgot Password?</a>
                    </div> 
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-btn\">
                    <button type=\"submit\" class=\"submit-btn\">Login</button>
                </div>
            </form>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  135 => 45,  114 => 27,  108 => 23,  102 => 21,  100 => 20,  92 => 14,  84 => 11,  81 => 10,  79 => 9,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{project_name}} | Login{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"form login-form\">

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}
            <form method=\"post\">
                <div class=\"form-header\">
                    <h2 class=\"text-center\">Login</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Email</span>
                            <input class=\"form-control\" name=\"email\" type=\"text\" value=\"{{ last_username }}\" placeholder=\"Enter your email\" autofocus>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Password</span>
                            <input class=\"form-control\" name=\"password\" type=\"Password\" placeholder=\"Enter your password\">
                        </div>
                    </div>
                     <div class=\"col-md-6 text-left\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"remember-me\">
                            <label class=\"form-check-label\" for=\"remember-me\">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6 text-right\">
                      <a href=\"{{path('app_forgot_password_request')}}\" > Forgot Password?</a>
                    </div> 
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                </div>
                <div class=\"form-btn\">
                    <button type=\"submit\" class=\"submit-btn\">Login</button>
                </div>
            </form>
        </div>
    </div>
    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\security\\login.html.twig");
    }
}
