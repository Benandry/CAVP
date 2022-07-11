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

/* /produit_disponible.html.twig */
class __TwigTemplate_d604c50255d8bd4c1e4958a30fb1ae66 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produit_disponible.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/produit_disponible.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/produit_disponible.html.twig", 1);
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

        echo "Recaputilation generales | Paositra Malagasy
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "   ";
        $context["mois"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
        // line 9
        echo "

    ";
        // line 12
        echo "\t<main>
\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "\t\t\t<h2 class=\"fw-bolder text-center\">Rapport général</h2>
\t\t\t<form action=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_dispo");
            echo "\">
\t\t\t\t<label for=\"ldate\">Preciser le mois et annee:</label>
\t\t\t\t<input type=\"month\" id=\"ldate\" name=\"ldate\">
\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form> 
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"nav-items\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#recaputilation\">Recaputilation generales</a></li>
\t\t\t\t<li class=\"nav-items\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#situation\">Situation generales </a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"recaputilation\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Récapitulation Générale de la situation des stocks des Valeurs Postales, Mois du ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 29, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"recap\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tOBJETS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tABBREVIATIONS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tNOMBRES
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tVALEURS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 48
            $context["sumValue"] = 0;
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["sumNumber"] = 0;
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "objet", [], "any", false, false, false, 53), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "abbr", [], "any", false, false, false, 56), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 59), 0, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 62), 0, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 64
                $context["sumNumber"] = ((isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 64, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 64));
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["sumValue"] = ((isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 65, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 65));
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\" class=\"text-right pr-3\">
\t\t\t\t\t\t\t\t\t\t\t\tTotaux(Valeur)
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 75, $this->source); })())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"somme_recap_dispo\" > ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 80, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t <div>
\t\t\t\t\t\t\t\t\t<p>Arreté a la valeur de : <span class=\"text-uppercase\" id=\"nombreRecap\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tAntananarivo le ,";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p> <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_produit_disponible", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 98, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 98, $this->source); })())]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline-danger\">Imprimer</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"situation\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 109, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 109, $this->source); })()), [], "array", false, false, false, 109), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"myTable\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Quantité de stock initial
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Valeur de stock initial
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits recus quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits recus valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits sortie quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits sortie valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock final quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock final valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 134
            $context["sumQuantInt"] = 0;
            // line 135
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValueInit"] = 0;
            // line 136
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantEntrer"] = 0;
            // line 137
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantCurrent"] = 0;
            // line 138
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumActuel"] = 0;
            // line 139
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantSortie"] = 0;
            // line 140
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValSortie"] = 0;
            // line 141
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValRRecus"] = 0;
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 142, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    if (($context["key2"] == "nomProduit")) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 147
$context["key2"] == "quantite_init")) {
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 148, $this->source); })()), $context["key"], [], "array", false, false, false, 148), 0, [], "array", false, false, false, 148);
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 149, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 149, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 150
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 150, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 151
$context["key2"] == "valeur_init")) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 152, $this->source); })()), $context["key"], [], "array", false, false, false, 152), "prix_net", [], "array", false, false, false, 152);
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 153, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 153, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 154
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 154, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 155
$context["key2"] == "qunad_recus")) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 156, $this->source); })()), $context["key"], [], "array", false, false, false, 156), 0, [], "array", false, false, false, 156);
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 157, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 157, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 158
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 158, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 159
$context["key2"] == "val_recus")) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 160, $this->source); })()), $context["key"], [], "array", false, false, false, 160), 0, [], "array", false, false, false, 160);
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 161, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 161, $this->source); })()));
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 162, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 163
$context["key2"] == "quantite_sortie")) {
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 164, $this->source); })()), $context["key"], [], "array", false, false, false, 164), 0, [], "array", false, false, false, 164));
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 165, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 165, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 166
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 166, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 167
$context["key2"] == "val_sortie")) {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 168, $this->source); })()), $context["key"], [], "array", false, false, false, 168), 0, [], "array", false, false, false, 168));
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 169, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 169, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 170
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 170, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 171
$context["key2"] == "quantite_actuelle")) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 172, $this->source); })()), $context["key"], [], "array", false, false, false, 172), "quantite_actuelle", [], "array", false, false, false, 172);
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 173, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 173, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 174
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 174, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 175
$context["key2"] == "value_actuelle")) {
                        // line 176
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 176, $this->source); })()), $context["key"], [], "array", false, false, false, 176), "prix_net", [], "array", false, false, false, 176);
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumActuel"] = ((isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 177, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 177, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 178
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 178, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tTotales(Valeur)
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 189
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 189, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValueInit\" > ";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 192, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 193, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 196
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 196, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValRecus\" > ";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 199, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 200
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 200, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 203
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 203, $this->source); })())), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValSortie\" > ";
            // line 206
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 206, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 207, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 210
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 210, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"sumValueCurrent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"sumValueCurrent\" > ";
            // line 213
            echo twig_escape_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 213, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 214
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 214, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"sitInitial\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur entrée de : <span class=\"text-uppercase\" id=\"sitEntrer\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur Sortie de : <span class=\"text-uppercase\" id=\"sitSortie\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur actuelle de : <span class=\"text-uppercase\" id=\"sitActuel\"> </span> ARIARY<p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAntananarivo le ,";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p> <a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("situation", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 237, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 237, $this->source); })())]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline-danger\" >Imprimer</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 245
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"";
            // line 249
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 253
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/produit_disponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 253,  565 => 249,  559 => 245,  548 => 237,  538 => 230,  519 => 214,  515 => 213,  509 => 210,  503 => 207,  499 => 206,  493 => 203,  487 => 200,  483 => 199,  477 => 196,  471 => 193,  467 => 192,  461 => 189,  453 => 183,  446 => 181,  440 => 180,  435 => 178,  430 => 177,  427 => 176,  425 => 175,  421 => 174,  416 => 173,  413 => 172,  411 => 171,  407 => 170,  402 => 169,  399 => 168,  397 => 167,  393 => 166,  388 => 165,  385 => 164,  383 => 163,  378 => 162,  375 => 161,  372 => 160,  370 => 159,  366 => 158,  361 => 157,  358 => 156,  356 => 155,  352 => 154,  347 => 153,  344 => 152,  342 => 151,  338 => 150,  333 => 149,  330 => 148,  328 => 147,  323 => 146,  321 => 145,  315 => 144,  312 => 143,  307 => 142,  304 => 141,  301 => 140,  298 => 139,  295 => 138,  292 => 137,  289 => 136,  286 => 135,  284 => 134,  254 => 109,  240 => 98,  230 => 91,  215 => 80,  211 => 78,  205 => 75,  196 => 68,  189 => 66,  186 => 65,  184 => 64,  179 => 62,  173 => 59,  167 => 56,  161 => 53,  157 => 51,  152 => 50,  149 => 49,  147 => 48,  123 => 29,  106 => 15,  103 => 14,  101 => 13,  98 => 12,  94 => 9,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recaputilation generales | Paositra Malagasy
{% endblock %}

