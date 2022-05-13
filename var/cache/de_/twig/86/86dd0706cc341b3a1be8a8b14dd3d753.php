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
class __TwigTemplate_86ea87cea356b49cd494e8dfc8db5870 extends \Twig\Template
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
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, true, false, 8), "Produits", [], "any", true, true, false, 8)) {
            // line 9
            echo "            <title>Impression de etat de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 9, $this->source); })()), 0, [], "any", false, false, false, 9), "Produits", [], "any", false, false, false, 9), "html", null, true);
            echo "| Paositra malagasy</title>
        ";
        } else {
            // line 11
            echo "            <title>Impression de etat de stock | Paositra malagasy</title>
        ";
        }
        // line 13
        echo "        
    </head>
    <body onload=\"window.print()\">

        ";
        // line 19
        $context["ordreValue"] = [];
        echo " 
        ";
        // line 20
        $context["cleCourantHavingOrdreValue"] = [];
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
            echo " 
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value3"]);
            foreach ($context['_seq'] as $context["key4"] => $context["value4"]) {
                // line 23
                echo "                ";
                if (($context["key4"] == "ordreProd")) {
                    // line 24
                    echo "                    ";
                    $context["ordreValue"] = twig_array_merge((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 24, $this->source); })()), [0 => $context["value4"]]);
                    echo " 
                ";
                }
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key4'], $context['value4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "

        ";
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
                echo " 
                ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["value3"], "ordreProd", [], "array", false, false, false, 33) == $context["value"])) {
                    // line 34
                    echo "                    ";
                    $context["cleCourantHavingOrdreValue"] = twig_array_merge((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 34, $this->source); })()), [0 => $context["key3"]]);
                    echo "                                                                                                          
                ";
                }
                // line 35
                echo "   
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        ";
        // line 40
        echo "        ";
        $context["sortValues"] = [];
        // line 41
        echo "        ";
        $context["sortOrdres"] = [];
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                // line 44
                echo "                    ";
                if (($context["key2"] == "sortie")) {
                    // line 45
                    echo "                        ";
                    $context["sortValues"] = twig_array_merge((isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 45, $this->source); })()), [0 => $context["value2"]]);
                    echo " 
                    ";
                } elseif ((                // line 46
$context["key2"] == "ordre")) {
                    echo " 
                        ";
                    // line 47
                    $context["sortOrdres"] = twig_array_merge((isset($context["sortOrdres"]) || array_key_exists("sortOrdres", $context) ? $context["sortOrdres"] : (function () { throw new RuntimeError('Variable "sortOrdres" does not exist.', 47, $this->source); })()), [0 => $context["value2"]]);
                    echo "                                                                                 
                    ";
                }
                // line 49
                echo "                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        ";
        // line 54
        echo "        ";
        $context["out"] = [];
        // line 55
        echo "        ";
        $context["k"] = 0;
        // line 56
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 56, $this->source); })())) > 0)) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 57, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 58
                echo "                ";
                $context["break"] = false;
                // line 59
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 59, $this->source); })()), (twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 59, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 59, $this->source); })())) {
                        echo " 
                    ";
                        // line 60
                        if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 60, $this->source); })()), $context["j"], [], "array", false, false, false, 60))) {
                            // line 61
                            echo "                        ";
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 61, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 61, $this->source); })()), $context["j"], [], "array", false, false, false, 61)]);
                            echo " 
                        ";
                            // line 62
                            if (($context["j"] < (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 62, $this->source); })())) - 1))) {
                                // line 63
                                echo "                            ";
                                $context["k"] = ($context["i"] + 1);
                                // line 64
                                echo "                            ";
                                $context["break"] = true;
                                // line 65
                                echo "                        ";
                            }
                            // line 66
                            echo "                    ";
                        } else {
                            echo "  
                        ";
                            // line 67
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 67, $this->source); })()), [0 => 0]);
                            echo "                                                                                                           
                    ";
                        }
                        // line 68
                        echo "  
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        ";
        }
        echo "  

        ";
        // line 76
        $context["initial"] = [];
        // line 77
        echo "        ";
        $context["entree"] = [];
        // line 78
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 79
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                ";
                // line 80
                if (($context["key2"] == "initiale")) {
                    // line 81
                    echo "                    ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 81, $this->source); })()), $context["key"], [], "array", false, false, false, 81), "initiale", [], "any", false, false, false, 81);
                    // line 82
                    echo "                    ";
                    $context["initial"] = twig_array_merge((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 82, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 82, $this->source); })())]);
                    echo "                                                                                                          
                ";
                }
                // line 83
                echo "  
                ";
                // line 84
                if (($context["key2"] == "entrer")) {
                    // line 85
                    echo "                    ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 85, $this->source); })()), $context["key"], [], "array", false, false, false, 85), "entrer", [], "any", false, false, false, 85);
                    // line 86
                    echo "                    ";
                    $context["entree"] = twig_array_merge((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 86, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 86, $this->source); })())]);
                    echo "                                                                                                          
                ";
                }
                // line 87
                echo " 
                ";
                // line 88
                if (($context["key2"] == "sortie")) {
                    // line 89
                    echo "                    ";
                    if (($context["key"] < twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 89, $this->source); })())))) {
                        // line 90
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 90, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
                            // line 91
                            echo "                            ";
                            $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 91, $this->source); })()), 0, [], "array", false, false, false, 91), "sortie", [], "any", false, false, false, 91);
                            // line 92
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "                    ";
                    }
                    echo "                                                                                                         
                ";
                }
                // line 95
                echo "     
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        ";
        // line 99
        echo "<section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table class=\"table\" data-toggle=\"table\" border=\"1\">
                        <h3 class=\"text-danger\">Etat de stock general </h3>
                        ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, true, false, 104), "Produits", [], "any", true, true, false, 104)) {
            // line 105
            echo "                            <h3 class=\"text-danger\">Etat de stock produit : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 105, $this->source); })()), 0, [], "any", false, false, false, 105), "Produits", [], "any", false, false, false, 105), "html", null, true);
            echo "  </h3>
                        ";
        }
        // line 107
        echo "                            <thead>
                                <tr class=\"table-danger\">
                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                    ";
        // line 110
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, true, false, 110), "Produits", [], "any", true, true, false, 110)) {
            // line 111
            echo "                                        <th data-field=\"Categorie\"> Produit </th>
                                    ";
        }
        // line 113
        echo "                                    <th data-field=\"produit\"> Categorie </th>
                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                    <th data-field=\"Stock initial\">Stock initial</th>
                                    <th data-field=\"Entrée\">Entrée</th>
                                    <th data-field=\"Sortie\">Sortie</th>
                                    <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 125
            echo "                                        <tr>
                                        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                            
                                            ";
                // line 128
                if (($context["key2"] == "ordre")) {
                    // line 129
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                            ";
                } elseif ((                // line 130
$context["key2"] == "NomDeCategorie")) {
                    // line 131
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                            ";
                } elseif ((                // line 132
$context["key2"] == "valeurFaciale")) {
                    // line 133
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                            ";
                } elseif ((                // line 134
$context["key2"] == "initiale")) {
                    // line 135
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 135, $this->source); })()), $context["key"], [], "array", false, false, false, 135), "html", null, true);
                    echo " </td> 
                                            ";
                } elseif ((                // line 136
$context["key2"] == "entrer")) {
                    // line 137
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 137, $this->source); })()), $context["key"], [], "array", false, false, false, 137) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 137, $this->source); })()), $context["key"], [], "array", false, false, false, 137)), "html", null, true);
                    echo " </td> 
                                            ";
                } elseif ((                // line 138
$context["key2"] == "sortie")) {
                    // line 139
                    echo "                                                ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 139, $this->source); })()))) {
                        // line 140
                        echo "                                                    <td> 0 </td> 
                                                ";
                    } else {
                        // line 142
                        echo "                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 142, $this->source); })()), $context["key"], [], "array", false, false, false, 142), "html", null, true);
                        echo " </td>
                                                ";
                    }
                    // line 143
                    echo " 
                                            ";
                } elseif ((                // line 144
$context["key2"] == "actuelle")) {
                    // line 145
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>  
                                            ";
                } elseif ((                // line 146
$context["key2"] == "produit")) {
                    // line 147
                    echo "                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                   
                                            ";
                }
                // line 149
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                            ";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "prenom", [], "any", false, false, false, 162), "html", null, true);
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
        return array (  506 => 162,  501 => 160,  491 => 152,  484 => 150,  478 => 149,  472 => 147,  470 => 146,  465 => 145,  463 => 144,  460 => 143,  454 => 142,  450 => 140,  447 => 139,  445 => 138,  440 => 137,  438 => 136,  433 => 135,  431 => 134,  426 => 133,  424 => 132,  419 => 131,  417 => 130,  412 => 129,  410 => 128,  403 => 126,  400 => 125,  396 => 124,  383 => 113,  379 => 111,  377 => 110,  372 => 107,  366 => 105,  364 => 104,  357 => 99,  355 => 98,  349 => 97,  342 => 95,  336 => 94,  329 => 92,  326 => 91,  321 => 90,  318 => 89,  316 => 88,  313 => 87,  307 => 86,  304 => 85,  302 => 84,  299 => 83,  293 => 82,  290 => 81,  288 => 80,  281 => 79,  276 => 78,  273 => 77,  271 => 76,  265 => 71,  259 => 70,  251 => 68,  246 => 67,  241 => 66,  238 => 65,  235 => 64,  232 => 63,  230 => 62,  225 => 61,  223 => 60,  215 => 59,  212 => 58,  207 => 57,  204 => 56,  201 => 55,  198 => 54,  195 => 52,  188 => 50,  181 => 49,  176 => 47,  172 => 46,  167 => 45,  164 => 44,  159 => 43,  154 => 42,  151 => 41,  148 => 40,  145 => 38,  139 => 37,  132 => 35,  126 => 34,  124 => 33,  117 => 32,  112 => 31,  108 => 28,  102 => 27,  96 => 26,  90 => 24,  87 => 23,  83 => 22,  76 => 21,  74 => 20,  70 => 19,  64 => 13,  60 => 11,  54 => 9,  52 => 8,  43 => 1,);
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
        {% if init.0.Produits is defined %}
            <title>Impression de etat de {{ init.0.Produits }}| Paositra malagasy</title>
        {% else %}
            <title>Impression de etat de stock | Paositra malagasy</title>
        {% endif %}
        
    </head>
    <body onload=\"window.print()\">

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
            <section class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table class=\"table\" data-toggle=\"table\" border=\"1\">
                        <h3 class=\"text-danger\">Etat de stock general </h3>
                        {% if init.0.Produits is defined %}
                            <h3 class=\"text-danger\">Etat de stock produit : {{ init.0.Produits }}  </h3>
                        {% endif %}
                            <thead>
                                <tr class=\"table-danger\">
                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                    {% if init.0.Produits is not defined %}
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
