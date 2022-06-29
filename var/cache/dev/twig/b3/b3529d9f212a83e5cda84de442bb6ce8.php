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

/* impression/impDispo.html.twig */
class __TwigTemplate_921f79928a9745973035b7cb9e4fbcd8 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/impDispo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/impDispo.html.twig"));

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
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <h4 class=\"fw-bold\" style=\"color: #dc3444;\">Recaputilation generale de situation de stock de valeurs Postaux </h4>
        <div class=\"table responsive-xxl\">
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\" id=\"table1\">
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
        // line 33
        $context["sumValue"] = 0;
        // line 34
        echo "                    ";
        $context["sumNumber"] = 0;
        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 36
            echo "                        <tr>
                            <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "objet", [], "any", false, false, false, 37), "html", null, true);
            echo " </td>
                            <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "abbr", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                            <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                            <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                            ";
            // line 41
            $context["sumNumber"] = ((isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 41, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 41));
            // line 42
            echo "                            ";
            $context["sumValue"] = ((isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 42, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 42));
            // line 43
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        <tr>
                        <th colspan=\"2\" class=\"text-right pr-3\" > Totaux(Valeur) </th>
                        <th> ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " </th>
                        <th> ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</th>
                        </tr>
                <tbody>
            </table>
            <div>
                <p id=\"arret\"><span class=\"text-uppercase\"> Arreté a :</span></p>
            </div>
        </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
    </div>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
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

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "impression/impDispo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 64,  187 => 63,  174 => 7,  164 => 6,  152 => 65,  150 => 63,  142 => 58,  129 => 48,  125 => 47,  121 => 45,  114 => 43,  111 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  90 => 36,  85 => 35,  82 => 34,  80 => 33,  54 => 9,  52 => 6,  45 => 1,);
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
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <h4 class=\"fw-bold\" style=\"color: #dc3444;\">Recaputilation generale de situation de stock de valeurs Postaux </h4>
        <div class=\"table responsive-xxl\">
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\" id=\"table1\">
                <thead>
                    <tr>
                        <th>OBJETS </th>
                        <th>ABBREVIATIONS </th>
                        <th>NOMBRES </th>
                        <th>VALEURS </th>
                    </tr>
                </thead>
                <tbody>
                    {% set sumValue = 0 %}
                    {% set sumNumber = 0 %}
                    {% for index in product %}
                        <tr>
                            <td> {{ index.objet }} </td>
                            <td> {{ index.abbr }} </td>
                            <td> {{ index.nombre }} </td>
                            <td> {{ index.valeur }} </td>
                            {% set sumNumber = sumNumber + index.nombre %}
                            {% set sumValue = sumValue + index.valeur %}
                        </tr>
                    {% endfor %}
                        <tr>
                        <th colspan=\"2\" class=\"text-right pr-3\" > Totaux(Valeur) </th>
                        <th> {{ sumNumber }} </th>
                        <th> {{ sumValue }}</th>
                        </tr>
                <tbody>
            </table>
            <div>
                <p id=\"arret\"><span class=\"text-uppercase\"> Arreté a :</span></p>
            </div>
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
</html>", "impression/impDispo.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\impDispo.html.twig");
    }
}
