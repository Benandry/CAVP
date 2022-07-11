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
class __TwigTemplate_1bcc2b10d89d8c6511cfba70c6a712f4 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de produits ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, false, false, 5), "Produits", [], "any", false, false, false, 5), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"container\">
                <h3 class=\"text-danger\">Etat de stock produit : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, false, false, 16), "Produits", [], "any", false, false, false, 16), "html", null, true);
            echo " au mois de ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
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
                        $context["valeur"] = (($__internal_compile_1 = (($__internal_compile_2 = ($context["initial"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 50
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td>
                                            ";
                        // line 51
                        $context["sumValueInit"] = (($context["sumValueInit"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                        ";
                    } elseif ((                    // line 52
$context["key2"] == "entrer")) {
                        // line 53
                        echo "                                            ";
                        $context["valeur"] = ((($__internal_compile_3 = (($__internal_compile_4 = ($context["entrer"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null) - (($__internal_compile_5 = (($__internal_compile_6 = ($context["initial"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null));
                        // line 54
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                            ";
                        // line 55
                        $context["sumValueEnter"] = (($context["sumValueEnter"] ?? null) + ($context["valeur"] ?? null));
                        // line 56
                        echo "                                        ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 57
                        echo "                                            ";
                        if (twig_test_empty(($context["out"] ?? null))) {
                            // line 58
                            echo "                                                ";
                            $context["valeur"] = 0;
                            // line 59
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                            echo " </td> 
                                                ";
                            // line 60
                            $context["sumValueOut"] = (($context["sumValueOut"] ?? null) + ($context["valeur"] ?? null));
                            // line 61
                            echo "                                            ";
                        } else {
                            // line 62
                            echo "                                                ";
                            $context["valeur"] = abs((($__internal_compile_7 = (($__internal_compile_8 = ($context["out"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null));
                            // line 63
                            echo "                                                ";
                            $context["sumValueOut"] = (($context["sumValueOut"] ?? null) + ($context["valeur"] ?? null));
                            // line 64
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
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
                        $context["sumValueCurrent"] = (($context["sumValueCurrent"] ?? null) + ($context["valeur"] ?? null));
                        // line 69
                        echo "                                            <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
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
            if ((($context["issubmitted"] ?? null) == true)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["total"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 82
                echo "                                        ";
                if (($context["key"] == "initiale")) {
                    // line 83
                    echo "                                            ";
                    $context["valeur"] = ($context["sumValueInit"] ?? null);
                    // line 84
                    echo "                                            <th>  ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 85
$context["key"] == "entrer")) {
                    // line 86
                    echo "                                            <th> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueEnter"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 87
$context["key"] == "sortie")) {
                    echo " 
                                            <th>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueOut"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                        ";
                } elseif ((                // line 89
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                            <th> ";
                    // line 90
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueCurrent"] ?? null), 0, ",", " "), "html", null, true);
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
        return array (  331 => 7,  327 => 6,  322 => 112,  315 => 108,  309 => 104,  300 => 98,  293 => 93,  287 => 92,  282 => 90,  278 => 89,  274 => 88,  270 => 87,  265 => 86,  263 => 85,  258 => 84,  255 => 83,  252 => 82,  247 => 81,  243 => 79,  239 => 77,  236 => 76,  234 => 75,  231 => 74,  224 => 72,  218 => 71,  212 => 69,  209 => 68,  206 => 67,  204 => 66,  201 => 65,  195 => 64,  192 => 63,  189 => 62,  186 => 61,  184 => 60,  179 => 59,  176 => 58,  173 => 57,  170 => 56,  168 => 55,  163 => 54,  160 => 53,  158 => 52,  154 => 51,  149 => 50,  146 => 49,  144 => 48,  139 => 47,  137 => 46,  132 => 45,  130 => 44,  125 => 43,  123 => 42,  118 => 41,  116 => 40,  109 => 38,  106 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  87 => 31,  65 => 16,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  50 => 9,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/etat/select_produit.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat\\select_produit.html.twig");
    }
}
