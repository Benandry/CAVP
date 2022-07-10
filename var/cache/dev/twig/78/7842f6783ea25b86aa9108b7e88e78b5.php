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

/* Impression/ordreSortie/recaputilation.html.twig */
class __TwigTemplate_769f34a0903d0e7081ee0e9e671d5360 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Impression/ordreSortie/recaputilation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Impression/ordreSortie/recaputilation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de recapitulation d'ordre de sortie numero  | Paositra malagasy</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body onload=\"window.print()\">
        ";
        // line 11
        $context["types_order"] = [0 => "PN", 1 => "FP"];
        // line 12
        echo "        <div class=\"container\">
            <h4 class=\"h4\">Récapitulation N° ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 13, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 13, $this->source); })()) - 1), [], "array", false, false, false, 13), "html", null, true);
        echo " </h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                    <thead>
                        <tr>
                            <th>Categorie </th>
                            <th>Valeur Faciales </th>
                            <th>TP/PL </th>
                            <th>Planche </th>
                            <th>TP </th>
                            <th>Montant </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context["somme"] = 0;
        // line 28
        echo "                        ";
        $context["bureau"] = 0;
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 30
            echo "                            <tr>
                                <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 31), "html", null, true);
            echo "</td> 
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 34)), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 35) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 35))), "html", null, true);
            echo "</td>
                                ";
            // line 36
            if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 36) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 36)))) {
                // line 37
                echo "                                    ";
                $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 37) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 37))) * 1);
                // line 38
                echo "                                    <td>";
                echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 40
                echo "                                    ";
                $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 40) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 40))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 40));
                // line 41
                echo "                                    <td>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 41) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 41))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 41)), "html", null, true);
                echo "</td>
                                ";
            }
            // line 43
            echo "                                ";
            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 43, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 43, $this->source); })()));
            // line 44
            echo "                                ";
            $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 44, $this->source); })()) + 1);
            // line 45
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            <tr>
                                <th colspan=\"5\">Total :  </t>
                                <td id=\"sommeRecapt\"> ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " </td>
                            </tr>
                    <tbody>
                </table>  
                <p> ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "  observations  </p>
            </div>
            <div>
                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"nombreRecap\"> </span> ARIARY<p>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
        ";
        // line 65
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Impression/ordreSortie/recaputilation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 7,  189 => 6,  176 => 65,  168 => 60,  158 => 53,  151 => 49,  147 => 47,  140 => 45,  137 => 44,  134 => 43,  128 => 41,  125 => 40,  119 => 38,  116 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  91 => 30,  86 => 29,  83 => 28,  81 => 27,  62 => 13,  59 => 12,  57 => 11,  53 => 9,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de recapitulation d'ordre de sortie numero  | Paositra malagasy</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body onload=\"window.print()\">
        {% set types_order = ['PN','FP']  %}
        <div class=\"container\">
            <h4 class=\"h4\">Récapitulation N° {{ numero }}--{{ types_order[types - 1]}} </h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                    <thead>
                        <tr>
                            <th>Categorie </th>
                            <th>Valeur Faciales </th>
                            <th>TP/PL </th>
                            <th>Planche </th>
                            <th>TP </th>
                            <th>Montant </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set somme = 0 %}
                        {% set bureau = 0 %}
                        {% for pro in dispo %}
                            <tr>
                                <td> {{ pro.categorie }}</td> 
                                <td>{{ pro.vf }}</td>
                                <td>{{ pro.tpParPl }}</td>
                                <td>{{ pro.quantite|abs}}</td>
                                <td>{{ pro.tpParPl * pro.quantite|abs }}</td>
                                {% if pro.vf == 0 or pro.vf is null  %}
                                    {% set  prix = pro.tpParPl * pro.quantite|abs * 1 %}
                                    <td>{{ prix }}</td>
                                {% else %}
                                    {% set  prix = pro.tpParPl * pro.quantite|abs * pro.vf %}
                                    <td>{{ pro.tpParPl * pro.quantite|abs * pro.vf }}</td>
                                {% endif %}
                                {% set somme = somme + prix %}
                                {% set bureau = bureau + 1 %}
                            </tr>
                        {% endfor %}
                            <tr>
                                <th colspan=\"5\">Total :  </t>
                                <td id=\"sommeRecapt\"> {{ somme }} </td>
                            </tr>
                    <tbody>
                </table>  
                <p> {{ bureau }}  observations  </p>
            </div>
            <div>
                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"nombreRecap\"> </span> ARIARY<p>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}</p>
                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
        {{ encore_entry_script_tags('app') }}
    </body>
</html>", "Impression/ordreSortie/recaputilation.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\ordreSortie\\recaputilation.html.twig");
    }
}
