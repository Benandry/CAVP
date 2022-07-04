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

        echo "Nouveaux operation ";
        
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
        echo "    <main>
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"container-fluid pt-3\">
            <div class=\"box-element card card-solid\">
                <div class=\"card card-body\" id=\"new_operation\">
                    <h3 class=\"fw-normal text-center\" style=\"color:#e3151a;margin: 2px auto;\">Creation de nouveau opération</h3>
                    <p id=\"user\"> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "  </p>
                    <div>
                        <div class=\"alert alert-danger text-center\" role=\"alert\" id=\"stock_actuelle\">
                        </div>
                            ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
            echo "
                            <div class=\"row\">
                                <div class=\"col-4\">
                                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "produit", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "Categorie", [], "any", false, false, false, 22), 'row');
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Agence", [], "any", false, false, false, 25), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"dateEntrer\">
                                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateEntrer", [], "any", false, false, false, 28), 'row');
            echo "
                                </div>
                                <div id=\"type\" class=\"col-4\">
                                ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "types", [], "any", false, false, false, 31), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"descriptions\">
                                ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "descriptions", [], "any", false, false, false, 34), 'row');
            echo "
                                </div>
                                <div class=\"col-4\" id=\"utilisateur\">
                                ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "User", [], "any", false, false, false, 37), 'row');
            echo "
                                </div>
                                <div id=\"quantite\" class=\"col-4\">
                                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "quantite", [], "any", false, false, false, 40), 'row');
            echo "
                                </div>
                                <div class=\"col-4\">
                                ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "reference", [], "any", false, false, false, 43), 'row');
            echo "
                                </div>
                                <div id=\"numero\" class=\"col-4\">
                                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "numero_de_sortie", [], "any", false, false, false, 46), 'row');
            echo "
                                </div>
                            </div>
                            ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
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
        return array (  199 => 64,  193 => 62,  187 => 58,  177 => 51,  172 => 49,  166 => 46,  160 => 43,  154 => 40,  148 => 37,  142 => 34,  136 => 31,  130 => 28,  124 => 25,  118 => 22,  112 => 19,  106 => 16,  99 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveaux operation {% endblock %}

{% block body %}
    <main>
        {% if app.user %}
        <div class=\"container-fluid pt-3\">
            <div class=\"box-element card card-solid\">
                <div class=\"card card-body\" id=\"new_operation\">
                    <h3 class=\"fw-normal text-center\" style=\"color:#e3151a;margin: 2px auto;\">Creation de nouveau opération</h3>
                    <p id=\"user\"> {{ app.user.id }}  </p>
                    <div>
                        <div class=\"alert alert-danger text-center\" role=\"alert\" id=\"stock_actuelle\">
                        </div>
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
                                <div class=\"col-4\" id=\"utilisateur\">
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
            </div>
            
        </div>
        {% else %}
        <h1>Page not found 404 </h1>

        <p>
            The requested page couldn't be located. Checkout for any URL
            misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
        </p>
        {% endif %}   
    </main>
{% endblock %}
", "mouvement_controller_crud/new.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\new.html.twig");
    }
}
