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

/* historique/categorie_avec_date.html.twig */
class __TwigTemplate_335028fdd1a96fa1a6297c85480460b6 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/categorie_avec_date.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/categorie_avec_date.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/categorie_avec_date.html.twig", 1);
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

        echo "Preciser la date";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\" style=\"background-color: #e5e6e7;\">
        <div class=\"clearfix\">
            <span class=\"float-right\" style=\"margin-top: 10px;\">
                <ul class=\"nav\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span> Les produits:  <span></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                            <a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
        echo "\">Tous</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_enter", ["source" => "tous les produits entrée par categorie"]);
        echo "\">Entrées</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integreted", ["source" => "tous les produits integrés par categorie"]);
        echo "\">Reintegrées</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_out", ["source" => "tous les produits sorties par categorie"]);
        echo "\">Sorties</a>
                        </div>
                    </li>
                </ul>
            </span>
        </div>
        <h4 class=\"q-title\"> Compte rendu produits le date ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, (isset($context["ymd"]) || array_key_exists("ymd", $context) ? $context["ymd"] : (function () { throw new RuntimeError('Variable "ymd" does not exist.', 22, $this->source); })()), "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "  </h4>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
            // line 24
            echo "            <div class=\"col-lg-4 col-sm-6\" >
            <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
            <div class=\"box-element card card-solid\" style=\"margin: 20px;\">
                    <div class=\"card card-body\">
                        <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                            <span class=\"text-uppercase\" style=\"color:#498000;\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 30), "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "

                            </span>
                        </h4>
                        <p> <span> <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-voucher-mail.png"), "html", null, true);
            echo "\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 34), "html", null, true);
            echo "</span> <p>
                        <p> Categorie : <span style=\"color:#498000;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 35), "html", null, true);
            echo "</span> <p>
                        <p> Action : <span style=\"color:#498000;\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 36), "html", null, true);
            echo "</span> <p>
                        <p><u>Nombre :</u> <span style=\"color:#498000;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 37), "html", null, true);
            echo "</span> <p>
                        <p> Reference : <span style=\"color:#498000;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 38), "html", null, true);
            echo "</span> <p>
                        <p> Destination : <span style=\"color:#498000;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 39), "html", null, true);
            echo "</span> <p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "historique/categorie_avec_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 44,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  141 => 34,  134 => 30,  126 => 24,  122 => 23,  118 => 22,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Preciser la date{% endblock %}

{% block body %}
    <div class=\"row\" style=\"background-color: #e5e6e7;\">
        <div class=\"clearfix\">
            <span class=\"float-right\" style=\"margin-top: 10px;\">
                <ul class=\"nav\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span> Les produits:  <span></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                            <a class=\"dropdown-item\" href=\"{{ path('history', {'source':'tous les produits par categorie'}) }}\">Tous</a>
                            <a class=\"dropdown-item\" href=\"{{ path('history_enter', {'source':'tous les produits entrée par categorie'}) }}\">Entrées</a>
                            <a class=\"dropdown-item\" href=\"{{ path('integreted', {'source':'tous les produits integrés par categorie'}) }}\">Reintegrées</a>
                            <a class=\"dropdown-item\" href=\"{{ path('history_out', {'source':'tous les produits sorties par categorie'}) }}\">Sorties</a>
                        </div>
                    </li>
                </ul>
            </span>
        </div>
        <h4 class=\"q-title\"> Compte rendu produits le date {{ ymd|format_date(locale='fr') }}  </h4>
        {% for histo in history %}
            <div class=\"col-lg-4 col-sm-6\" >
            <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
            <div class=\"box-element card card-solid\" style=\"margin: 20px;\">
                    <div class=\"card card-body\">
                        <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                            <span class=\"text-uppercase\" style=\"color:#498000;\">
                            {{ histo.dat|format_date(locale='fr') }}

                            </span>
                        </h4>
                        <p> <span> <img src=\"{{ asset('images/shopping-voucher-mail.png') }}\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">{{ histo.product }}</span> <p>
                        <p> Categorie : <span style=\"color:#498000;\">{{ histo.categorie }}</span> <p>
                        <p> Action : <span style=\"color:#498000;\">{{ histo.types }}</span> <p>
                        <p><u>Nombre :</u> <span style=\"color:#498000;\">{{ histo.nombre }}</span> <p>
                        <p> Reference : <span style=\"color:#498000;\">{{ histo.reference }}</span> <p>
                        <p> Destination : <span style=\"color:#498000;\">{{ histo.destination }}</span> <p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "historique/categorie_avec_date.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\categorie_avec_date.html.twig");
    }
}
