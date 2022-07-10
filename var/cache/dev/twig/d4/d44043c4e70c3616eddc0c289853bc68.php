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

/* Impression/ordreSortie/repartition.html.twig */
class __TwigTemplate_c52884c2386c42ab403d3fa9a707e599 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Impression/ordreSortie/repartition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Impression/ordreSortie/repartition.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 13, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 13, $this->source); })()) - 1), [], "array", false, false, false, 13), "html", null, true);
        echo " </h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                        <tr>
                            <th>Ordre</th>
                            <th>Valeur Faciales </th>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 19, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 26, $this->source); })()));
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 34, $this->source); })()));
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

    public function getTemplateName()
    {
        return "Impression/ordreSortie/repartition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 7,  190 => 6,  173 => 52,  166 => 47,  159 => 45,  153 => 44,  147 => 42,  144 => 41,  138 => 40,  134 => 38,  128 => 36,  125 => 35,  120 => 34,  118 => 33,  113 => 32,  111 => 31,  106 => 30,  103 => 29,  99 => 28,  96 => 27,  92 => 26,  86 => 22,  77 => 20,  73 => 19,  62 => 13,  59 => 12,  57 => 11,  53 => 9,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Impression de recapitulation d'ordre de sortie numero  | Paositra malagasy</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body onload=\"window.print()\">
        {% set types_order = ['PN','FP']  %}
        <div class=\"container\">
            <h4 class=\"h4\">Récapitulation N° {{ numero }}--{{ types_order[types - 1]}} </h4>
            <div class=\"table responsive-xxl\">
                <table class=\"table table-bordered table-hover\" >
                        <tr>
                            <th>Ordre</th>
                            <th>Valeur Faciales </th>
                                {% for pro in dispo %}
                                    <th> {{ pro.nombre_cat|abs }}</th>
                            {% endfor %}
                            <th>total par bureau </th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key,value in dispo %}
                                <tr>
                                {% for key1,value1 in value %}
                                    {% if key1 == 'ordre' %}
                                        <td> {{ value1 }}</td>
                                    {% elseif key1 == 'vf' %}
                                        <td>{{ value1 }}</td>
                                    {% elseif key1 == 'nombre_cat' %}
                                        {% for pro in dispo  %}
                                            {% if pro.nombre_cat|abs == value1|abs %}
                                                <td> {{ pro.nombre_agence }}</td>
                                            {% else %}
                                                <td> 0</td>
                                            {% endif %}
                                        {% endfor %}
                                    {% elseif key1 == 'nombre_agence' %}
                                        <td>{{ value1 }}</td>
                                    {% endif %}
                                {% endfor %}
                                </tr>
                        {% endfor %}
                    <tbody>
                </table>  
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}</p>
                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
    </body>
</html>", "Impression/ordreSortie/repartition.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\ordreSortie\\repartition.html.twig");
    }
}
