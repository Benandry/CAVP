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

/* order/slips.html.twig */
class __TwigTemplate_ce67c967526e6c9baea8b323455b1ccc extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/slips.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/slips.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title> Bordereaux d'envoi | Paositra Malagasy</title>

</head>
<body>
    <h4 id=\"repartitions\">Tableau  N° 1</h4>
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
            <thead>
                <tr>
                    <td>Désignation des catégories et des valeurs</td>
                    <td>Nombre de feuille de timbres entières</td>
                    <td>Nombre de feuille de timbres Fractions</td>
                    <td>Nombre de figurines de chaque catégorie</td>
                    <td>Prix de figurines</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 23
            echo "                    <tr>
                        <td> .........</td> 
                        <td>..........</td>
                        <td>.........</td>
                        <td>.........</td>
                        <td>.........</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            <tbody>
        </table>
    <h4 id=\"repartitions\">Tableau  N° 2</h4>
    <table width=\"40%\" style=\"border-collapse:collapse;\" border=\"1\">
        <tr>
        <td>Catégorie</td>
        <td>Nombre de figurine réellement reçues(En toutes lettres)</td>
        </tr>
        <tr>
            <td>.........</td>
            <td>.........</td>
        </tr>
    </table>
    <h4 id=\"repartitions\">Proches-Verbal et accusés de reception</h4>
    <table width=\"40%\" style=\"border-collapse:collapse;\" border=\"1\">
        <tr>
            <td>Désignation des catégories</td>
            <td >Nombre de feuilles de timbres entières</td>
            <td >Nombre de feuilles de timbres Fractions</td>
            <td >Nombre de figurines</td>
            <td >Prix</td>
        </tr>
        <tr>
            <td >............</td>
            <td >............</td>
            <td >............</td>
            <td >............</td>
            <td >............</td>
        </tr>
    </table>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "order/slips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  70 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title> Bordereaux d'envoi | Paositra Malagasy</title>

</head>
<body>
    <h4 id=\"repartitions\">Tableau  N° 1</h4>
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
            <thead>
                <tr>
                    <td>Désignation des catégories et des valeurs</td>
                    <td>Nombre de feuille de timbres entières</td>
                    <td>Nombre de feuille de timbres Fractions</td>
                    <td>Nombre de figurines de chaque catégorie</td>
                    <td>Prix de figurines</td>
                </tr>
            </thead>
            <tbody>
                {% for pro in dispo %}
                    <tr>
                        <td> .........</td> 
                        <td>..........</td>
                        <td>.........</td>
                        <td>.........</td>
                        <td>.........</td>
                    </tr>
                {% endfor %}
            <tbody>
        </table>
    <h4 id=\"repartitions\">Tableau  N° 2</h4>
    <table width=\"40%\" style=\"border-collapse:collapse;\" border=\"1\">
        <tr>
        <td>Catégorie</td>
        <td>Nombre de figurine réellement reçues(En toutes lettres)</td>
        </tr>
        <tr>
            <td>.........</td>
            <td>.........</td>
        </tr>
    </table>
    <h4 id=\"repartitions\">Proches-Verbal et accusés de reception</h4>
    <table width=\"40%\" style=\"border-collapse:collapse;\" border=\"1\">
        <tr>
            <td>Désignation des catégories</td>
            <td >Nombre de feuilles de timbres entières</td>
            <td >Nombre de feuilles de timbres Fractions</td>
            <td >Nombre de figurines</td>
            <td >Prix</td>
        </tr>
        <tr>
            <td >............</td>
            <td >............</td>
            <td >............</td>
            <td >............</td>
            <td >............</td>
        </tr>
    </table>


</body>
</html>", "order/slips.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\slips.html.twig");
    }
}
