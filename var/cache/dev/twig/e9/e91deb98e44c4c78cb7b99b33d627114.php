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
class __TwigTemplate_6bdaa93b46b69d57bc360686b5257f00 extends \Twig\Template
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

        echo "Compte rendu | Paositra Malagasy";
        
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
    <h5 class=\"q-title\"> Compte rendu produits   </h5>

    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("precision_date");
        echo "\">Preciser la date</a> ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HistoriqueController::specify"));
        echo "
   <!--
    <form action=\"\"  method=\"post\">
       <label>preciser la date :</label> <input type=\"date\" name=\"date_precis\" value=\"\" id=\"date\">
        <button type=\"submit\">OK</button>
    </form>
    !-->
   <div class=\"row\" style=\"background-color: #e5e6e7;\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
            // line 28
            echo "                <div class=\"col-lg-4 col-sm-6\" >
                   <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
                   <div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
                        <div class=\"card card-body\">
                            <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                                <span class=\"text-uppercase\" style=\"color:#498000;\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 34), "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "

                                </span>
                            </h4>
                            <p>
                                <span> <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-voucher-mail.png"), "html", null, true);
            echo "\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 39), "html", null, true);
            echo "</span> <br/><br/>
                                Categorie : <span style=\"color:#498000;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 40), "html", null, true);
            echo "</span> <br/><br/>
                                Action : <span style=\"color:#498000;\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 41), "html", null, true);
            echo "</span> <br/><br/>
                                <u>Nombre :</u> <span style=\"color:#498000;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 42), "html", null, true);
            echo "</span> <br/><br/>
                                Reference : <span style=\"color:#498000;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 43), "html", null, true);
            echo "</span> <br/><br/>
                                Destination : <span style=\"color:#498000;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 44), "html", null, true);
            echo "</span> <br/>
                            </p>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
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
        return array (  182 => 50,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  148 => 39,  140 => 34,  132 => 28,  128 => 27,  115 => 19,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte rendu | Paositra Malagasy{% endblock %}

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
    <h5 class=\"q-title\"> Compte rendu produits   </h5>

    <a href=\"{{ path('precision_date') }}\">Preciser la date</a> {{ render(controller('App\\\\Controller\\\\HistoriqueController::specify'))}}
   <!--
    <form action=\"\"  method=\"post\">
       <label>preciser la date :</label> <input type=\"date\" name=\"date_precis\" value=\"\" id=\"date\">
        <button type=\"submit\">OK</button>
    </form>
    !-->
   <div class=\"row\" style=\"background-color: #e5e6e7;\">
        {% for histo in history%}
                <div class=\"col-lg-4 col-sm-6\" >
                   <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
                   <div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
                        <div class=\"card card-body\">
                            <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                                <span class=\"text-uppercase\" style=\"color:#498000;\">
                                {{ histo.dat|format_date(locale='fr') }}

                                </span>
                            </h4>
                            <p>
                                <span> <img src=\"{{ asset('images/shopping-voucher-mail.png') }}\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">{{ histo.product }}</span> <br/><br/>
                                Categorie : <span style=\"color:#498000;\">{{ histo.categorie }}</span> <br/><br/>
                                Action : <span style=\"color:#498000;\">{{ histo.types }}</span> <br/><br/>
                                <u>Nombre :</u> <span style=\"color:#498000;\">{{ histo.nombre }}</span> <br/><br/>
                                Reference : <span style=\"color:#498000;\">{{ histo.reference }}</span> <br/><br/>
                                Destination : <span style=\"color:#498000;\">{{ histo.destination }}</span> <br/>
                            </p>
                        </div>
                    </div>
                </div>
        {% endfor %}
    </div>
{% endblock %}
", "historique/history.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\history.html.twig");
    }
}
