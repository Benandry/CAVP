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
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
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
                                            ";
            // line 41
            if (((isset($context["isDate"]) || array_key_exists("isDate", $context) ? $context["isDate"] : (function () { throw new RuntimeError('Variable "isDate" does not exist.', 41, $this->source); })()) == true)) {
                // line 42
                echo "                                                <span class=\"float-end\">
                                                    <span class=\"btn btn-danger btn-sm disabled\">Preciser : </span>
                                                    <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal2\">la date </button>
                                                    <div class=\"modal\" id=\"myModal2\">
                                                        <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\"> Date preciser </h5>
                                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                            </div>
                                                            ";
                // line 52
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 52, $this->source); })()), 'form_start');
                echo "
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"select\">Date </label>
                                                                    ";
                // line 56
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 56, $this->source); })()), "dateP", [], "any", false, false, false, 56), 'widget', ["label" => "Date "]);
                echo "
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                    <div class=\"form-group\">
                                                                        ";
                // line 61
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 61, $this->source); })()), "preciser", [], "any", false, false, false, 61), 'row', ["label" => "preciser"]);
                echo "
                                                                    </div>
                                                            </div>
                                                            ";
                // line 64
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formD"]) || array_key_exists("formD", $context) ? $context["formD"] : (function () { throw new RuntimeError('Variable "formD" does not exist.', 64, $this->source); })()), 'form_end');
                echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                            ";
            }
            // line 69
            echo "   
                                            ";
            // line 70
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 70, $this->source); })()) == true)) {
                // line 71
                echo "                                                <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 71, $this->source); })()), 0, [], "any", false, false, false, 71), "Produits", [], "any", false, false, false, 71), "html", null, true);
                echo "</em></h4>
                                            ";
            }
            // line 73
            echo "                                            <!--*****************************************************************************************************-->
                                            <span class=\"text-center\">
                                                <div class=\"dropdown\">
                                                    <a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        Etat par 
                                                    </a>

                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
            echo "\">Actuel</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_mensuel", ["source" => "etat mensuel"]);
            echo "\">Mensuel</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_annuel", ["source" => "etat annuel"]);
            echo "\">Annuel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>

                                            <!-- **********************************************************************************-->
                                        </div>
                                        <div class=\"d-flex flex-row-reverse bd-highlight\">
                                            <div class=\"p-2 bd-highlight\">
                                                <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                            </div>
                                        </div>

                                        <div class=\"table responsive-xxl\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"myTable\" >
                                                    <thead>
                                                        <tr class=\"table-danger\">
                                                            <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                            ";
            // line 107
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 107, $this->source); })()) == false)) {
                // line 108
                echo "                                                                <th data-field=\"Categorie\"> Produit </th>
                                                            ";
            }
            // line 110
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
            // line 120
            $context["sumValueInit"] = 0;
            // line 121
            echo "                                                    ";
            $context["sumValueEnter"] = 0;
            // line 122
            echo "                                                    ";
            $context["sumValueOut"] = 0;
            // line 123
            echo "                                                    ";
            $context["sumValueCurrent"] = 0;
            // line 124
            echo "                                                    ";
            $context["valeur"] = 0;
            // line 125
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 126
                echo "                                                            <tr>
                                                                ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                                    
                                                                    ";
                    // line 129
                    if (($context["key2"] == "ordre")) {
                        // line 130
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                                    ";
                    } elseif ((                    // line 131
$context["key2"] == "NomDeCategorie")) {
                        // line 132
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                                                    ";
                    } elseif ((                    // line 133
$context["key2"] == "produit")) {
                        // line 134
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                    ";
                    } elseif ((                    // line 135
$context["key2"] == "valeurFaciale")) {
                        // line 136
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                    ";
                    } elseif ((                    // line 137
$context["key2"] == "initiale")) {
                        // line 138
                        echo "                                                                        ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 138, $this->source); })()), $context["key"], [], "array", false, false, false, 138), 0, [], "array", false, false, false, 138);
                        // line 139
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 139, $this->source); })()), "html", null, true);
                        echo " </td>
                                                                        ";
                        // line 140
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 140, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 140, $this->source); })()));
                        echo " 
                                                                    ";
                    } elseif ((                    // line 141
$context["key2"] == "entrer")) {
                        // line 142
                        echo "                                                                        ";
                        $context["valeur"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 142, $this->source); })()), $context["key"], [], "array", false, false, false, 142), 0, [], "array", false, false, false, 142) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 142, $this->source); })()), $context["key"], [], "array", false, false, false, 142), 0, [], "array", false, false, false, 142));
                        // line 143
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 143, $this->source); })()), "html", null, true);
                        echo " </td> 
                                                                        ";
                        // line 144
                        $context["sumValueEnter"] = ((isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 144, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 144, $this->source); })()));
                        // line 145
                        echo "                                                                    ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 146
                        echo "                                                                        ";
                        if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 146, $this->source); })()))) {
                            // line 147
                            echo "                                                                            ";
                            $context["valeur"] = 0;
                            // line 148
                            echo "                                                                            <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 148, $this->source); })()), "html", null, true);
                            echo " </td> 
                                                                            ";
                            // line 149
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 149, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 149, $this->source); })()));
                            // line 150
                            echo "                                                                        ";
                        } else {
                            // line 151
                            echo "                                                                            ";
                            $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 151, $this->source); })()), $context["key"], [], "array", false, false, false, 151), 0, [], "array", false, false, false, 151));
                            // line 152
                            echo "                                                                            ";
                            $context["sumValueOut"] = ((isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 152, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 152, $this->source); })()));
                            // line 153
                            echo "                                                                            <td> ";
                            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 153, $this->source); })()), "html", null, true);
                            echo " </td>
                                                                        ";
                        }
                        // line 154
                        echo " 
                                                                    ";
                    } elseif ((                    // line 155
$context["key2"] == "actuelle")) {
                        // line 156
                        echo "                                                                        ";
                        $context["valeur"] = $context["value2"];
                        // line 157
                        echo "                                                                        ";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 157, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 157, $this->source); })()));
                        // line 158
                        echo "                                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 158, $this->source); })()), "html", null, true);
                        echo " </td>                                                                                                                   
                                                                    ";
                    }
                    // line 160
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                                                            <tr>
                                                                ";
            // line 164
            $context["valeur"] = 0;
            // line 165
            echo "                                                                ";
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 165, $this->source); })()) == true)) {
                // line 166
                echo "                                                                    <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                                ";
            } else {
                // line 168
                echo "                                                                <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                                ";
            }
            // line 170
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 170, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 171
                echo "                                                                            ";
                if (($context["key"] == "initiale")) {
                    // line 172
                    echo "                                                                                ";
                    $context["valeur"] = (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 172, $this->source); })());
                    // line 173
                    echo "                                                                                <th>  ";
                    echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 173, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 174
