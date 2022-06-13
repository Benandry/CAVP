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

/* /produit_disponible.html.twig */
class __TwigTemplate_d604c50255d8bd4c1e4958a30fb1ae66 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produit_disponible.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produit_disponible.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <title> Recaputilation generales | Paositra Malagasy</title>
</head>
<body>
    <h4 id=\"repartitions\">Recaputilation generale de situation de stock de valeurs Postaux </h4>
    <div class=\"table responsive-xxl\">
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 24
            echo "                    <tr>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                // line 26
                echo "                            ";
                if (($context["key2"] == "objet")) {
                    // line 27
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "</td>
                            ";
                } elseif ((                // line 28
$context["key2"] == "nombre")) {
                    // line 29
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "</td>
                            ";
                } elseif ((                // line 30
$context["key2"] == "abbr")) {
                    // line 31
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "</td> 
                            ";
                } elseif ((                // line 32
$context["key2"] == "valeur")) {
                    // line 33
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 35
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            <tbody>
        </table>
    </div>
    <p> Antananarivo le ,";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "<br>
        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
        <span style=\"margin-top1: 25px;\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
     </p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/produit_disponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  126 => 41,  121 => 38,  114 => 36,  108 => 35,  102 => 33,  100 => 32,  95 => 31,  93 => 30,  88 => 29,  86 => 28,  81 => 27,  78 => 26,  74 => 25,  71 => 24,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <title> Recaputilation generales | Paositra Malagasy</title>
</head>
<body>
    <h4 id=\"repartitions\">Recaputilation generale de situation de stock de valeurs Postaux </h4>
    <div class=\"table responsive-xxl\">
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
            <thead>
                <tr>
                    <th>OBJETS </th>
                    <th>ABBREVIATIONS </th>
                    <th>NOMBRES </th>
                    <th>VALEURS </th>
                </tr>
            </thead>
            <tbody>
                {% for key,value in product %}
                    <tr>
                        {% for key2, value2 in value %}
                            {% if key2 == 'objet' %}
                                <td> {{ value2 }}</td>
                            {% elseif key2 == 'nombre' %}
                                <td> {{ value2 }}</td>
                            {% elseif key2 == 'abbr' %}
                                <td> {{ value2 }}</td> 
                            {% elseif key2 == 'valeur' %}
                                <td> {{ value2 }}</td>
                            {% endif %}
                        {% endfor %}
                    </tr>
                {% endfor %}
            <tbody>
        </table>
    </div>
    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}<br>
        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
        <span style=\"margin-top1: 25px;\">{{ app.user.nom }}</span>
     </p>
</body>
</html>", "/produit_disponible.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\produit_disponible.html.twig");
    }
}
