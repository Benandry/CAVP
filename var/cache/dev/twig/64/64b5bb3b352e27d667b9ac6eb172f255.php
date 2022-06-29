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

        echo " Operation entrées sorties | Paositra Malagasy";
        
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
            echo "            
            <h2 class=\"fw-bolder text-center\">Operation entrer/Sortie de CAVP </h2>
            <i class=\"fas fa-search\"></i> <input id=\"myInput\" type=\"text\"  placeholder=\"Recherche...\"> 
            ";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 11, $this->source); })())), "html", null, true);
            echo " lignes

            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_new");
            echo "\"  class=\"btn btn-primary btn-sm\" >Creer une operation</a>
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id=\"myTable\">
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 34, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["mouvement"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "product", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "categorie", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "types", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "desccriptions", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "destination", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "reference", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "user", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "dat", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["mouvement"], "nombre", [], "any", false, false, false, 44)), "html", null, true);
                echo "</td>
                             <td class=\"actions actions-as-dropdown\">
                                <div class=\"dropdown dropdown-actions\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\"></path>
                                        </svg>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"dropdown-item action-edit\">Detail</a>
                                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"dropdown-item action-edit\">Modifier</a>   
                                        <form method=\"post\" action=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 56))), "html", null, true);
                echo "\">
                                            <button class=\"btn btn-ligth btn-sm\">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 64
                echo "                        <tr>
                            <td colspan=\"4\">no records found</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 72
            echo "            <h1>Page not found 404 </h1>

            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification </a>.
            </p>
        ";
        }
        // line 78
        echo " 
    </main>>
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
        return array (  231 => 78,  225 => 76,  219 => 72,  213 => 68,  204 => 64,  191 => 56,  187 => 55,  183 => 54,  179 => 53,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  132 => 35,  127 => 34,  104 => 14,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Operation entrées sorties | Paositra Malagasy{% endblock %}

{% block body %}
    <main>
        {% if app.user %}
            
            <h2 class=\"fw-bolder text-center\">Operation entrer/Sortie de CAVP </h2>
            <i class=\"fas fa-search\"></i> <input id=\"myInput\" type=\"text\"  placeholder=\"Recherche...\"> 
            {{ mouvements|length }} lignes

            <div class=\"d-flex flex-row-reverse bd-highlight\">
                <a href=\"{{ path('mouvement_controller_crud_new') }}\"  class=\"btn btn-primary btn-sm\" >Creer une operation</a>
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
                            <th></th>
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
                             <td class=\"actions actions-as-dropdown\">
                                <div class=\"dropdown dropdown-actions\">
                                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\"></path>
                                        </svg>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a href=\"{{ path('mouvement_controller_crud_show', {'id': mouvement.id}) }}\" class=\"dropdown-item action-edit\">Detail</a>
                                        <a href=\"{{ path('mouvement_controller_crud_edit', {'id': mouvement.id}) }}\" class=\"dropdown-item action-edit\">Modifier</a>   
                                        <form method=\"post\" action=\"{{ path('mouvement_controller_crud_delete', {'id': mouvement.id}) }}\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mouvement.id) }}\">
                                            <button class=\"btn btn-ligth btn-sm\">Delete</button>
                                        </form>
                                    </div>
                                </div>
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
        {% else %}
            <h1>Page not found 404 </h1>

            <p>
                The requested page couldn't be located. Checkout for any URL
                misspelling or <a href=\"{{ path('app_login') }}\">return to the authentification </a>.
            </p>
        {% endif %} 
    </main>>
{% endblock %}
", "mouvement_controller_crud/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\index.html.twig");
    }
}
