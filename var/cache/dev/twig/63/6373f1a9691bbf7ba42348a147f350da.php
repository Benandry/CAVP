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
class __TwigTemplate_16ebc69dfac66b1b55092fbf147d4ccd extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/rapport/recaputilation_general.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/rapport/recaputilation_general.html.twig"));

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
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "D??cembre"];
        // line 20
        echo "        ";
        // line 21
        echo "        <div class=\"container\">
            <h4 class=\"fw-bold\" style=\"color: #dc3444;\">Recaputilation generale de situation de stock de valeurs Postaux,  Mois du ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 22, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 22, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()));
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
            $context["sumNumber"] = ((isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 42, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 42));
            // line 43
            echo "                                ";
            $context["sumValue"] = ((isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 43, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 43));
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
        echo twig_escape_filter($this->env, (isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " </th>
                            <th>
                                <span style=\"display:none\" id=\"somValue\" > ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</span>
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 51, $this->source); })()), 0, ",", " "), "html", null, true);
        echo "
                             </th>
                            </tr>
                    <tbody>
                </table>
                <div>
                    <p>Arret?? a la valeur de : <span class=\"text-uppercase\" id=\"nombrePd\"> </span> ARIARY<p>
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

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  214 => 68,  204 => 67,  191 => 7,  181 => 6,  168 => 69,  166 => 67,  158 => 62,  144 => 51,  140 => 50,  135 => 48,  131 => 46,  124 => 44,  121 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  100 => 37,  95 => 36,  92 => 35,  90 => 34,  73 => 22,  70 => 21,  68 => 20,  65 => 19,  54 => 9,  52 => 6,  45 => 1,);
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
            #arret{
                margin-top: 15px;
                font-family: italic;
            }
        </style>
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
         {# ##################################    Dictionaire de l'annee ##################################################}
        {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'D??cembre' } %}
        {##################################################################################################################}
        <div class=\"container\">
            <h4 class=\"fw-bold\" style=\"color: #dc3444;\">Recaputilation generale de situation de stock de valeurs Postaux,  Mois du {{ mois[month] }} {{ year }}</h4>
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
                        {% set sumValue = 0 %}
                        {% set sumNumber = 0 %}
                        {% for index in product %}
                            <tr>
                                <td> {{ index.objet }} </td>
                                <td> {{ index.abbr }} </td>
                                <td> {{ index.nombre|number_format(0,',', ' ') }} </td>
                                <td> {{ index.valeur|number_format(0,',', ' ') }} </td>
                                {% set sumNumber = sumNumber + index.nombre %}
                                {% set sumValue = sumValue + index.valeur %}
                            </tr>
                        {% endfor %}
                            <tr>
                            <th colspan=\"2\" class=\"text-right pr-3\" > Totaux(Valeur) </th>
                            <th> {{ sumNumber }} </th>
                            <th>
                                <span style=\"display:none\" id=\"somValue\" > {{  sumValue }}</span>
                                {{ sumValue|number_format(0,',', ' ') }}
                             </th>
                            </tr>
                    <tbody>
                </table>
                <div>
                    <p>Arret?? a la valeur de : <span class=\"text-uppercase\" id=\"nombrePd\"> </span> ARIARY<p>
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
        </div>
    </body>
</html>", "impression/rapport/recaputilation_general.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\rapport\\recaputilation_general.html.twig");
    }
}
