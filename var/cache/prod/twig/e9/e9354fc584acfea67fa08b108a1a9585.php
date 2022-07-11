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
class __TwigTemplate_560826bb9318c96e7939f83e6ddb732f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/ordre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ordre de sortie | Paositra Malagasy";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main>
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "types", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                        <div class=\"form-group\">
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numero", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                            <div class=\"form-group\">
                            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 21), 'row', ["label" => "valider", "attr" => ["class" => "btn btn-danger btn-sm"]]);
            echo "
                        </div>
                    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["types_order"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($context["types"] ?? null) - 1)] ?? null) : null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
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
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["tt"] ?? null), 0, ",", " "), "html", null, true);
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
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["prix"] ?? null), 0, ",", " "), "html", null, true);
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
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["mt"] ?? null), 0, ",", " "), "html", null, true);
                    echo "
                                                    </td>
                                                ";
                }
                // line 76
                echo "                                                ";
                $context["somme"] = (($context["somme"] ?? null) + ($context["prix"] ?? null));
                // line 77
                echo "                                                ";
                $context["bureau"] = (($context["bureau"] ?? null) + 1);
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
            echo twig_escape_filter($this->env, ($context["somme"] ?? null), "html", null, true);
            echo "</span>
                                              ";
            // line 84
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["somme"] ?? null), 0, ",", " "), "html", null, true);
            echo " 
                                            </td>
                                        </tr>
                                    <tbody>
                                </table>
                               <p> ";
            // line 89
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_recaputilation", ["types" => ($context["types"] ?? null), "numero" => ($context["numero_de_sortie"] ?? null)]), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["types_order"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(($context["types"] ?? null) - 1)] ?? null) : null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
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
                        $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ordre_de_sortie_repartition", ["types" => ($context["types"] ?? null), "numero" => ($context["numero_de_sortie"] ?? null)]), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
            echo " --";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["types_order"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(($context["types"] ?? null) - 1)] ?? null) : null), "html", null, true);
            echo " </h4>
                            <div class=\"table responsive-xxl\">
                                <table  class=\"table table-bordered table-hover\">
                                    ";
            // line 164
            $context["bureau"] = 0;
            // line 165
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dispo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 166
                echo "                                    <tr>
                                        <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 167), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau", ["type" => ($context["types"] ?? null), "numero" => twig_get_attribute($this->env, $this->source, $context["pro"], "numeroSortie", [], "any", false, false, false, 168), "bureau" => twig_get_attribute($this->env, $this->source, $context["pro"], "idBureau", [], "any", false, false, false, 168)]), "html", null, true);
                echo "\" target=\"_blank\"> <i class='fa fa-info-circle' id=\"info\"> info</i></a></td>
                                        ";
                // line 169
                $context["bureau"] = (($context["bureau"] ?? null) + 1);
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
            echo twig_escape_filter($this->env, ($context["bureau"] ?? null), "html", null, true);
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
        return array (  447 => 186,  441 => 184,  436 => 181,  426 => 174,  422 => 172,  415 => 170,  413 => 169,  409 => 168,  405 => 167,  402 => 166,  397 => 165,  395 => 164,  387 => 161,  374 => 151,  369 => 149,  361 => 143,  354 => 141,  348 => 140,  342 => 138,  339 => 137,  333 => 136,  329 => 134,  323 => 132,  320 => 131,  315 => 130,  313 => 129,  308 => 128,  306 => 127,  301 => 126,  298 => 125,  294 => 124,  291 => 123,  287 => 122,  281 => 118,  272 => 116,  268 => 115,  256 => 108,  243 => 98,  238 => 96,  228 => 89,  220 => 84,  216 => 83,  211 => 80,  204 => 78,  201 => 77,  198 => 76,  191 => 73,  189 => 72,  186 => 71,  183 => 70,  177 => 68,  174 => 67,  172 => 66,  166 => 64,  164 => 63,  159 => 61,  155 => 60,  151 => 59,  147 => 58,  144 => 57,  139 => 56,  136 => 55,  134 => 54,  114 => 39,  95 => 23,  90 => 21,  84 => 18,  78 => 15,  72 => 12,  68 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/ordre.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\ordre.html.twig");
    }
}
