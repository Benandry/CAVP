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
            echo "\t\t<div class=\"row\">
\t\t\t
\t\t\t";
            // line 11
            if (((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 11, $this->source); })()) == "")) {
                // line 12
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu des produits </h2>
\t\t\t";
            } elseif ((            // line 13
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 13, $this->source); })()) == 1)) {
                // line 14
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits entrées </h2>
\t\t\t";
            } elseif ((            // line 15
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 15, $this->source); })()) == 2)) {
                // line 16
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Reintegrées </h2>
\t\t\t";
            } elseif ((            // line 17
(isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 17, $this->source); })()) == 3)) {
                // line 18
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Sorties </h2>
\t\t\t";
            }
            // line 20
            echo "\t\t\t<div class=\"col\">
\t\t\t\t<span class=\"float-start\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tTypes d'opreations
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
            echo "\">Tous</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 1]);
            echo "\">Entrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 2]);
            echo "\">Reintegrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 3]);
            echo "\">Sorties</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history");
            echo "\" class=\"float-end\">
\t\t\t\t\t<label for=\"ldate\">Preciser le mois :</label>
\t\t\t\t\t<input type=\"month\" id=\"ldate\" name=\"ldate\">
\t\t\t\t\t<input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<div class=\"row\">
\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                // line 55
                echo "\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t<div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t<h4 style=\"display: flex;\"><img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/calendrier.png"), "html", null, true);
                echo "\" width=\"30\" height=\"35\">
\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t<span class=\"text-uppercase\" style=\"color:#498000;\">
\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 61), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class='fas fa-coins' class=\"admin\"></i>
\t\t\t\t\t\t\t\tproduits :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 68), "html", null, true);
                echo "</span> (<span style=\"color:#498000;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types_order", [], "any", false, false, false, 68), "html", null, true);
                echo "</span>)
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t<i class=\"far fa-anchor\"></i>
\t\t\t\t\t\t\t\tCategorie :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\tAction :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 75), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 77) == "sortie")) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre de sortie : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 79
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 79)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 81
$context["histo"], "types", [], "any", false, false, false, 81) == "entrer")) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre ajoutée : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 83
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 83)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 85
$context["histo"], "types", [], "any", false, false, false, 85) == "integrer")) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre integrer : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 87
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 87)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\tReference :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 91), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\tDestination :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 94), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 96) == "sortie")) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_out", ["types" => twig_get_attribute($this->env, $this->source, $context["histo"], "types_prod", [], "any", false, false, false, 97), "numero" => twig_get_attribute($this->env, $this->source, $context["histo"], "numero", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\" class=\"button margin-right-md margin-bottom-md btn-danger btn-sm\">Ordre de sortie →</a>
\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t</div>
\t\t";
        } else {
            // line 106
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 114
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
        return array (  295 => 114,  288 => 110,  282 => 106,  278 => 104,  268 => 99,  262 => 97,  260 => 96,  255 => 94,  249 => 91,  246 => 90,  240 => 87,  237 => 86,  235 => 85,  230 => 83,  227 => 82,  225 => 81,  220 => 79,  217 => 78,  215 => 77,  210 => 75,  204 => 72,  195 => 68,  185 => 61,  179 => 58,  174 => 55,  170 => 54,  158 => 45,  148 => 38,  142 => 35,  136 => 32,  130 => 29,  119 => 20,  115 => 18,  113 => 17,  110 => 16,  108 => 15,  105 => 14,  103 => 13,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte rendu | Paositra Malagasy
{% endblock %}

{% block body %}
\t<main>
\t\t{% if app.user %}
\t\t<div class=\"row\">
\t\t\t
\t\t\t{% if description == \"\" %}
\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu des produits </h2>
\t\t\t{% elseif description == 1 %}
\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits entrées </h2>
\t\t\t{% elseif description == 2 %}
\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Reintegrées </h2>
\t\t\t{% elseif description == 3 %}
\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Sorties </h2>
\t\t\t{% endif %}
\t\t\t<div class=\"col\">
\t\t\t\t<span class=\"float-start\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tTypes d'opreations
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history', {'source':'tous les produits par categorie'}) }}\">Tous</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history',{description: 1}) }}\">Entrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history', {description: 2}) }}\">Reintegrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('history', {description: 3}) }}\">Sorties</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form action=\"{{ path('history') }}\" class=\"float-end\">
\t\t\t\t\t<label for=\"ldate\">Preciser le mois :</label>
\t\t\t\t\t<input type=\"month\" id=\"ldate\" name=\"ldate\">
\t\t\t\t\t<input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<div class=\"row\">
\t\t\t{% for histo in history%}
\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t<div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t<h4 style=\"display: flex;\"><img src=\"{{ asset('build/images/calendrier.png') }}\" width=\"30\" height=\"35\">
\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t<span class=\"text-uppercase\" style=\"color:#498000;\">
\t\t\t\t\t\t\t\t\t{{ histo.dat|format_date(locale='fr') }}

\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class='fas fa-coins' class=\"admin\"></i>
\t\t\t\t\t\t\t\tproduits :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.product }}</span> (<span style=\"color:#498000;\">{{ histo.types_order }}</span>)
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t<i class=\"far fa-anchor\"></i>
\t\t\t\t\t\t\t\tCategorie :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.categorie }}</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\tAction :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.types }}</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t{% if histo.types == \"sortie\" %}
\t\t\t\t\t\t\t\t\t<u>Nombre de sortie : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.nombre|abs }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t{% elseif histo.types == \"entrer\" %}
\t\t\t\t\t\t\t\t\t<u>Nombre ajoutée : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.nombre|abs }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t{% elseif histo.types == \"integrer\" %}
\t\t\t\t\t\t\t\t\t<u>Nombre integrer : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.nombre|abs }}</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\tReference :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.reference }}</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\tDestination :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">{{ histo.destination }}</span>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t{% if histo.types == \"sortie\"%}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('order_out',{types: histo.types_prod,numero: histo.numero }) }}\" class=\"button margin-right-md margin-bottom-md btn-danger btn-sm\">Ordre de sortie →</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t{% else %}
\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"{{ path('app_login') }}\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t{% endif %}
\t</main>
{% endblock %}
", "historique/history.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\history.html.twig");
    }
}
