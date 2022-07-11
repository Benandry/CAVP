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

/* mouvement_controller_crud/edit.html.twig */
class __TwigTemplate_15bc95a24ff6cf73fb0a7701f6513d46 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification de l'operation | Paositra Malagasy ";
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
            echo "        <h2 class=\"fw-bolder text-center\">Editer l'operation sur le categorie \" \"</h2>
                <div id=\"flip\">Afficher les formulaire</div>
            <div id=\"panel\">
                ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                        <div class=\"row\">
                            <div class=\"col-4\">
                                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "produit", [], "any", false, false, false, 14), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Categorie", [], "any", false, false, false, 17), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Agence", [], "any", false, false, false, 20), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "types", [], "any", false, false, false, 23), 'row');
            echo "
                            </div>
                            <div class=\"col-4\" id=\"dateEntrer\">
                                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateEntrer", [], "any", false, false, false, 26), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptions", [], "any", false, false, false, 29), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "User", [], "any", false, false, false, 32), 'row');
            echo "
                            </div>
                            <div id=\"quantite\" class=\"col-4\">
                                ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, false, false, 35), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
                                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference", [], "any", false, false, false, 38), 'row');
            echo "
                            </div>
                            <div id=\"numero\" class=\"col-4\">
                                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numero_de_sortie", [], "any", false, false, false, 41), 'row');
            echo "
                            </div>
                        </div>
                ";
            // line 44
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "</p>
            </div>
            <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
            echo "\">Afficher la liste</a>

            <form method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["mouvement"] ?? null), "id", [], "any", false, false, false, 49))), "html", null, true);
            echo "\">
                <button class=\"btn btn-danger btn-sm float-end\">Supprimer</button>
            </form>
        ";
        } else {
            // line 53
            echo "            <h1>Page not found 404 </h1>

            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 60
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "mouvement_controller_crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  161 => 57,  155 => 53,  148 => 49,  144 => 48,  139 => 46,  134 => 44,  128 => 41,  122 => 38,  116 => 35,  110 => 32,  104 => 29,  98 => 26,  92 => 23,  86 => 20,  80 => 17,  74 => 14,  68 => 11,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mouvement_controller_crud/edit.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\edit.html.twig");
    }
}
