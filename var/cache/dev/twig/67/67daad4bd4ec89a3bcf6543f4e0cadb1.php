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

/* impression/etat_de_stock.html.twig */
class __TwigTemplate_e616b2745d03fd88bb97cc9495a65689 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat_de_stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat_de_stock.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css\">
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
            <section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table class=\"table\" data-toggle=\"table\" border=\"1\">
                        <h3 class=\"text-danger\">Etat de stock general </h3>
                        ";
        // line 16
        if (((isset($context["imp"]) || array_key_exists("imp", $context) ? $context["imp"] : (function () { throw new RuntimeError('Variable "imp" does not exist.', 16, $this->source); })()) == true)) {
            // line 17
            echo "                            <h3 class=\"text-danger\">Etat de stock  du mois  </h3>
                        ";
        }
        // line 19
        echo "                        
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
                            <tbody>
                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 35
            echo "                                        <tr>
                                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                            
                                            ";
                // line 38
                if (($context["key2"] == "ordre")) {
                    // line 39
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                            ";
                } elseif ((                // line 40
$context["key2"] == "NomDeCategorie")) {
                    // line 41
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                            ";
                } elseif ((                // line 42
$context["key2"] == "valeurFaciale")) {
                    // line 43
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                            ";
                } elseif ((                // line 44
$context["key2"] == "initiale")) {
                    // line 45
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 45, $this->source); })()), $context["key"], [], "array", false, false, false, 45), 0, [], "array", false, false, false, 45), "html", null, true);
                    echo " </td> 
                                            ";
                } elseif ((                // line 46
$context["key2"] == "entrer")) {
                    // line 47
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 47, $this->source); })()), $context["key"], [], "array", false, false, false, 47), 0, [], "array", false, false, false, 47) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 47, $this->source); })()), $context["key"], [], "array", false, false, false, 47), 0, [], "array", false, false, false, 47)), "html", null, true);
                    echo " </td> 
                                            ";
                } elseif ((                // line 48
$context["key2"] == "sortie")) {
                    // line 49
                    echo "                                                ";
                    if (twig_test_empty((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 49, $this->source); })()))) {
                        // line 50
                        echo "                                                    <td> 0 </td> 
                                                ";
                    } else {
                        // line 52
                        echo "                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 52, $this->source); })()), $context["key"], [], "array", false, false, false, 52), 0, [], "array", false, false, false, 52), "html", null, true);
                        echo " </td>
                                                ";
                    }
                    // line 53
                    echo " 
                                            ";
                } elseif ((                // line 54
$context["key2"] == "actuelle")) {
                    // line 55
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                            ";
                } elseif ((                // line 56
$context["key2"] == "produit")) {
                    // line 57
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                            ";
                }
                // line 59
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                            ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), "html", null, true);
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
        return "impression/etat_de_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 72,  188 => 70,  178 => 62,  171 => 60,  165 => 59,  159 => 57,  157 => 56,  152 => 55,  150 => 54,  147 => 53,  141 => 52,  137 => 50,  134 => 49,  132 => 48,  127 => 47,  125 => 46,  120 => 45,  118 => 44,  113 => 43,  111 => 42,  106 => 41,  104 => 40,  99 => 39,  97 => 38,  90 => 36,  87 => 35,  83 => 34,  66 => 19,  62 => 17,  60 => 16,  43 => 1,);
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
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
            <section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table class=\"table\" data-toggle=\"table\" border=\"1\">
                        <h3 class=\"text-danger\">Etat de stock general </h3>
                        {% if imp == true %}
                            <h3 class=\"text-danger\">Etat de stock  du mois  </h3>
                        {% endif %}
                        
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
                            <tbody>
                                {% for key,value in courant %}
                                        <tr>
                                        {% for key2, value2 in value %} 
                                            
                                            {% if key2 =='ordre' %}
                                                <td> {{ value2 }}  </td>
                                            {% elseif key2 =='NomDeCategorie' %}
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
                                            {% elseif key2 =='produit' %}
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
</html>", "impression/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat_de_stock.html.twig");
    }
}
