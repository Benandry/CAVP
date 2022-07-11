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

/* historique/history.html.twig */
class __TwigTemplate_9e3d191c0546d85736468926c95fb623 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "historique/history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Compte rendu | Paositra Malagasy
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<main>
\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t<div class=\"row\">
\t\t\t
\t\t\t";
            // line 11
            if ((($context["description"] ?? null) == "")) {
                // line 12
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu des produits </h2>
\t\t\t";
            } elseif ((            // line 13
($context["description"] ?? null) == 1)) {
                // line 14
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits entrées </h2>
\t\t\t";
            } elseif ((            // line 15
($context["description"] ?? null) == 2)) {
                // line 16
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Reintegrées </h2>
\t\t\t";
            } elseif ((            // line 17
($context["description"] ?? null) == 3)) {
                // line 18
                echo "\t\t\t\t<h2 class=\"fw-bolder text-center\">Compte rendu produits Sorties </h2>
\t\t\t";
            }
            // line 20
            echo "\t\t\t<div class=\"col\">
\t\t\t\t<span class=\"float-start\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a class=\"btn btn-secondary dropdown-toggle btn-sm\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tTypes d'opreations
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
            echo "\">Tous</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 1]);
            echo "\">Entrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 2]);
            echo "\">Reintegrées</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["description" => 3]);
            echo "\">Sorties</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history");
            echo "\" class=\"float-end\">
\t\t\t\t\t<label for=\"ldate\">Preciser le mois :</label>
\t\t\t\t\t<input type=\"month\" id=\"ldate\" name=\"ldate\">
\t\t\t\t\t<input type=\"submit\" value=\"Trier\" class=\"btn btn-danger btn-sm\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<div class=\"row\">
\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["history"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
                // line 55
                echo "\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t<div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
\t\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\t\t<h4 style=\"display: flex;\"><img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/calendrier.png"), "html", null, true);
                echo "\" width=\"30\" height=\"35\">
\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t<span class=\"text-uppercase\" style=\"color:#498000;\">
\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 61), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "

\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class='fas fa-coins' class=\"admin\"></i>
\t\t\t\t\t\t\t\tproduits :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 68), "html", null, true);
                echo "</span> (<span style=\"color:#498000;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types_order", [], "any", false, false, false, 68), "html", null, true);
                echo "</span>)
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t<i class=\"far fa-anchor\"></i>
\t\t\t\t\t\t\t\tCategorie :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\tAction :
\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 75), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], "desccriptions", [], "any", false, false, false, 77) == "Sorties des Catégories")) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre de categorie(s) sortie(s) : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 79
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 79)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 81
$context["histo"], "desccriptions", [], "any", false, false, false, 81) == "Ajouter des nouveaux Catégories")) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre de categorie(s) ajoutée(s) : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 83
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 83)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 85
$context["histo"], "desccriptions", [], "any", false, false, false, 85) == "Réintegration")) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<u>Nombre de categorie(s) integrer au CAVP : </u>
\t\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 87
                    echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 87)), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], "desccriptions", [], "any", false, false, false, 90) == "Ajouter des nouveaux Catégories")) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\tvient du bureau :
\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 92), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 94
$context["histo"], "desccriptions", [], "any", false, false, false, 94) == "Réintegration")) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\trevient de  :
\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 96), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 98
$context["histo"], "desccriptions", [], "any", false, false, false, 98) == "Sorties des Catégories")) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\tDestination :
\t\t\t\t\t\t\t\t\t<span style=\"color:#498000;\">";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 100), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 103) == "sortie")) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_out", ["types" => twig_get_attribute($this->env, $this->source, $context["histo"], "types_prod", [], "any", false, false, false, 104), "numero" => twig_get_attribute($this->env, $this->source, $context["histo"], "numero", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\" class=\"button margin-right-md margin-bottom-md btn-danger btn-sm\">Ordre de sortie →</a>
\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "\t\t</div>
\t\t";
        } else {
            // line 113
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 121
        echo "\t</main>
";
    }

    public function getTemplateName()
    {
        return "historique/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 121,  277 => 117,  271 => 113,  267 => 111,  257 => 106,  251 => 104,  248 => 103,  242 => 100,  239 => 99,  237 => 98,  232 => 96,  229 => 95,  227 => 94,  222 => 92,  219 => 91,  216 => 90,  210 => 87,  207 => 86,  205 => 85,  200 => 83,  197 => 82,  195 => 81,  190 => 79,  187 => 78,  185 => 77,  180 => 75,  174 => 72,  165 => 68,  155 => 61,  149 => 58,  144 => 55,  140 => 54,  128 => 45,  118 => 38,  112 => 35,  106 => 32,  100 => 29,  89 => 20,  85 => 18,  83 => 17,  80 => 16,  78 => 15,  75 => 14,  73 => 13,  70 => 12,  68 => 11,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "historique/history.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\history.html.twig");
    }
}
