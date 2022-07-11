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
class __TwigTemplate_2b04163b9fbba2a8ac3120a94640492a extends \Twig\Template
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
        echo "<main>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <h5> Etat de stock par mois</h5>
        <div class=\"row\" >
            <div class=\"col-12\">
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container p-4\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <h3 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stock au année : <span style=\"color:#498000;\">2022</span></p> </h2>
                                <div class=\"q-display p-3\">
                                    <p class=\"d-inline\"> 
                                    <ul class=\"nav\">
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                                <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_mensuel", ["source" => "etat mensuel"]);
            echo "\">Mensuel</a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 24
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
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 45
                echo "                                                        <tr>
                                                            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                                
                                                                ";
                    // line 48
                    if (($context["key2"] == "ordre")) {
                        // line 49
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                                ";
                    } elseif ((                    // line 50
$context["key2"] == "NomDeCategorie")) {
                        // line 51
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                ";
                    } elseif ((                    // line 52
$context["key2"] == "valeurFaciale")) {
                        // line 53
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                ";
                    } elseif ((                    // line 54
$context["key2"] == "initiale")) {
                        // line 55
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 55, $this->source); })()), $context["key"], [], "array", false, false, false, 55), "html", null, true);
                        echo " </td> 
                                                                ";
                    } elseif ((                    // line 56
$context["key2"] == "entrer")) {
                        // line 57
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 57, $this->source); })()), $context["key"], [], "array", false, false, false, 57) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 57, $this->source); })()), $context["key"], [], "array", false, false, false, 57)), "html", null, true);
                        echo " </td> 
                                                                ";
                    } elseif ((                    // line 58
$context["key2"] == "sortie")) {
                        // line 59
                        echo "                                                                    ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 59, $this->source); })()))) {
                            // line 60
                            echo "                                                                        <td> 0 </td> 
                                                                    ";
                        } else {
                            // line 62
                            echo "                                                                        <td> ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 62, $this->source); })()), $context["key"], [], "array", false, false, false, 62), "html", null, true);
                            echo " </td>
                                                                    ";
                        }
                        // line 63
                        echo " 
                                                                ";
                    } elseif ((                    // line 64
$context["key2"] == "actuelle")) {
                        // line 65
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>                                                                                                                    
                                                                ";
                    }
                    // line 67
                    echo "                                                                
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
                                                </tbody>
                                            </table>
                                    </div>
                                    </p>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <p> Antananarivo le ,";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>

                                            <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            <p> <a href=\"";
            // line 81
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
    ";
        } else {
            // line 92
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
        </p>
    ";
        }
        // line 98
        echo " 
</main>>
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
        return array (  267 => 98,  261 => 96,  255 => 92,  241 => 81,  235 => 78,  226 => 71,  219 => 69,  212 => 67,  206 => 65,  204 => 64,  201 => 63,  195 => 62,  191 => 60,  188 => 59,  186 => 58,  181 => 57,  179 => 56,  174 => 55,  172 => 54,  167 => 53,  165 => 52,  160 => 51,  158 => 50,  153 => 49,  151 => 48,  144 => 46,  141 => 45,  137 => 44,  114 => 24,  110 => 23,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de stock par mois {% endblock %}

{% block body %}
<main>
    {% if app.user %}
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
    {% else %}
        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"{{ path('app_login') }}\">return to the authentification </a>.
        </p>
    {% endif %} 
</main>>
{% endblock %}
", "periode/annuel.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\periode\\annuel.html.twig");
    }
}
