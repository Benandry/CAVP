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
class __TwigTemplate_95d5256fd0a3797e75c0857c6e9fcd43 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/show.html.twig", 1);
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

        echo " Detail de l'operation sur le categorie \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 3, $this->source); })()), "Categorie", [], "any", false, false, false, 3), "html", null, true);
        echo " \" ";
        
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
            echo "            <h2 class=\"fw-bolder text-center\">Detail de l'operation sur le categorie <i> \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 8, $this->source); })()), "Categorie", [], "any", false, false, false, 8), "html", null, true);
            echo " \"</i> </h2>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Produits</th>
                        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 13, $this->source); })()), "produit", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Catégorie</th>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 17, $this->source); })()), "Categorie", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Quantite</th>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 21, $this->source); })()), "quantite", [], "any", false, false, false, 21)), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>References</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 25, $this->source); })()), "reference", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Agence</th>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 29, $this->source); })()), "Agence", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Date d'operation</th>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 33, $this->source); })()), "dateEntrer", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Types d'operation</th>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 37, $this->source); })()), "types", [], "any", false, false, false, 37), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\" class=\"float-end\">
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editer</a>
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  185 => 56,  179 => 53,  174 => 50,  166 => 45,  162 => 44,  158 => 43,  154 => 42,  146 => 37,  139 => 33,  132 => 29,  125 => 25,  118 => 21,  111 => 17,  104 => 13,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Detail de l'operation sur le categorie \"{{ mouvement.Categorie }} \" {% endblock %}

{% block body %}
    <main>
         {% if app.user %}
            <h2 class=\"fw-bolder text-center\">Detail de l'operation sur le categorie <i> \"{{ mouvement.Categorie }} \"</i> </h2>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Produits</th>
                        <td>{{ mouvement.produit }}</td>
                    </tr>
                    <tr>
                        <th>Catégorie</th>
                        <td>{{ mouvement.Categorie }}</td>
                    </tr>
                    <tr>
                        <th>Quantite</th>
                        <td>{{ mouvement.quantite|abs }}</td>
                    </tr>
                    <tr>
                        <th>References</th>
                        <td>{{ mouvement.reference }}</td>
                    </tr>
                    <tr>
                        <th>Agence</th>
                        <td>{{ mouvement.Agence }}</td>
                    </tr>
                    <tr>
                        <th>Date d'operation</th>
                        <td>{{ mouvement.dateEntrer|date('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <th>Types d'operation</th>
                        <td>{{ mouvement.types }}</td>
                    </tr>
                </tbody>
            </table>

            <p><a href=\"{{ path('mouvement_controller_crud_index') }}\">Retour a la liste d'operation</a></p>
            <form method=\"post\" action=\"{{ path('mouvement_controller_crud_delete', {'id': mouvement.id}) }}\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\" class=\"float-end\">
                <a href=\"{{ path('mouvement_controller_crud_edit', {'id': mouvement.id}) }}\" class=\"btn btn-primary btn-sm\">Editer</a>
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mouvement.id) }}\">
                <button class=\"btn btn-danger btn-sm\">Supprimer</button>
            </form>
        
        {% else %}
            <h1>Page not found 404 </h1>
            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"{{ path('app_login') }}\">return to the authentification </a>.
            </p>
        {% endif %}
    </main>

{% endblock %}", "mouvement_controller_crud/show.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\show.html.twig");
    }
}
