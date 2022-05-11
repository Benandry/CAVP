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

/* etat/produits_select.html.twig */
class __TwigTemplate_c1bb6d57713ea9c6c40486b891fe242b extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/produits_select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/produits_select.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etat/produits_select.html.twig", 1);
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

        echo "Produits ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 3, $this->source); })()), 0, [], "any", false, false, false, 3), "Produits", [], "any", false, false, false, 3), "html", null, true);
        echo " | Paositra malagasy! ";
        
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

        // line 8
        $context["ordreValue"] = [];
        echo " 
";
        // line 9
        $context["cleCourantHavingOrdreValue"] = [];
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
            echo " 
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value3"]);
            foreach ($context['_seq'] as $context["key4"] => $context["value4"]) {
                // line 12
                echo "        ";
                if (($context["key4"] == "ordreProd")) {
                    // line 13
                    echo "            ";
                    $context["ordreValue"] = twig_array_merge((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 13, $this->source); })()), [0 => $context["value4"]]);
                    echo " 
        ";
                }
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key4'], $context['value4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
                echo " 
        ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, $context["value3"], "ordreProd", [], "array", false, false, false, 22) == $context["value"])) {
                    // line 23
                    echo "            ";
                    $context["cleCourantHavingOrdreValue"] = twig_array_merge((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 23, $this->source); })()), [0 => $context["key3"]]);
                    echo "                                                                                                          
        ";
                }
                // line 24
                echo "   
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 29
        $context["sortValues"] = [];
        // line 30
        $context["sortOrdres"] = [];
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                // line 33
                echo "            ";
                if (($context["key2"] == "sortie")) {
                    // line 34
                    echo "                ";
                    $context["sortValues"] = twig_array_merge((isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 34, $this->source); })()), [0 => $context["value2"]]);
                    echo " 
            ";
                } elseif ((                // line 35
$context["key2"] == "ordre")) {
                    echo " 
                ";
                    // line 36
                    $context["sortOrdres"] = twig_array_merge((isset($context["sortOrdres"]) || array_key_exists("sortOrdres", $context) ? $context["sortOrdres"] : (function () { throw new RuntimeError('Variable "sortOrdres" does not exist.', 36, $this->source); })()), [0 => $context["value2"]]);
                    echo "                                                                                 
            ";
                }
                // line 38
                echo "             
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 43
        $context["out"] = [];
        // line 44
        $context["k"] = 0;
        // line 45
        if ((twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 45, $this->source); })())) > 0)) {
            // line 46
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 46, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 47
                echo "        ";
                $context["break"] = false;
                // line 48
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 48, $this->source); })()), (twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 48, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 48, $this->source); })())) {
                        echo " 
            ";
                        // line 49
                        if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 49, $this->source); })()), $context["j"], [], "array", false, false, false, 49))) {
                            // line 50
                            echo "                ";
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 50, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 50, $this->source); })()), $context["j"], [], "array", false, false, false, 50)]);
                            echo " 
                ";
                            // line 51
                            if (($context["j"] < (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 51, $this->source); })())) - 1))) {
                                // line 52
                                echo "                    ";
                                $context["k"] = ($context["i"] + 1);
                                // line 53
                                echo "                    ";
                                $context["break"] = true;
                                // line 54
                                echo "                ";
                            }
                            // line 55
                            echo "            ";
                        } else {
                            echo "  
                ";
                            // line 56
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 56, $this->source); })()), [0 => 0]);
                            echo "                                                                                                           
            ";
                        }
                        // line 57
                        echo "  
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 60
        echo "  

