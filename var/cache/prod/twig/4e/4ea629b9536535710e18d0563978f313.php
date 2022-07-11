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

/* mouvement_controller_crud/new.html.twig */
class __TwigTemplate_a5a819d9fc74a2904be9139d663fcb76 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nouveaux operation ";
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
            echo "        <div class=\"container-fluid pt-3\">
            <div class=\"box-element card card-solid\">
                <div class=\"card card-body\" id=\"new_operation\">
                    <h3 class=\"fw-normal text-center\" style=\"color:#e3151a;margin: 2px auto;\">Creation de nouveau opération</h3>
                    <p id=\"user\"> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "  </p>
                    <div>
                        <div class=\"alert alert-danger text-center\" role=\"alert\" id=\"stock_actuelle\">
                        </div>
                            ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                            <div class=\"row\">
                                <div class=\"col-4\">
                                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "produit", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Categorie", [], "any", false, false, false, 22), 'row');
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Agence", [], "any", false, false, false, 25), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"dateEntrer\">
                                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateEntrer", [], "any", false, false, false, 28), 'row');
            echo "
                                </div>
                                <div id=\"type\" class=\"col-4\">
                                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "types", [], "any", false, false, false, 31), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"descriptions\">
                                ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descriptions", [], "any", false, false, false, 34), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"utilisateur\">
                                ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "User", [], "any", false, false, false, 37), 'row');
            echo "
                                </div>
                                <div id=\"quantite\" class=\"col-4\">
                                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, false, false, 40), 'row');
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "reference", [], "any", false, false, false, 43), 'row');
            echo "
                                </div>
                                <div id=\"numero\" class=\"col-4\">
                                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numero_de_sortie", [], "any", false, false, false, 46), 'row');
            echo "
                                </div>
                            </div>
                            ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "</p>
                    </div>
                    <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
            echo "\">Afficher la liste</a>
                    
                </div>
            </div>
            
        </div>
        ";
        } else {
            // line 58
            echo "        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
        </p>
        ";
        }
        // line 64
        echo "   
    </main>
";
    }

    public function getTemplateName()
    {
        return "mouvement_controller_crud/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  163 => 62,  157 => 58,  147 => 51,  142 => 49,  136 => 46,  130 => 43,  124 => 40,  118 => 37,  112 => 34,  106 => 31,  100 => 28,  94 => 25,  88 => 22,  82 => 19,  76 => 16,  69 => 12,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mouvement_controller_crud/new.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\new.html.twig");
    }
}
