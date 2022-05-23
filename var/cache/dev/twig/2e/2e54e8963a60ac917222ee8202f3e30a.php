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

/* periode/mensuel.html.twig */
class __TwigTemplate_e1dd593cafd71af640576a0ee7ccc483 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "periode/mensuel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "periode/mensuel.html.twig"));

        // line 3
        $context["mois_dico"] = [0 => "Janvier", 1 => "Fevrier", 2 => "Mars", 3 => "Avril", 4 => "Mai", 5 => "Juin", 6 => "Juillet", 7 => "Aout", 8 => "Septembre", 9 => "Octobre", 10 => "Novembre", 11 => "Decembre"];
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periode/mensuel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Etat de stock | Paositra malagasy! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 11
        echo "<div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois_dico"]) || array_key_exists("mois_dico", $context) ? $context["mois_dico"] : (function () { throw new RuntimeError('Variable "mois_dico" does not exist.', 17, $this->source); })()), ((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 17, $this->source); })()) - 1), [], "array", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                 <ul class=\"nav\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                            <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_mensuel", ["source" => "etat mensuel"]);
        echo "\">Mensuel</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_annuel", ["source" => "etat annuel"]);
        echo "\">Annuel</a>
                                        </div>
                                    </li>
                                </ul>                          
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" data-toggle=\"table\" data-search=\"true\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    <th data-field=\"Produits\"> Produits </th>
                                                    <th data-field=\"Categorie\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Stock debut\">Stock début du mois</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock du mois </th>
                                                     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 49
            echo "                                                            <tr>
                                                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                                                
                                                                ";
                // line 52
                if (($context["key2"] == "ordre")) {
                    // line 53
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                                                ";
                } elseif ((                // line 54
$context["key2"] == "NomDeCategorie")) {
                    // line 55
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                                ";
                } elseif ((                // line 56
$context["key2"] == "valeurFaciale")) {
                    // line 57
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                                ";
                } elseif ((                // line 58
$context["key2"] == "initiale")) {
                    // line 59
                    echo "                                                                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59), 0, [], "array", false, false, false, 59), "html", null, true);
                    echo " </td>
                                                                ";
                } elseif ((                // line 60
$context["key2"] == "debut")) {
                    // line 61
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["beginCurrent"]) || array_key_exists("beginCurrent", $context) ? $context["beginCurrent"] : (function () { throw new RuntimeError('Variable "beginCurrent" does not exist.', 61, $this->source); })()), $context["key"], [], "array", false, false, false, 61), 0, [], "array", false, false, false, 61), "html", null, true);
                    echo "</td>
                                                                ";
                } elseif ((                // line 62
$context["key2"] == "entrer")) {
                    // line 63
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 63, $this->source); })()), $context["key"], [], "array", false, false, false, 63), 0, [], "array", false, false, false, 63), "html", null, true);
                    echo " </td> 
                                                                ";
                } elseif ((                // line 64
$context["key2"] == "sortie")) {
                    // line 65
                    echo "                                                                    ";
                    if (twig_test_empty((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 65, $this->source); })()))) {
                        // line 66
                        echo "                                                                        <td> 0 </td> 
                                                                    ";
                    } else {
                        // line 68
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 68, $this->source); })()), $context["key"], [], "array", false, false, false, 68), 0, [], "array", false, false, false, 68), "html", null, true);
                        echo " </td>
                                                                    ";
                    }
                    // line 69
                    echo " 
                                                                ";
                } elseif ((                // line 70
$context["key2"] == "actuelle")) {
                    // line 71
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                                                ";
                } elseif ((                // line 72
$context["key2"] == "produit")) {
                    // line 73
                    echo "                                                                    <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                                                ";
                }
                // line 75
                echo "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                            </tbody>
                                        </table>
                                   </div>
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "prenom", [], "any", false, false, false, 87), "html", null, true);
        echo "
                                        <p> <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_mensuel", ["mois" => (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 88, $this->source); })())]), "html", null, true);
        echo "\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "periode/mensuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 88,  260 => 87,  254 => 84,  246 => 78,  239 => 76,  233 => 75,  227 => 73,  225 => 72,  220 => 71,  218 => 70,  215 => 69,  209 => 68,  205 => 66,  202 => 65,  200 => 64,  195 => 63,  193 => 62,  188 => 61,  186 => 60,  181 => 59,  179 => 58,  174 => 57,  172 => 56,  167 => 55,  165 => 54,  160 => 53,  158 => 52,  151 => 50,  148 => 49,  144 => 48,  119 => 26,  115 => 25,  102 => 17,  94 => 11,  91 => 8,  81 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set mois_dico = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
          'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre']  %}
{% block title %}Etat de stock | Paositra malagasy! {% endblock %}

{% block body %}

{# ------------------------#}   

    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\"> {{ mois_dico[mois-1] }} {{ annee}}</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                 <ul class=\"nav\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                            <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('periode_mensuel', {'source':'etat mensuel'}) }}\">Mensuel</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('periode_annuel', {'source':'etat annuel'}) }}\">Annuel</a>
                                        </div>
                                    </li>
                                </ul>                          
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" data-toggle=\"table\" data-search=\"true\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    <th data-field=\"Produits\"> Produits </th>
                                                    <th data-field=\"Categorie\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Stock debut\">Stock début du mois</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock du mois </th>
                                                     
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
                                                                        <td> {{ init[key][0] }} </td>
                                                                {% elseif key2 =='debut' %}
                                                                    <td> {{ beginCurrent[key][0] }}</td>
                                                                {% elseif key2 =='entrer' %}
                                                                    <td> {{ entrer[key][0]  }} </td> 
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
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            {{ app.user.prenom }}
                                        <p> <a href=\"{{ path('impression_mensuel',{mois : val}) }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

{% endblock %}

", "periode/mensuel.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\periode\\mensuel.html.twig");
    }
}
