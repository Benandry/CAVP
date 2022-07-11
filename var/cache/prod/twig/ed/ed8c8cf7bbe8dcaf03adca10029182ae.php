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

/* mouvement/entrer.html.twig */
class __TwigTemplate_7576aa4a565dfe19333ed0010f9c841b extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "mouvement/entrer.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Produits entrer | Paositra malagasy!";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <main>
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <div class=\"row\" >
                <div class=\"col-12\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col\">
                                <h4 class=\"q-title\" style=\"color: #e3151a;\">Touts les produits entrée &#128520</h4>
                                    <div class=\"q-display p-3\">
                                        <div class=\"class=\"table responsive-xxl\"\">
                                            <table class=\"table table-striped table-bordered table-hover\">
                                                <thead>
                                                    <tr class=\"table-danger\">
                                                        <th scope=\"col\"> Nom du produits </th>
                                                        <th scope=\"col\"> Abreviation </th>  
                                                        <th scope=\"col\"> Quantités </th>
                                                        <th scope=\"col\">  Date  </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entrer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entre"]) {
                // line 29
                echo "                                                        <tr>
                                                            <td> ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "nomProduit", [], "any", false, false, false, 30), "html", null, true);
                echo "</td> 
                                                            <td> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "Abbreviation", [], "any", false, false, false, 31), "html", null, true);
                echo "</td> 
                                                            <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "quantite", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["entre"], "dateEntrer", [], "any", false, false, false, 33), "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                                </tbody>
                                            </table>
                                        </div>
                                                <div>
                                                    <p>
                                                        Antananarivo le ,";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </br>

                                                        <span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br/>
                                                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo " 

                                                    </p>
                                                    <p>
                                                        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pro_entrer");
            echo "\" style=\"color: #fff; text-decoration:none;\"><button class=\"btn btn-outline-danger\" >Imprimer</button></a>
                                                    </p>
                                                </div>
                                        <p class=\"pt-4\"><strong>--Timbre postales --</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 60
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
        </p>

        ";
        }
        // line 68
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "mouvement/entrer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 68,  153 => 64,  147 => 60,  132 => 48,  125 => 44,  119 => 41,  112 => 36,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  88 => 29,  84 => 28,  63 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mouvement/entrer.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement\\entrer.html.twig");
    }
}
