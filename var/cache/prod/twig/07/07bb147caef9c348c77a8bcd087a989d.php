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

/* impression/rapport/recaputilation_general.html.twig */
class __TwigTemplate_92b93e528a5861a6c69618602edb2d17 extends \Twig\Template
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
            #arret{
                margin-top: 15px;
                font-family: italic;
            }
        </style>
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
         ";
        // line 19
        echo "        ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 20
        echo "        ";
        // line 21
        echo "        <div class=\"container\">
            <h4 class=\"fw-bold\" style=\"color: #dc3444;\">Recaputilation generale de situation de stock de valeurs Postaux,  Mois du ";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "</h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                    <thead>
                        <tr>
                            <th>OBJETS </th>
                            <th>ABBREVIATIONS </th>
                            <th>NOMBRES </th>
                            <th>VALEURS </th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        $context["sumValue"] = 0;
        // line 35
        echo "                        ";
        $context["sumNumber"] = 0;
        // line 36
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 37
            echo "                            <tr>
                                <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "objet", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                                <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "abbr", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                                <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 40), 0, ",", " "), "html", null, true);
            echo " </td>
                                <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 41), 0, ",", " "), "html", null, true);
            echo " </td>
                                ";
            // line 42
            $context["sumNumber"] = (($context["sumNumber"] ?? null) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 42));
            // line 43
            echo "                                ";
            $context["sumValue"] = (($context["sumValue"] ?? null) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 43));
            // line 44
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            <tr>
                            <th colspan=\"2\" class=\"text-right pr-3\" > Totaux(Valeur) </th>
                            <th> ";
        // line 48
        echo twig_escape_filter($this->env, ($context["sumNumber"] ?? null), "html", null, true);
        echo " </th>
                            <th>
                                <span style=\"display:none\" id=\"somValue\" > ";
        // line 50
        echo twig_escape_filter($this->env, ($context["sumValue"] ?? null), "html", null, true);
        echo "</span>
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValue"] ?? null), 0, ",", " "), "html", null, true);
        echo "
                             </th>
                            </tr>
                    <tbody>
                </table>
                <div>
                    <p>Arreté a la valeur de : <span class=\"text-uppercase\" id=\"nombrePd\"> </span> ARIARY<p>
                </div>
            </div>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                    </div>
                </div>
        </div>
            ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "  
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

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "impression/rapport/recaputilation_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  180 => 67,  173 => 7,  169 => 6,  162 => 69,  160 => 67,  152 => 62,  138 => 51,  134 => 50,  129 => 48,  125 => 46,  118 => 44,  115 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  94 => 37,  89 => 36,  86 => 35,  84 => 34,  67 => 22,  64 => 21,  62 => 20,  59 => 19,  48 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impression/rapport/recaputilation_general.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\rapport\\recaputilation_general.html.twig");
    }
}
