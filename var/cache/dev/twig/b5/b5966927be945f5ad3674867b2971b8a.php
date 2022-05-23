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

/* etat/etat_de_stock.html.twig */
class __TwigTemplate_60b1ee42ea63c15d31ee0e185bc6cf2b extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/etat_de_stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/etat_de_stock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etat/etat_de_stock.html.twig", 1);
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

        echo "Etat de stock | Paositra malagasy! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                <div id=\"sidebar\">
                                <div class=\"clearfix\">
                                    <span class=\"float-right\" style=\"margin-top: 5px;\">
                                        Selectionner les : <button type=\"button\" class=\"btn btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
                                        <div class=\"modal\" id=\"myModal\">
                                            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                                                <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\"> Nom de produit </h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                    </div>
                                                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                                                    <div class=\"modal-body\">
                                                        <div class=\"form-group\">
                                                                <label for=\"select\">Nom de produit</label>
                                                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "select", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                            <div class=\"form-group\">
                                                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "submit", [], "any", false, false, false, 35), 'row', ["label" => "Selectionner"]);
        echo "
                                                        </div>
                                                    </div>
                                                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            ";
        // line 43
        if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 43, $this->source); })()) == true)) {
            // line 44
            echo "                                                <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 44, $this->source); })()), 0, [], "any", false, false, false, 44), "Produits", [], "any", false, false, false, 44), "html", null, true);
            echo "</em></h4>
                                            ";
        }
        // line 46
        echo "                                        <ul class=\"nav\">
                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                                    <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                                    <a class=\"dropdown-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_mensuel", ["source" => "etat mensuel"]);
        echo "\">Mensuel</a>
                                                    <a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_annuel", ["source" => "etat annuel"]);
        echo "\">Annuel</a>
                                                </div>
                                            </li>
                                            <li>
                                             ";
        // line 56
        if (((isset($context["isDate"]) || array_key_exists("isDate", $context) ? $context["isDate"] : (function () { throw new RuntimeError('Variable "isDate" does not exist.', 56, $this->source); })()) == true)) {
            // line 57
            echo "                                                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 57, $this->source); })()), 'form_start');
            echo "
                                                     ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 58, $this->source); })()), 'widget');
            echo "
                                                ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 59, $this->source); })()), 'form_end');
            echo "
                                             ";
        }
        // line 61
        echo "                                            </li>
                                        </ul>
                                    </span> 
                                </div>                         
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" data-toggle=\"table\" data-search=\"true\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    ";
        // line 70
        if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 70, $this->source); })()) == false)) {
            // line 71
            echo "                                                        <th data-field=\"Categorie\"> Produit </th>
                                                    ";
        }
        // line 73
        echo "                                                    <th data-field=\"produit\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 84
            echo "                                                      <tr>
                                                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                                            
                                                            ";
                // line 87
                if (($context["key2"] == "ordre")) {
                    // line 88
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                                            ";
                } elseif ((                // line 89
$context["key2"] == "NomDeCategorie")) {
                    // line 90
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                                            ";
                } elseif ((                // line 91
$context["key2"] == "produit")) {
                    // line 92
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 93
$context["key2"] == "valeurFaciale")) {
                    // line 94
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 95
$context["key2"] == "initiale")) {
                    // line 96
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 96, $this->source); })()), $context["key"], [], "array", false, false, false, 96), 0, [], "array", false, false, false, 96), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 97
$context["key2"] == "entrer")) {
                    // line 98
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 98, $this->source); })()), $context["key"], [], "array", false, false, false, 98), 0, [], "array", false, false, false, 98) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 98, $this->source); })()), $context["key"], [], "array", false, false, false, 98), 0, [], "array", false, false, false, 98)), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 99
$context["key2"] == "sortie")) {
                    // line 100
                    echo "                                                                ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 100, $this->source); })()))) {
                        // line 101
                        echo "                                                                    <td> 0 </td> 
                                                                ";
                    } else {
                        // line 103
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 103, $this->source); })()), $context["key"], [], "array", false, false, false, 103), 0, [], "array", false, false, false, 103), "html", null, true);
                        echo " </td>
                                                                ";
                    }
                    // line 104
                    echo " 
                                                            ";
                } elseif ((                // line 105
$context["key2"] == "actuelle")) {
                    // line 106
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                                            ";
                }
                // line 108
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                            </tbody>
                                        </table>
                                   </div>
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "prenom", [], "any", false, false, false, 120), "html", null, true);
        echo "
                                            ";
        // line 121
        if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 121, $this->source); })()) == false)) {
            // line 122
            echo "                                                <p> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product");
            echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier generale</button></a></p>
                                            ";
        } else {
            // line 124
            echo "                                                <p> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_select", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 124, $this->source); })()), 0, [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                            ";
        }
        // line 126
        echo "                                    </div>
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
        return "etat/etat_de_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 126,  338 => 124,  332 => 122,  330 => 121,  326 => 120,  320 => 117,  312 => 111,  305 => 109,  299 => 108,  293 => 106,  291 => 105,  288 => 104,  282 => 103,  278 => 101,  275 => 100,  273 => 99,  268 => 98,  266 => 97,  261 => 96,  259 => 95,  254 => 94,  252 => 93,  247 => 92,  245 => 91,  240 => 90,  238 => 89,  233 => 88,  231 => 87,  224 => 85,  221 => 84,  217 => 83,  205 => 73,  201 => 71,  199 => 70,  188 => 61,  183 => 59,  179 => 58,  174 => 57,  172 => 56,  165 => 52,  161 => 51,  154 => 46,  148 => 44,  146 => 43,  138 => 38,  132 => 35,  124 => 30,  117 => 26,  107 => 19,  96 => 11,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de stock | Paositra malagasy! {% endblock %}
{% block body %}
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\">{{ 'now' |format_date(locale='fr') }}</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">
                                <div id=\"sidebar\">
                                <div class=\"clearfix\">
                                    <span class=\"float-right\" style=\"margin-top: 5px;\">
                                        Selectionner les : <button type=\"button\" class=\"btn btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
                                        <div class=\"modal\" id=\"myModal\">
                                            {{ form_start(form) }}
                                                <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\"> Nom de produit </h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                    </div>
                                                    {{ form_start(form) }}
                                                    <div class=\"modal-body\">
                                                        <div class=\"form-group\">
                                                                <label for=\"select\">Nom de produit</label>
                                                                {{ form_widget(form.select, {'attr': {'class': 'form-control'}}) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                            <div class=\"form-group\">
                                                            {{ form_row(form.submit, { 'label': 'Selectionner' }) }}
                                                        </div>
                                                    </div>
                                                    {{ form_end(form) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            {% if issubmitted == true %}
                                                <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>{{ init.0.Produits }}</em></h4>
                                            {% endif %}
                                        <ul class=\"nav\">
                                            <li class=\"nav-item dropdown\">
                                                <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                                    <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('periode_mensuel', {'source':'etat mensuel'}) }}\">Mensuel</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('periode_annuel', {'source':'etat annuel'}) }}\">Annuel</a>
                                                </div>
                                            </li>
                                            <li>
                                             {% if isDate == true %}
                                                {{ form_start(formD) }}
                                                     {{ form_widget(formD) }}
                                                {{ form_end(formD) }}
                                             {% endif %}
                                            </li>
                                        </ul>
                                    </span> 
                                </div>                         
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" data-toggle=\"table\" data-search=\"true\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    {% if issubmitted == false %}
                                                        <th data-field=\"Categorie\"> Produit </th>
                                                    {% endif %}
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
                                                            {% elseif key2 =='produit' %}
                                                                <td> {{ value2 }} </td>
                                                            {% elseif key2 =='valeurFaciale' %}
                                                                <td> {{ value2 }} </td>
                                                            {% elseif key2 =='initiale' %}
                                                                <td> {{ initial[key][0] }} </td> 
                                                            {% elseif key2 =='entrer' %}
                                                                <td> {{ entree[key][0] - initial[key][0] }} </td> 
                                                            {% elseif key2 =='sortie' %}
                                                                {% if out is empty %}
                                                                    <td> 0 </td> 
                                                                {% else %}
                                                                    <td> {{ out[key][0] }} </td>
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
                                            {% if issubmitted == false %}
                                                <p> <a href=\"{{ path('impression_product') }}\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier generale</button></a></p>
                                            {% else %}
                                                <p> <a href=\"{{ path('impression_select',{id: init.0.id}) }}\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                            {% endif %}
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

", "etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\etat\\etat_de_stock.html.twig");
    }
}
