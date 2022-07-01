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
        echo "    <main>
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                <h2 class=\"fw-bolder\"> Situation du stocks: <span style=\"color:#498000;\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</span></h2>
                                    <div class=\"q-display p-3\">
                                            <span class=\"btn btn-danger btn-sm disabled\">Selectionner les : </span>
                                            <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
                                            <div class=\"modal\" id=\"myModal\">
                                                ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
            echo "
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\"> Nom de produit </h5>
                                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                        </div>
                                                        ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
            echo "
                                                        <div class=\"modal-body\">
                                                            <div class=\"form-group\">
                                                                <label for=\"select\">Nom de produit</label>
                                                                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "select", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                                <div class=\"form-group\">
                                                                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "submit", [], "any", false, false, false, 34), 'row', ["label" => "Selectionner"]);
            echo "
                                                                </div>
                                                        </div>
                                                        ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
            echo "
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- **************************************************** -->
                                            <form action=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\">
                                                <label for=\"year\">annee  :</label>
                                                    <select name=\"year\" id=\"year\">
                                                     ";
            // line 46
            $context["value"] = 2000;
            // line 47
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "                                                        ";
                $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 48, $this->source); })()) + $context["i"]);
                // line 49
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                                    </select>
                                                <input type=\"submit\" value=\"Submit\">
                                            </form>
                                            <!--*****************************************************************************************************-->
                                            <form action=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\" class=\"float-end\">
                                                <label for=\"ldate\">Preciser le mois :</label>
                                                <input type=\"month\" id=\"ldate\" name=\"ldate\">
                                                <input type=\"submit\" value=\"Submit\">
                                            </form>
                                                  
                                            ";
            // line 61
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 61, $this->source); })()) == true)) {
                // line 62
                echo "                                                <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 62, $this->source); })()), 0, [], "any", false, false, false, 62), "Produits", [], "any", false, false, false, 62), "html", null, true);
                echo "</em></h4>
                                            ";
            }
            // line 64
            echo "                                            <!-- **********************************************************************************-->
                                        </div>
                                        <div class=\"d-flex flex-row-reverse bd-highlight\">
                                            <div class=\"p-2 bd-highlight\">
                                                <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                            </div>
                                        </div>

                                        <div class=\"table responsive-xxl\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"myTableEtat\" >
                                                    <thead>
                                                        <tr class=\"table-danger\">
                                                            <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                            ";
            // line 77
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 77, $this->source); })()) == false)) {
                // line 78
                echo "                                                                <th data-field=\"Categorie\"> Produit </th>
                                                            ";
            }
            // line 80
            echo "                                                            <th data-field=\"produit\"> Categorie </th>
                                                            <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                            <th data-field=\"Stock initial\">Stock initial</th>
                                                            <th data-field=\"Entrée\">Entrée</th>
                                                            <th data-field=\"Sortie\">Sortie</th>
                                                            <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody id=\"table\">
                                                    ";
            // line 90
            $context["sumValueInit"] = 0;
            // line 91
            echo "                                                    ";
            $context["sumValueEnter"] = 0;
            // line 92
            echo "                                                    ";
            $context["sumValueOut"] = 0;
            // line 93
            echo "                                                    ";
            $context["sumValueCurrent"] = 0;
            // line 94
            echo "                                                    ";
            $context["valeur"] = 0;
            // line 95
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 96
                echo "                                                            <tr>
                                                                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                                    
                                                                    ";
                    // line 99
                    if (($context["key2"] == "ordre")) {
                        // line 100
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                                    ";
                    } elseif ((                    // line 101
$context["key2"] == "NomDeCategorie")) {
                        // line 102
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                                                    ";
                    } elseif ((                    // line 103
$context["key2"] == "produit")) {
                        // line 104
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                    ";
                    } elseif ((                    // line 105
$context["key2"] == "valeurFaciale")) {
                        // line 106
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                    ";
                    } elseif ((                    // line 107
$context["key2"] == "initiale")) {
                        // line 108
                        echo "                                                                        ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 108, $this->source); })()), $context["key"], [], "array", false, false, false, 108), 0, [], "array", false, false, false, 108);
                        // line 109
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 109, $this->source); })()), "html", null, true);
                        echo " </td>
                                                                        ";
                        // line 110
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 110, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 110, $this->source); })()));
                        echo " 
                                                                    ";
                    } elseif ((                    // line 111
$context["key2"] == "entrer")) {
                        // line 112
                        echo "                                                                        ";
                        $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 112, $this->source); })()), $context["key"], [], "array", false, false, false, 112), 0, [], "array", false, false, false, 112) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 112, $this->source); })()), $context["key"], [], "array", false, false, false, 112), 0, [], "array", false, false, false, 112));
                        // line 113
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 113, $this->source); })()), "html", null, true);
                        echo " </td> 
                                                                        ";
                        // line 114
                        $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 114, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 114, $this->source); })()));
                        // line 115
                        echo "                                                                    ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 116
                        echo "                                                                        ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 116, $this->source); })()))) {
                            // line 117
                            echo "                                                                            ";
                            $context["valeur"] = 0;
                            // line 118
                            echo "                                                                            <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 118, $this->source); })()), "html", null, true);
                            echo " </td> 
                                                                            ";
                            // line 119
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 119, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 119, $this->source); })()));
                            // line 120
                            echo "                                                                        ";
                        } else {
                            // line 121
                            echo "                                                                            ";
                            $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 121, $this->source); })()), $context["key"], [], "array", false, false, false, 121), 0, [], "array", false, false, false, 121));
                            // line 122
                            echo "                                                                            ";
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 122, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 122, $this->source); })()));
                            // line 123
                            echo "                                                                            <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 123, $this->source); })()), "html", null, true);
                            echo " </td>
                                                                        ";
                        }
                        // line 124
                        echo " 
                                                                    ";
                    } elseif ((                    // line 125
$context["key2"] == "actuelle")) {
                        // line 126
                        echo "                                                                        ";
                        $context["valeur"] = $context["value2"];
                        // line 127
                        echo "                                                                        ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 127, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 127, $this->source); })()));
                        // line 128
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 128, $this->source); })()), "html", null, true);
                        echo " </td>                                                                                                                   
                                                                    ";
                    }
                    // line 130
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                                                            <tr>
                                                                ";
            // line 134
            $context["valeur"] = 0;
            // line 135
            echo "                                                                ";
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 135, $this->source); })()) == true)) {
                // line 136
                echo "                                                                    <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                                ";
            } else {
                // line 138
                echo "                                                                <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                                ";
            }
            // line 140
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 141
                echo "                                                                            ";
                if (($context["key"] == "initiale")) {
                    // line 142
                    echo "                                                                                ";
                    $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 142, $this->source); })());
                    // line 143
                    echo "                                                                                <th>  ";
                    echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 143, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 144
