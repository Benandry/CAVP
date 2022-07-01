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

/* impression/etat/etat_de_stock.html.twig */
class __TwigTemplate_3be5afcf344be851c2f0c508ae6af708 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/etat_de_stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impression/etat/etat_de_stock.html.twig"));

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
        echo "        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <table class=\"table\" data-toggle=\"table\" border=\"1\">
                    <h3 class=\"text-danger text-center\">Etat de stock general du mois ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " </h3>
                    
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 33
            echo "                                    <tr>
                                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                        
                                        ";
                // line 36
                if (($context["key2"] == "ordre")) {
                    // line 37
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                        ";
                } elseif ((                // line 38
$context["key2"] == "NomDeCategorie")) {
                    // line 39
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 40
$context["key2"] == "valeurFaciale")) {
                    // line 41
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 42
$context["key2"] == "initiale")) {
                    // line 43
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 43, $this->source); })()), $context["key"], [], "array", false, false, false, 43), 0, [], "array", false, false, false, 43), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 44
$context["key2"] == "entrer")) {
                    // line 45
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 45, $this->source); })()), $context["key"], [], "array", false, false, false, 45), 0, [], "array", false, false, false, 45) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 45, $this->source); })()), $context["key"], [], "array", false, false, false, 45), 0, [], "array", false, false, false, 45)), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 46
$context["key2"] == "sortie")) {
                    // line 47
                    echo "                                            ";
                    if (twig_test_empty((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 47, $this->source); })()))) {
                        // line 48
                        echo "                                                <td> 0 </td> 
                                            ";
                    } else {
                        // line 50
                        echo "                                                <td> ";
                        echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 50, $this->source); })()), $context["key"], [], "array", false, false, false, 50), 0, [], "array", false, false, false, 50)), "html", null, true);
                        echo " </td>
                                            ";
                    }
                    // line 51
                    echo " 
                                        ";
                } elseif ((                // line 52
$context["key2"] == "actuelle")) {
                    // line 53
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                        ";
                } elseif ((                // line 54
$context["key2"] == "produit")) {
                    // line 55
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                        ";
                }
                // line 57
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                </div>
            </div>
        </div>
         ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
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

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "impression/etat/etat_de_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 73,  233 => 72,  220 => 7,  210 => 6,  198 => 74,  196 => 72,  188 => 67,  179 => 60,  172 => 58,  166 => 57,  160 => 55,  158 => 54,  153 => 53,  151 => 52,  148 => 51,  142 => 50,  138 => 48,  135 => 47,  133 => 46,  128 => 45,  126 => 44,  121 => 43,  119 => 42,  114 => 41,  112 => 40,  107 => 39,  105 => 38,  100 => 37,  98 => 36,  91 => 34,  88 => 33,  84 => 32,  63 => 16,  54 => 9,  52 => 6,  45 => 1,);
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
        <title>Impression de etat de stock | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <table class=\"table\" data-toggle=\"table\" border=\"1\">
                    <h3 class=\"text-danger text-center\">Etat de stock general du mois {{ month }}/{{ year }} </h3>
                    
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
                                                <td> {{ sort[key][0]|abs }} </td>
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
</html>", "impression/etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\impression\\etat\\etat_de_stock.html.twig");
    }
}
