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

/* impression/imprSituation.html.twig */
class __TwigTemplate_fc22d20836eab3eac10d90cd895069e9 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/imprSituation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/imprSituation.html.twig"));

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
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "        ";
            $context["mois"] = twig_date_format_filter($this->env, "now", "F");
            // line 23
            echo "        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du
        ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "
        ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</h4>
        <div class=\"table responsive-xxl\">
            <table class=\"table\">
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
            // line 51
            $context["sumQuantInt"] = 0;
            // line 52
            echo "                ";
            $context["sumValueInit"] = 0;
            // line 53
            echo "                ";
            $context["sumQuantEntrer"] = 0;
            // line 54
            echo "                ";
            $context["sumQuantCurrent"] = 0;
            // line 55
            echo "                ";
            $context["sumValueCurrent"] = 0;
            // line 56
            echo "                ";
            $context["sumQuantSortie"] = 0;
            // line 57
            echo "                ";
            $context["sumValSortie"] = 0;
            // line 58
            echo "                ";
            $context["sumValRRecus"] = 0;
            // line 59
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "                        <tr>
                            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
                                ";
                    // line 62
                    if (($context["key2"] == "nomProduit")) {
                        // line 63
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 64
$context["key2"] == "quantite_init")) {
                        // line 65
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 65, $this->source); })()), $context["key"], [], "array", false, false, false, 65), 0, [], "array", false, false, false, 65);
                        // line 66
                        echo "                                    ";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 66, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 66, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 67
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 67, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 68
$context["key2"] == "valeur_init")) {
                        // line 69
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 69, $this->source); })()), $context["key"], [], "array", false, false, false, 69), "prix_net", [], "array", false, false, false, 69);
                        // line 70
                        echo "                                    ";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 70, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 70, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 71
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 71, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 72
$context["key2"] == "qunad_recus")) {
                        // line 73
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 73, $this->source); })()), $context["key"], [], "array", false, false, false, 73), 0, [], "array", false, false, false, 73);
                        // line 74
                        echo "                                    ";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 74, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 74, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 75
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 75, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 76
$context["key2"] == "val_recus")) {
                        // line 77
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 77, $this->source); })()), $context["key"], [], "array", false, false, false, 77), 0, [], "array", false, false, false, 77);
                        // line 78
                        echo "                                    ";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 78, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 78, $this->source); })()));
                        // line 79
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 79, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 80
$context["key2"] == "quantite_sortie")) {
                        // line 81
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 81, $this->source); })()), $context["key"], [], "array", false, false, false, 81), 0, [], "array", false, false, false, 81));
                        // line 82
                        echo "                                    ";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 82, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 82, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 83
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 83, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 84
$context["key2"] == "val_sortie")) {
                        // line 85
                        echo "                                    ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 85, $this->source); })()), $context["key"], [], "array", false, false, false, 85), 0, [], "array", false, false, false, 85));
                        // line 86
                        echo "                                    ";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 86, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 86, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 87
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 87, $this->source); })()), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 88
$context["key2"] == "quantite_actuelle")) {
                        // line 89
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 89, $this->source); })()), $context["key"], [], "array", false, false, false, 89), "quantite_actuelle", [], "array", false, false, false, 89);
                        // line 90
                        echo "                                    ";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 90, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 90, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 91
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 91, $this->source); })()), "html", null, true);
                        echo " </td>
                                ";
                    } elseif ((                    // line 92
$context["key2"] == "value_actuelle")) {
                        // line 93
                        echo "                                    ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 93, $this->source); })()), $context["key"], [], "array", false, false, false, 93), "prix_net", [], "array", false, false, false, 93);
                        // line 94
                        echo "                                    ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 94, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 94, $this->source); })()));
                        echo " 
                                    <td> ";
                        // line 95
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 95, $this->source); })()), "html", null, true);
                        echo " </td>
                                ";
                    }
                    // line 97
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    <tfoot>
                        <tr>
                            <th>
                                Totales(Valeur)
                            </th>
                            <th>
                                ";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 118
            echo twig_escape_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 118, $this->source); })())), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 121, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 124, $this->source); })()), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "
                            </th>
                        </tr>
                    </tfoot>
                </tbody>
            </table>
            <div>
                <p id=\"arret\">
                    <span class=\"text-uppercase\">
                        Arreté a :</span>
                </p>
            </div>
        </div>
        <div class=\"d-flex flex-row-reverse bd-highlight\">
            <div class=\"p-2 bd-highlight\">
                <p>
                    Antananarivo le ,";
            // line 143
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
            // line 154
            echo "        <h1>Page not found 404
        </h1>
        <p>
            The requested page couldn't be located. Checkout for any URL misspelling or
            <a href=\"";
            // line 158
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
            </a>.
        </p>
    ";
        }
        // line 162
        echo "    
    ";
        // line 163
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
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

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "impression/imprSituation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 164,  414 => 163,  401 => 7,  391 => 6,  379 => 165,  377 => 163,  374 => 162,  367 => 158,  361 => 154,  347 => 143,  328 => 127,  322 => 124,  316 => 121,  310 => 118,  304 => 115,  298 => 112,  292 => 109,  286 => 106,  278 => 100,  271 => 98,  265 => 97,  260 => 95,  255 => 94,  252 => 93,  250 => 92,  246 => 91,  241 => 90,  238 => 89,  236 => 88,  232 => 87,  227 => 86,  224 => 85,  222 => 84,  218 => 83,  213 => 82,  210 => 81,  208 => 80,  203 => 79,  200 => 78,  197 => 77,  195 => 76,  191 => 75,  186 => 74,  183 => 73,  181 => 72,  177 => 71,  172 => 70,  169 => 69,  167 => 68,  163 => 67,  158 => 66,  155 => 65,  153 => 64,  148 => 63,  146 => 62,  140 => 61,  137 => 60,  132 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  109 => 51,  80 => 25,  76 => 24,  73 => 23,  70 => 22,  68 => 21,  54 => 9,  52 => 6,  45 => 1,);
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
        {% if app.user %}
        {% set mois = 'now' | date('F') %}
        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du
        {{ mois }}
        {{ 'now' | date('Y') }}</h4>
        <div class=\"table responsive-xxl\">
            <table class=\"table\">
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
                {% set sumValueCurrent = 0 %}
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
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='valeur_init' %}
                                    {% set valeur = init[key]['prix_net'] %}
                                    {% set sumValueInit = sumValueInit + valeur %} 
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='qunad_recus' %}
                                    {% set valeur = quantiteEntrer[key][0] %}
                                    {% set sumQuantEntrer = sumQuantEntrer + valeur %} 
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='val_recus' %}
                                    {% set valeur = valeurEntrer[key][0] %}
                                    {% set sumValRRecus = sumValRRecus + valeur %}
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='quantite_sortie' %}
                                    {% set valeur = quantiteOut[key][0]|abs %}
                                    {% set sumQuantSortie = sumQuantSortie + valeur %} 
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='val_sortie' %}
                                    {% set valeur = valueOut[key][0]|abs %}
                                    {% set sumValSortie = sumValSortie + valeur %} 
                                    <td> {{ valeur }} </td> 
                                {% elseif key2 =='quantite_actuelle' %}
                                    {% set valeur = courant[key]['quantite_actuelle'] %}
                                    {% set sumQuantCurrent = sumQuantCurrent + valeur %} 
                                    <td> {{ valeur }} </td>
                                {% elseif key2 =='value_actuelle' %}
                                    {% set valeur = courant[key]['prix_net'] %}
                                    {% set sumValueCurrent = sumValueCurrent + valeur %} 
                                    <td> {{ valeur }} </td>
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
                                {{ sumQuantInt }}
                            </th>
                            <th>
                                {{ sumValueInit }}
                            </th>
                            <th>
                                {{ sumQuantEntrer }}
                            </th>
                            <th>
                                {{ sumValRRecus }}
                            </th>
                            <th>
                                {{ sumQuantSortie|abs }}
                            </th>
                            <th>
                                {{ sumValSortie }}
                            </th>
                            <th>
                                {{ sumQuantCurrent }}
                            </th>
                            <th>
                                {{ sumValueCurrent }}
                            </th>
                        </tr>
                    </tfoot>
                </tbody>
            </table>
            <div>
                <p id=\"arret\">
                    <span class=\"text-uppercase\">
                        Arreté a :</span>
                </p>
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
 </body>
</html>", "impression/imprSituation.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\imprSituation.html.twig");
    }
}
