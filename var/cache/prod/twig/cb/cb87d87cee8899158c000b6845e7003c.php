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

/* mouvement_controller_crud/show.html.twig */
class __TwigTemplate_241af356d693ca36e99ea937b8c33bbc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Detail de l'operation sur le categorie \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "Categorie", [], "any", false, false, false, 3), "html", null, true);
        echo " \" ";
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
            echo "            <h2 class=\"fw-bolder text-center\">Detail de l'operation sur le categorie <i> \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "Categorie", [], "any", false, false, false, 8), "html", null, true);
            echo " \"</i> </h2>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Produits</th>
                        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "produit", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Catégorie</th>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "Categorie", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Quantite</th>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "quantite", [], "any", false, false, false, 21)), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>References</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "reference", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Agence</th>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "Agence", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Date d'operation</th>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "dateEntrer", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Types d'operation</th>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "types", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    </tr>
                </tbody>
            </table>

            <p><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
            echo "\">Retour a la liste d'operation</a></p>
            <form method=\"post\" action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\" class=\"float-end\">
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editer</a>
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "id", [], "any", false, false, false, 45))), "html", null, true);
            echo "\">
                <button class=\"btn btn-danger btn-sm\">Supprimer</button>
            </form>
        
        ";
        } else {
            // line 50
            echo "            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 56
        echo "    </main>

";
    }

    public function getTemplateName()
    {
        return "mouvement_controller_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  149 => 53,  144 => 50,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  116 => 37,  109 => 33,  102 => 29,  95 => 25,  88 => 21,  81 => 17,  74 => 13,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mouvement_controller_crud/show.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\show.html.twig");
    }
}
