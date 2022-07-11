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

/* impression/rapport/imprSituation.html.twig */
class __TwigTemplate_d75abfded601ac13ea4f6a8225425e26 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/rapport/imprSituation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/rapport/imprSituation.html.twig"));

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
        echo "        <style>
            table,tr,th,td {
                    border: 2px solid black;
                }
            #arret{
                margin-top: 15px;
                font-family: italic;
            }
        </style>
        <title>Impression de situation generale | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
    <main>
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "        ";
            $context["mois"] = twig_date_format_filter($this->env, "now", "F");
            // line 24
            echo "        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du ";
            echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</h4>
        <div class=\"table responsive-xxl\">
            <table class=\"table table-bordered table-hover\" >
                <thead>
                    <tr>
                        <th>Produits
                        </th>
                        <th>Quantité de stock initial
                        </th>
                        <th>Valeur de stock initial
                        </th>
                        <th>Produits recus quantité
                        </th>
                        <th>Produits recus valeur
                        </th>
                        <th>Produits sortie quantité
                        </th>
                        <th>Produits sortie valeur
                        </th>
                        <th>Stock final quantité
                        </th>
                        <th>Stock final valeur
                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 50
            $context["sumQuantInt"] = 0;
            // line 51
            echo "                ";
            $context["sumValueInit"] = 0;
            // line 52
            echo "                ";
            $context["sumQuantEntrer"] = 0;
            // line 53
            echo "                ";
            $context["sumQuantCurrent"] = 0;
            // line 54
            echo "                ";
            $context["sumActuel"] = 0;
            // line 55
            echo "                ";
            $context["sumQuantSortie"] = 0;
            // line 56
            echo "                ";
            $context["sumValSortie"] = 0;
            // line 57
            echo "                ";
            $context["sumValRRecus"] = 0;
            // line 58
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 59
                echo "                        <tr>
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
                                ";
                    // line 61
                    if (($context["key2"] == "nomProduit")) {
                        // line 62
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 63
$context["key2"] == "quantite_init")) {
                        // line 64
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 64, $this->source); })()), $context["key"], [], "array", false, false, false, 64), 0, [], "array", false, false, false, 64);
                        // line 65
                        echo "                                    ";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 65, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 65, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 66
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 66, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 67
$context["key2"] == "valeur_init")) {
                        // line 68
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 68, $this->source); })()), $context["key"], [], "array", false, false, false, 68), "prix_net", [], "array", false, false, false, 68);
                        // line 69
                        echo "                                    ";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 69, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 69, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 70
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 70, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 71
$context["key2"] == "qunad_recus")) {
                        // line 72
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 72, $this->source); })()), $context["key"], [], "array", false, false, false, 72), 0, [], "array", false, false, false, 72);
                        // line 73
                        echo "                                    ";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 73, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 73, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 74
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 74, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 75
$context["key2"] == "val_recus")) {
                        // line 76
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 76, $this->source); })()), $context["key"], [], "array", false, false, false, 76), 0, [], "array", false, false, false, 76);
                        // line 77
                        echo "                                    ";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 77, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 77, $this->source); })()));
                        // line 78
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 78, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 79
$context["key2"] == "quantite_sortie")) {
                        // line 80
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 80, $this->source); })()), $context["key"], [], "array", false, false, false, 80), 0, [], "array", false, false, false, 80));
                        // line 81
                        echo "                                    ";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 81, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 81, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 82
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 82, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 83
$context["key2"] == "val_sortie")) {
                        // line 84
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 84, $this->source); })()), $context["key"], [], "array", false, false, false, 84), 0, [], "array", false, false, false, 84));
                        // line 85
                        echo "                                    ";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 85, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 85, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 86
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 86, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 87
$context["key2"] == "quantite_actuelle")) {
                        // line 88
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 88, $this->source); })()), $context["key"], [], "array", false, false, false, 88), "quantite_actuelle", [], "array", false, false, false, 88);
                        // line 89
                        echo "                                    ";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 89, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 89, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 90
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 90, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                ";
                    } elseif ((                    // line 91
$context["key2"] == "value_actuelle")) {
                        // line 92
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 92, $this->source); })()), $context["key"], [], "array", false, false, false, 92), "prix_net", [], "array", false, false, false, 92);
                        // line 93
                        echo "                                    ";
                        $context["sumActuel"] = ((isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 93, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 93, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 94
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 94, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                ";
                    }
                    // line 96
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                   <tfoot>
                        <tr>
                            <th>
                                Totales(Valeur)
                            </th>
                            <th>
                                ";
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 105, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumI\" > ";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 108, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 109, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 112, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumE\" > ";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 116
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 116, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 119, $this->source); })())), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumS\" > ";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 122, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 123
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 123, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 126
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 126, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumA\" > ";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 130
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 130, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                        </tr>
                    </tfoot>
                </tbody>
            </table>
            <div>
                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"init\"> </span> ARIARY<p>
                <p>Arreté a la valeur entrée de : <span class=\"text-uppercase\" id=\"enter\"> </span> ARIARY<p>
                <p>Arreté a la valeur Sortie de : <span class=\"text-uppercase\" id=\"out\"> </span> ARIARY<p>
                <p>Arreté a la valeur actuelle de : <span class=\"text-uppercase\" id=\"current\"> </span> ARIARY<p>
            </div>
        </div>
        <div class=\"d-flex flex-row-reverse bd-highlight\">
            <div class=\"p-2 bd-highlight\">
                <p>
                    Antananarivo le ,";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "
                </p>
                <p>
                    <span>
                        Chef de  Centre d'Approvisionnement en Valeurs Postales
                    </span>
                </p>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 157
            echo "        <h1>Page not found 404
        </h1>
        <p>
            The requested page couldn't be located. Checkout for any URL misspelling or
            <a href=\"";
            // line 161
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
            </a>.
        </p>
    ";
        }
        // line 165
        echo "    
    ";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "  