$context["key"] == "entrer")) {
                    // line 175
                    echo "                                                                                <th> ";
                    echo twig_escape_filter($this->env, (isset($context["sumValueEnter"]) || array_key_exists("sumValueEnter", $context) ? $context["sumValueEnter"] : (function () { throw new RuntimeError('Variable "sumValueEnter" does not exist.', 175, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 176
$context["key"] == "sortie")) {
                    echo " 
                                                                                <th>";
                    // line 177
                    echo twig_escape_filter($this->env, (isset($context["sumValueOut"]) || array_key_exists("sumValueOut", $context) ? $context["sumValueOut"] : (function () { throw new RuntimeError('Variable "sumValueOut" does not exist.', 177, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                } elseif ((                // line 178
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                                                                <th> ";
                    // line 179
                    echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 179, $this->source); })()), "html", null, true);
                    echo " </th>
                                                                            ";
                }
                // line 181
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                                            </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        </p>
                                        <div class=\"d-flex flex-row-reverse bd-highlight\">
                                            <div class=\"p-2 bd-highlight\">
                                                <p> Antananarivo le ,";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>
                                                <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                                
                                                    ";
            // line 192
            if (((isset($context["issubmitted"]) || array_key_exists("issubmitted", $context) ? $context["issubmitted"] : (function () { throw new RuntimeError('Variable "issubmitted" does not exist.', 192, $this->source); })()) == false)) {
                // line 193
                echo "                                                        <p> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product");
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
                                                    ";
            } else {
                // line 195
                echo "                                                        <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_select", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 195, $this->source); })()), 0, [], "any", false, false, false, 195), "id", [], "any", false, false, false, 195)]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                                    ";
            }
            // line 197
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
            // line 207
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 210
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 213
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
        return array (  523 => 213,  517 => 210,  512 => 207,  500 => 197,  494 => 195,  488 => 193,  486 => 192,  480 => 189,  471 => 182,  465 => 181,  460 => 179,  456 => 178,  452 => 177,  448 => 176,  443 => 175,  441 => 174,  436 => 173,  433 => 172,  430 => 171,  425 => 170,  421 => 168,  417 => 166,  414 => 165,  412 => 164,  409 => 163,  402 => 161,  396 => 160,  390 => 158,  387 => 157,  384 => 156,  382 => 155,  379 => 154,  373 => 153,  370 => 152,  367 => 151,  364 => 150,  362 => 149,  357 => 148,  354 => 147,  351 => 146,  348 => 145,  346 => 144,  341 => 143,  338 => 142,  336 => 141,  332 => 140,  327 => 139,  324 => 138,  322 => 137,  317 => 136,  315 => 135,  310 => 134,  308 => 133,  303 => 132,  301 => 131,  296 => 130,  294 => 129,  287 => 127,  284 => 126,  279 => 125,  276 => 124,  273 => 123,  270 => 122,  267 => 121,  265 => 120,  253 => 110,  249 => 108,  247 => 107,  225 => 88,  219 => 85,  213 => 82,  202 => 73,  196 => 71,  194 => 70,  191 => 69,  182 => 64,  176 => 61,  168 => 56,  161 => 52,  149 => 42,  147 => 41,  140 => 37,  134 => 34,  126 => 29,  119 => 25,  109 => 18,  101 => 13,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
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
                                <h2 class=\"fw-bolder\"> Situation du stocks: <span style=\"color:#498000;\">{{ 'now' |format_date(locale='fr') }}</span></h2>
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
                                            {% if isDate == true %}
                                                <span class=\"float-end\">
                                                    <span class=\"btn btn-danger btn-sm disabled\">Preciser : </span>
                                                    <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal2\">la date </button>
                                                    <div class=\"modal\" id=\"myModal2\">
                                                        <div class=\"modal-dialog\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\"> Date preciser </h5>
                                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                            </div>
                                                            {{ form_start(formD) }}
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"select\">Date </label>
                                                                    {{ form_widget(formD.dateP,{'label': 'Date '}) }}
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                    <div class=\"form-group\">
                                                                        {{ form_row(formD.preciser, { 'label': 'preciser' }) }}
                                                                    </div>
                                                            </div>
                                                            {{ form_end(formD) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                            {% endif %}   
                                            {% if issubmitted == true %}
                                                <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  {{ init.0.Produits }}</em></h4>
                                            {% endif %}
                                            <!--*****************************************************************************************************-->
                                            <span class=\"text-center\">
                                                <div class=\"dropdown\">
                                                    <a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        Etat par 
                                                    </a>

                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"{{ path('history', {'source':'tous les produits par categorie'}) }}\">Actuel</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"{{ path('periode_mensuel', {'source':'etat mensuel'}) }}\">Mensuel</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"dropdown-item\" href=\"{{ path('periode_annuel', {'source':'etat annuel'}) }}\">Annuel</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>

                                            <!-- **********************************************************************************-->
                                        </div>
                                        <div class=\"d-flex flex-row-reverse bd-highlight\">
                                            <div class=\"p-2 bd-highlight\">
                                                <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                            </div>
                                        </div>

                                        <div class=\"table responsive-xxl\">
                                                <table class=\"table table-striped table-bordered table-hover\" id=\"myTable\" >
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
                                                        <p> <a href=\"{{ path('impression_product') }}\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
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
