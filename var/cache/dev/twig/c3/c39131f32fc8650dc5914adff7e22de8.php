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
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"container\">
                <h3 class=\"text-danger\">Etat de stock produit : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 13, $this->source); })()), 0, [], "any", false, false, false, 13), "Produits", [], "any", false, false, false, 13), "html", null, true);
            echo " au mois de ";
            echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 13, $this->source); })()), "html", null, true);
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
            // line 28
            $context["sumValueInit"] = 0;
            // line 29
            echo "                            ";
            $context["sumValueEnter"] = 0;
            // line 30
            echo "                            ";
            $context["sumValueOut"] = 0;
            // line 31
            echo "                            ";
            $context["sumValueCurrent"] = 0;
            // line 32
            echo "                            ";
            $context["valeur"] = 0;
            // line 33
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 34
                echo "                                <tr>
                                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                        
                                        ";
                    // line 37
                    if (($context["key2"] == "ordre")) {
                        // line 38
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                        ";
                    } elseif ((                    // line 39
$context["key2"] == "NomDeCategorie")) {
                        // line 40
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                        ";
                    } elseif ((                    // line 41
$context["key2"] == "produit")) {
                        // line 42
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                        ";
                    } elseif ((                    // line 43
$context["key2"] == "valeurFaciale")) {
                        // line 44
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                        ";
                    } elseif ((                    // line 45
$context["key2"] == "initiale")) {
                        // line 46
                        echo "                                            ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 46, $this->source); })()), $context["key"], [], "array", false, false, false, 46), 0, [], "array", false, false, false, 46);
                        // line 47
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 47, $this->source); })()), "html", null, true);
                        echo " </td>
                                            ";
                        // line 48
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 48, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 48, $this->source); })()));
                        echo " 
                                        ";
                    } elseif ((                    // line 49
$context["key2"] == "entrer")) {
                        // line 50
                        echo "                                            ";
                        $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 50, $this->source); })()), $context["key"], [], "array", false, false, false, 50), 0, [], "array", false, false, false, 50) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 50, $this->source); })()), $context["key"], [], "array", false, false, false, 50), 0, [], "array", false, false, false, 50));
                        // line 51
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 51, $this->source); })()), "html", null, true);
                        echo " </td> 
                                            ";
                        // line 52
                        $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 52, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 52, $this->source); })()));
                        // line 53
                        echo "                                        ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 54
                        echo "                                            ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 54, $this->source); })()))) {
                            // line 55
                            echo "                                                ";
                            $context["valeur"] = 0;
                            // line 56
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 56, $this->source); })()), "html", null, true);
                            echo " </td> 
                                                ";
                            // line 57
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 57, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 57, $this->source); })()));
                            // line 58
                            echo "                                            ";
                        } else {
                            // line 59
                            echo "                                                ";
                            $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59), 0, [], "array", false, false, false, 59));
                            // line 60
                            echo "                                                ";
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 60, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 60, $this->source); })()));
                            // line 61
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 61, $this->source); })()), "html", null, true);
                            echo " </td>
                                            ";
                        }
                        // line 62
                        echo " 
                                        ";
                    } elseif ((                    // line 63
$context["key2"] == "actuelle")) {
                        // line 64
                        echo "                                            ";
                        $context["valeur"] = $context["value2"];
                        // line 65
                        echo "                                            ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 65, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 65, $this->source); })()));
                        // line 66
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 66, $this->source); })()), "html", null, true);
                        echo " </td>                                                                                                                   
                                        ";
                    }
                    // line 68
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                <tr>
                                    ";
            // line 72
            $context["valeur"] = 0;
            // line 73
            echo "                                    ";
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 73, $this->source); })()) == true)) {
                // line 74
                echo "                                        <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    ";
            } else {
                // line 76
                echo "                                    <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                    ";
            }
            // line 78
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 79
                echo "                                        ";
                if (($context["key"] == "initiale")) {
                    // line 80
                    echo "                                            ";
                    $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 80, $this->source); })());
                    // line 81
                    echo "                                            <th>  ";
                    echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 82
$context["key"] == "entrer")) {
                    // line 83
                    echo "                                            <th> ";
                    echo twig_escape_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 83, $this->source); })()), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 84
$context["key"] == "sortie")) {
                    echo " 
                                            <th>";
                    // line 85
                    echo twig_escape_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 85, $this->source); })()), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 86
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                            <th> ";
                    // line 87
                    echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 87, $this->source); })()), "html", null, true);
                    echo " </th>
                                        ";
                }
                // line 89
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                </tr>
                            </tbody>
                    </table>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 101
            echo "            <h1>Page not found 404
            </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL misspelling or
                <a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
                </a>.
            </p>
        ";
        }
        // line 109
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
        return array (  343 => 7,  333 => 6,  322 => 109,  315 => 105,  309 => 101,  300 => 95,  293 => 90,  287 => 89,  282 => 87,  278 => 86,  274 => 85,  270 => 84,  265 => 83,  263 => 82,  258 => 81,  255 => 80,  252 => 79,  247 => 78,  243 => 76,  239 => 74,  236 => 73,  234 => 72,  231 => 71,  224 => 69,  218 => 68,  212 => 66,  209 => 65,  206 => 64,  204 => 63,  201 => 62,  195 => 61,  192 => 60,  189 => 59,  186 => 58,  184 => 57,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  168 => 52,  163 => 51,  160 => 50,  158 => 49,  154 => 48,  149 => 47,  146 => 46,  144 => 45,  139 => 44,  137 => 43,  132 => 42,  130 => 41,  125 => 40,  123 => 39,  118 => 38,  116 => 37,  109 => 35,  106 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  87 => 28,  65 => 13,  62 => 12,  60 => 11,  56 => 9,  54 => 6,  50 => 5,  44 => 1,);
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
        {% if app.user %}
            <div class=\"container\">
                <h3 class=\"text-danger\">Etat de stock produit : {{ init.0.Produits }} au mois de {{ month }}/{{ year }}  </h3>
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
                                            <td> {{ valeur }} </td>
                                            {% set sumValueInit = sumValueInit + valeur %} 
                                        {% elseif key2 =='entrer' %}
                                            {% set valeur = entrer[key][0] - initial[key][0] %}
                                            <td> {{ valeur }} </td> 
                                            {% set sumValueEnter = sumValueEnter + valeur %}
                                        {% elseif key2 =='sortie' %}
                                            {% if out is empty %}
                                                {% set valeur = 0 %}
                                                <td> {{ valeur }} </td> 
                                                {% set sumValueOut = sumValueOut + valeur %}
                                            {% else %}
                                                {% set valeur = out[key][0]|abs %}
                                                {% set sumValueOut = sumValueOut + valeur %}
                                                <td> {{ valeur }} </td>
                                            {% endif %} 
                                        {% elseif key2 =='actuelle' %}
                                            {% set valeur = value2 %}
                                            {% set sumValueCurrent = sumValueCurrent + valeur %}
                                            <td> {{ valeur }} </td>                                                                                                                   
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
                                            <th>  {{ valeur }} </th>
                                        {% elseif key == \"entrer\" %}
                                            <th> {{ sumValueEnter }} </th>
                                        {% elseif key == \"sortie\"%} 
                                            <th>{{ sumValueOut }} </th>
                                        {% elseif key == \"actuelle\" %}                                                                            
                                            <th> {{ sumValueCurrent }} </th>
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
