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

/* impression/etat/select_produit.html.twig */
class __TwigTemplate_4b798f71cdbe3aa20599b116180fa0b6 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/select_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/select_produit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de produits ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 5, $this->source); })()), 0, [], "any", false, false, false, 5), "Produits", [], "any", false, false, false, 5), "html", null, true);
        echo "  | Paositra malagasy</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body onload=\"window.print()\">
    ";
        // line 12
        echo "     ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 13
        echo "    ";
        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"container\">
                <h3 class=\"text-danger\">Etat de stock produit : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 16, $this->source); })()), 0, [], "any", false, false, false, 16), "Produits", [], "any", false, false, false, 16), "html", null, true);
            echo " au mois de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 16, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "  </h3>
                <div class=\"table responsive-xxl\">
                    <table class=\"table table-bordered table-hover\" >
                        <thead>
                            <tr>
                                <th> Ordre</th>
                                <th> Categorie </th>
                                <th>Valeur Faciales</th>
                                <th>Stock initial</th>
                                <th>Entrée</th>
                                <th>Sortie</th>
                                <th>Stock Acteul </th>
                            </tr>
                        </thead>
                        <tbody id=\"table\">
                            ";
            // line 31
            $context["sumValueInit"] = 0;
            // line 32
            echo "                            ";
            $context["sumValueEnter"] = 0;
            // line 33
            echo "                            ";
            $context["sumValueOut"] = 0;
            // line 34
            echo "                            ";
            $context["sumValueCurrent"] = 0;
            // line 35
            echo "                            ";
            $context["valeur"] = 0;
            // line 36
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 37
                echo "                                <tr>
                                    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                        
                                        ";
                    // line 40
                    if (($context["key2"] == "ordre")) {
                        // line 41
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                        ";
                    } elseif ((                    // line 42
$context["key2"] == "NomDeCategorie")) {
                        // line 43
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                        ";
                    } elseif ((                    // line 44
$context["key2"] == "produit")) {
                        // line 45
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                        ";
                    } elseif ((                    // line 46
$context["key2"] == "valeurFaciale")) {
                        // line 47
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                        ";
                    } elseif ((                    // line 48
$context["key2"] == "initiale")) {
                        // line 49
                        echo "                                            ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 49, $this->source); })()), $context["key"], [], "array", false, false, false, 49), 0, [], "array", false, false, false, 49);
                        // line 50
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 50, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                            ";
                        // line 51
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 51, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 51, $this->source); })()));
                        echo " 
                                        ";
                    } elseif ((                    // line 52
$context["key2"] == "entrer")) {
                        // line 53
                        echo "                                            ";
                        $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 53, $this->source); })()), $context["key"], [], "array", false, false, false, 53), 0, [], "array", false, false, false, 53) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 53, $this->source); })()), $context["key"], [], "array", false, false, false, 53), 0, [], "array", false, false, false, 53));
                        // line 54
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 54, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                            ";
                        // line 55
                        $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 55, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 55, $this->source); })()));
                        // line 56
                        echo "                                        ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 57
                        echo "                                            ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 57, $this->source); })()))) {
                            // line 58
                            echo "                                                ";
                            $context["valeur"] = 0;
                            // line 59
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 59, $this->source); })()), 0, ",", " "), "html", null, true);
                            echo " </td> 
                                                ";
                            // line 60
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 60, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 60, $this->source); })()));
                            // line 61
                            echo "                                            ";
                        } else {
                            // line 62
                            echo "                                                ";
                            $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 62, $this->source); })()), $context["key"], [], "array", false, false, false, 62), 0, [], "array", false, false, false, 62));
                            // line 63
                            echo "                                                ";
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 63, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 63, $this->source); })()));
                            // line 64
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 64, $this->source); })()), 0, ",", " "), "html", null, true);
                            echo " </td>
                                            ";
                        }
                        // line 65
                        echo " 
                                        ";
                    } elseif ((                    // line 66
$context["key2"] == "actuelle")) {
                        // line 67
                        echo "                                            ";
                        $context["valeur"] = $context["value2"];
                        // line 68
                        echo "                                            ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 68, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 68, $this->source); })()));
                        // line 69
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 69, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>                                                                                                                   
                                        ";
                    }
                    // line 71
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                <tr>
                                    ";
            // line 75
            $context["valeur"] = 0;
            // line 76
            echo "                                    ";
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 76, $this->source); })()) == true)) {
                // line 77
                echo "                                        <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    ";
            } else {
                // line 79
                echo "                                    <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    ";
            }
            // line 81
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 82
                echo "                                        ";
                if (($context["key"] == "initiale")) {
                    // line 83
                    echo "                                            ";
                    $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 83, $this->source); })());
                    // line 84
                    echo "                                            <th>  ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 84, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 85
