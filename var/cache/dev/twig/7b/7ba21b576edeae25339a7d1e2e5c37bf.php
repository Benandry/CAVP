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

/* mouvement/entrer.html.twig */
class __TwigTemplate_3ba4f2afd891fc0b41a648744a71154b extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement/entrer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement/entrer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement/entrer.html.twig", 2);
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

        echo "Produits entrer | Paositra malagasy!";
        
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
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">Touts les produits entrée &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th scope=\"col\"> Nom du produits </th>
                                                <th scope=\"col\"> Abreviation </th>  
                                                <th scope=\"col\"> Quantités </th>
                                                <th scope=\"col\">  Date  </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entre"]) {
                // line 32
                echo "                                                <tr>
                                                    <td> ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "nomProduit", [], "any", false, false, false, 33), "html", null, true);
                echo "</td> 
                                                    <td> ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "Abbreviation", [], "any", false, false, false, 34), "html", null, true);
                echo "</td> 
                                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "quantite", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "dateEntrer", [], "any", false, false, false, 36), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                        </tbody>
                                    </table>
                                </div>
                                        <div>
                                            <p>
                                                Antananarivo le ,";
            // line 44
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
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pro_entrer");
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
            // line 63
            echo "<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"";
            // line 67
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
        return "mouvement/entrer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  178 => 63,  163 => 51,  156 => 47,  150 => 44,  143 => 39,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  119 => 32,  115 => 31,  90 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Produits entrer | Paositra malagasy!{% endblock %}

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
                          <h4 class=\"q-title\" style=\"color: #e3151a;\">Touts les produits entrée &#128520</h4>
                            <div class=\"q-display p-3\">
                                <div class=\"class=\"table responsive-xxl\"\">
                                    <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                            <tr class=\"table-danger\">
                                                <th scope=\"col\"> Nom du produits </th>
                                                <th scope=\"col\"> Abreviation </th>  
                                                <th scope=\"col\"> Quantités </th>
                                                <th scope=\"col\">  Date  </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for entre in entrer %}
                                                <tr>
                                                    <td> {{ entre.nomProduit }}</td> 
                                                    <td> {{ entre.Abbreviation }}</td> 
                                                    <td>{{ entre.quantite }}</td>
                                                    <td>{{ entre.dateEntrer|format_date(locale='fr') }}</td>
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
                                                <a href=\"{{ path('pro_entrer') }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a>
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

", "mouvement/entrer.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement\\entrer.html.twig");
    }
}
