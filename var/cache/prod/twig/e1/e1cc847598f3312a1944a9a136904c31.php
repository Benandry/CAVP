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
class __TwigTemplate_f18835e7813598fa9f4fbce8b927487d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "etat/etat_de_stock.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Etat de stock | Paositra malagasy! ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        // line 6
        echo "     ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 7
        echo "    ";
        // line 8
        echo "
    <main>
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h2 class=\"fw-normal text-danger text-center\"> Etat de stocks: <span style=\"color:#498000;\"> ";
            // line 17
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
            echo "</span></h2>
                                    <div class=\"q-display p-3\">
                                        <span class=\"btn btn-danger btn-sm disabled\">Selectionner les : </span>
                                        <button type=\"button\" class=\"btn btn-sm btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Produits</button>
                                        <div class=\"modal\" id=\"myModal\">
                                            ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\"> Nom de produit </h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                    </div>
                                                    ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                                                    <div class=\"modal-body\">
                                                        <div class=\"form-group\">
                                                            <label for=\"select\">Nom de produit</label>
                                                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "select", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                            <div class=\"form-group\">
                                                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 38), 'row', ["label" => "Selectionner"]);
            echo "
                                                            </div>
                                                    </div>
                                                    ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <!--*****************************************************************************************************-->
                                        <form action=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\" class=\"float-end\">
                                            <label for=\"ldate\">Preciser le mois :</label>
                                            <input type=\"month\" id=\"ldate\" name=\"ldate\">
                                            <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
                                        </form>
                                                
                                        ";
            // line 52
            if ((($context["issubmitted"] ?? null) == true)) {
                // line 53
                echo "                                            <h4 class=\"text-danger\"><label for=\"cars\">Nom du produits :<em>  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, false, false, 53), "Produits", [], "any", false, false, false, 53), "html", null, true);
                echo "</em></h4>
                                        ";
            }
            // line 55
            echo "                                        <!-- **********************************************************************************-->
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <input id=\"search\" type=\"text\"  placeholder=\"Recherche...\"> 
                                        </div>
                                    </div>
                                    <form action=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock");
            echo "\" class=\"mb-3\">
                                        <label for=\"year\">Année  :</label>
                                            <select name=\"year\" id=\"year\">
                                                ";
            // line 65
            $context["value"] = 2000;
            // line 66
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range( -30, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 67
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, (($context["value"] ?? null) + $context["i"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($context["value"] ?? null) + $context["i"]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                            </select>
                                        <input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\">
                                    </form> 

                                    <div class=\"table responsive-xxl\">
                                        <table class=\"table table-striped table-bordered table-hover\" id=\"myTableEtat\" >
                                            <thead>
                                                <tr class=\"table-danger\">
                                                    <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                    ";
            // line 78
            if ((($context["issubmitted"] ?? null) == false)) {
                // line 79
                echo "                                                        <th data-field=\"Categorie\"> Produit </th>
                                                    ";
            }
            // line 81
            echo "                                                    <th data-field=\"produit\"> Categorie </th>
                                                    <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                    <th data-field=\"Stock initial\">Stock initial</th>
                                                    <th data-field=\"Entrée\">Entrée</th>
                                                    <th data-field=\"Sortie\">Sortie</th>
                                                    <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id=\"table\">
                                            ";
            // line 91
            $context["sumValueInit"] = 0;
            // line 92
            echo "                                            ";
            $context["sumValueEnter"] = 0;
            // line 93
            echo "                                            ";
            $context["sumValueOut"] = 0;
            // line 94
            echo "                                            ";
            $context["sumValueCurrent"] = 0;
            // line 95
            echo "                                            ";
            $context["valeur"] = 0;
            // line 96
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 97
                echo "                                                    <tr>
                                                        ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                            
                                                            ";
                    // line 100
                    if (($context["key2"] == "ordre")) {
                        // line 101
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                            ";
                    } elseif ((                    // line 102
$context["key2"] == "NomDeCategorie")) {
                        // line 103
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>  
                                                            ";
                    } elseif ((                    // line 104
$context["key2"] == "produit")) {
                        // line 105
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                            ";
                    } elseif ((                    // line 106
$context["key2"] == "valeurFaciale")) {
                        // line 107
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                            ";
                    } elseif ((                    // line 108
$context["key2"] == "initiale")) {
                        // line 109
                        echo "                                                                ";
                        $context["valeur"] = (($__internal_compile_1 = (($__internal_compile_2 = ($context["initial"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 110
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td>
                                                                ";
                        // line 111
                        $context["sumValueInit"] = (($context["sumValueInit"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
                                                            ";
                    } elseif ((                    // line 112
$context["key2"] == "entrer")) {
                        // line 113
                        echo "                                                                ";
                        $context["valeur"] = ((($__internal_compile_3 = (($__internal_compile_4 = ($context["entree"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null) - (($__internal_compile_5 = (($__internal_compile_6 = ($context["initial"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null));
                        // line 114
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
                                                                ";
                        // line 115
                        $context["sumValueEnter"] = (($context["sumValueEnter"] ?? null) + ($context["valeur"] ?? null));
                        // line 116
                        echo "                                                            ";
                    } elseif (($context["key2"] == "sortie")) {
                        // line 117
                        echo "                                                                ";
                        if (twig_test_empty(($context["out"] ?? null))) {
                            // line 118
                            echo "                                                                    ";
                            $context["valeur"] = 0;
                            // line 119
                            echo "                                                                    <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                            echo " </td> 
                                                                    ";
                            // line 120
                            $context["sumValueOut"] = (($context["sumValueOut"] ?? null) + ($context["valeur"] ?? null));
                            // line 121
                            echo "                                                                ";
                        } else {
                            // line 122
                            echo "                                                                    ";
                            $context["valeur"] = abs((($__internal_compile_7 = (($__internal_compile_8 = ($context["out"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["key"]] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null));
                            // line 123
                            echo "                                                                    ";
                            $context["sumValueOut"] = (($context["sumValueOut"] ?? null) + ($context["valeur"] ?? null));
                            // line 124
                            echo "                                                                    <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                            echo " </td>
                                                                ";
                        }
                        // line 125
                        echo " 
                                                            ";
                    } elseif ((                    // line 126
$context["key2"] == "actuelle")) {
                        // line 127
                        echo "                                                                ";
                        $context["valeur"] = $context["value2"];
                        // line 128
                        echo "                                                                ";
                        $context["sumValueCurrent"] = (($context["sumValueCurrent"] ?? null) + ($context["valeur"] ?? null));
                        // line 129
                        echo "                                                                <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td>                                                                                                                   
                                                            ";
                    }
                    // line 131
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                                    <tr>
                                                        ";
            // line 135
            $context["valeur"] = 0;
            // line 136
            echo "                                                        ";
            if ((($context["issubmitted"] ?? null) == true)) {
                // line 137
                echo "                                                            <th colspan=\"3\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        ";
            } else {
                // line 139
                echo "                                                        <th colspan=\"4\" class=\"text-right pr-3\"> Total (nombre)</th>
                                                        ";
            }
            // line 141
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["total"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 142
                echo "                                                                    ";
                if (($context["key"] == "initiale")) {
                    // line 143
                    echo "                                                                        ";
                    $context["valeur"] = ($context["sumValueInit"] ?? null);
                    // line 144
                    echo "                                                                        <th id=\"sumInit\">  ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 145
$context["key"] == "entrer")) {
                    // line 146
                    echo "                                                                        <th id=\"sumEnter\"> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueEnter"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 147
$context["key"] == "sortie")) {
                    echo " 
                                                                        <th>";
                    // line 148
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueOut"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                } elseif ((                // line 149
$context["key"] == "actuelle")) {
                    echo "                                                                            
                                                                        <th> ";
                    // line 150
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueCurrent"] ?? null), 0, ",", " "), "html", null, true);
                    echo " </th>
                                                                    ";
                }
                // line 152
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <p> Antananarivo le ,";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>
                                            <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            
                                            ";
            // line 162
            if ((($context["issubmitted"] ?? null) == false)) {
                // line 163
                echo "                                                <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_product", ["mois" => ($context["month"] ?? null), "annee" => ($context["year"] ?? null)]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a></p>
                                            ";
            } else {
                // line 165
                echo "                                                <p> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_select", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["init"] ?? null), 0, [], "any", false, false, false, 165), "id", [], "any", false, false, false, 165), "mois" => ($context["month"] ?? null), "annee" => ($context["year"] ?? null)]), "html", null, true);
                echo "\" target=\"_blank\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer ce fichier</button></a></p>
                                            ";
            }
            // line 167
            echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 176
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 179
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 182
        echo "    </main>
";
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
        return array (  463 => 182,  457 => 179,  452 => 176,  441 => 167,  435 => 165,  429 => 163,  427 => 162,  421 => 159,  413 => 153,  407 => 152,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  385 => 146,  383 => 145,  378 => 144,  375 => 143,  372 => 142,  367 => 141,  363 => 139,  359 => 137,  356 => 136,  354 => 135,  351 => 134,  344 => 132,  338 => 131,  332 => 129,  329 => 128,  326 => 127,  324 => 126,  321 => 125,  315 => 124,  312 => 123,  309 => 122,  306 => 121,  304 => 120,  299 => 119,  296 => 118,  293 => 117,  290 => 116,  288 => 115,  283 => 114,  280 => 113,  278 => 112,  274 => 111,  269 => 110,  266 => 109,  264 => 108,  259 => 107,  257 => 106,  252 => 105,  250 => 104,  245 => 103,  243 => 102,  238 => 101,  236 => 100,  229 => 98,  226 => 97,  221 => 96,  218 => 95,  215 => 94,  212 => 93,  209 => 92,  207 => 91,  195 => 81,  191 => 79,  189 => 78,  178 => 69,  167 => 67,  162 => 66,  160 => 65,  154 => 62,  145 => 55,  139 => 53,  137 => 52,  128 => 46,  120 => 41,  114 => 38,  106 => 33,  99 => 29,  89 => 22,  79 => 17,  71 => 11,  69 => 10,  65 => 8,  63 => 7,  60 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "etat/etat_de_stock.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\etat\\etat_de_stock.html.twig");
    }
}