{% block body %}
    {# ##################################    Dictionaire de l'annee ##################################################}
   {% set mois = {'01' : 'Janvier','02' : 'Fevrier','03' : 'Mars','04' : 'Avril','05' : 'Mai','06' : 'Juin','07' : 'Juillet','08' : 'Aout', '09' : 'Septembre','10' : 'Octobre','11' : 'Novembre','12' : 'Décembre' } %}


    {##################################################################################################################}
\t<main>
\t\t{% if app.user %}
\t\t\t<h2 class=\"fw-bolder text-center\">Rapport général</h2>
\t\t\t<form action=\"{{ path('Product_dispo') }}\">
\t\t\t\t<label for=\"ldate\">Preciser le mois et annee:</label>
\t\t\t\t<input type=\"month\" id=\"ldate\" name=\"ldate\">
\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t</form> 
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"nav-items\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#recaputilation\">Recaputilation generales</a></li>
\t\t\t\t<li class=\"nav-items\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#situation\">Situation generales </a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"recaputilation\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Récapitulation Générale de la situation des stocks des Valeurs Postales, Mois du {{ mois[month] }} - {{ year }}</h4>
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"recap\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tOBJETS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tABBREVIATIONS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tNOMBRES
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\tVALEURS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% set sumValue = 0 %}
\t\t\t\t\t\t\t\t\t\t{% set sumNumber = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for index in product %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.objet }}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.abbr }}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.nombre|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.valeur|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t{% set sumNumber = sumNumber + index.nombre %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValue = sumValue + index.valeur %}
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\" class=\"text-right pr-3\">
\t\t\t\t\t\t\t\t\t\t\t\tTotaux(Valeur)
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{{ sumNumber|number_format }}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"somme_recap_dispo\" > {{ sumValue }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{#{ sumValue|format_currency('MGA', locale='de') }#}
\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValue|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t <div>
\t\t\t\t\t\t\t\t\t<p>Arreté a la valeur de : <span class=\"text-uppercase\" id=\"nombreRecap\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tAntananarivo le ,{{ 'now' |format_date(locale='fr') }} 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p> <a href=\"{{ path('impression_produit_disponible',{mois: month,annee: year }) }}\" target=\"_blank\" class=\"btn btn-outline-danger\">Imprimer</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"situation\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du {{ mois[month] }}  {{ year }}</h4>
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"myTable\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Quantité de stock initial
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Valeur de stock initial
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits recus quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits recus valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits sortie quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Produits sortie valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock final quantité
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Stock final valeur
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% set sumQuantInt = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValueInit = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumQuantEntrer = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumQuantCurrent = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumActuel = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumQuantSortie = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValSortie = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValRRecus = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for key,value in courant %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% for key2, value2 in value %}             
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if key2 =='nomProduit' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ value2 }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='quantite_init' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = initial[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantInt = sumQuantInt + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='valeur_init' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = init[key]['prix_net'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValueInit = sumValueInit + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='qunad_recus' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = quantiteEntrer[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantEntrer = sumQuantEntrer + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='val_recus' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = valeurEntrer[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValRRecus = sumValRRecus + valeur %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='quantite_sortie' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = quantiteOut[key][0]|abs %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantSortie = sumQuantSortie + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='val_sortie' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = valueOut[key][0]|abs %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValSortie = sumValSortie + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='quantite_actuelle' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = courant[key]['quantite_actuelle'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantCurrent = sumQuantCurrent + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='value_actuelle' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = courant[key]['prix_net'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumActuel = sumActuel + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur|number_format(0,',', ' ') }} </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tTotales(Valeur)
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantInt|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValueInit\" > {{  sumValueInit }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValueInit|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantEntrer|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValRecus\" > {{  sumValRRecus }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValRRecus|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantSortie|abs|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValSortie\" > {{  sumValSortie }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValSortie|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantCurrent|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"sumValueCurrent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"sumValueCurrent\" > {{  sumActuel }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumActuel|number_format(0,',', ' ') }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur initial de : <span class=\"text-uppercase\" id=\"sitInitial\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur entrée de : <span class=\"text-uppercase\" id=\"sitEntrer\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur Sortie de : <span class=\"text-uppercase\" id=\"sitSortie\"> </span> ARIARY<p>
\t\t\t\t\t\t\t\t<p>Arreté a la valeur actuelle de : <span class=\"text-uppercase\" id=\"sitActuel\"> </span> ARIARY<p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAntananarivo le ,{{ 'now' |format_date(locale='fr') }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p> <a href=\"{{ path('situation',{mois: month,annee: year }) }}\" target=\"_blank\" class=\"btn btn-outline-danger\" >Imprimer</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"{{ path('app_login') }}\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t{% endif %}
\t</main>
{% endblock %}
\t\t\t\t\t\t\t", "/produit_disponible.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\produit_disponible.html.twig");
    }
}
