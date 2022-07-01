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
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 61)), "html", null, true);
                echo "</td>
                                                <td>";
                // line 62
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 62) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 62))), "html", null, true);
                echo "</td>
                                                ";
                // line 63
                if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 63) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 63)))) {
                    // line 64
                    echo "                                                    ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 64) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 64))) * 1);
                    // line 65
                    echo "                                                    <td>";
                    echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 65, $this->source); })()), "html", null, true);
                    echo "</td>
                                                ";
                } else {
                    // line 67
                    echo "                                                    ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 67) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 67))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 67));
                    // line 68
                    echo "                                                    <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 68) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 68))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 68)), "html", null, true);
                    echo "</td>
                                                ";
                }
                // line 70
                echo "                                                ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 70, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 70, $this->source); })()));
                // line 71
                echo "                                                ";
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 71, $this->source); })()) + 1);
                // line 72
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                            <tr>
                                                <th>Observations </t>
                                                <td colspan=\"6\"> ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "  observations </td>
                                            </tr>
                                    <tbody>
                                </table>  
                            </div>
                            <div>
                                <p class=\"uppercase\">ARRETE A LA SOMME DE:<p>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <div >
                                        <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 87, $this->source); })()), "html", null, true);
            echo " <span > Ar<p>
                                    </div>
                                    <br/><br/>
                                    <p> Antananarivo le ,";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_recaputilation", ["types" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 92, $this->source); })()), "numero" => (isset($context["numero_de_sortie"]) || array_key_exists("numero_de_sortie", $context) ? $context["numero_de_sortie"] : (function () { throw new RuntimeError('Variable "numero_de_sortie" does not exist.', 92, $this->source); })())]), "html", null, true);
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
            // line 102
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 102, $this->source); })()), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 102, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 102, $this->source); })()) - 1), [], "array", false, false, false, 102), "html", null, true);
            echo " </h4>
                           <div class=\"table responsive-xxl\">
                                <table class=\"table table-bordered table-hover\" >
                                    <thead>
                                        <tr>
                                            <th>Ordre</th>
                                            <th>Valeur Faciales </th>
                                             ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 109, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 110
                echo "                                                    <th> ";
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 110)), "html", null, true);
                echo "</th>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                            <th>total par bureau </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 116, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 117
                echo "                                                <tr>
                                                ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    // line 119
                    echo "                                                    ";
                    if (($context["key1"] == "ordre")) {
                        // line 120
                        echo "                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    } elseif ((                    // line 121
$context["key1"] == "vf")) {
                        // line 122
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    } elseif ((                    // line 123
$context["key1"] == "nombre_cat")) {
                        // line 124
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 124, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                            // line 125
                            echo "                                                            ";
                            if ((abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 125)) == abs($context["value1"]))) {
                                // line 126
                                echo "                                                                <td> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 126), "html", null, true);
                                echo "</td>
                                                            ";
                            } else {
                                // line 128
                                echo "                                                                <td> 0</td>
                                                            ";
                            }
                            // line 130
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 131
                        echo "                                                    ";
                    } elseif (($context["key1"] == "nombre_agence")) {
                        // line 132
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $context["value1"], "html", null, true);
                        echo "</td>
                                                    ";
                    }
                    // line 134
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                                                </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    <tbody>
                                </table>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <div >
                                        <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> 200 <span > Ar<p>
                                    </div>
                                    <br/><br/>
                                    <p> Antananarivo le ,";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</p>
                                    <p><span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                    <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_repartition", ["types" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 148, $this->source); })()), "numero" => (isset($context["numero_de_sortie"]) || array_key_exists("numero_de_sortie", $context) ? $context["numero_de_sortie"] : (function () { throw new RuntimeError('Variable "numero_de_sortie" does not exist.', 148, $this->source); })())]), "html", null, true);
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
            // line 158
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 158, $this->source); })()), "html", null, true);
            echo " --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 158, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 158, $this->source); })()) - 1), [], "array", false, false, false, 158), "html", null, true);
            echo " </h4>
                            <div class=\"table responsive-xxl\">
                                <table  class=\"table table-bordered table-hover\">
                                    ";
            // line 161
            $context["bureau"] = 0;
            // line 162
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 163
                echo "                                    <tr>
                                        <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 164), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau", ["type" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 165, $this->source); })()), "numero" => twig_get_attribute($this->env, $this->source, $context["pro"], "numeroSortie", [], "any", false, false, false, 165), "bureau" => twig_get_attribute($this->env, $this->source, $context["pro"], "idBureau", [], "any", false, false, false, 165)]), "html", null, true);
                echo "\" target=\"_blank\"> <i class='fa fa-info-circle' id=\"info\"> info</i></a></td>
                                        ";
                // line 166
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 166, $this->source); })()) + 1);
                // line 167
                echo "                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                </table>
                            </div>
                            <p class=\"fw-bolder\"> ";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 171, $this->source); })()), "html", null, true);
            echo " Bureau(x), pour chaque papier à imprimer</p>
                        </div>
                    </div>
                </div>

            </div>
        ";
        } else {
            // line 178
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 181
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 183
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
        return array (  466 => 183,  460 => 181,  455 => 178,  445 => 171,  441 => 169,  434 => 167,  432 => 166,  428 => 165,  424 => 164,  421 => 163,  416 => 162,  414 => 161,  406 => 158,  393 => 148,  388 => 146,  377 => 137,  370 => 135,  364 => 134,  358 => 132,  355 => 131,  349 => 130,  345 => 128,  339 => 126,  336 => 125,  331 => 124,  329 => 123,  324 => 122,  322 => 121,  317 => 120,  314 => 119,  310 => 118,  307 => 117,  303 => 116,  297 => 112,  288 => 110,  284 => 109,  272 => 102,  259 => 92,  254 => 90,  248 => 87,  234 => 76,  230 => 74,  223 => 72,  220 => 71,  217 => 70,  211 => 68,  208 => 67,  202 => 65,  199 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  174 => 57,  169 => 56,  166 => 55,  164 => 54,  144 => 39,  125 => 23,  120 => 21,  114 => 18,  108 => 15,  102 => 12,  98 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                                <td>{{ pro.quantite|abs}}</td>
                                                <td>{{ pro.tpParPl * pro.quantite|abs }}</td>
                                                {% if pro.vf == 0 or pro.vf is null  %}
                                                    {% set  prix = pro.tpParPl * pro.quantite|abs * 1 %}
                                                    <td>{{ prix }}</td>
                                                {% else %}
                                                    {% set  prix = pro.tpParPl * pro.quantite|abs * pro.vf %}
                                                    <td>{{ pro.tpParPl * pro.quantite|abs * pro.vf }}</td>
                                                {% endif %}
                                                {% set somme = somme + prix %}
                                                {% set bureau = bureau + 1 %}
                                            </tr>
                                        {% endfor %}
                                            <tr>
                                                <th>Observations </t>
                                                <td colspan=\"6\"> {{ bureau }}  observations </td>
                                            </tr>
                                    <tbody>
                                </table>  
                            </div>
                            <div>
                                <p class=\"uppercase\">ARRETE A LA SOMME DE:<p>
                            </div>
                            <div class=\"d-flex flex-row-reverse bd-highlight\">
                                <div class=\"p-2 bd-highlight\">
                                    <div >
                                        <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> {{ somme }} <span > Ar<p>
                                    </div>
                                    <br/><br/>
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
                                    <div >
                                        <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> 200 <span > Ar<p>
                                    </div>
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
