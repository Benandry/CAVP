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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mouvement_controller_crud/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</head>
<body>
  <h1>Mouvement Entre</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Produits</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 20, $this->source); })()), "produit", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 24, $this->source); })()), "Categorie", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 28, $this->source); })()), "quantite", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>References</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 32, $this->source); })()), "reference", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agence</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 36, $this->source); })()), "Agence", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'operation</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 40, $this->source); })()), "dateEntrer", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Types d'operation</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 44, $this->source); })()), "types", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>
    <form method=\"post\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mouvement_controller_crud_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["mouvement"]) || array_key_exists("mouvement", $context) ? $context["mouvement"] : (function () { throw new RuntimeError('Variable "mouvement" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53))), "html", null, true);
        echo "\">
        <button class=\"btn btn-danger\">Delete</button>
    </form>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  130 => 53,  126 => 52,  122 => 51,  117 => 49,  109 => 44,  102 => 40,  95 => 36,  88 => 32,  81 => 28,  74 => 24,  67 => 20,  60 => 16,  43 => 1,);
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
    <title> Mouvement entrer sortie de CAVP | Paositra Malagasy</title>
</head>
<body>
  <h1>Mouvement Entre</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ mouvement.id }}</td>
            </tr>
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
                <td>{{ mouvement.quantite }}</td>
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

    <a href=\"{{ path('mouvement_controller_crud_index') }}\">back to list</a>

    <a href=\"{{ path('mouvement_controller_crud_edit', {'id': mouvement.id}) }}\">edit</a>
    <form method=\"post\" action=\"{{ path('mouvement_controller_crud_delete', {'id': mouvement.id}) }}\" onsubmit=\"return confirm('Vous etes sur pour supprimer');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ mouvement.id) }}\">
        <button class=\"btn btn-danger\">Delete</button>
    </form>

</body>
</html>", "mouvement_controller_crud/show.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\mouvement_controller_crud\\show.html.twig");
    }
}
