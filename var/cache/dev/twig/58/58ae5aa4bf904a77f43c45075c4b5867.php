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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/new.html.twig", 1);
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

        echo "Nouveaux  mouvement ";
        
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <div class=\"container-fluid pt-3\">
        <h3>Creation de nouveaux mouvement</h3>
        <div id=\"flip\">Afficher les formulaire</div>
        <div id=\"panel\">
                ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
                <div class=\"row\">
                    <div class=\"col-4\">
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "produit", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                    </div>
                    <div class=\"col-4\">
                    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Categorie", [], "any", false, false, false, 17), 'row');
            echo "
                    </div>
                    <div class=\"col-4\">
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Agence", [], "any", false, false, false, 20), 'row');
            echo "
                    </div>
                    <div class=\"col-4\" id=\"dateEntrer\">
                    ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateEntrer", [], "any", false, false, false, 23), 'row');
            echo "
                    </div>
                    <div id=\"type\" class=\"col-4\">
                    ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "types", [], "any", false, false, false, 26), 'row');
            echo "
                    </div>
                    <div class=\"col-4\" id=\"descriptions\">
                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "descriptions", [], "any", false, false, false, 29), 'row');
            echo "
                    </div>
                    <div class=\"col-4\">
                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "User", [], "any", false, false, false, 32), 'row');
            echo "
                    </div>
                    <div id=\"quantite\" class=\"col-4\">
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "quantite", [], "any", false, false, false, 35), 'row');
            echo "
                    </div>
                    <div class=\"col-4\">
                    ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "reference", [], "any", false, false, false, 38), 'row');
            echo "
                    </div>
                    <div id=\"numero\" class=\"col-4\">
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numero_de_sortie", [], "any", false, false, false, 41), 'row');
            echo "
                    </div>
                </div>
                ";
            // line 44
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
            echo "</p>
        </div>
        <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
            echo "\">Afficher la liste</a>
    </div>
    ";
        } else {
            // line 49
            echo "    <h1>Page not found 404 </h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
    </p>
    ";
        }
        // line 55
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  186 => 55,  180 => 53,  174 => 49,  168 => 46,  163 => 44,  157 => 41,  151 => 38,  145 => 35,  139 => 32,  133 => 29,  127 => 26,  121 => 23,  115 => 20,  109 => 17,  103 => 14,  97 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveaux  mouvement {% endblock %}

{% block body %}
    {% if app.user %}
    <div class=\"container-fluid pt-3\">
        <h3>Creation de nouveaux mouvement</h3>
        <div id=\"flip\">Afficher les formulaire</div>
        <div id=\"panel\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col-4\">
                    {{ form_row(form.produit, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-4\">
                    {{ form_row(form.Categorie) }}
                    </div>
                    <div class=\"col-4\">
                    {{ form_row(form.Agence) }}
                    </div>
                    <div class=\"col-4\" id=\"dateEntrer\">
                    {{ form_row(form.dateEntrer) }}
                    </div>
                    <div id=\"type\" class=\"col-4\">
                    {{ form_row(form.types) }}
                    </div>
                    <div class=\"col-4\" id=\"descriptions\">
                    {{ form_row(form.descriptions) }}
                    </div>
                    <div class=\"col-4\">
                    {{ form_row(form.User) }}
                    </div>
                    <div id=\"quantite\" class=\"col-4\">
                    {{ form_row(form.quantite) }}
                    </div>
                    <div class=\"col-4\">
                    {{ form_row(form.reference) }}
                    </div>
                    <div id=\"numero\" class=\"col-4\">
                    {{ form_row(form.numero_de_sortie) }}
                    </div>
                </div>
                {{ form_end(form) }}</p>
        </div>
        <a href=\"{{ path('mouvement_controller_crud_index') }}\">Afficher la liste</a>
    </div>
    {% else %}
    <h1>Page not found 404 </h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
    </p>
    {% endif %}   
{% endblock %}
", "mouvement_controller_crud/new.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\new.html.twig");
    }
}
