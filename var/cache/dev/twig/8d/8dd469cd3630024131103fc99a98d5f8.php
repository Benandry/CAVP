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

/* impression/etat/etat_de_stock.html.twig */
class __TwigTemplate_3be5afcf344be851c2f0c508ae6af708 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/etat_de_stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/etat_de_stock.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        ";
        // line 13
        echo "        ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 14
        echo "        ";
        // line 15
        echo "        <div class=\"container\">
            <h3 class=\"text-danger text-center\">Etat de stock general du mois ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 16, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " </h3>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                    <thead>
                        <tr class=\"table-danger\">
                            <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                            <th data-field=\"Categorie\"> Produit </th>
                            <th data-field=\"produit\"> Categorie </th>
                            <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                            <th data-field=\"Stock initial\">Stock initial</th>
                            <th data-field=\"Entrée\">Entrée</th>
                            <th data-field=\"Sortie\">Sortie</th>
                            <th data-field=\"Sock Actuel\">Stock Acteul </th>
                        </tr>
                    </thead>
                    ";
        // line 31
        $context["sumValueInit"] = 0;
        // line 32
        echo "                    ";
        $context["sumValueEnter"] = 0;
        // line 33
        echo "                    ";
        $context["sumValueOut"] = 0;
        // line 34
        echo "                    ";
        $context["sumValueCurrent"] = 0;
        // line 35
        echo "                    ";
        $context["valeur"] = 0;
        // line 36
        echo "                    <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 38
            echo "                                <tr>
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                    
                                    ";
                // line 41
                if (($context["key2"] == "ordre")) {
                    // line 42
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                    ";
                } elseif ((                // line 43
$context["key2"] == "NomDeCategorie")) {
                    // line 44
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                    ";
                } elseif ((                // line 45
$context["key2"] == "valeurFaciale")) {
                    // line 46
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                    ";
                } elseif ((                // line 47
$context["key2"] == "initiale")) {
                    // line 48
                    echo "                                        ";
                    $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 48, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 48, $this->source); })()), $context["key"], [], "array", false, false, false, 48), 0, [], "array", false, false, false, 48));
                    // line 49
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 49, $this->source); })()), $context["key"], [], "array", false, false, false, 49), 0, [], "array", false, false, false, 49), "html", null, true);
                    echo " </td> 
                                    ";
                } elseif ((                // line 50
$context["key2"] == "entrer")) {
                    // line 51
                    echo "                                        ";
                    $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 51, $this->source); })()), $context["key"], [], "array", false, false, false, 51), 0, [], "array", false, false, false, 51) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 51, $this->source); })()), $context["key"], [], "array", false, false, false, 51), 0, [], "array", false, false, false, 51));
                    // line 52
                    echo "                                        ";
                    $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 52, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 52, $this->source); })()));
                    // line 53
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo " </td> 
                                    ";
                } elseif ((                // line 54
$context["key2"] == "sortie")) {
                    // line 55
                    echo "                                        ";
                    if (twig_test_empty((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 55, $this->source); })()))) {
                        // line 56
                        echo "                                            <td> 0 </td> 
                                        ";
                    } else {
                        // line 58
                        echo "                                            ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 58, $this->source); })()), $context["key"], [], "array", false, false, false, 58), 0, [], "array", false, false, false, 58));
                        // line 59
                        echo "                                            ";
                        $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 59, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 59, $this->source); })()));
                        // line 60
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 60, $this->source); })()), "html", null, true);
                        echo " </td>
                                        ";
                    }
                    // line 61
                    echo " 
                                    ";
                } elseif ((                // line 62
$context["key2"] == "actuelle")) {
                    // line 63
                    echo "                                        ";
                    $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 63, $this->source); })()) + $context["value2"]);
                    // line 64
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                    ";
                } elseif ((                // line 65
$context["key2"] == "produit")) {
                    // line 66
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                    ";
                }
                // line 68
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            ";
        // line 74
        $context["valeur"] = 0;
        // line 75
        echo "                            <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 77
            echo "                                        ";
            if (($context["key"] == "initiale")) {
                // line 78
                echo "                                            ";
                $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 78, $this->source); })());
                // line 79
                echo "                                            <th id=\"sumInit\">  ";
                echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 79, $this->source); })()), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 80
$context["key"] == "entrer")) {
                // line 81
                echo "                                            <th id=\"sumEnter\"> ";
                echo twig_escape_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 81, $this->source); })()), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 82
