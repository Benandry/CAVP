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

/* mouvement_controller_crud/index.html.twig */
class __TwigTemplate_5881d8446c78e287e4a75e3736ee1f5d extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mouvement_controller_crud/index.html.twig", 1);
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

        echo " Mouvement entrer sortie de CAVP | Paositra Malagasy";
        
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
        echo "
    <h3 class=\"h3\">Mouvementr entrer/Sortie de CAVP </h3>
         <input id=\"myInput\" type=\"text\" placeholder=\"Search..\"> <i class=\"fas fa-search\"></i>
        ";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 9, $this->source); })())), "html", null, true);
        echo " lignes  
    <div class=\"d-flex flex-row-reverse bd-highlight\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_new");
        echo "\"  class=\"btn btn-secondary\" >Creer un mouvement Entrer Sortie</a>
    </div>
    <div class=\"table responsive\">
        <table class=\"table table-striped\" >
            <thead>
                <tr>
                    <th>Produits </th>
                    <th>Catégories</th>
                    <th>Types</th>
                    <th>Descriptions</th>
                    <th>Agences</th>
                    <th>References</th>
                    <th>Chef responsables</th>
                    <th>Date</th>
                    <th>Quantité</th>
                    <th>numero de sortie</th>
                </tr>
            </thead>
            <tbody id=\"myTable\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mouvement"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "product", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "categorie", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "types", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "desccriptions", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "destination", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "reference", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "user", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "dat", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["mouvement"], "nombre", [], "any", false, false, false, 40)), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Detail</a>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Modifier</a>   
                        <form method=\"post\" action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 45))), "html", null, true);
            echo "\">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>
    </div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mouvement_controller_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  188 => 51,  177 => 45,  173 => 44,  169 => 43,  165 => 42,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  125 => 31,  120 => 30,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Mouvement entrer sortie de CAVP | Paositra Malagasy{% endblock %}

{% block body %}

    <h3 class=\"h3\">Mouvementr entrer/Sortie de CAVP </h3>
         <input id=\"myInput\" type=\"text\" placeholder=\"Search..\"> <i class=\"fas fa-search\"></i>
        {{ mouvements|length }} lignes  
    <div class=\"d-flex flex-row-reverse bd-highlight\">
        <a href=\"{{ path('mouvement_controller_crud_new') }}\"  class=\"btn btn-secondary\" >Creer un mouvement Entrer Sortie</a>
    </div>
    <div class=\"table responsive\">
        <table class=\"table table-striped\" >
            <thead>
                <tr>
                    <th>Produits </th>
                    <th>Catégories</th>
                    <th>Types</th>
                    <th>Descriptions</th>
                    <th>Agences</th>
                    <th>References</th>
                    <th>Chef responsables</th>
                    <th>Date</th>
                    <th>Quantité</th>
                    <th>numero de sortie</th>
                </tr>
            </thead>
            <tbody id=\"myTable\">
            {% for mouvement in mouvements %}
                <tr>
                    <td>{{ mouvement.product }}</td>
                    <td>{{ mouvement.categorie }}</td>
                    <td>{{ mouvement.types }}</td>
                    <td>{{ mouvement.desccriptions }}</td>
                    <td>{{ mouvement.destination }}</td>
                    <td>{{ mouvement.reference }}</td>
                    <td>{{ mouvement.user }}</td>
                    <td>{{ mouvement.dat|date('Y-m-d') }}</td>
                    <td>{{ mouvement.nombre|abs }}</td>
                    <td>
                        <a href=\"{{ path('mouvement_controller_crud_show', {'id': mouvement.id}) }}\">Detail</a>
                        <a href=\"{{ path('mouvement_controller_crud_edit', {'id': mouvement.id}) }}\">Modifier</a>   
                        <form method=\"post\" action=\"{{ path('mouvement_controller_crud_delete', {'id': mouvement.id}) }}\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mouvement.id) }}\">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div> 
{% endblock %}
", "mouvement_controller_crud/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\index.html.twig");
    }
}
