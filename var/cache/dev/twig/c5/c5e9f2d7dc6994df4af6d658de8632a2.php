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
class __TwigTemplate_9e47415ff35f371bf2214b38c1002837 extends \Twig\Template
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
        echo "    ";
        // line 6
        echo "     ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 7
        echo "    ";
        // line 8
        echo "
    <main>
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2 class=\"fw-normal text-danger text-center\"> Etat de stocks: <span style=\"color:#498000;\"> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 17, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</span></h2>
                                    <div class=\"q-display p-3\">
                                        <span class=\"btn btn-danger btn-sm disabled\">Selectionner les : </span>
                                        <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
                                        <div class=\"modal\" id=\"myModal\">
                                            ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
            echo "
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\"> Nom de produit </h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                    </div>
                                                    ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
            echo "
                                                    <div class=\"modal-body\">
                                                        <div class=\"form-group\">
                                                            <label for=\"select\">Nom de produit</label>
                                                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "select", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                            <div class=\"form-group\">
                                                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "submit", [], "any", false, false, false, 38), 'row', ["label" => "Selectionner"]);
            echo "
                                                            </div>
                                                    </div>
                                                    ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <!--*****************************************************************************************************-->
                                        <form action=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\" class=\"float-end\">
                                            <label for=\"ldate\">Preciser le mois :</label>
                                            <input type=\"month\" id=\"ldate\" name=\"ldate\">
                                            <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
                                        </form>
                                                
                                        ";
            // line 52
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 52, $this->source); })()) == true)) {
                // line 53
                echo "                                            <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 53, $this->source); })()), 0, [], "any", false, false, false, 53), "Produits", [], "any", false, false, false, 53), "html", null, true);
                echo "</em></h4>
                                        ";
            }
            // line 55
            echo "                                        <!-- **********************************************************************************-->
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                        </div>
                                    </div>
                                    <form action=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\" class=\"mb-3\">
                                        <label for=\"year\">Année  :</label>
                                            <select name=\"year\" id=\"year\">
                                                ";
            // line 65
            $context["value"] = 2000;
            // line 66
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range( -30, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()) + $context["i"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()) + $context["i"]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                            </select>
                                        <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\">
                                    </form> 

                                    <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" id=\"myTableEtat\" >
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    ";
            // line 78
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 78, $this->source); })()) == false)) {
                // line 79
                echo "                                                        <th data-field=\"Categorie\"> Produit </th>
                                                    ";
            }
            // line 81
            echo "                                                    <th data-field=\"produit\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id=\"table\">
                                            ";
            // line 91
            $context["sumValueInit"] = 0;
            // line 92
            echo "                                            ";
            $context["sumValueEnter"] = 0;
            // line 93
            echo "                                            ";
            $context["sumValueOut"] = 0;
            // line 94
            echo "                                            ";
            $context["sumValueCurrent"] = 0;
            // line 95
            echo "                                            ";
            $context["valeur"] = 0;
            // line 96
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 97
                echo "                                                    <tr>
                                                        ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                            
                                                            ";
                    // line 100
                    if (($context["key2"] == "ordre")) {
                        // line 101
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                            ";
                    } elseif ((                    // line 102
$context["key2"] == "NomDeCategorie")) {
                        // line 103
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                                            ";
                    } elseif ((                    // line 104
$context["key2"] == "produit")) {
                        // line 105
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                            ";
                    } elseif ((                    // line 106
$context["key2"] == "valeurFaciale")) {
                        // line 107
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                            ";
                    } elseif ((                    // line 108
$context["key2"] == "initiale")) {
                        // line 109
                        echo "                                                                ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 109, $this->source); })()), $context["key"], [], "array", false, false, false, 109), 0, [], "array", false, false, false, 109);
                        // line 110
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 110, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
                                                                ";
                        // line 111
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 111, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 111, $this->source); })()));
                        echo " 
                                                            ";
                    } elseif ((                    // line 112
$context["key2"] == "entrer")) {
                        // line 113
                        echo "                                                                ";
                        $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 113, $this->source); })()), $context["key"], [], "array", false, false, false, 113), 0, [], "array", false, false, false, 113) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 113, $this->source); })()), $context["key"], [], "array", false, false, false, 113), 0, [], "array", false, false, false, 113));
                        // line 114
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 114, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                                                ";
                        // line 115
                        $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 115, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 115, $this->source); })()));
                        // line 116
                        echo "                                                            ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 117
                        echo "                                                                ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 117, $this->source); })()))) {
                            // line 118
                            echo "                                                                    ";
                            $context["valeur"] = 0;
                            // line 119
                            echo "                                                                    <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 119, $this->source); })()), 0, ",", " "), "html", null, true);
                            echo " </td> 
                                                                    ";
                            // line 120
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 120, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 120, $this->source); })()));
                            // line 121
                            echo "                                                                ";
                        } else {
                            // line 122
                            echo "                                                                    ";
                            $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 122, $this->source); })()), $context["key"], [], "array", false, false, false, 122), 0, [], "array", false, false, false, 122));
                            // line 123
                            echo "                                                                    ";
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 123, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 123, $this->source); })()));
                            // line 124
                            echo "                                                                    <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 124, $this->source); })()), 0, ",", " "), "html", null, true);
                            echo " </td>
                                                                ";
                        }
                        // line 125
                        echo " 
                                                            ";
                    } elseif ((                    // line 126
$context["key2"] == "actuelle")) {
                        // line 127
                        echo "                                                                ";
                        $context["valeur"] = $context["value2"];
                        // line 128
                        echo "                                                                ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 128, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 128, $this->source); })()));
                        // line 129
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 129, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>                                                                                                                   
                                                            ";
                    }
                    // line 131
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                                    <tr>
                                                        ";
            // line 135
            $context["valeur"] = 0;
            // line 136
            echo "                                                        ";
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 136, $this->source); })()) == true)) {
                // line 137
                echo "                                                            <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        ";
            } else {
                // line 139
                echo "                                                        <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        ";
            }
            // line 141
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 142
                echo "                                                                    ";
                if (($context["key"] == "initiale")) {
                    // line 143
                    echo "                                                                        ";
                    $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 143, $this->source); })());
                    // line 144
                    echo "                                                                        <th id=\"sumInit\">  ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 144, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 145
