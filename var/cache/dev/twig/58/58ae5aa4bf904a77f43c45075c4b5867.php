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
class __TwigTemplate_a0e15feef12e0ce843aa8610687044d7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</style>
</head>
<body>
    <div class=\"container-fluid pt-3\">
        <h3>Creation de nouveaux mouvement</h3>
        <div id=\"panel\">
            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_new");
        echo "\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "produit", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Categorie", [], "any", false, false, false, 21), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Agence", [], "any", false, false, false, 24), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateEntrer", [], "any", false, false, false, 27), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "descriptions", [], "any", false, false, false, 30), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "User", [], "any", false, false, false, 33), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "quantite", [], "any", false, false, false, 36), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "reference", [], "any", false, false, false, 39), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "types", [], "any", false, false, false, 42), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "numero_de_sortie", [], "any", false, false, false, 45), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "</p>
            </form>
        </div>
        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
        echo "\">Afficher la liste</a>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  134 => 51,  128 => 48,  122 => 45,  116 => 42,  110 => 39,  104 => 36,  98 => 33,  92 => 30,  86 => 27,  80 => 24,  74 => 21,  68 => 18,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</style>
</head>
<body>
    <div class=\"container-fluid pt-3\">
        <h3>Creation de nouveaux mouvement</h3>
        <div id=\"panel\">
            <form action=\"{{ path('mouvement_controller_crud_new')}}\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col\">
                    {{ form_row(form.produit, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.Categorie) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.Agence) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.dateEntrer) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.descriptions) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.User) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.quantite) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.reference) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.types) }}
                    </div>
                    <div class=\"col\">
                    {{ form_row(form.numero_de_sortie) }}
                    </div>
                </div>
                {{ form_end(form) }}</p>
            </form>
        </div>
        <a href=\"{{ path('mouvement_controller_crud_index') }}\">Afficher la liste</a>
    </div>
</body>
</html>
", "mouvement_controller_crud/new.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\new.html.twig");
    }
}
