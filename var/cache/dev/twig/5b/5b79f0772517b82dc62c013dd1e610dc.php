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

/* impression/select.html.twig */
class __TwigTemplate_d7be2d242af16276acbeb5732e524959 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/select.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css\">
        <title>Impression de produits ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 8, $this->source); })()), 0, [], "any", false, false, false, 8), "Produits", [], "any", false, false, false, 8), "html", null, true);
        echo "  | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <section class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <table class=\"table\" data-toggle=\"table\" border=\"1\">
                    <h3 class=\"text-danger\">Etat de stock produit : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 15, $this->source); })()), 0, [], "any", false, false, false, 15), "Produits", [], "any", false, false, false, 15), "html", null, true);
        echo "  </h3>
                        <thead>
                            <tr class=\"table-danger\">
                                <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                <th scope=\"col\" data-field=\"Categorie\"> Categorie </th>
                                <th scope=\"col\" data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                <th scope=\"col\" data-field=\"Stock initial\">Stock initial</th>
                                <th scope=\"col\" data-field=\"Entrée\">Entrée</th>
                                <th scope=\"col\" data-field=\"Sortie\">Sortie</th>
                                <th scope=\"col\" data-field=\"Sock Actuel\">Stock Acteul </th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 29
            echo "                                    <tr>
                                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                        ";
                // line 31
                if (($context["key2"] == "ordre")) {
                    // line 32
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                        ";
                } elseif ((                // line 33
$context["key2"] == "NomDeCategorie")) {
                    // line 34
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                        ";
                } elseif ((                // line 35
$context["key2"] == "produit")) {
                    // line 36
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 37
$context["key2"] == "valeurFaciale")) {
                    // line 38
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 39
$context["key2"] == "initiale")) {
                    // line 40
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 40, $this->source); })()), $context["key"], [], "array", false, false, false, 40), 0, [], "array", false, false, false, 40), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 41
$context["key2"] == "entrer")) {
                    // line 42
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42), 0, [], "array", false, false, false, 42) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42), 0, [], "array", false, false, false, 42)), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 43
$context["key2"] == "sortie")) {
                    // line 44
                    echo "                                            ";
                    if (twig_test_empty((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 44, $this->source); })()))) {
                        // line 45
                        echo "                                                <td> 0 </td> 
                                            ";
                    } else {
                        // line 47
                        echo "                                                <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 47, $this->source); })()), $context["key"], [], "array", false, false, false, 47), 0, [], "array", false, false, false, 47), "html", null, true);
                        echo " </td>
                                            ";
                    }
                    // line 48
                    echo " 
                                        ";
                } elseif ((                // line 49
$context["key2"] == "actuelle")) {
                    // line 50
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                        ";
                }
                // line 52
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </section>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                        ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "prenom", [], "any", false, false, false, 64), "html", null, true);
        echo "
                </div>
            </div>
        <script
        src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
        integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
        crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js\" 
        integrity=\"sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF\" 
        crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "impression/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  181 => 62,  172 => 55,  165 => 53,  159 => 52,  153 => 50,  151 => 49,  148 => 48,  142 => 47,  138 => 45,  135 => 44,  133 => 43,  128 => 42,  126 => 41,  121 => 40,  119 => 39,  114 => 38,  112 => 37,  107 => 36,  105 => 35,  100 => 34,  98 => 33,  93 => 32,  91 => 31,  85 => 30,  82 => 29,  78 => 28,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css\">
        <title>Impression de produits {{ init.0.Produits }}  | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <section class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <table class=\"table\" data-toggle=\"table\" border=\"1\">
                    <h3 class=\"text-danger\">Etat de stock produit : {{ init.0.Produits }}  </h3>
                        <thead>
                            <tr class=\"table-danger\">
                                <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                <th scope=\"col\" data-field=\"Categorie\"> Categorie </th>
                                <th scope=\"col\" data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                <th scope=\"col\" data-field=\"Stock initial\">Stock initial</th>
                                <th scope=\"col\" data-field=\"Entrée\">Entrée</th>
                                <th scope=\"col\" data-field=\"Sortie\">Sortie</th>
                                <th scope=\"col\" data-field=\"Sock Actuel\">Stock Acteul </th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for key,value in courant %}
                                    <tr>
                                    {% for key2, value2 in value %} 
                                        {% if key2 =='ordre' %}
                                            <td> {{ value2 }}  </td>
                                        {% elseif key2 =='NomDeCategorie' %}
                                            <td> {{ value2 }} </td>  
                                        {% elseif key2 =='produit' %}
                                            <td> {{ value2 }} </td>
                                        {% elseif key2 =='valeurFaciale' %}
                                            <td> {{ value2 }} </td>
                                        {% elseif key2 =='initiale' %}
                                            <td> {{ initial[key][0] }} </td> 
                                        {% elseif key2 =='entrer' %}
                                            <td> {{ entrer[key][0] - initial[key][0] }} </td> 
                                        {% elseif key2 =='sortie' %}
                                            {% if sort is empty %}
                                                <td> 0 </td> 
                                            {% else %}
                                                <td> {{ sort[key][0] }} </td>
                                            {% endif %} 
                                        {% elseif key2 =='actuelle' %}
                                            <td> {{ value2 }} </td>                                                                                                                   
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                        {{ app.user.prenom }}
                </div>
            </div>
        <script
        src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
        integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
        crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js\" 
        integrity=\"sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF\" 
        crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js\"></script>
    </body>
</html>", "impression/select.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\select.html.twig");
    }
}