";
        // line 64
        $context["initial"] = [];
        // line 65
        $context["entree"] = [];
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 67
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
        ";
                // line 68
                if (($context["key2"] == "initiale")) {
                    // line 69
                    echo "            ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 69, $this->source); })()), $context["key"], [], "array", false, false, false, 69), "initiale", [], "any", false, false, false, 69);
                    // line 70
                    echo "            ";
                    $context["initial"] = twig_array_merge((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 70, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 70, $this->source); })())]);
                    echo "                                                                                                          
        ";
                }
                // line 71
                echo "  
        ";
                // line 72
                if (($context["key2"] == "entrer")) {
                    // line 73
                    echo "            ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 73, $this->source); })()), $context["key"], [], "array", false, false, false, 73), "entrer", [], "any", false, false, false, 73);
                    // line 74
                    echo "            ";
                    $context["entree"] = twig_array_merge((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 74, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 74, $this->source); })())]);
                    echo "                                                                                                          
        ";
                }
                // line 75
                echo " 
        ";
                // line 76
                if (($context["key2"] == "sortie")) {
                    // line 77
                    echo "            ";
                    if (($context["key"] < twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 77, $this->source); })())))) {
                        // line 78
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 78, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
                            // line 79
                            echo "                    ";
                            $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 79, $this->source); })()), 0, [], "array", false, false, false, 79), "sortie", [], "any", false, false, false, 79);
                            // line 80
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "            ";
                    }
                    echo "                                                                                                         
        ";
                }
                // line 83
                echo "     
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "<h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 87, $this->source); })()), 0, [], "any", false, false, false, 87), "Produits", [], "any", false, false, false, 87), "html", null, true);
        echo "</em></h4>  
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">                               
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th scope=\"col\"> Ordre</th>
                                                    <th data-field=\"Categorie\"> Categorie </th>
                                                    <th scope=\"col\">Valeur Faciales</th>
                                                    <th scope=\"col\">Stock initial</th>
                                                    <th scope=\"col\">Entrée</th>
                                                    <th scope=\"col\">Sortie</th>
                                                    <th scope=\"col\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 114
            echo "                                                      <tr>
                                                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                                            
                                                            ";
                // line 117
                if (($context["key2"] == "ordre")) {
                    // line 118
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                                            ";
                } elseif ((                // line 119
$context["key2"] == "NomDeCategorie")) {
                    // line 120
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 121
$context["key2"] == "valeurFaciale")) {
                    // line 122
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 123
$context["key2"] == "initiale")) {
                    // line 124
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 124, $this->source); })()), $context["key"], [], "array", false, false, false, 124), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 125
$context["key2"] == "entrer")) {
                    // line 126
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 126, $this->source); })()), $context["key"], [], "array", false, false, false, 126) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 126, $this->source); })()), $context["key"], [], "array", false, false, false, 126)), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 127
$context["key2"] == "sortie")) {
                    // line 128
                    echo "                                                                ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 128, $this->source); })()))) {
                        // line 129
                        echo "                                                                    <td> 0 </td> 
                                                                ";
                    } else {
                        // line 131
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 131, $this->source); })()), $context["key"], [], "array", false, false, false, 131), "html", null, true);
                        echo " </td>
                                                                ";
                    }
                    // line 132
                    echo " 
                                                            ";
                } elseif ((                // line 133
$context["key2"] == "actuelle")) {
                    // line 134
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                     
                                                            ";
                }
                // line 136
                echo "                                                            
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
                                            </tbody>
                                        </table>
                                   </div>
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "prenom", [], "any", false, false, false, 150), "html", null, true);
        echo "
                                        <p> <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 151, $this->source); })()), 0, [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151)]), "html", null, true);
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
        return "etat/produits_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 151,  495 => 150,  489 => 147,  480 => 140,  473 => 138,  466 => 136,  460 => 134,  458 => 133,  455 => 132,  449 => 131,  445 => 129,  442 => 128,  440 => 127,  435 => 126,  433 => 125,  428 => 124,  426 => 123,  421 => 122,  419 => 121,  414 => 120,  412 => 119,  407 => 118,  405 => 117,  398 => 115,  395 => 114,  391 => 113,  369 => 94,  358 => 87,  347 => 83,  341 => 82,  334 => 80,  331 => 79,  326 => 78,  323 => 77,  321 => 76,  318 => 75,  312 => 74,  309 => 73,  307 => 72,  304 => 71,  298 => 70,  295 => 69,  293 => 68,  286 => 67,  282 => 66,  280 => 65,  278 => 64,  274 => 60,  267 => 59,  259 => 57,  254 => 56,  249 => 55,  246 => 54,  243 => 53,  240 => 52,  238 => 51,  233 => 50,  231 => 49,  223 => 48,  220 => 47,  215 => 46,  213 => 45,  211 => 44,  209 => 43,  206 => 41,  199 => 39,  192 => 38,  187 => 36,  183 => 35,  178 => 34,  175 => 33,  170 => 32,  166 => 31,  164 => 30,  162 => 29,  159 => 27,  148 => 24,  142 => 23,  140 => 22,  133 => 21,  129 => 20,  125 => 17,  115 => 15,  109 => 13,  106 => 12,  102 => 11,  96 => 10,  94 => 9,  90 => 8,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits {{ init.0.Produits }} | Paositra malagasy! {% endblock %}

