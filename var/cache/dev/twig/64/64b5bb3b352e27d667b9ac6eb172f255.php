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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</head>
<body>
    <h3>Mouvementr entrer/Sortie de CAVP </h3>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_new");
        echo "\">Creer un mouvement Entrer Sortie</a>
    <div class=\"input-group\">
        <div class=\"form-outline\">
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 16, $this->source); })())), "html", null, true);
        echo " lignes <i class=\"fas fa-search\"></i>
            <input id=\"myInput\" type=\"text\" placeholder=\"Search..\">
        </div>
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mouvements"]) || array_key_exists("mouvements", $context) ? $context["mouvements"] : (function () { throw new RuntimeError('Variable "mouvements" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mouvement"]) {
            // line 38
            echo "                <tr>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "product", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "categorie", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "types", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "desccriptions", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "destination", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "reference", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "user", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "dat", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "nombre", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Detail</a>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Modifier</a>   
                        <form method=\"post\" action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", [], "any", false, false, false, 52))), "html", null, true);
            echo "\">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
    </div>
     <script>
        \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tr\").filter(function() {
            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
</script> 
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  164 => 62,  155 => 58,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  111 => 43,  107 => 42,  103 => 41,  99 => 40,  95 => 39,  92 => 38,  87 => 37,  63 => 16,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</head>
<body>
    <h3>Mouvementr entrer/Sortie de CAVP </h3>
        <a href=\"{{ path('mouvement_controller_crud_new') }}\">Creer un mouvement Entrer Sortie</a>
    <div class=\"input-group\">
        <div class=\"form-outline\">
            {{ mouvements|length }} lignes <i class=\"fas fa-search\"></i>
            <input id=\"myInput\" type=\"text\" placeholder=\"Search..\">
        </div>
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
                    <td>{{ mouvement.nombre }}</td>
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
     <script>
        \$(document).ready(function(){
        \$(\"#myInput\").on(\"keyup\", function() {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tr\").filter(function() {
            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
</script> 
</body>
</html>

", "mouvement_controller_crud/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\index.html.twig");
    }
}
