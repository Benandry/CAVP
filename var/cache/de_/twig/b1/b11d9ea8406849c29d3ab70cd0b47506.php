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

/* mouvement/sortie.html.twig */
class __TwigTemplate_23f39e646bdf29fb27ed2acb40ac6fe5 extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement/sortie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement/sortie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement/sortie.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produits sortie | Paositra malagasy! ";
        
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">tous les produits sortie &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th scope=\"col\">Nom du produits </th> 
                                                <th scope=\"col\">Abreviation </th>
                                                <th scope=\"col\">Quantités </th>
                                                <th scope=\"col\">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sortie"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sortie"]) {
                // line 33
                echo "                                                    <tr>
                                                    <td> ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "nomProduit", [], "any", false, false, false, 34), "html", null, true);
                echo "</td> 
                                                    <td> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "Abbreviation", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "quantite", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["sortie"], "dateEntrer", [], "any", false, false, false, 37), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                            <div>
                                                <p>
                                                    Antananarivo le ,";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </br>
                                                    <span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br/>
                                                     ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo " 
                                                </p>
                                                <p>
                                                    <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pro_sortie");
            echo "\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a>
                                                </p>
                                            </div>
                                <p class=\"pt-4\"><strong>--Timbre postales --</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 62
            echo "<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
</p>

";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mouvement/sortie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 66,  177 => 62,  162 => 50,  156 => 47,  151 => 45,  144 => 40,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  120 => 33,  116 => 32,  90 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Produits sortie | Paositra malagasy! {% endblock %}

{% block body %}
{% if app.user %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">tous les produits sortie &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th scope=\"col\">Nom du produits </th> 
                                                <th scope=\"col\">Abreviation </th>
                                                <th scope=\"col\">Quantités </th>
                                                <th scope=\"col\">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                {% for sortie in sortie %}
                                                    <tr>
                                                    <td> {{ sortie.nomProduit }}</td> 
                                                    <td> {{ sortie.Abbreviation }}</td>
                                                    <td>{{ sortie.quantite }}</td>
                                                    <td>{{ sortie.dateEntrer|format_date(locale='fr') }}</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                            <div>
                                                <p>
                                                    Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </br>
                                                    <span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br/>
                                                     {{ app.user.prenom }} 
                                                </p>
                                                <p>
                                                    <a href=\"{{ path('pro_sortie') }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a>
                                                </p>
                                            </div>
                                <p class=\"pt-4\"><strong>--Timbre postales --</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% else %}
<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
</p>

{% endif %}
{% endblock %}

", "mouvement/sortie.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement\\sortie.html.twig");
    }
}
