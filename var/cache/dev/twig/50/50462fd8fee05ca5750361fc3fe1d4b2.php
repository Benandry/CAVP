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

/* order/ordre.html.twig */
class __TwigTemplate_8c815bafb82215ba1a439afc1e83ca83 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/ordre.html.twig", 1);
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

        echo "Ordre de sortie | Paositra Malagasy";
        
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
        echo "    <main>
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "            <h2 class=\"fw-bolder text-center\">Ordre de sortie de CAVP</h2>
             ";
            // line 9
            $context["types_order"] = [0 => "PN", 1 => "FP"];
            // line 10
            echo "            <div id=\"typesNum\" class=\"btn btn-danger btn-sm\">preciser le types et numero </div>
                <div id=\"panel1\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "types", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        <div class=\"form-group\">
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "numero", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                            <div class=\"form-group\">
                            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "submit", [], "any", false, false, false, 21), 'row', ["label" => "valider", "attr" => ["class" => "btn btn-danger btn-sm"]]);
            echo "
                        </div>
                    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
            <!-- Formuliare de numero de sortie -->
            <!-- =========================================================================================================================================== --> 
             <ul class=\"nav nav-tabs\">
                <li class=\"nav-items\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#recapitulation\"> Récapitulation</a></li>
                <li class=\"nav-items\"><a class=\"nav-link\"  data-bs-toggle=\"tab\" href=\"#repartitions\"> Etat de répartition de valeurs</a></li>
                <li class=\"nav-items\"><a class=\"nav-link\"  data-bs-toggle=\"tab\" href=\"#bordereau\"> Bordereaux D'envoi</a></li>
            </ul>

            <div class=\"tab-content\">
                  <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"recapitulation\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                            <h4 class=\"h4\">Récapitulation N° ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 39, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 39, $this->source); })()) - 1), [], "array", false, false, false, 39), "html", null, true);
            echo " </h4>
                            
                            <div class=\"table responsive-xxl\">
                                <table class=\"table table-bordered table-hover\" >
                                    <thead>
                                        <tr>
                                            <th>Categorie </th>
                                            <th>Valeur Faciales </th>
                                            <th>TP/PL </th>
                                            <th>Planche </th>
                                            <th>TP </th>
                                            <th>Montant </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 54
            $context["somme"] = 0;
            // line 55
            echo "                                        ";
            $context["bureau"] = 0;
            // line 56
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 57
                echo "                                            <tr>
                                                <td> ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 58), "html", null, true);
                echo "</td> 
                                                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                                                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 61)), 0, ",", " "), "html", null, true);
                echo "</td>
                                                <td>
                                                    ";
                // line 63
                $context["tt"] = (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 63) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 63)));
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 64, $this->source); })()), 0, ",", " "), "html", null, true);
                echo "
                                                </td>
                                                ";
                // line 66
                if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 66) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 66)))) {
                    // line 67
                    echo "                                                    ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 67) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 67))) * 1);
                    // line 68
                    echo "                                                    <td>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 68, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo "</td>
                                                ";
                } else {
                    // line 70
                    echo "                                                    ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 70) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 70))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 70));
                    // line 71
                    echo "                                                    <td>
                                                        ";
                    // line 72
                    $context["mt"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 72) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 72))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 72));
                    // line 73
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["mt"]) || array_key_exists("mt", $context) ? $context["mt"] : (function () { throw new RuntimeError('Variable "mt" does not exist.', 73, $this->source); })()), 0, ",", " "), "html", null, true);
                    echo "
                                                    </td>
                                                ";
                }
                // line 76
                echo "                                                ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 76, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 76, $this->source); })()));
                // line 77
                echo "                                                ";
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 77, $this->source); })()) + 1);
                // line 78
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                        <tr>
                                            <th colspan=\"5\">Total : </th>
                                            <td>
                                                <span style=\"display:none\" id=\"somme\" > ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "</span>
                                              ";
            // line 84
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 84, $this->source); })()), 0, ",", " "), "html", null, true);
            echo " 
                                            </td>
                                        </tr>
                                    <tbody>
                                </table>
                               <p> ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "  observations  </p>
                            </div>
                            <div>
                                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"nombre\"> </span> ARIARY<p>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <p> Antananarivo le ,";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_recaputilation", ["types" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 98, $this->source); })()), "numero" => (isset($context["numero_de_sortie"]) || array_key_exists("numero_de_sortie", $context) ? $context["numero_de_sortie"] : (function () { throw new RuntimeError('Variable "numero_de_sortie" does not exist.', 98, $this->source); })())]), "html", null, true);
            echo "\" target=\"_blank\" style=\" text-decoration:none;\" class=\"btn btn-outline-danger\">Imprimer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repartitions -->
                <div class=\"tab-pane\" id=\"repartitions\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                           <h4 class=\"h4\">Etat de repartition de Valeurs N° ";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 108, $this->source); })()), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 108, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 108, $this->source); })()) - 1), [], "array", false, false, false, 108), "html", null, true);
            echo " </h4>
                           <div class=\"table responsive-xxl\">
                                <table class=\"table table-bordered table-hover\" >
                                    <thead>
                                        <tr>
                                            <th>Ordre</th>
                                            <th>Valeur Faciales </th>
                                             ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 116
                echo "                                                    <th> ";
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 116)), "html", null, true);
                echo "</th>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                            <th>total par bureau </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 122, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 123
                echo "                                                <tr>
                                                ";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    // line 125
                    echo "                                                    ";
                    if (($context["key1"] == "ordre")) {
                        // line 126
                        echo "                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    } elseif ((                    // line 127
$context["key1"] == "vf")) {
                        // line 128
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    } elseif ((                    // line 129
$context["key1"] == "nombre_cat")) {
                        // line 130
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 130, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                            // line 131
                            echo "                                                            ";
                            if ((abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 131)) == abs($context["value1"]))) {
                                // line 132
                                echo "                                                                <td> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 132), "html", null, true);
                                echo "</td>
                                                            ";
                            } else {
                                // line 134
                                echo "                                                                <td> 0</td>
                                                            ";
                            }
                            // line 136
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 137
                        echo "                                                    ";
                    } elseif (($context["key1"] == "nombre_agence")) {
                        // line 138
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    }
                    // line 140
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                                </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                                    <tbody>
                                </table>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <br/><br/>
                                    <p> Antananarivo le ,";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_repartition", ["types" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 151, $this->source); })()), "numero" => (isset($context["numero_de_sortie"]) || array_key_exists("numero_de_sortie", $context) ? $context["numero_de_sortie"] : (function () { throw new RuntimeError('Variable "numero_de_sortie" does not exist.', 151, $this->source); })())]), "html", null, true);
            echo "\" target=\"_blank\" style=\" text-decoration:none;\" class=\"btn btn-outline-danger\">Imprimer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Bordereaux -->
                 <div class=\"tab-pane\" id=\"bordereau\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                            <h4 class=\"h4\">Bordéreau d'envoi N° ";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 161, $this->source); })()), "html", null, true);
            echo " --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 161, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 161, $this->source); })()) - 1), [], "array", false, false, false, 161), "html", null, true);
            echo " </h4>
                            <div class=\"table responsive-xxl\">
                                <table  class=\"table table-bordered table-hover\">
                                    ";
            // line 164
            $context["bureau"] = 0;
            // line 165
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 165, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 166
                echo "                                    <tr>
                                        <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 167), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau", ["type" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 168, $this->source); })()), "numero" => twig_get_attribute($this->env, $this->source, $context["pro"], "numeroSortie", [], "any", false, false, false, 168), "bureau" => twig_get_attribute($this->env, $this->source, $context["pro"], "idBureau", [], "any", false, false, false, 168)]), "html", null, true);
                echo "\" target=\"_blank\"> <i class='fa fa-info-circle' id=\"info\"> info</i></a></td>
                                        ";
                // line 169
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 169, $this->source); })()) + 1);
                // line 170
                echo "                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                                </table>
                            </div>
                            <p class=\"fw-bolder\"> ";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 174, $this->source); })()), "html", null, true);
            echo " Bureau(x), pour chaque papier à imprimer</p>
                        </div>
                    </div>
                </div>

            </div>
        ";
        } else {
            // line 181
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 184
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 186
        echo "    
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/ordre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 186,  471 => 184,  466 => 181,  456 => 174,  452 => 172,  445 => 170,  443 => 169,  439 => 168,  435 => 167,  432 => 166,  427 => 165,  425 => 164,  417 => 161,  404 => 151,  399 => 149,  391 => 143,  384 => 141,  378 => 140,  372 => 138,  369 => 137,  363 => 136,  359 => 134,  353 => 132,  350 => 131,  345 => 130,  343 => 129,  338 => 128,  336 => 127,  331 => 126,  328 => 125,  324 => 124,  321 => 123,  317 => 122,  311 => 118,  302 => 116,  298 => 115,  286 => 108,  273 => 98,  268 => 96,  258 => 89,  250 => 84,  246 => 83,  241 => 80,  234 => 78,  231 => 77,  228 => 76,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  207 => 68,  204 => 67,  202 => 66,  196 => 64,  194 => 63,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  174 => 57,  169 => 56,  166 => 55,  164 => 54,  144 => 39,  125 => 23,  120 => 21,  114 => 18,  108 => 15,  102 => 12,  98 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ordre de sortie | Paositra Malagasy{% endblock %}

{% block body %}
    <main>
        {% if app.user %}
            <h2 class=\"fw-bolder text-center\">Ordre de sortie de CAVP</h2>
             {% set types_order = ['PN','FP']  %}
            <div id=\"typesNum\" class=\"btn btn-danger btn-sm\">preciser le types et numero </div>
                <div id=\"panel1\">
                    {{ form_start(form) }}
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                {{ form_widget(form.types, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                                {{ form_widget(form.numero, {'attr': {'class': 'form-control'}}) }}
                        </div>
                            <div class=\"form-group\">
                            {{ form_row(form.submit, { 'label': 'valider','attr': {'class': 'btn btn-danger btn-sm'}}) }}
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
            <!-- Formuliare de numero de sortie -->
            <!-- =========================================================================================================================================== --> 
             <ul class=\"nav nav-tabs\">
                <li class=\"nav-items\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#recapitulation\"> Récapitulation</a></li>
                <li class=\"nav-items\"><a class=\"nav-link\"  data-bs-toggle=\"tab\" href=\"#repartitions\"> Etat de répartition de valeurs</a></li>
                <li class=\"nav-items\"><a class=\"nav-link\"  data-bs-toggle=\"tab\" href=\"#bordereau\"> Bordereaux D'envoi</a></li>
            </ul>

            <div class=\"tab-content\">
                  <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"recapitulation\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                            <h4 class=\"h4\">Récapitulation N° {{ numero }}--{{ types_order[types - 1]}} </h4>
                            
                            <div class=\"table responsive-xxl\">
                                <table class=\"table table-bordered table-hover\" >
                                    <thead>
                                        <tr>
                                            <th>Categorie </th>
                                            <th>Valeur Faciales </th>
                                            <th>TP/PL </th>
                                            <th>Planche </th>
                                            <th>TP </th>
                                            <th>Montant </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% set somme = 0 %}
                                        {% set bureau = 0 %}
                                        {% for pro in dispo %}
                                            <tr>
                                                <td> {{ pro.categorie }}</td> 
                                                <td>{{ pro.vf }}</td>
                                                <td>{{ pro.tpParPl }}</td>
                                                <td>{{ pro.quantite|abs|number_format(0,',', ' ')}}</td>
                                                <td>
                                                    {% set tt = pro.tpParPl * pro.quantite|abs %}
                                                    {{ tt|number_format(0,',', ' ') }}
                                                </td>
                                                {% if pro.vf == 0 or pro.vf is null  %}
                                                    {% set  prix = pro.tpParPl * pro.quantite|abs * 1 %}
                                                    <td>{{ prix|number_format(0,',', ' ') }}</td>
                                                {% else %}
                                                    {% set  prix = pro.tpParPl * pro.quantite|abs * pro.vf %}
                                                    <td>
                                                        {% set mt = pro.tpParPl * pro.quantite|abs * pro.vf  %}
                                                        {{ mt|number_format(0,',', ' ')}}
                                                    </td>
                                                {% endif %}
                                                {% set somme = somme + prix %}
                                                {% set bureau = bureau + 1 %}
                                            </tr>
                                        {% endfor %}
                                        <tr>
                                            <th colspan=\"5\">Total : </th>
                                            <td>
                                                <span style=\"display:none\" id=\"somme\" > {{ somme }}</span>
                                              {{ somme|number_format(0,',', ' ') }} 
                                            </td>
                                        </tr>
                                    <tbody>
                                </table>
                               <p> {{ bureau }}  observations  </p>
                            </div>
                            <div>
                                <p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"nombre\"> </span> ARIARY<p>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"{{ path('ordre_de_sortie_recaputilation',{types: types,numero: numero_de_sortie }) }}\" target=\"_blank\" style=\" text-decoration:none;\" class=\"btn btn-outline-danger\">Imprimer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repartitions -->
                <div class=\"tab-pane\" id=\"repartitions\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                           <h4 class=\"h4\">Etat de repartition de Valeurs N° {{ numero }} -- {{ types_order[types - 1]}} </h4>
                           <div class=\"table responsive-xxl\">
                                <table class=\"table table-bordered table-hover\" >
                                    <thead>
                                        <tr>
                                            <th>Ordre</th>
                                            <th>Valeur Faciales </th>
                                             {% for pro in dispo %}
                                                    <th> {{ pro.nombre_cat|abs }}</th>
                                            {% endfor %}
                                            <th>total par bureau </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for key,value in dispo %}
                                                <tr>
                                                {% for key1,value1 in value %}
                                                    {% if key1 == 'ordre' %}
                                                        <td> {{ value1 }}</td>
                                                    {% elseif key1 == 'vf' %}
                                                        <td>{{ value1 }}</td>
                                                    {% elseif key1 == 'nombre_cat' %}
                                                        {% for pro in dispo  %}
                                                            {% if pro.nombre_cat|abs == value1|abs %}
                                                                <td> {{ pro.nombre_agence }}</td>
                                                            {% else %}
                                                                <td> 0</td>
                                                            {% endif %}
                                                        {% endfor %}
                                                    {% elseif key1 == 'nombre_agence' %}
                                                        <td>{{ value1 }}</td>
                                                    {% endif %}
                                                {% endfor %}
                                                </tr>
                                        {% endfor %}
                                    <tbody>
                                </table>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <br/><br/>
                                    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"{{ path('ordre_de_sortie_repartition',{types: types,numero: numero_de_sortie }) }}\" target=\"_blank\" style=\" text-decoration:none;\" class=\"btn btn-outline-danger\">Imprimer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Bordereaux -->
                 <div class=\"tab-pane\" id=\"bordereau\">
                    <div class=\"row border g-0 rounded shadow-sm\">
                        <div class=\"col p-4\">
                            <h4 class=\"h4\">Bordéreau d'envoi N° {{ numero }} --{{ types_order[types - 1]}} </h4>
                            <div class=\"table responsive-xxl\">
                                <table  class=\"table table-bordered table-hover\">
                                    {% set bureau = 0 %}
                                    {% for pro in dispo %}
                                    <tr>
                                        <td>{{ pro.bureau }}</td>
                                        <td><a href=\"{{ path('bordereau',{type: types,numero: pro.numeroSortie, bureau: pro.idBureau }) }}\" target=\"_blank\"> <i class='fa fa-info-circle' id=\"info\"> info</i></a></td>
                                        {% set bureau = bureau + 1 %}
                                    </tr>
                                    {% endfor %}
                                </table>
                            </div>
                            <p class=\"fw-bolder\"> {{ bureau }} Bureau(x), pour chaque papier à imprimer</p>
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
", "order/ordre.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\ordre.html.twig");
    }
}
