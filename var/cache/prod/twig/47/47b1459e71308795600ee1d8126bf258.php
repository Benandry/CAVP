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
class __TwigTemplate_124765d521d256eebcb4539de2da3998 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        ";
            $context["mois"] = twig_date_format_filter($this->env, "now", "F");
            // line 27
            echo "        <h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
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
                        $context["valeur"] = (($__internal_compile_1 = (($__internal_compile_2 = ($context["initial"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 68
                        echo "                                    ";
                        $context["sumQuantInt"] = (($context["sumQuantInt"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 69
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 70
$context["key2"] == "valeur_init")) {
                        // line 71
                        echo "                                    ";
                        $context["valeur"] = (($__internal_compile_3 = (($__internal_compile_4 = ($context["init"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["prix_net"] ?? null) : null);
                        // line 72
                        echo "                                    ";
                        $context["sumValueInit"] = (($context["sumValueInit"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 73
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 74
$context["key2"] == "qunad_recus")) {
                        // line 75
                        echo "                                    ";
                        $context["valeur"] = (($__internal_compile_5 = (($__internal_compile_6 = ($context["quantiteEntrer"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null);
                        // line 76
                        echo "                                    ";
                        $context["sumQuantEntrer"] = (($context["sumQuantEntrer"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 77
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 78
$context["key2"] == "val_recus")) {
                        // line 79
                        echo "                                    ";
                        $context["valeur"] = (($__internal_compile_7 = (($__internal_compile_8 = ($context["valeurEntrer"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null);
                        // line 80
                        echo "                                    ";
                        $context["sumValRRecus"] = (($context["sumValRRecus"] ?? null) + ($context["valeur"] ?? null));
                        // line 81
                        echo "                                    <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 82
$context["key2"] == "quantite_sortie")) {
                        // line 83
                        echo "                                    ";
                        $context["valeur"] = abs((($__internal_compile_9 = (($__internal_compile_10 = ($context["quantiteOut"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["key"]] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null));
                        // line 84
                        echo "                                    ";
                        $context["sumQuantSortie"] = (($context["sumQuantSortie"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 85
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 86
$context["key2"] == "val_sortie")) {
                        // line 87
                        echo "                                    ";
                        $context["valeur"] = abs((($__internal_compile_11 = (($__internal_compile_12 = ($context["valueOut"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["key"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null));
                        // line 88
                        echo "                                    ";
                        $context["sumValSortie"] = (($context["sumValSortie"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 89
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                ";
                    } elseif ((                    // line 90
$context["key2"] == "quantite_actuelle")) {
                        // line 91
                        echo "                                    ";
                        $context["valeur"] = (($__internal_compile_13 = (($__internal_compile_14 = ($context["courant"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["quantite_actuelle"] ?? null) : null);
                        // line 92
                        echo "                                    ";
                        $context["sumQuantCurrent"] = (($context["sumQuantCurrent"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 93
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td>
                                ";
                    } elseif ((                    // line 94
$context["key2"] == "value_actuelle")) {
                        // line 95
                        echo "                                    ";
                        $context["valeur"] = (($__internal_compile_15 = (($__internal_compile_16 = ($context["courant"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["key"]] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["prix_net"] ?? null) : null);
                        // line 96
                        echo "                                    ";
                        $context["sumActuel"] = (($context["sumActuel"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                    <td> ";
                        // line 97
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantInt"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumI\" > ";
            // line 111
            echo twig_escape_filter($this->env, ($context["sumValueInit"] ?? null), "html", null, true);
            echo "</span>
                                ";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueInit"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantEntrer"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumE\" > ";
            // line 118
            echo twig_escape_filter($this->env, ($context["sumValRRecus"] ?? null), "html", null, true);
            echo "</span>
                                ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValRRecus"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 122
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs(($context["sumQuantSortie"] ?? null)), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumS\" > ";
            // line 125
            echo twig_escape_filter($this->env, ($context["sumValSortie"] ?? null), "html", null, true);
            echo "</span>
                                ";
            // line 126
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValSortie"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantCurrent"] ?? null), 0, ",", " "), "html", null, true);
            echo "
                            </th>
                            <th>
                                <span style=\"display:none\" id=\"sumA\" > ";
            // line 132
            echo twig_escape_filter($this->env, ($context["sumActuel"] ?? null), "html", null, true);
            echo "</span>
                                ";
            // line 133
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumActuel"] ?? null), 0, ",", " "), "html", null, true);
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
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
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
        return array (  415 => 170,  411 => 169,  404 => 7,  400 => 6,  393 => 171,  391 => 169,  388 => 168,  381 => 164,  375 => 160,  361 => 149,  342 => 133,  338 => 132,  332 => 129,  326 => 126,  322 => 125,  316 => 122,  310 => 119,  306 => 118,  300 => 115,  294 => 112,  290 => 111,  284 => 108,  276 => 102,  269 => 100,  263 => 99,  258 => 97,  253 => 96,  250 => 95,  248 => 94,  244 => 93,  239 => 92,  236 => 91,  234 => 90,  230 => 89,  225 => 88,  222 => 87,  220 => 86,  216 => 85,  211 => 84,  208 => 83,  206 => 82,  201 => 81,  198 => 80,  195 => 79,  193 => 78,  189 => 77,  184 => 76,  181 => 75,  179 => 74,  175 => 73,  170 => 72,  167 => 71,  165 => 70,  161 => 69,  156 => 68,  153 => 67,  151 => 66,  146 => 65,  144 => 64,  138 => 63,  135 => 62,  130 => 61,  127 => 60,  124 => 59,  121 => 58,  118 => 57,  115 => 56,  112 => 55,  109 => 54,  107 => 53,  75 => 27,  72 => 26,  70 => 25,  67 => 24,  65 => 23,  62 => 22,  48 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/rapport/imprSituation.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\rapport\\imprSituation.html.twig");
    }
}
