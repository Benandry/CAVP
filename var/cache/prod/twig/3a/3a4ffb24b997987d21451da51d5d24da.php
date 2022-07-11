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
class __TwigTemplate_9272a3f881bc16330016a27a8bf1990b extends \Twig\Template
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
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
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
                    $context["sumValueInit"] = (($context["sumValueInit"] ?? null) + (($__internal_compile_1 = (($__internal_compile_2 = ($context["initial"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null));
                    // line 49
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_compile_3 = (($__internal_compile_4 = ($context["initial"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 0, ",", " "), "html", null, true);
                    echo " </td> 
                                    ";
                } elseif ((                // line 50
$context["key2"] == "entrer")) {
                    // line 51
                    echo "                                        ";
                    $context["valeur"] = ((($__internal_compile_5 = (($__internal_compile_6 = ($context["entrer"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null) - (($__internal_compile_7 = (($__internal_compile_8 = ($context["initial"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null));
                    // line 52
                    echo "                                        ";
                    $context["sumValueEnter"] = (($context["sumValueEnter"] ?? null) + ($context["valeur"] ?? null));
                    // line 53
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </td> 
                                    ";
                } elseif ((                // line 54
$context["key2"] == "sortie")) {
                    // line 55
                    echo "                                        ";
                    if (twig_test_empty(($context["sort"] ?? null))) {
                        // line 56
                        echo "                                            <td> 0 </td> 
                                        ";
                    } else {
                        // line 58
                        echo "                                            ";
                        $context["valeur"] = abs((($__internal_compile_9 = (($__internal_compile_10 = ($context["sort"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["key"]] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null));
                        // line 59
                        echo "                                            ";
                        $context["sumValueOut"] = (($context["sumValueOut"] ?? null) + ($context["valeur"] ?? null));
                        // line 60
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
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
                    $context["sumValueCurrent"] = (($context["sumValueCurrent"] ?? null) + $context["value2"]);
                    // line 64
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $context["value2"], 0, ",", " "), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["total"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 77
            echo "                                        ";
            if (($context["key"] == "initiale")) {
                // line 78
                echo "                                            ";
                $context["valeur"] = ($context["sumValueInit"] ?? null);
                // line 79
                echo "                                            <th id=\"sumInit\">  ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 80
$context["key"] == "entrer")) {
                // line 81
                echo "                                            <th id=\"sumEnter\"> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueEnter"] ?? null), 0, ",", " "), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 82
$context["key"] == "sortie")) {
                echo " 
                                            <th>";
                // line 83
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueOut"] ?? null), 0, ",", " "), "html", null, true);
                echo " </th>
                                        ";
            } elseif ((            // line 84
$context["key"] == "actuelle")) {
                echo "                                                                            
                                            <th> ";
                // line 85
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueCurrent"] ?? null), 0, ",", " "), "html", null, true);
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

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
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
        return array (  305 => 100,  301 => 99,  294 => 7,  290 => 6,  284 => 101,  282 => 99,  274 => 94,  266 => 88,  260 => 87,  255 => 85,  251 => 84,  247 => 83,  243 => 82,  238 => 81,  236 => 80,  231 => 79,  228 => 78,  225 => 77,  221 => 76,  218 => 75,  216 => 74,  211 => 71,  204 => 69,  198 => 68,  192 => 66,  190 => 65,  185 => 64,  182 => 63,  180 => 62,  177 => 61,  171 => 60,  168 => 59,  165 => 58,  161 => 56,  158 => 55,  156 => 54,  151 => 53,  148 => 52,  145 => 51,  143 => 50,  138 => 49,  135 => 48,  133 => 47,  128 => 46,  126 => 45,  121 => 44,  119 => 43,  114 => 42,  112 => 41,  105 => 39,  102 => 38,  98 => 37,  95 => 36,  92 => 35,  89 => 34,  86 => 33,  83 => 32,  81 => 31,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  48 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat\\etat_de_stock.html.twig");
    }
}