$context["key"] == "entrer")) {
                    // line 145
                    echo "                                                                                <th> ";
                    echo twig_escape_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 145, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 146
$context["key"] == "sortie")) {
                    echo " 
                                                                                <th>";
                    // line 147
                    echo twig_escape_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 147, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 148
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                                                                <th> ";
                    // line 149
                    echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 149, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                }
                // line 151
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                                            </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        </p>
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
                echo "                                                        <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 163, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 163, $this->source); })())]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
                                                    ";
            } else {
                // line 165
                echo "                                                        <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_select", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 165, $this->source); })()), 0, [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 165, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 165, $this->source); })())]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                                    ";
            }
            // line 167
            echo "                                            </div>
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
            // line 177
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 180
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 183
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
        return array (  492 => 183,  486 => 180,  481 => 177,  469 => 167,  463 => 165,  457 => 163,  455 => 162,  449 => 159,  440 => 152,  434 => 151,  429 => 149,  425 => 148,  421 => 147,  417 => 146,  412 => 145,  410 => 144,  405 => 143,  402 => 142,  399 => 141,  394 => 140,  390 => 138,  386 => 136,  383 => 135,  381 => 134,  378 => 133,  371 => 131,  365 => 130,  359 => 128,  356 => 127,  353 => 126,  351 => 125,  348 => 124,  342 => 123,  339 => 122,  336 => 121,  333 => 120,  331 => 119,  326 => 118,  323 => 117,  320 => 116,  317 => 115,  315 => 114,  310 => 113,  307 => 112,  305 => 111,  301 => 110,  296 => 109,  293 => 108,  291 => 107,  286 => 106,  284 => 105,  279 => 104,  277 => 103,  272 => 102,  270 => 101,  265 => 100,  263 => 99,  256 => 97,  253 => 96,  248 => 95,  245 => 94,  242 => 93,  239 => 92,  236 => 91,  234 => 90,  222 => 80,  218 => 78,  216 => 77,  201 => 64,  195 => 62,  193 => 61,  184 => 55,  178 => 51,  167 => 49,  164 => 48,  159 => 47,  157 => 46,  151 => 43,  142 => 37,  136 => 34,  128 => 29,  121 => 25,  111 => 18,  101 => 13,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etat de stock | Paositra malagasy! {% endblock %}
{% block body %}
    <main>
        {% if app.user %}
            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                <h2 class=\"fw-bolder\"> Situation du stocks: <span style=\"color:#498000;\">{{ month }}/{{ year }}</span></h2>
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

                                            <!-- **************************************************** -->
                                            <form action=\"{{ path('etat_de_stock') }}\">
                                                <label for=\"year\">annee  :</label>
                                                    <select name=\"year\" id=\"year\">
                                                     {% set value = 2000 %}
                                                    {% for i in range(0, 99) %}
                                                        {% set value = value + i %}
                                                        <option value=\"{{ i }}\">{{ value }}</option>
                                                    {% endfor %}
                                                    </select>
                                                <input type=\"submit\" value=\"Submit\">
                                            </form>
                                            <!--*****************************************************************************************************-->
                                            <form action=\"{{ path('etat_de_stock') }}\" class=\"float-end\">
                                                <label for=\"ldate\">Preciser le mois :</label>
                                                <input type=\"month\" id=\"ldate\" name=\"ldate\">
                                                <input type=\"submit\" value=\"Submit\">
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
                                                                        <td> {{ valeur }} </td>
                                                                        {% set sumValueInit = sumValueInit + valeur %} 
                                                                    {% elseif key2 =='entrer' %}
                                                                        {% set valeur = entree[key][0] - initial[key][0] %}
                                                                        <td> {{ valeur }} </td> 
                                                                        {% set sumValueEnter = sumValueEnter + valeur %}
                                                                    {% elseif key2 =='sortie' %}
                                                                        {% if out is empty %}
                                                                            {% set valeur = 0 %}
                                                                            <td> {{ valeur }} </td> 
                                                                            {% set sumValueOut = sumValueOut + valeur %}
                                                                        {% else %}
                                                                            {% set valeur = out[key][0]|abs %}
                                                                            {% set sumValueOut = sumValueOut + valeur %}
                                                                            <td> {{ valeur }} </td>
                                                                        {% endif %} 
                                                                    {% elseif key2 =='actuelle' %}
                                                                        {% set valeur = value2 %}
                                                                        {% set sumValueCurrent = sumValueCurrent + valeur %}
                                                                        <td> {{ valeur }} </td>                                                                                                                   
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
                                                                                <th>  {{ valeur }} </th>
                                                                            {% elseif key == \"entrer\" %}
                                                                                <th> {{ sumValueEnter }} </th>
                                                                            {% elseif key == \"sortie\"%} 
                                                                                <th>{{ sumValueOut }} </th>
                                                                            {% elseif key == \"actuelle\" %}                                                                            
                                                                                <th> {{ sumValueCurrent }} </th>
                                                                            {% endif %}
                                                                {% endfor %}
                                                            </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        </p>
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
