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

/* impression/ordreSortie/recaputilation.html.twig */
class __TwigTemplate_b515dfcb52702b5c5b0314045bf84252 extends \Twig\Template
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
                    <thead>
                        <tr>
                            <th>Categorie </th>
                            <th>Valeur Faciales </th>
                            <th>TP/PL </th>
                            <th>Planche </th>
                            <th>TP </th>
                            <th>Montant </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context["somme"] = 0;
        // line 28
        echo "                        ";
        $context["bureau"] = 0;
        // line 29
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 30
            echo "                            <tr>
                                <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 31), "html", null, true);
            echo "</td> 
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 34)), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 35) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 35))), "html", null, true);
            echo "</td>
                                ";
            // line 36
            if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 36) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 36)))) {
                // line 37
                echo "                                    ";
                $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 37) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 37))) * 1);
                // line 38
                echo "                                    <td>";
                echo twig_escape_filter($this->env, ($context["prix"] ?? null), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 40
                echo "                                    ";
                $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 40) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 40))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 40));
                // line 41
                echo "                                    <td>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 41) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 41))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 41)), "html", null, true);
                echo "</td>
                                ";
            }
            // line 43
            echo "                                ";
            $context["somme"] = (($context["somme"] ?? null) + ($context["prix"] ?? null));
            // line 44
            echo "                                ";
            $context["bureau"] = (($context["bureau"] ?? null) + 1);
            // line 45
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            <tr>
                                <th colspan=\"5\">Total :  </t>
                                <td id=\"sommeRecapt\"> ";
        // line 49
        echo twig_escape_filter($this->env, ($context["somme"] ?? null), "html", null, true);
        echo " </td>
                            </tr>
                    <tbody>
                </table>  
                <p> ";
        // line 53
        echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
        echo "  observations  </p>
            </div>
            <div>
                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"nombreRecap\"> </span> ARIARY<p>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</p>
                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
        ";
        // line 65
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
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

    public function getTemplateName()
    {
        return "impression/ordreSortie/recaputilation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 7,  177 => 6,  170 => 65,  162 => 60,  152 => 53,  145 => 49,  141 => 47,  134 => 45,  131 => 44,  128 => 43,  122 => 41,  119 => 40,  113 => 38,  110 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  80 => 29,  77 => 28,  75 => 27,  56 => 13,  53 => 12,  51 => 11,  47 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/ordreSortie/recaputilation.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\ordreSortie\\recaputilation.html.twig");
    }
}
