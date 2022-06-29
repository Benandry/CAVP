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

/* historique/history.html.twig */
class __TwigTemplate_1dcee6589ee7e17e5feb17cc0d165960 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Compte rendu | Paositra Malagasy
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<main>
\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t\t<div style=\"background-color: #e5e6e7;\">

\t\t\t\t\t<span class=\"float-end\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tTypes d'opreations
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
            echo "\">Tous</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_enter", ["source" => "tous les produits entrée par categorie"]);
            echo "\">Entrées</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integreted", ["source" => "tous les produits integrés par categorie"]);
            echo "\">Reintegrées</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_out", ["source" => "tous les produits sorties par categorie"]);
            echo "\">Sorties</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</span>
\t\t\t\t\t<h2 class=\"fw-bolder text-center\">
\t\t\t\t\t\tCompte rendu produits
\t\t\t\t\t</h2>

\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\">
\t\t\t\t\t\tPreciser la date Ordre de sortie →</button>
\t\t\t\t\t<div class=\"modal\" id=\"myModal\">
\t\t\t\t\t\t";
            // line 40
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">
\t\t\t\t\t\t\t\t\t\tPreciser la date
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "preciser", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "submit", [], "any", false, false, false, 58), 'row', ["label" => "valider"]);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                // line 67
                echo "\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t<!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
\t\t\t\t\t\t\t<div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
\t\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t\t<h4 style=\"display: flex;\"><img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/calendrier.png"), "html", null, true);
                echo "\" width=\"30\" height=\"35\">
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\" style=\"color:#498000;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 75), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class='fas fa-coins' class=\"admin\"></i>
\t\t\t\t\t\t\t\t\t\tproduits :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 82), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tCategorie :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 85), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tAction :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 88), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\t<u>Nombre :</u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 91), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tReference :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 94), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tDestination :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 97), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 107
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                misspelling or
\t\t\t\t<a href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 116
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "historique/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 116,  262 => 112,  255 => 107,  250 => 104,  237 => 97,  231 => 94,  225 => 91,  219 => 88,  213 => 85,  207 => 82,  197 => 75,  191 => 72,  184 => 67,  180 => 66,  172 => 61,  166 => 58,  157 => 52,  151 => 49,  139 => 40,  124 => 28,  118 => 25,  112 => 22,  106 => 19,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte rendu | Paositra Malagasy
{% endblock %}

{% block body %}
\t<main>
\t\t{% if app.user %}
\t\t\t<div style=\"background-color: #e5e6e7;\">

\t\t\t\t\t<span class=\"float-end\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tTypes d'opreations
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history', {'source':'tous les produits par categorie'}) }}\">Tous</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history_enter', {'source':'tous les produits entrée par categorie'}) }}\">Entrées</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('integreted', {'source':'tous les produits integrés par categorie'}) }}\">Reintegrées</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history_out', {'source':'tous les produits sorties par categorie'}) }}\">Sorties</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</span>
\t\t\t\t\t<h2 class=\"fw-bolder text-center\">
\t\t\t\t\t\tCompte rendu produits
\t\t\t\t\t</h2>

\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\">
\t\t\t\t\t\tPreciser la date Ordre de sortie →</button>
\t\t\t\t\t<div class=\"modal\" id=\"myModal\">
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">
\t\t\t\t\t\t\t\t\t\tPreciser la date
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.preciser, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_row(form.submit, { 'label': 'valider' }) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for histo in history%}
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t\t<!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
\t\t\t\t\t\t\t<div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
\t\t\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t\t\t<h4 style=\"display: flex;\"><img src=\"{{ asset('build/images/calendrier.png') }}\" width=\"30\" height=\"35\">
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\" style=\"color:#498000;\">
\t\t\t\t\t\t\t\t\t\t\t{{ histo.dat|format_date(locale='fr') }}

\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class='fas fa-coins' class=\"admin\"></i>
\t\t\t\t\t\t\t\t\t\tproduits :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.product }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tCategorie :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.categorie }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tAction :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.types }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\t<u>Nombre :</u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.nombre }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tReference :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.reference }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t\t\tDestination :
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.destination }}</span>
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                misspelling or
\t\t\t\t<a href=\"{{ path('app_login') }}\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t{% endif %}
\t</main>
{% endblock %}
", "historique/history.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\history.html.twig");
    }
}
