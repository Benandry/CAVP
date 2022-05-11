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

/* download/unite.html.twig */
class __TwigTemplate_3392b96e831b4268c5e6a85468b6f4b2 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "download/unite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "download/unite.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css\">
        <title>Impression de produits TP par Unités | Paositra malagasy</title>
    </head>
    <body onload=\"window.print()\">

        ";
        // line 14
        $context["ordreValue"] = [];
        echo " 
        ";
        // line 15
        $context["cleCourantHavingOrdreValue"] = [];
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
            echo " 
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value3"]);
            foreach ($context['_seq'] as $context["key4"] => $context["value4"]) {
                // line 18
                echo "                ";
                if (($context["key4"] == "ordreProd")) {
                    // line 19
                    echo "                    ";
                    $context["ordreValue"] = twig_array_merge((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 19, $this->source); })()), [0 => $context["value4"]]);
                    echo " 
                ";
                }
                // line 21
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key4'], $context['value4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

        ";
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordreValue"]) || array_key_exists("ordreValue", $context) ? $context["ordreValue"] : (function () { throw new RuntimeError('Variable "ordreValue" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
                echo " 
                ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["value3"], "ordreProd", [], "array", false, false, false, 28) == $context["value"])) {
                    // line 29
                    echo "                    ";
                    $context["cleCourantHavingOrdreValue"] = twig_array_merge((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 29, $this->source); })()), [0 => $context["key3"]]);
                    echo "                                                                                                          
                ";
                }
                // line 30
                echo "   
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 35
        echo "        ";
        $context["sortValues"] = [];
        // line 36
        echo "        ";
        $context["sortOrdres"] = [];
        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                // line 39
                echo "                    ";
                if (($context["key2"] == "sortie")) {
                    // line 40
                    echo "                        ";
                    $context["sortValues"] = twig_array_merge((isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 40, $this->source); })()), [0 => $context["value2"]]);
                    echo " 
                    ";
                } elseif ((                // line 41
$context["key2"] == "ordre")) {
                    echo " 
                        ";
                    // line 42
                    $context["sortOrdres"] = twig_array_merge((isset($context["sortOrdres"]) || array_key_exists("sortOrdres", $context) ? $context["sortOrdres"] : (function () { throw new RuntimeError('Variable "sortOrdres" does not exist.', 42, $this->source); })()), [0 => $context["value2"]]);
                    echo "                                                                                 
                    ";
                }
                // line 44
                echo "                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        $context["out"] = [];
        // line 50
        echo "        ";
        $context["k"] = 0;
        // line 51
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 51, $this->source); })())) > 0)) {
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 52, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 53
                echo "                ";
                $context["break"] = false;
                // line 54
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 54, $this->source); })()), (twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 54, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if ( !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 54, $this->source); })())) {
                        echo " 
                    ";
                        // line 55
                        if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 55, $this->source); })()), $context["j"], [], "array", false, false, false, 55))) {
                            // line 56
                            echo "                        ";
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 56, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["sortValues"]) || array_key_exists("sortValues", $context) ? $context["sortValues"] : (function () { throw new RuntimeError('Variable "sortValues" does not exist.', 56, $this->source); })()), $context["j"], [], "array", false, false, false, 56)]);
                            echo " 
                        ";
                            // line 57
                            if (($context["j"] < (twig_length_filter($this->env, (isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 57, $this->source); })())) - 1))) {
                                // line 58
                                echo "                            ";
                                $context["k"] = ($context["i"] + 1);
                                // line 59
                                echo "                            ";
                                $context["break"] = true;
                                // line 60
                                echo "                        ";
                            }
                            // line 61
                            echo "                    ";
                        } else {
                            echo "  
                        ";
                            // line 62
                            $context["out"] = twig_array_merge((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 62, $this->source); })()), [0 => 0]);
                            echo "                                                                                                           
                    ";
                        }
                        // line 63
                        echo "  
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        echo "  

        ";
        // line 71
        $context["initial"] = [];
        // line 72
        echo "        ";
        $context["entree"] = [];
        // line 73
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 74
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                ";
                // line 75
                if (($context["key2"] == "initiale")) {
                    // line 76
                    echo "                    ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 76, $this->source); })()), $context["key"], [], "array", false, false, false, 76), "initiale", [], "any", false, false, false, 76);
                    // line 77
                    echo "                    ";
                    $context["initial"] = twig_array_merge((isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 77, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 77, $this->source); })())]);
                    echo "                                                                                                          
                ";
                }
                // line 78
                echo "  
                ";
                // line 79
                if (($context["key2"] == "entrer")) {
                    // line 80
                    echo "                    ";
                    $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entrer"]) || array_key_exists("entrer", $context) ? $context["entrer"] : (function () { throw new RuntimeError('Variable "entrer" does not exist.', 80, $this->source); })()), $context["key"], [], "array", false, false, false, 80), "entrer", [], "any", false, false, false, 80);
                    // line 81
                    echo "                    ";
                    $context["entree"] = twig_array_merge((isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 81, $this->source); })()), [0 => (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 81, $this->source); })())]);
                    echo "                                                                                                          
                ";
                }
                // line 82
                echo " 
                ";
                // line 83
                if (($context["key2"] == "sortie")) {
                    // line 84
                    echo "                    ";
                    if (($context["key"] < twig_length_filter($this->env, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 84, $this->source); })())))) {
                        // line 85
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["cleCourantHavingOrdreValue"]) || array_key_exists("cleCourantHavingOrdreValue", $context) ? $context["cleCourantHavingOrdreValue"] : (function () { throw new RuntimeError('Variable "cleCourantHavingOrdreValue" does not exist.', 85, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
                            // line 86
                            echo "                            ";
                            $context["x"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 86, $this->source); })()), 0, [], "array", false, false, false, 86), "sortie", [], "any", false, false, false, 86);
                            // line 87
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                    ";
                    }
                    echo "                                                                                                         
                ";
                }
                // line 90
                echo "     
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        ";
        // line 94
        echo "<section class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <table class=\"table\" data-toggle=\"table\" border=\"1\">
                    <h3 class=\"text-danger\">Etat de stock produit TP par Unités </h3>
                        <thead>
                            <tr class=\"table-danger\">
                                <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                <th scope=\"col\" data-field=\"Categorie\"> Categorie </th>
                                <th scope=\"col\" data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                <th scope=\"col\" data-field=\"Stock initial\">Stock initial</th>
                                <th scope=\"col\" data-field=\"Entrée\">Entrée</th>
                                <th scope=\"col\" data-field=\"Sortie\">Sortie</th>
                                <th scope=\"col\" data-field=\"Sock Actuel\">Stock Acteul </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 114
            echo "                                    <tr>
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
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                        ";
                } elseif ((                // line 119
$context["key2"] == "NomDeCategorie")) {
                    // line 120
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 121
$context["key2"] == "valeurFaciale")) {
                    // line 122
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                        ";
                } elseif ((                // line 123
$context["key2"] == "initiale")) {
                    // line 124
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 124, $this->source); })()), $context["key"], [], "array", false, false, false, 124), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 125
$context["key2"] == "entrer")) {
                    // line 126
                    echo "                                            <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 126, $this->source); })()), $context["key"], [], "array", false, false, false, 126) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 126, $this->source); })()), $context["key"], [], "array", false, false, false, 126)), "html", null, true);
                    echo " </td> 
                                        ";
                } elseif ((                // line 127
$context["key2"] == "sortie")) {
                    // line 128
                    echo "                                            ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 128, $this->source); })()))) {
                        // line 129
                        echo "                                                <td> 0 </td> 
                                            ";
                    } else {
                        // line 131
                        echo "                                                <td> ";
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
                    echo "                                            <td> ";
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
            echo "                                </tr>
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
            </div>
        </section>
            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <div class=\"p-2 bd-highlight\">
                    <p> Antananarivo le ,";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>
                    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                        ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "prenom", [], "any", false, false, false, 150), "html", null, true);
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
        return "download/unite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 150,  463 => 148,  453 => 140,  446 => 138,  439 => 136,  433 => 134,  431 => 133,  428 => 132,  422 => 131,  418 => 129,  415 => 128,  413 => 127,  408 => 126,  406 => 125,  401 => 124,  399 => 123,  394 => 122,  392 => 121,  387 => 120,  385 => 119,  380 => 118,  378 => 117,  371 => 115,  368 => 114,  364 => 113,  343 => 94,  341 => 93,  335 => 92,  328 => 90,  322 => 89,  315 => 87,  312 => 86,  307 => 85,  304 => 84,  302 => 83,  299 => 82,  293 => 81,  290 => 80,  288 => 79,  285 => 78,  279 => 77,  276 => 76,  274 => 75,  267 => 74,  262 => 73,  259 => 72,  257 => 71,  251 => 66,  245 => 65,  237 => 63,  232 => 62,  227 => 61,  224 => 60,  221 => 59,  218 => 58,  216 => 57,  211 => 56,  209 => 55,  201 => 54,  198 => 53,  193 => 52,  190 => 51,  187 => 50,  184 => 49,  181 => 47,  174 => 45,  167 => 44,  162 => 42,  158 => 41,  153 => 40,  150 => 39,  145 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 33,  125 => 32,  118 => 30,  112 => 29,  110 => 28,  103 => 27,  98 => 26,  94 => 23,  88 => 22,  82 => 21,  76 => 19,  73 => 18,  69 => 17,  62 => 16,  60 => 15,  56 => 14,  43 => 1,);
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
        <title>Impression de produits TP par Unités | Paositra malagasy</title>
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
                    <h3 class=\"text-danger\">Etat de stock produit TP par Unités </h3>
                        <thead>
                            <tr class=\"table-danger\">
                                <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                <th scope=\"col\" data-field=\"Categorie\"> Categorie </th>
                                <th scope=\"col\" data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                <th scope=\"col\" data-field=\"Stock initial\">Stock initial</th>
                                <th scope=\"col\" data-field=\"Entrée\">Entrée</th>
                                <th scope=\"col\" data-field=\"Sortie\">Sortie</th>
                                <th scope=\"col\" data-field=\"Sock Actuel\">Stock Acteul </th>
                                
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
</html>", "download/unite.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\download\\unite.html.twig");
    }
}