{% block body %}
{# -------------Traitement de sortie-----------#}
{# ----------- make cle-------------#}
{% set ordreValue = []  %} 
{% set cleCourantHavingOrdreValue = []  %}
{% for key3, value3 in sort %} 
    {% for key4, value4 in value3 %}
        {% if key4 == 'ordreProd' %}
            {% set ordreValue = ordreValue|merge([value4])  %} 
        {% endif %}
    {% endfor %}
{% endfor %}


{# maka ny key(position) mifanaraka amin courant #}
{% for value in ordreValue %}
    {% for key3, value3 in courant %} 
        {% if value3[\"ordreProd\"] == value %}
            {% set cleCourantHavingOrdreValue = cleCourantHavingOrdreValue|merge([key3])  %}                                                                                                          
        {% endif %}   
    {% endfor %}
{% endfor %}

{# mametraka ny value ao am sort #}
{% set sortValues = [] %}
{% set sortOrdres = [] %}
{% for key, value in sort %}
        {% for key2, value2 in value %}
            {% if key2 =='sortie' %}
                {% set sortValues = sortValues|merge([value2])  %} 
            {% elseif key2 =='ordre' %} 
                {% set sortOrdres = sortOrdres|merge([value2])  %}                                                                                 
            {% endif %}
             
        {% endfor %}  
{% endfor %}

{# mametraka ao am out #}
{% set out = [] %}
{% set k = 0 %}
{% if cleCourantHavingOrdreValue|length > 0 %}
    {% for j in range(0, cleCourantHavingOrdreValue|length-1) %}
        {% set break = false %}
        {% for i in range(k, courant|length-1) if not break %} 
            {% if i == cleCourantHavingOrdreValue[j] %}
                {% set out = out|merge([sortValues[j]])  %} 
                {% if j <  cleCourantHavingOrdreValue|length-1 %}
                    {% set k = i + 1 %}
                    {% set break = true %}
                {% endif %}
            {% else %}  
                {% set out = out|merge([0])  %}                                                                                                           
            {% endif %}  
        {% endfor %}
    {% endfor %}
{% endif %}  

{# ----------- end make cle-------------#}
{# ------------------------#}
{% set initial = [] %}
{% set entree = [] %}
{% for key, value in courant %}
    {% for key2, value2 in value %} 
        {% if key2 =='initiale' %}
            {% set x = init[key].initiale %}
            {% set initial = initial|merge([x])  %}                                                                                                          
        {% endif %}  
        {% if key2 =='entrer' %}
            {% set x = entrer[key].entrer %}
            {% set entree = entree|merge([x])  %}                                                                                                          
        {% endif %} 
        {% if key2 =='sortie' %}
            {% if key < courant|length %}
                {% for valeur in cleCourantHavingOrdreValue %}
                    {% set x = sort[0].sortie %}

                {% endfor %}
            {% endif %}                                                                                                         
        {% endif %}     
    {% endfor %}
{% endfor %}
{# ------------------------#}
    <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>{{ init.0.Produits }}</em></h4>  
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\">{{ 'now' |format_date(locale='fr') }}</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">                               
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th scope=\"col\"> Ordre</th>
                                                    <th data-field=\"Categorie\"> Categorie </th>
                                                    <th scope=\"col\">Valeur Faciales</th>
                                                    <th scope=\"col\">Stock initial</th>
                                                    <th scope=\"col\">Entrée</th>
                                                    <th scope=\"col\">Sortie</th>
                                                    <th scope=\"col\">Stock Acteul </th>
                                                    
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
                                        <p> <a href=\"{{ path('impression_product',{id: init.0.id}) }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>                                        </p>
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

", "etat/produits_select.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\etat\\produits_select.html.twig");
    }
}
