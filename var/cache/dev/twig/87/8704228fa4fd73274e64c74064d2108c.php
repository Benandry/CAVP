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
class __TwigTemplate_97e92a2371420d7c3b0c8e53a99b9c8a extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/edit.html.twig", 1);
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

        echo "Modification de l'operation | Paositra Malagasy ";
        
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
            echo "        <h2 class=\"fw-bolder text-center\">Editer l'operation sur le categorie \" \"</h2>
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "produit", [], "any", false, false, false, 14), 'row');
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
                            <div class=\"col-4\">
                                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "types", [], "any", false, false, false, 23), 'row');
            echo "
                            </div>
                            <div class=\"col-4\" id=\"dateEntrer\">
                                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateEntrer", [], "any", false, false, false, 26), 'row');
            echo "
                            </div>
                            <div class=\"col-4\">
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

            <form method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  197 => 60,  191 => 57,  185 => 53,  178 => 49,  174 => 48,  169 => 46,  164 => 44,  158 => 41,  152 => 38,  146 => 35,  140 => 32,  134 => 29,  128 => 26,  122 => 23,  116 => 20,  110 => 17,  104 => 14,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification de l'operation | Paositra Malagasy {% endblock %}

{% block body %}
    <main>
    {% if app.user %}
        <h2 class=\"fw-bolder text-center\">Editer l'operation sur le categorie \" \"</h2>
                <div id=\"flip\">Afficher les formulaire</div>
            <div id=\"panel\">
                {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col-4\">
                                {{ form_row(form.produit) }}
                            </div>
                            <div class=\"col-4\">
                                {{ form_row(form.Categorie) }}
                            </div>
                            <div class=\"col-4\">
                                {{ form_row(form.Agence) }}
                            </div>
                            <div class=\"col-4\">
                                {{ form_row(form.types) }}
                            </div>
                            <div class=\"col-4\" id=\"dateEntrer\">
                                {{ form_row(form.dateEntrer) }}
                            </div>
                            <div class=\"col-4\">
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

            <form method=\"post\" action=\"{{ path('mouvement_controller_crud_delete', {'id': mouvement.id}) }}\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mouvement.id) }}\">
                <button class=\"btn btn-danger btn-sm float-end\">Supprimer</button>
            </form>
        {% else %}
            <h1>Page not found 404 </h1>

            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"{{ path('app_login') }}\">return to the authentification </a>.
            </p>
        {% endif %}
    </main>
{% endblock %}", "mouvement_controller_crud/edit.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\edit.html.twig");
    }
}
