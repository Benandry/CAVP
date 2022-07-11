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

/* periode/annuel.html.twig */
class __TwigTemplate_d100e45f09f46deb58427c694f14c3a2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "periode/annuel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Etat de stock par mois ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<main>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <h5> Etat de stock par mois</h5>
        <div class=\"row\" >
            <div class=\"col-12\">
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container p-4\">
                        <div class=\"row\">
                            <div class=\"col\">
                            <h3 class=\"q-title\"><p style=\"color:#333940;\" class=\"lead\" > Situation du stock au année : <span style=\"color:#498000;\">2022</span></p> </h2>
                                <div class=\"q-display p-3\">
                                    <p class=\"d-inline\"> 
                                    <ul class=\"nav\">
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Par </a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                                                <a class=\"dropdown-item\" href=\"#\">Actuel</a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_mensuel", ["source" => "etat mensuel"]);
            echo "\">Mensuel</a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("periode_annuel", ["source" => "etat annuel"]);
            echo "\">Annuel</a>
                                            </div>
                                        </li>
                                    </ul>                          
                                    <div class=\"table responsive-xxl\">
                                            <table class=\"table table-striped table-bordered table-hover\" data-toggle=\"table\" data-search=\"true\">
                                                <thead>
                                                    <tr class=\"table-danger\">
                                                        <th data-sortable=\"true\" data-field=\"Ordre\"> Ordre</th>
                                                        <th data-field=\"Categorie\"> Categorie </th>
                                                        <th data-field=\"Valeur Faciales\">Valeur Faciales</th>
                                                        <th data-field=\"Stock initial\">Stock initial</th>
                                                        <th data-field=\"Entrée\">Entrée</th>
                                                        <th data-field=\"Sortie\">Sortie</th>
                                                        <th data-field=\"Sock Actuel\">Stock Acteul </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 45
                echo "                                                        <tr>
                                                            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo " 
                                                                
                                                                ";
                    // line 48
                    if (($context["key2"] == "ordre")) {
                        // line 49
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo "  </td>
                                                                ";
                    } elseif ((                    // line 50
$context["key2"] == "NomDeCategorie")) {
                        // line 51
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                ";
                    } elseif ((                    // line 52
$context["key2"] == "valeurFaciale")) {
                        // line 53
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>
                                                                ";
                    } elseif ((                    // line 54
$context["key2"] == "initiale")) {
                        // line 55
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["initial"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                        echo " </td> 
                                                                ";
                    } elseif ((                    // line 56
$context["key2"] == "entrer")) {
                        // line 57
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, ((($__internal_compile_1 = ($context["entree"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null) - (($__internal_compile_2 = ($context["initial"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)), "html", null, true);
                        echo " </td> 
                                                                ";
                    } elseif ((                    // line 58
$context["key2"] == "sortie")) {
                        // line 59
                        echo "                                                                    ";
                        if (twig_test_empty(($context["out"] ?? null))) {
                            // line 60
                            echo "                                                                        <td> 0 </td> 
                                                                    ";
                        } else {
                            // line 62
                            echo "                                                                        <td> ";
                            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["out"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null), "html", null, true);
                            echo " </td>
                                                                    ";
                        }
                        // line 63
                        echo " 
                                                                ";
                    } elseif ((                    // line 64
$context["key2"] == "actuelle")) {
                        // line 65
                        echo "                                                                    <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td>                                                                                                                    
                                                                ";
                    }
                    // line 67
                    echo "                                                                
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
                                                </tbody>
                                            </table>
                                    </div>
                                    </p>
                                    <div class=\"d-flex flex-row-reverse bd-highlight\">
                                        <div class=\"p-2 bd-highlight\">
                                            <p> Antananarivo le ,";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>

                                            <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
                                            <p> <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_etat");
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
        } else {
            // line 92
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
        </p>
    ";
        }
        // line 98
        echo " 
</main>>
";
    }

    public function getTemplateName()
    {
        return "periode/annuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 98,  231 => 96,  225 => 92,  211 => 81,  205 => 78,  196 => 71,  189 => 69,  182 => 67,  176 => 65,  174 => 64,  171 => 63,  165 => 62,  161 => 60,  158 => 59,  156 => 58,  151 => 57,  149 => 56,  144 => 55,  142 => 54,  137 => 53,  135 => 52,  130 => 51,  128 => 50,  123 => 49,  121 => 48,  114 => 46,  111 => 45,  107 => 44,  84 => 24,  80 => 23,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "periode/annuel.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\periode\\annuel.html.twig");
    }
}
