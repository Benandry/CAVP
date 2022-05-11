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

/* periode/annuel.html.twig */
class __TwigTemplate_d5e07abae7e0a49c762e7569569270ba extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "periode/annuel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "periode/annuel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "periode/annuel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Etat de stock par mois ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div>
    <h5> Etat de stock par mois</h5>
     <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h3 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stock au année : <span style=\"color:#498000;\">2022</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select");
        echo "\" style=\"color: green;text-decoration: none;\"> selectionner le produits </a> 
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
                                                    <th data-field=\"Categorie\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 47
            echo "                                                      <tr>
                                                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                                            
                                                            ";
                // line 50
                if (($context["key2"] == "ordre")) {
                    // line 51
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                                            ";
                } elseif ((                // line 52
$context["key2"] == "NomDeCategorie")) {
                    // line 53
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 54
$context["key2"] == "valeurFaciale")) {
                    // line 55
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 56
$context["key2"] == "initiale")) {
                    // line 57
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 57, $this->source); })()), $context["key"], [], "array", false, false, false, 57), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 58
$context["key2"] == "entrer")) {
                    // line 59
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59)), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 60
$context["key2"] == "sortie")) {
                    // line 61
                    echo "                                                                ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 61, $this->source); })()))) {
                        // line 62
                        echo "                                                                    <td> 0 </td> 
                                                                ";
                    } else {
                        // line 64
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 64, $this->source); })()), $context["key"], [], "array", false, false, false, 64), "html", null, true);
                        echo " </td>
                                                                ";
                    }
                    // line 65
                    echo " 
                                                            ";
                } elseif ((                // line 66
$context["key2"] == "actuelle")) {
                    // line 67
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                    
                                                            ";
                }
                // line 69
                echo "                                                            
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                                            </tbody>
                                        </table>
                                   </div>
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "prenom", [], "any", false, false, false, 83), "html", null, true);
        echo "
                                        <p> <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_etat");
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
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "periode/annuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 84,  243 => 83,  237 => 80,  228 => 73,  221 => 71,  214 => 69,  208 => 67,  206 => 66,  203 => 65,  197 => 64,  193 => 62,  190 => 61,  188 => 60,  183 => 59,  181 => 58,  176 => 57,  174 => 56,  169 => 55,  167 => 54,  162 => 53,  160 => 52,  155 => 51,  153 => 50,  146 => 48,  143 => 47,  139 => 46,  116 => 26,  112 => 25,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de stock par mois {% endblock %}

{% block body %}


<div>
    <h5> Etat de stock par mois</h5>
     <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h3 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stock au année : <span style=\"color:#498000;\">2022</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                <a href=\"{{ path('select')}}\" style=\"color: green;text-decoration: none;\"> selectionner le produits </a> 
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
                                                    <th data-field=\"Categorie\"> Categorie </th>
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
                                                                <td> {{ initial[key] }} </td> 
                                                            {% elseif key2 =='entrer' %}
                                                                <td> {{ entree[key] - initial[key] }} </td> 
                                                            {% elseif key2 =='sortie' %}
                                                                {% if out is empty %}
                                                                    <td> 0 </td> 
                                                                {% else %}
                                                                    <td> {{ out[key] }} </td>
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
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            {{ app.user.prenom }}
                                        <p> <a href=\"{{ path('download_etat') }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>                                        </p>
                                    </div>
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
", "periode/annuel.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\periode\\annuel.html.twig");
    }
}
