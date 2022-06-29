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
            echo "             ";
            $context["types_order"] = [0 => "PN", 1 => "FP"];
            // line 9
            echo "            <div id=\"typesNum\" class=\"btn btn-danger btn-sm\">preciser le types et numero </div>
                <div id=\"panel1\">
                    ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "types", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        <div class=\"form-group\">
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "numero", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                            <div class=\"form-group\">
                            ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "submit", [], "any", false, false, false, 20), 'row', ["label" => "valider", "attr" => ["class" => "btn btn-danger btn-sm"]]);
            echo "
                        </div>
                    ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
            <!-- Formuliare de numero de sortie -->
            <!-- =========================================================================================================================================== --> 
            <nav class=\"nav nav-tabs\">
                <a class=\"nav-item nav-link active\" style=\"font-size:16px;\" href=\"#recapitulation\" data-toggle=\"tab\">Récapitulation</a>
                <a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#repartitions\" data-toggle=\"tab\">Etat de répartition de valeurs</a>
                <a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#bordereau\" data-toggle=\"tab\">Bordereaux D'envoi</a>
            </nav>
            <!-- Récapitulation -->
            <div class=\"tab-pane active\" id=\"recapitulation\" style=\"text-align:justify\">
                <h4 class=\"h4\">Récapitulation N° ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 34, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 34, $this->source); })()) - 1), [], "array", false, false, false, 34), "html", null, true);
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
            // line 48
            $context["somme"] = 0;
            // line 49
            echo "                            ";
            $context["bureau"] = 0;
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 51
                echo "                                <tr>
                                    <td> ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 52), "html", null, true);
                echo "</td> 
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 55)), "html", null, true);
                echo "</td>
                                    <td>";
                // line 56
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 56) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 56))), "html", null, true);
                echo "</td>
                                    ";
                // line 57
                if (((twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 57) == 0) || (null === twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 57)))) {
                    // line 58
                    echo "                                        ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 58) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 58))) * 1);
                    // line 59
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 59, $this->source); })()), "html", null, true);
                    echo "</td>
                                    ";
                } else {
                    // line 61
                    echo "                                        ";
                    $context["prix"] = ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 61) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 61))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 61));
                    // line 62
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 62) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 62))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 62)), "html", null, true);
                    echo "</td>
                                    ";
                }
                // line 64
                echo "                                    ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 64, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 64, $this->source); })()));
                // line 65
                echo "                                    ";
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 65, $this->source); })()) + 1);
                // line 66
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                <tr>
                                    <th>Observations </t>
                                    <td colspan=\"6\"> ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "  observations </td>
                                </tr>
                        <tbody>
                    </table>  
                </div>
                <div>
                    <p class=\"uppercase\">ARRETE A LA SOMME DE:<p>
                </div>
            </div>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <div >
                            <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 82, $this->source); })()), "html", null, true);
            echo " <span > Ar<p>
                        </div>
                        <br/><br/>
                        <p> Antananarivo le ,";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
                        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br /><br/><br/>
                    </div>
                </div>
            <div class=\"tab-content\">
                <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"repartitions\" style=\"text-align:justify\">
                    <h4 class=\"h4\">Etat de repartition de Valeurs N° ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 92, $this->source); })()), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 92, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 92, $this->source); })()) - 1), [], "array", false, false, false, 92), "html", null, true);
            echo " </h4>
                    <div class=\"table responsive-xxl\">
                        <table class=\"table table-bordered table-hover\" >
                            <thead>
                                <tr>
                                    <th>Ordre</th>
                                    <th>Valeur Faciales </th>
                                    <th>Valeur </th>
                                    <th>total par bureau </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 105
                echo "                                    <tr>
                                        <td> ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "ordre", [], "any", false, false, false, 106), "html", null, true);
                echo "</td> 
                                        <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 108
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 108)), "html", null, true);
                echo "</td>
                                        <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
                            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br/>
                        </p>
                    </div>
                </div>
            <div class=\"tab-content\">
                <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"bordereau\" style=\"text-align:justify\">
                    <h4 class=\"h4\">Bordereau d'envoi </h4>
                    <h5>Bordéreau d'envoi N° ";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 128, $this->source); })()), "html", null, true);
            echo " --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 128, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 128, $this->source); })()) - 1), [], "array", false, false, false, 128), "html", null, true);
            echo "</h5>
                    <div class=\"table responsive-xxl\">
                        <table  class=\"table table-bordered table-hover\">
                            ";
            // line 131
            $context["bureau"] = 0;
            // line 132
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 133
                echo "                            <tr>
                                <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 134), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau", ["type" => (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 135, $this->source); })()), "numero" => twig_get_attribute($this->env, $this->source, $context["pro"], "numeroSortie", [], "any", false, false, false, 135), "bureau" => twig_get_attribute($this->env, $this->source, $context["pro"], "idBureau", [], "any", false, false, false, 135)]), "html", null, true);
                echo "\" target=\"_blank\"> <i class='fa fa-info-circle' id=\"info\"> info</i></a></td>
                                ";
                // line 136
                $context["bureau"] = ((isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 136, $this->source); })()) + 1);
                // line 137
                echo "                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                        </table>
                    </div>
                    <p class=\"fw-bolder\"> ";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["bureau"]) || array_key_exists("bureau", $context) ? $context["bureau"] : (function () { throw new RuntimeError('Variable "bureau" does not exist.', 141, $this->source); })()), "html", null, true);
            echo " Bureau(x), pour chaque papier à imprimer</p>
                </div>           
            </div>          

        ";
        } else {
            // line 146
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 151
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
        return array (  382 => 151,  376 => 149,  371 => 146,  363 => 141,  359 => 139,  352 => 137,  350 => 136,  346 => 135,  342 => 134,  339 => 133,  334 => 132,  332 => 131,  324 => 128,  312 => 119,  303 => 112,  294 => 109,  290 => 108,  286 => 107,  282 => 106,  279 => 105,  275 => 104,  258 => 92,  248 => 85,  242 => 82,  227 => 70,  223 => 68,  216 => 66,  213 => 65,  210 => 64,  204 => 62,  201 => 61,  195 => 59,  192 => 58,  190 => 57,  186 => 56,  182 => 55,  178 => 54,  174 => 53,  170 => 52,  167 => 51,  162 => 50,  159 => 49,  157 => 48,  138 => 34,  123 => 22,  118 => 20,  112 => 17,  106 => 14,  100 => 11,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ordre de sortie | Paositra Malagasy{% endblock %}

{% block body %}
    <main>
        {% if app.user %}
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
            <nav class=\"nav nav-tabs\">
                <a class=\"nav-item nav-link active\" style=\"font-size:16px;\" href=\"#recapitulation\" data-toggle=\"tab\">Récapitulation</a>
                <a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#repartitions\" data-toggle=\"tab\">Etat de répartition de valeurs</a>
                <a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#bordereau\" data-toggle=\"tab\">Bordereaux D'envoi</a>
            </nav>
            <!-- Récapitulation -->
            <div class=\"tab-pane active\" id=\"recapitulation\" style=\"text-align:justify\">
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
            </div>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <div >
                            <p> Somme total :<span class=\"btn btn-danger btn-sm disabled ms-5\"> {{ somme }} <span > Ar<p>
                        </div>
                        <br/><br/>
                        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}<br>
                        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br /><br/><br/>
                    </div>
                </div>
            <div class=\"tab-content\">
                <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"repartitions\" style=\"text-align:justify\">
                    <h4 class=\"h4\">Etat de repartition de Valeurs N° {{ numero }} -- {{ types_order[types - 1]}} </h4>
                    <div class=\"table responsive-xxl\">
                        <table class=\"table table-bordered table-hover\" >
                            <thead>
                                <tr>
                                    <th>Ordre</th>
                                    <th>Valeur Faciales </th>
                                    <th>Valeur </th>
                                    <th>total par bureau </th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for pro in dispo %}
                                    <tr>
                                        <td> {{ pro.ordre }}</td> 
                                        <td>{{ pro.vf }}</td>
                                        <td> {{ pro.nombre_cat|abs }}</td>
                                        <td>{{ pro.nombre_agence }}</td>
                                    </tr>
                                {% endfor %}
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class=\"d-flex flex-row-reverse bd-highlight\">
                    <div class=\"p-2 bd-highlight\">
                        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}<br>
                            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br/>
                        </p>
                    </div>
                </div>
            <div class=\"tab-content\">
                <!-- Récapitulation -->
                <div class=\"tab-pane active\" id=\"bordereau\" style=\"text-align:justify\">
                    <h4 class=\"h4\">Bordereau d'envoi </h4>
                    <h5>Bordéreau d'envoi N° {{ numero }} --{{ types_order[types - 1]}}</h5>
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