$context["key"] == "sortie")) {
                echo " 
                                            <th>";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 83, $this->source); })()), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 84
$context["key"] == "actuelle")) {
                echo "                                                                            
                                            <th> ";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 85, $this->source); })()), "html", null, true);
                echo " </th>
                                        ";
            }
            // line 87
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
         ";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
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

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "impression/etat/etat_de_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 100,  325 => 99,  312 => 7,  302 => 6,  290 => 101,  288 => 99,  280 => 94,  272 => 88,  266 => 87,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  244 => 81,  242 => 80,  237 => 79,  234 => 78,  231 => 77,  227 => 76,  224 => 75,  222 => 74,  217 => 71,  210 => 69,  204 => 68,  198 => 66,  196 => 65,  191 => 64,  188 => 63,  186 => 62,  183 => 61,  177 => 60,  174 => 59,  171 => 58,  167 => 56,  164 => 55,  162 => 54,  157 => 53,  154 => 52,  151 => 51,  149 => 50,  144 => 49,  141 => 48,  139 => 47,  134 => 46,  132 => 45,  127 => 44,  125 => 43,  120 => 42,  118 => 41,  111 => 39,  108 => 38,  104 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  87 => 31,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  54 => 9,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        {# ##################################    Dictionaire de l'annee ##################################################}
        {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'Décembre' } %}
        {##################################################################################################################}
        <div class=\"container\">
            <h3 class=\"text-danger text-center\">Etat de stock general du mois {{ mois[month] }} {{ year }} </h3>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                    <thead>
                        <tr class=\"table-danger\">
                            <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                            <th data-field=\"Categorie\"> Produit </th>
                            <th data-field=\"produit\"> Categorie </th>
                            <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                            <th data-field=\"Stock initial\">Stock initial</th>
                            <th data-field=\"Entrée\">Entrée</th>
                            <th data-field=\"Sortie\">Sortie</th>
                            <th data-field=\"Sock Actuel\">Stock Acteul </th>
                        </tr>
                    </thead>
                    {% set sumValueInit = 0 %}
                    {% set sumValueEnter = 0 %}
                    {% set sumValueOut = 0 %}
                    {% set sumValueCurrent = 0 %}
                    {% set valeur = 0 %}
                    <tbody>
                        {% for key,value in courant %}
                                <tr>
                                {% for key2, value2 in value %} 
                                    
                                    {% if key2 =='ordre' %}
                                        <td> {{ value2 }}  </td>
                                    {% elseif key2 =='NomDeCategorie' %}
                                        <td> {{ value2 }} </td>
                                    {% elseif key2 =='valeurFaciale' %}
                                        <td> {{ value2 }} </td>
                                    {% elseif key2 =='initiale' %}
                                        {% set sumValueInit = sumValueInit + initial[key][0] %}
                                        <td> {{ initial[key][0] }} </td> 
                                    {% elseif key2 =='entrer' %}
                                        {% set valeur = entrer[key][0] - initial[key][0] %}
                                        {% set sumValueEnter = sumValueEnter + valeur %}
                                        <td> {{ valeur }} </td> 
                                    {% elseif key2 =='sortie' %}
                                        {% if sort is empty %}
                                            <td> 0 </td> 
                                        {% else %}
                                            {% set valeur = sort[key][0]|abs %}
                                            {% set sumValueOut = sumValueOut + valeur %}
                                            <td> {{ valeur }} </td>
                                        {% endif %} 
                                    {% elseif key2 =='actuelle' %}
                                        {% set sumValueCurrent =  sumValueCurrent + value2 %}
                                        <td> {{ value2 }} </td>  
                                    {% elseif key2 =='produit' %}
                                        <td> {{ value2 }} </td>                                                                                                                   
                                    {% endif %}
                                {% endfor %}
                            </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr>
                            {% set valeur = 0 %}
                            <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                            {% for key, value in total %}
                                        {% if key == \"initiale\"  %}
                                            {% set valeur = sumValueInit %}
                                            <th id=\"sumInit\">  {{ valeur }} </th>
                                        {% elseif key == \"entrer\" %}
                                            <th id=\"sumEnter\"> {{ sumValueEnter }} </th>
                                        {% elseif key == \"sortie\"%} 
                                            <th>{{ sumValueOut }} </th>
                                        {% elseif key == \"actuelle\" %}                                                                            
                                            <th> {{ sumValueCurrent }} </th>
                                        {% endif %}
                            {% endfor %}
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
         {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}    
    </body>
</html>", "impression/etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat\\etat_de_stock.html.twig");
    }
}
