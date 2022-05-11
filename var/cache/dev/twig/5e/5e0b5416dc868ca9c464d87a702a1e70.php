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

/* etat/bloc-de-luxe.html.twig */
class __TwigTemplate_88a06a861c58821d64f2549a27d8ec00 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/bloc-de-luxe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etat/bloc-de-luxe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etat/bloc-de-luxe.html.twig", 1);
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

        echo "Produits Bloc de Luxe | Paositra malagasy! ";
        
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
        echo "<h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>Bloc de Luxe</em></h4>  
          <select name=\"link\" id='' size=\"1\" onchamge=\"window.location.href=this.value;\">
        <option onClick=\"window.location = '";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableau");
        echo "'\" >Tableaux</option>
        <option onClick=\"window.location = '";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bloc_de_luxe");
        echo "'\" >Bloc de Luxe</option>
        <option onClick=\"window.location = '";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("epreuves_de_luxe");
        echo "'\" >Epreuves De Luxe</option>
        <option onClick=\"window.location = '";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("albums");
        echo "'\" >Albums</option>
        <option onClick=\"window.location = '";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pochette");
        echo "'\" >Pochettes</option>
        <option onClick=\"window.location = '";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unite");
        echo "'\" >TP Par Unite</option>
        <option onClick=\"window.location = '";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxes");
        echo "'\" >Chiffres Taxes</option>
        <option onClick=\"window.location = '";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiscaux");
        echo "'\" >Timbres Fiscaux</option>
        <option onClick=\"window.location = '";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enveloppe");
        echo "'\" >Enveloppe FDC</option>
        <option onClick=\"window.location = '";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveaux_postaux");
        echo "'\" >Produits Nouveaux Postaux</option>
        <option onClick=\"window.location = '";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("poste-simple");
        echo "'\" >Timbres Poste Simple</option>
        <option onClick=\"window.location = '";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bloc_feuillets");
        echo "'\" >Blocs Feuillets</option>
        <option onClick=\"window.location = '";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aero");
        echo "'\" >Aerogramme et Coupon-Reponse</option>
        <option onClick=\"window.location = '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dentelle");
        echo "'\" >TP Non Dentelles</option>
    </select> 
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col\">
                          <h2 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stocks: <span style=\"color:#498000;\">";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo "</span></p> </h2>
                            <div class=\"q-display p-3\">
                                <p class=\"d-inline\">                                
                                   <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\">
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th scope=\"col\"> Ordre</th>
                                                    <th scope=\"col\"> Categorie </th>
                                                    <th scope=\"col\">Valeur Faciales</th>
                                                    <th scope=\"col\">Stock initial</th>
                                                    <th scope=\"col\">Entrée</th>
                                                    <th scope=\"col\">Sortie</th>
                                                    <th scope=\"col\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 130
            echo "                                                      <tr>
                                                        ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                echo " 
                                                            
                                                            ";
                // line 133
                if (($context["key2"] == "ordre")) {
                    // line 134
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo "  </td>
                                                            ";
                } elseif ((                // line 135
$context["key2"] == "NomDeCategorie")) {
                    // line 136
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 137
$context["key2"] == "valeurFaciale")) {
                    // line 138
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>
                                                            ";
                } elseif ((                // line 139
$context["key2"] == "initiale")) {
                    // line 140
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 140, $this->source); })()), $context["key"], [], "array", false, false, false, 140), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 141
$context["key2"] == "entrer")) {
                    // line 142
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["entree"]) || array_key_exists("entree", $context) ? $context["entree"] : (function () { throw new RuntimeError('Variable "entree" does not exist.', 142, $this->source); })()), $context["key"], [], "array", false, false, false, 142) - twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 142, $this->source); })()), $context["key"], [], "array", false, false, false, 142)), "html", null, true);
                    echo " </td> 
                                                            ";
                } elseif ((                // line 143
$context["key2"] == "sortie")) {
                    // line 144
                    echo "                                                                ";
                    if (twig_test_empty((isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 144, $this->source); })()))) {
                        // line 145
                        echo "                                                                    <td> 0 </td> 
                                                                ";
                    } else {
                        // line 147
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["out"]) || array_key_exists("out", $context) ? $context["out"] : (function () { throw new RuntimeError('Variable "out" does not exist.', 147, $this->source); })()), $context["key"], [], "array", false, false, false, 147), "html", null, true);
                        echo " </td>
                                                                ";
                    }
                    // line 148
                    echo " 
                                                            ";
                } elseif ((                // line 149
$context["key2"] == "actuelle")) {
                    // line 150
                    echo "                                                                <td> ";
                    echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                    echo " </td>                                                                                                                    
                                                            ";
                }
                // line 152
                echo "                                                            
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
                                            </tbody>
                                        </table>
                                   </div>
                                </p>
                                <div class=\"d-flex flex-row-reverse bd-highlight\">
                                    <div class=\"p-2 bd-highlight\">
                                        <p> Antananarivo le ,";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
        echo " </p>

                                        <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            ";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "prenom", [], "any", false, false, false, 166), "html", null, true);
        echo "
                                        <p> <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("down_bloc_de_luxe");
        echo "\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" > Imprimer ce fichier </button></a></p>                                        </p>
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
        return "etat/bloc-de-luxe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 167,  549 => 166,  543 => 163,  534 => 156,  527 => 154,  520 => 152,  514 => 150,  512 => 149,  509 => 148,  503 => 147,  499 => 145,  496 => 144,  494 => 143,  489 => 142,  487 => 141,  482 => 140,  480 => 139,  475 => 138,  473 => 137,  468 => 136,  466 => 135,  461 => 134,  459 => 133,  452 => 131,  449 => 130,  445 => 129,  423 => 110,  412 => 102,  408 => 101,  404 => 100,  400 => 99,  396 => 98,  392 => 97,  388 => 96,  384 => 95,  380 => 94,  376 => 93,  372 => 92,  368 => 91,  364 => 90,  360 => 89,  356 => 87,  345 => 83,  339 => 82,  332 => 80,  329 => 79,  324 => 78,  321 => 77,  319 => 76,  316 => 75,  310 => 74,  307 => 73,  305 => 72,  302 => 71,  296 => 70,  293 => 69,  291 => 68,  284 => 67,  280 => 66,  278 => 65,  276 => 64,  272 => 60,  265 => 59,  257 => 57,  252 => 56,  247 => 55,  244 => 54,  241 => 53,  238 => 52,  236 => 51,  231 => 50,  229 => 49,  221 => 48,  218 => 47,  213 => 46,  211 => 45,  209 => 44,  207 => 43,  204 => 41,  197 => 39,  190 => 38,  185 => 36,  181 => 35,  176 => 34,  173 => 33,  168 => 32,  164 => 31,  162 => 30,  160 => 29,  157 => 27,  146 => 24,  140 => 23,  138 => 22,  131 => 21,  127 => 20,  123 => 17,  113 => 15,  107 => 13,  104 => 12,  100 => 11,  94 => 10,  92 => 9,  88 => 8,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits Bloc de Luxe | Paositra malagasy! {% endblock %}

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
    <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>Bloc de Luxe</em></h4>  
          <select name=\"link\" id='' size=\"1\" onchamge=\"window.location.href=this.value;\">
        <option onClick=\"window.location = '{{ path('tableau') }}'\" >Tableaux</option>
        <option onClick=\"window.location = '{{ path('bloc_de_luxe') }}'\" >Bloc de Luxe</option>
        <option onClick=\"window.location = '{{ path('epreuves_de_luxe') }}'\" >Epreuves De Luxe</option>
        <option onClick=\"window.location = '{{ path('albums') }}'\" >Albums</option>
        <option onClick=\"window.location = '{{ path('pochette') }}'\" >Pochettes</option>
        <option onClick=\"window.location = '{{ path('unite') }}'\" >TP Par Unite</option>
        <option onClick=\"window.location = '{{ path('taxes') }}'\" >Chiffres Taxes</option>
        <option onClick=\"window.location = '{{ path('fiscaux') }}'\" >Timbres Fiscaux</option>
        <option onClick=\"window.location = '{{ path('enveloppe') }}'\" >Enveloppe FDC</option>
        <option onClick=\"window.location = '{{ path('nouveaux_postaux') }}'\" >Produits Nouveaux Postaux</option>
        <option onClick=\"window.location = '{{ path('poste-simple') }}'\" >Timbres Poste Simple</option>
        <option onClick=\"window.location = '{{ path('bloc_feuillets') }}'\" >Blocs Feuillets</option>
        <option onClick=\"window.location = '{{ path('aero') }}'\" >Aerogramme et Coupon-Reponse</option>
        <option onClick=\"window.location = '{{ path('dentelle') }}'\" >TP Non Dentelles</option>
    </select> 
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
                                                    <th scope=\"col\"> Categorie </th>
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
                                        <p> <a href=\"{{ path('down_bloc_de_luxe') }}\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" > Imprimer ce fichier </button></a></p>                                        </p>
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

", "etat/bloc-de-luxe.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\etat\\bloc-de-luxe.html.twig");
    }
}