$context["key"] == "entrer")) {
                    // line 146
                    echo "                                                                        <th id=\"sumEnter\"> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 146, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 147
$context["key"] == "sortie")) {
                    echo " 
                                                                        <th>";
                    // line 148
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 148, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 149
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                                                        <th> ";
                    // line 150
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 150, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                }
                // line 152
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <p> Antananarivo le ,";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>
                                            <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            
                                            ";
            // line 162
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 162, $this->source); })()) == false)) {
                // line 163
                echo "                                                <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 163, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 163, $this->source); })())]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
                                            ";
            } else {
                // line 165
                echo "                                                <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_select", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 165, $this->source); })()), 0, [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 165, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 165, $this->source); })())]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                            ";
            }
            // line 167
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 176
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 179
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 182
        echo "    </main>
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
        return array (  493 => 182,  487 => 179,  482 => 176,  471 => 167,  465 => 165,  459 => 163,  457 => 162,  451 => 159,  443 => 153,  437 => 152,  432 => 150,  428 => 149,  424 => 148,  420 => 147,  415 => 146,  413 => 145,  408 => 144,  405 => 143,  402 => 142,  397 => 141,  393 => 139,  389 => 137,  386 => 136,  384 => 135,  381 => 134,  374 => 132,  368 => 131,  362 => 129,  359 => 128,  356 => 127,  354 => 126,  351 => 125,  345 => 124,  342 => 123,  339 => 122,  336 => 121,  334 => 120,  329 => 119,  326 => 118,  323 => 117,  320 => 116,  318 => 115,  313 => 114,  310 => 113,  308 => 112,  304 => 111,  299 => 110,  296 => 109,  294 => 108,  289 => 107,  287 => 106,  282 => 105,  280 => 104,  275 => 103,  273 => 102,  268 => 101,  266 => 100,  259 => 98,  256 => 97,  251 => 96,  248 => 95,  245 => 94,  242 => 93,  239 => 92,  237 => 91,  225 => 81,  221 => 79,  219 => 78,  208 => 69,  197 => 67,  192 => 66,  190 => 65,  184 => 62,  175 => 55,  169 => 53,  167 => 52,  158 => 46,  150 => 41,  144 => 38,  136 => 33,  129 => 29,  119 => 22,  109 => 17,  101 => 11,  99 => 10,  95 => 8,  93 => 7,  90 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de stock | Paositra malagasy! {% endblock %}
{% block body %}
    {# ##################################    Dictionaire de l'annee ##################################################}
     {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'Décembre' } %}
    {##################################################################################################################}

    <main>
        {% if app.user %}
            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2 class=\"fw-normal text-danger text-center\"> Etat de stocks: <span style=\"color:#498000;\"> {{ mois[month] }} {{ year }}</span></h2>
                                    <div class=\"q-display p-3\">
                                        <span class=\"btn btn-danger btn-sm disabled\">Selectionner les : </span>
                                        <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
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
                                        <!--*****************************************************************************************************-->
                                        <form action=\"{{ path('etat_de_stock') }}\" class=\"float-end\">
                                            <label for=\"ldate\">Preciser le mois :</label>
                                            <input type=\"month\" id=\"ldate\" name=\"ldate\">
                                            <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
                                        </form>
                                                
                                        {% if issubmitted == true %}
                                            <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  {{ init.0.Produits }}</em></h4>
                                        {% endif %}
                                        <!-- **********************************************************************************-->
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                        </div>
                                    </div>
                                    <form action=\"{{ path('etat_de_stock') }}\" class=\"mb-3\">
                                        <label for=\"year\">Année  :</label>
                                            <select name=\"year\" id=\"year\">
                                                {% set value = 2000 %}
                                            {% for i in -30..100 %}
                                                <option value=\"{{ value + i}}\">{{ value + i }}</option>
                                            {% endfor %}
                                            </select>
                                        <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\">
                                    </form> 

                                    <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" id=\"myTableEtat\" >
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
                                            <tbody id=\"table\">
                                            {% set sumValueInit = 0 %}
                                            {% set sumValueEnter = 0 %}
                                            {% set sumValueOut = 0 %}
                                            {% set sumValueCurrent = 0 %}
                                            {% set valeur = 0 %}
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
                                                                {% set valeur = initial[key][0] %}
                                                                <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                                                {% set sumValueInit = sumValueInit + valeur %} 
                                                            {% elseif key2 =='entrer' %}
                                                                {% set valeur = entree[key][0] - initial[key][0] %}
                                                                <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                                                {% set sumValueEnter = sumValueEnter + valeur %}
                                                            {% elseif key2 =='sortie' %}
                                                                {% if out is empty %}
                                                                    {% set valeur = 0 %}
                                                                    <td> {{ valeur|number_format(0,',', ' ') }} </td> 
                                                                    {% set sumValueOut = sumValueOut + valeur %}
                                                                {% else %}
                                                                    {% set valeur = out[key][0]|abs %}
                                                                    {% set sumValueOut = sumValueOut + valeur %}
                                                                    <td> {{ valeur|number_format(0,',', ' ') }} </td>
                                                                {% endif %} 
                                                            {% elseif key2 =='actuelle' %}
                                                                {% set valeur = value2 %}
                                                                {% set sumValueCurrent = sumValueCurrent + valeur %}
                                                                <td> {{ valeur|number_format(0,',', ' ') }} </td>                                                                                                                   
                                                            {% endif %}
                                                        {% endfor %}
                                                    </tr>
                                                {% endfor %}
                                                    <tr>
                                                        {% set valeur = 0 %}
                                                        {% if issubmitted == true %}
                                                            <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        {% else %}
                                                        <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        {% endif %}
                                                        {% for key, value in total %}
                                                                    {% if key == \"initiale\"  %}
                                                                        {% set valeur = sumValueInit %}
                                                                        <th id=\"sumInit\">  {{ valeur|number_format(0,',', ' ') }} </th>
                                                                    {% elseif key == \"entrer\" %}
                                                                        <th id=\"sumEnter\"> {{ sumValueEnter|number_format(0,',', ' ') }} </th>
                                                                    {% elseif key == \"sortie\"%} 
                                                                        <th>{{ sumValueOut|number_format(0,',', ' ') }} </th>
                                                                    {% elseif key == \"actuelle\" %}                                                                            
                                                                        <th> {{ sumValueCurrent|number_format(0,',', ' ') }} </th>
                                                                    {% endif %}
                                                        {% endfor %}
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>
                                            <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            
                                            {% if issubmitted == false %}
                                                <p> <a href=\"{{ path('impression_product',{mois: month,annee: year}) }}\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
                                            {% else %}
                                                <p> <a href=\"{{ path('impression_select',{id: init.0.id,mois: month,annee: year}) }}\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                            {% endif %}
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
                misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
            </p>
        {% endif %}
    </main>
{% endblock %}

", "etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\etat\\etat_de_stock.html.twig");
    }
}
