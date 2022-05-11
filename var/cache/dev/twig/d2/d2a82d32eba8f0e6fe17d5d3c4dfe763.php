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
class __TwigTemplate_888d6e86f6406987218a8251b7262e9b extends \Twig\Template
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
        echo "    <div class=\"clearfix\">
        <span class=\"float-right\">
            <span> Les produits:  <span>
            <select name=\"link\" id='' size=\"1\" onchamge=\"window.location.href=this.value;\">
                <option onClick=\"window.location = '";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history");
        echo "'\" >Tous </option>
                <option onClick=\"window.location = '";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_enter");
        echo "'\" >Entrées</option>
                <option onClick=\"window.location = '";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integreted");
        echo "'\" >Reintegrées</option>
                <option onClick=\"window.location = '";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_out");
        echo "'\" >Sorties</option>
            </select>
        </span>
    </div>
<h4 class=\"q-title\"> Compte rendu produits le date ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, (isset($context["ymd"]) || array_key_exists("ymd", $context) ? $context["ymd"] : (function () { throw new RuntimeError('Variable "ymd" does not exist.', 17, $this->source); })()), "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "  </h4>

    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("precision_date");
        echo "\">Preciser la date</a>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HistoriqueController::specify"));
        echo "
   <!--
    <form action=\"\"  method=\"post\">
       <label>preciser la date :</label> <input type=\"date\" name=\"date_precis\" value=\"\" id=\"date\">
        <button type=\"submit\">OK</button>
    </form>
    !-->
   <div class=\"row\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
            // line 28
            echo "                <div class=\"col-lg-4 col-sm-6\" >
                   <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
                   <div class=\"box-element card card-solid\" style=\"margin: 20px;\">
                        <div class=\"card card-body\">
                            <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                                <span class=\"text-uppercase\" style=\"color:#498000;\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 34), "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "

                                </span>
                            </h4>
                            <p> <span> <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-voucher-mail.png"), "html", null, true);
            echo "\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 38), "html", null, true);
            echo "</span> <p>
                            <p> Categorie : <span style=\"color:#498000;\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 39), "html", null, true);
            echo "</span> <p>
                            <p> Action : <span style=\"color:#498000;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 40), "html", null, true);
            echo "</span> <p>
                            <p><u>Nombre :</u> <span style=\"color:#498000;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</span> <p>
                            <p> Reference : <span style=\"color:#498000;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 42), "html", null, true);
            echo "</span> <p>
                            <p> Destination : <span style=\"color:#498000;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 43), "html", null, true);
            echo "</span> <p>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return array (  183 => 48,  172 => 43,  168 => 42,  164 => 41,  160 => 40,  156 => 39,  150 => 38,  143 => 34,  135 => 28,  131 => 27,  118 => 19,  113 => 17,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Preciser la date{% endblock %}

{% block body %}
    <div class=\"clearfix\">
        <span class=\"float-right\">
            <span> Les produits:  <span>
            <select name=\"link\" id='' size=\"1\" onchamge=\"window.location.href=this.value;\">
                <option onClick=\"window.location = '{{ path('history') }}'\" >Tous </option>
                <option onClick=\"window.location = '{{ path('history_enter') }}'\" >Entrées</option>
                <option onClick=\"window.location = '{{ path('integreted') }}'\" >Reintegrées</option>
                <option onClick=\"window.location = '{{ path('history_out') }}'\" >Sorties</option>
            </select>
        </span>
    </div>
<h4 class=\"q-title\"> Compte rendu produits le date {{ ymd|format_date(locale='fr') }}  </h4>

    <a href=\"{{ path('precision_date') }}\">Preciser la date</a>{{ render(controller('App\\\\Controller\\\\HistoriqueController::specify'))}}
   <!--
    <form action=\"\"  method=\"post\">
       <label>preciser la date :</label> <input type=\"date\" name=\"date_precis\" value=\"\" id=\"date\">
        <button type=\"submit\">OK</button>
    </form>
    !-->
   <div class=\"row\">
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
