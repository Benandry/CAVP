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

/* proddispo/index.html.twig */
class __TwigTemplate_975edcc3afcdb11a5066842ff28e6bdf extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proddispo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proddispo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proddispo/index.html.twig", 1);
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

        echo "produit disponible | Paositra malagasy! ";
        
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
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            echo " 

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
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">Les produits disponible &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th  scope=\"col\">Nom du produits </th>
                                                <th  scope=\"col\">Nombre des produits </th>
                                                <th  scope=\"col\">Abreviation </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 32
                echo "                                                <tr>
                                                    <td> ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nomProduit", [], "any", false, false, false, 33), "html", null, true);
                echo "</td> 
                                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], 1, [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "Abbreviation", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                    </table>
                                </div>
                                    <div>
                                        <p>
                                            Antananarivo le ,";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</br> 
                                            <span> Chef de  Centre d'Approvisionnement en Valeurs Postales</span><br/>
                                            ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo " 
                                        </p>
                                        <p>
                                            <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprimer_prod");
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
            // line 60
            echo "<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
</p>

";
        }
        // line 68
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proddispo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 68,  181 => 64,  175 => 60,  159 => 47,  153 => 44,  148 => 42,  142 => 38,  133 => 35,  129 => 34,  125 => 33,  122 => 32,  118 => 31,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}produit disponible | Paositra malagasy! {% endblock %}

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
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">Les produits disponible &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th  scope=\"col\">Nom du produits </th>
                                                <th  scope=\"col\">Nombre des produits </th>
                                                <th  scope=\"col\">Abreviation </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for pro in dispo %}
                                                <tr>
                                                    <td> {{ pro.nomProduit }}</td> 
                                                    <td>{{ pro.1 }}</td>
                                                    <td>{{ pro.Abbreviation }}</td>
                                                </tr>
                                            {% endfor %}
                                    </table>
                                </div>
                                    <div>
                                        <p>
                                            Antananarivo le ,{{ 'now' |format_date(locale='fr') }}</br> 
                                            <span> Chef de  Centre d'Approvisionnement en Valeurs Postales</span><br/>
                                            {{ app.user.prenom }} 
                                        </p>
                                        <p>
                                            <a href=\"{{ path('imprimer_prod') }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a>
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
", "proddispo/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\proddispo\\index.html.twig");
    }
}
