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
        ";
        // line 22
        echo "        ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 23
        echo "        ";
        // line 24
        echo "    <main>
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        ";
            $context["mois"] = twig_date_format_filter($this->env, "now", "F");
            // line 27
            echo "        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 27, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 27, $this->source); })()), "html", null, true);
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
            // line 53
            $context["sumQuantInt"] = 0;
            // line 54
            echo "                ";
            $context["sumValueInit"] = 0;
            // line 55
            echo "                ";
            $context["sumQuantEntrer"] = 0;
            // line 56
            echo "                ";
            $context["sumQuantCurrent"] = 0;
            // line 57
            echo "                ";
            $context["sumActuel"] = 0;
            // line 58
            echo "                ";
            $context["sumQuantSortie"] = 0;
            // line 59
            echo "                ";
            $context["sumValSortie"] = 0;
            // line 60
            echo "                ";
            $context["sumValRRecus"] = 0;
            // line 61
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 62
                echo "                        <tr>
                            ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
                                ";
                    // line 64
                    if (($context["key2"] == "nomProduit")) {
                        // line 65
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 66
$context["key2"] == "quantite_init")) {
                        // line 67
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 67, $this->source); })()), $context["key"], [], "array", false, false, false, 67), 0, [], "array", false, false, false, 67);
                        // line 68
                        echo "                                    ";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 68, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 68, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 69
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 69, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 70
$context["key2"] == "valeur_init")) {
                        // line 71
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 71, $this->source); })()), $context["key"], [], "array", false, false, false, 71), "prix_net", [], "array", false, false, false, 71);
                        // line 72
                        echo "                                    ";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 72, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 72, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 73
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 73, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 74
$context["key2"] == "qunad_recus")) {
                        // line 75
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 75, $this->source); })()), $context["key"], [], "array", false, false, false, 75), 0, [], "array", false, false, false, 75);
                        // line 76
                        echo "                                    ";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 76, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 76, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 77
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 77, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 78
$context["key2"] == "val_recus")) {
                        // line 79
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 79, $this->source); })()), $context["key"], [], "array", false, false, false, 79), 0, [], "array", false, false, false, 79);
                        // line 80
                        echo "                                    ";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 80, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 80, $this->source); })()));
                        // line 81
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 81, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 82
$context["key2"] == "quantite_sortie")) {
                        // line 83
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 83, $this->source); })()), $context["key"], [], "array", false, false, false, 83), 0, [], "array", false, false, false, 83));
                        // line 84
                        echo "                                    ";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 84, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 84, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 85
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 85, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 86
$context["key2"] == "val_sortie")) {
                        // line 87
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 87, $this->source); })()), $context["key"], [], "array", false, false, false, 87), 0, [], "array", false, false, false, 87));
                        // line 88
                        echo "                                    ";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 88, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 88, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 89
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 89, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 90
$context["key2"] == "quantite_actuelle")) {
                        // line 91
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 91, $this->source); })()), $context["key"], [], "array", false, false, false, 91), "quantite_actuelle", [], "array", false, false, false, 91);
                        // line 92
                        echo "                                    ";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 92, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 92, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 93
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 93, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                ";
                    } elseif ((                    // line 94
$context["key2"] == "value_actuelle")) {
                        // line 95
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 95, $this->source); })()), $context["key"], [], "array", false, false, false, 95), "prix_net", [], "array", false, false, false, 95);
                        // line 96
                        echo "                                    ";
                        $context["sumActuel"] = ((isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 96, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 96, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 97
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 97, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                ";
                    }
                    // line 99
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                   <tfoot>
                        <tr>
                            <th>
                                Totales(Valeur)
                            </th>
                            <th>
                                ";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 108, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumI\" > ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 112, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 115, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumE\" > ";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 119, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 122
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 122, $this->source); })())), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumS\" > ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 125, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 126
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 126, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 129, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumA\" > ";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 132, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
            // line 133
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 133, $this->source); })()), 0, ",", " "), "html", null, true);
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
            // line 149
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
            // line 160
            echo "        <h1>Page not found 404
        </h1>
        <p>
            The requested page couldn't be located. Checkout for any URL misspelling or
            <a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
            </a>.
        </p>
    ";
        }
        // line 168
        echo "    
    ";
        // line 169
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
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

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
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
        return array (  445 => 170,  435 => 169,  422 => 7,  412 => 6,  399 => 171,  397 => 169,  394 => 168,  387 => 164,  381 => 160,  367 => 149,  348 => 133,  344 => 132,  338 => 129,  332 => 126,  328 => 125,  322 => 122,  316 => 119,  312 => 118,  306 => 115,  300 => 112,  296 => 111,  290 => 108,  282 => 102,  275 => 100,  269 => 99,  264 => 97,  259 => 96,  256 => 95,  254 => 94,  250 => 93,  245 => 92,  242 => 91,  240 => 90,  236 => 89,  231 => 88,  228 => 87,  226 => 86,  222 => 85,  217 => 84,  214 => 83,  212 => 82,  207 => 81,  204 => 80,  201 => 79,  199 => 78,  195 => 77,  190 => 76,  187 => 75,  185 => 74,  181 => 73,  176 => 72,  173 => 71,  171 => 70,  167 => 69,  162 => 68,  159 => 67,  157 => 66,  152 => 65,  150 => 64,  144 => 63,  141 => 62,  136 => 61,  133 => 60,  130 => 59,  127 => 58,  124 => 57,  121 => 56,  118 => 55,  115 => 54,  113 => 53,  81 => 27,  78 => 26,  76 => 25,  73 => 24,  71 => 23,  68 => 22,  54 => 9,  52 => 6,  45 => 1,);
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
        {# ##################################    Dictionaire de l'annee ##################################################}
        {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'Décembre' } %}
        {##################################################################################################################}
    <main>
        {% if app.user %}
        {% set mois = 'now' | date('F') %}
        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du {{ mois[month] }} {{ year }}</h4>
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
