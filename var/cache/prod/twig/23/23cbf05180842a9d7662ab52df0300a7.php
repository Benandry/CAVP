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

/* impression/ordreSortie/repartition.html.twig */
class __TwigTemplate_da8c2aaec5479aaae769215efc39bbea extends \Twig\Template
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
        echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
        echo "--";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["types_order"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($context["types"] ?? null) - 1)] ?? null) : null), "html", null, true);
        echo " </h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                        <tr>
                            <th>Ordre</th>
                            <th>Valeur Faciales </th>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 20
            echo "                                    <th> ";
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 20)), "html", null, true);
            echo "</th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            <th>total par bureau </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 27
            echo "                                <tr>
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                // line 29
                echo "                                    ";
                if (($context["key1"] == "ordre")) {
                    // line 30
                    echo "                                        <td> ";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo "</td>
                                    ";
                } elseif ((                // line 31
$context["key1"] == "vf")) {
                    // line 32
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo "</td>
                                    ";
                } elseif ((                // line 33
$context["key1"] == "nombre_cat")) {
                    // line 34
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                        // line 35
                        echo "                                            ";
                        if ((abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 35)) == abs($context["value1"]))) {
                            // line 36
                            echo "                                                <td> ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 36), "html", null, true);
                            echo "</td>
                                            ";
                        } else {
                            // line 38
                            echo "                                                <td> 0</td>
                                            ";
                        }
                        // line 40
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                                    ";
                } elseif (($context["key1"] == "nombre_agence")) {
                    // line 42
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                    echo "</td>
                                    ";
                }
                // line 44
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    <tbody>
                </table>  
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
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

    public function getTemplateName()
    {
        return "impression/ordreSortie/repartition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 7,  178 => 6,  167 => 52,  160 => 47,  153 => 45,  147 => 44,  141 => 42,  138 => 41,  132 => 40,  128 => 38,  122 => 36,  119 => 35,  114 => 34,  112 => 33,  107 => 32,  105 => 31,  100 => 30,  97 => 29,  93 => 28,  90 => 27,  86 => 26,  80 => 22,  71 => 20,  67 => 19,  56 => 13,  53 => 12,  51 => 11,  47 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/ordreSortie/repartition.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\ordreSortie\\repartition.html.twig");
    }
}