$context["key"] == "entrer")) {
                    // line 86
                    echo "                                            <th> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 86, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 87
$context["key"] == "sortie")) {
                    echo " 
                                            <th>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 88, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 89
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                            <th> ";
                    // line 90
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 90, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                }
                // line 92
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                </tr>
                            </tbody>
                    </table>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 104
            echo "            <h1>Page not found 404
            </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL misspelling or
                <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
                </a>.
            </p>
        ";
        }
        // line 112
        echo "    </body>
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
        return "impression/etat/select_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 7,  339 => 6,  328 => 112,  321 => 108,  315 => 104,  306 => 98,  299 => 93,  293 => 92,  288 => 90,  284 => 89,  280 => 88,  276 => 87,  271 => 86,  269 => 85,  264 => 84,  261 => 83,  258 => 82,  253 => 81,  249 => 79,  245 => 77,  242 => 76,  240 => 75,  237 => 74,  230 => 72,  224 => 71,  218 => 69,  215 => 68,  212 => 67,  210 => 66,  207 => 65,  201 => 64,  198 => 63,  195 => 62,  192 => 61,  190 => 60,  185 => 59,  182 => 58,  179 => 57,  176 => 56,  174 => 55,  169 => 54,  166 => 53,  164 => 52,  160 => 51,  155 => 50,  152 => 49,  150 => 48,  145 => 47,  143 => 46,  138 => 45,  136 => 44,  131 => 43,  129 => 42,  124 => 41,  122 => 40,  115 => 38,  112 => 37,  107 => 36,  104 => 35,  101 => 34,  98 => 33,  95 => 32,  93 => 31,  71 => 16,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  56 => 9,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de produits {{ init.0.Produits }}  | Paositra malagasy</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body onload=\"window.print()\">
    {# ##################################    Dictionaire de l'annee ##################################################}
     {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'Décembre' } %}
    {##################################################################################################################}
        {% if app.user %}
            <div class=\"container\">
                <h3 class=\"text-danger\">Etat de stock produit : {{ init.0.Produits }} au mois de {{ mois[month] }} {{ year }}  </h3>
                <div class=\"table responsive-xxl\">
                    <table class=\"table table-bordered table-hover\" >
                        <thead>
                            <tr>
                                <th> Ordre</th>
                                <th> Categorie </th>
                                <th>Valeur Faciales</th>
                                <th>Stock initial</th>
                                <th>Entrée</th>
                                <th>Sortie</th>
                                <th>Stock Acteul </th>
                            </tr>
                        </thead>
                        <tbody id=\"table\">
                            {% set sumValueInit = 0 %}
                            {% set sumValueEnter = 0 %}
                            {% set sumValueOut = 0 %}
                            {% set sumValueCurrent = 0 %}
                            {% set valeur = 0 %}
                            {% for key,value in courant %}
                                <tr>
                                    {% for key2, value2 in value %} 
                                        
                                        {% if key2 =='ordre' %}
                                            <td> {{ value2 }}  </td>
                                        {% elseif key2 =='NomDeCategorie' %}
                                            <td> {{ value2 }} </td>  
                                        {% elseif key2 =='produit' %}
                                            <td> {{ value2 }} </td>
                                        {% elseif key2 =='valeurFaciale' %}
                                            <td> {{ value2 }} </td>
                                        {% elseif key2 =='initiale' %}
                                            {% set valeur = initial[key][0] %}
                                            <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                            {% set sumValueInit = sumValueInit + valeur %} 
                                        {% elseif key2 =='entrer' %}
                                            {% set valeur = entrer[key][0] - initial[key][0] %}
                                            <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                            {% set sumValueEnter = sumValueEnter + valeur %}
                                        {% elseif key2 =='sortie' %}
                                            {% if out is empty %}
                                                {% set valeur = 0 %}
                                                <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                                {% set sumValueOut = sumValueOut + valeur %}
                                            {% else %}
                                                {% set valeur = out[key][0]|abs %}
                                                {% set sumValueOut = sumValueOut + valeur %}
                                                <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                            {% endif %} 
                                        {% elseif key2 =='actuelle' %}
                                            {% set valeur = value2 %}
                                            {% set sumValueCurrent = sumValueCurrent + valeur %}
                                            <td> {{ valeur|number_format(0,',', ' ') }} </td>                                                                                                                   
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            {% endfor %}
                                <tr>
                                    {% set valeur = 0 %}
                                    {% if issubmitted == true %}
                                        <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    {% else %}
                                    <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    {% endif %}
                                    {% for key, value in total %}
                                        {% if key == \"initiale\"  %}
                                            {% set valeur = sumValueInit %}
                                            <th>  {{ valeur|number_format(0,',', ' ') }} </th>
                                        {% elseif key == \"entrer\" %}
                                            <th> {{ sumValueEnter|number_format(0,',', ' ') }} </th>
                                        {% elseif key == \"sortie\"%} 
                                            <th>{{ sumValueOut|number_format(0,',', ' ') }} </th>
                                        {% elseif key == \"actuelle\" %}                                                                            
                                            <th> {{ sumValueCurrent|number_format(0,',', ' ') }} </th>
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </tbody>
                    </table>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                    </div>
                </div>
            </div>
        {% else %}
            <h1>Page not found 404
            </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL misspelling or
                <a href=\"{{ path('app_login') }}\">return to the authentification
                </a>.
            </p>
        {% endif %}
    </body>
</html>", "impression/etat/select_produit.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat\\select_produit.html.twig");
    }
}