</main>
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

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "impression/rapport/imprSituation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 167,  428 => 166,  415 => 7,  405 => 6,  392 => 168,  390 => 166,  387 => 165,  380 => 161,  374 => 157,  360 => 146,  341 => 130,  337 => 129,  331 => 126,  325 => 123,  321 => 122,  315 => 119,  309 => 116,  305 => 115,  299 => 112,  293 => 109,  289 => 108,  283 => 105,  275 => 99,  268 => 97,  262 => 96,  257 => 94,  252 => 93,  249 => 92,  247 => 91,  243 => 90,  238 => 89,  235 => 88,  233 => 87,  229 => 86,  224 => 85,  221 => 84,  219 => 83,  215 => 82,  210 => 81,  207 => 80,  205 => 79,  200 => 78,  197 => 77,  194 => 76,  192 => 75,  188 => 74,  183 => 73,  180 => 72,  178 => 71,  174 => 70,  169 => 69,  166 => 68,  164 => 67,  160 => 66,  155 => 65,  152 => 64,  150 => 63,  145 => 62,  143 => 61,  137 => 60,  134 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  106 => 50,  74 => 24,  71 => 23,  69 => 22,  54 => 9,  52 => 6,  45 => 1,);
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
        <style>
            table,tr,th,td {
                    border: 2px solid black;
                }
            #arret{
                margin-top: 15px;
                font-family: italic;
            }
        </style>
        <title>Impression de situation generale | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
    <main>
        {% if app.user %}
        {% set mois = 'now' | date('F') %}
        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du {{ month }}/{{ year }}</h4>
        <div class=\"table responsive-xxl\">
            <table class=\"table table-bordered table-hover\" >
                <thead>
                    <tr>
                        <th>Produits
                        </th>
                        <th>Quantité de stock initial
                        </th>
                        <th>Valeur de stock initial
                        </th>
                        <th>Produits recus quantité
                        </th>
                        <th>Produits recus valeur
                        </th>
                        <th>Produits sortie quantité
                        </th>
                        <th>Produits sortie valeur
                        </th>
                        <th>Stock final quantité
                        </th>
                        <th>Stock final valeur
                        </th>
                    </tr>
                </thead>
                <tbody>
                {% set sumQuantInt = 0 %}
                {% set sumValueInit = 0 %}
                {% set sumQuantEntrer = 0 %}
                {% set sumQuantCurrent = 0 %}
                {% set sumActuel = 0 %}
                {% set sumQuantSortie = 0 %}
                {% set sumValSortie = 0 %}
                {% set sumValRRecus = 0 %}
                    {% for key,value in courant %}
                        <tr>
                            {% for key2, value2 in value %}             
                                {% if key2 =='nomProduit' %}
                                    <td> {{ value2 }} </td> 
                                {% elseif key2 =='quantite_init' %}
                                    {% set valeur = initial[key][0] %}
                                    {% set sumQuantInt = sumQuantInt + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='valeur_init' %}
                                    {% set valeur = init[key]['prix_net'] %}
                                    {% set sumValueInit = sumValueInit + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='qunad_recus' %}
                                    {% set valeur = quantiteEntrer[key][0] %}
                                    {% set sumQuantEntrer = sumQuantEntrer + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='val_recus' %}
                                    {% set valeur = valeurEntrer[key][0] %}
                                    {% set sumValRRecus = sumValRRecus + valeur %}
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='quantite_sortie' %}
                                    {% set valeur = quantiteOut[key][0]|abs %}
                                    {% set sumQuantSortie = sumQuantSortie + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='val_sortie' %}
                                    {% set valeur = valueOut[key][0]|abs %}
                                    {% set sumValSortie = sumValSortie + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                {% elseif key2 =='quantite_actuelle' %}
                                    {% set valeur = courant[key]['quantite_actuelle'] %}
                                    {% set sumQuantCurrent = sumQuantCurrent + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                {% elseif key2 =='value_actuelle' %}
                                    {% set valeur = courant[key]['prix_net'] %}
                                    {% set sumActuel = sumActuel + valeur %} 
                                    <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                {% endif %}
                            {% endfor %}
                        </tr>
                    {% endfor %}
                   <tfoot>
                        <tr>
                            <th>
                                Totales(Valeur)
                            </th>
                            <th>
                                {{ sumQuantInt|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumI\" > {{  sumValueInit }}</span>
                                {{ sumValueInit|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                {{ sumQuantEntrer|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumE\" > {{  sumValRRecus }}</span>
                                {{ sumValRRecus|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                {{ sumQuantSortie|abs|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumS\" > {{  sumValSortie }}</span>
                                {{ sumValSortie|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                {{ sumQuantCurrent|number_format(0,',', ' ') }}
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumA\" > {{  sumActuel }}</span>
                                {{ sumActuel|number_format(0,',', ' ') }}
                            </th>
                        </tr>
                    </tfoot>
                </tbody>
            </table>
            <div>
                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"init\"> </span> ARIARY<p>
                <p>Arreté a la valeur entrée de : <span class=\"text-uppercase\" id=\"enter\"> </span> ARIARY<p>
                <p>Arreté a la valeur Sortie de : <span class=\"text-uppercase\" id=\"out\"> </span> ARIARY<p>
                <p>Arreté a la valeur actuelle de : <span class=\"text-uppercase\" id=\"current\"> </span> ARIARY<p>
            </div>
        </div>
        <div class=\"d-flex flex-row-reverse bd-highlight\">
            <div class=\"p-2 bd-highlight\">
                <p>
                    Antananarivo le ,{{ 'now' |format_date(locale='fr') }}
                </p>
                <p>
                    <span>
                        Chef de  Centre d'Approvisionnement en Valeurs Postales
                    </span>
                </p>
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
    
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}  
</main>
 </body>
</html>", "impression/rapport/imprSituation.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\rapport\\imprSituation.html.twig");
    }
}
