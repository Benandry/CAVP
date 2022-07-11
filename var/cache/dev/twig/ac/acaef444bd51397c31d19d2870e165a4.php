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

/* produit_disponible.html.twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_disponible.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_disponible.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit_disponible.html.twig", 1);
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
        echo "    ";
        // line 10
        echo "\t<main>
\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "\t\t\t<h2 class=\"fw-bolder text-center\">Rapport général</h2>
\t\t\t<form action=\"";
            // line 13
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
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 27, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 27, $this->source); })()), "html", null, true);
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
            // line 46
            $context["sumValue"] = 0;
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["sumNumber"] = 0;
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "objet", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "abbr", [], "any", false, false, false, 54), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 57), 0, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 60), 0, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 62
                $context["sumNumber"] = ((isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 62, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 62));
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["sumValue"] = ((isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 63, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 63));
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\" class=\"text-right pr-3\">
\t\t\t\t\t\t\t\t\t\t\t\tTotaux(Valeur)
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 73, $this->source); })())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"somme_recap_dispo\" > ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 78, $this->source); })()), 0, ",", " "), "html", null, true);
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
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p> <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_produit_disponible", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 96, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 96, $this->source); })())]), "html", null, true);
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
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 107, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 107, $this->source); })()), [], "array", false, false, false, 107), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 107, $this->source); })()), "html", null, true);
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
            // line 132
            $context["sumQuantInt"] = 0;
            // line 133
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValueInit"] = 0;
            // line 134
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantEntrer"] = 0;
            // line 135
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantCurrent"] = 0;
            // line 136
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumActuel"] = 0;
            // line 137
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantSortie"] = 0;
            // line 138
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValSortie"] = 0;
            // line 139
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValRRecus"] = 0;
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 143
                    if (($context["key2"] == "nomProduit")) {
                        // line 144
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 145
$context["key2"] == "quantite_init")) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 146, $this->source); })()), $context["key"], [], "array", false, false, false, 146), 0, [], "array", false, false, false, 146);
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 147, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 147, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 148
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 148, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 149
$context["key2"] == "valeur_init")) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 150, $this->source); })()), $context["key"], [], "array", false, false, false, 150), "prix_net", [], "array", false, false, false, 150);
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 151, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 151, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 152
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 152, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 153
$context["key2"] == "qunad_recus")) {
                        // line 154
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 154, $this->source); })()), $context["key"], [], "array", false, false, false, 154), 0, [], "array", false, false, false, 154);
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 155, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 155, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 156
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 156, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 157
$context["key2"] == "val_recus")) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 158, $this->source); })()), $context["key"], [], "array", false, false, false, 158), 0, [], "array", false, false, false, 158);
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 159, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 159, $this->source); })()));
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 160, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 161
$context["key2"] == "quantite_sortie")) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 162, $this->source); })()), $context["key"], [], "array", false, false, false, 162), 0, [], "array", false, false, false, 162));
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 163, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 163, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 164
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 164, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 165
$context["key2"] == "val_sortie")) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 166, $this->source); })()), $context["key"], [], "array", false, false, false, 166), 0, [], "array", false, false, false, 166));
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 167, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 167, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 168
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 168, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 169
$context["key2"] == "quantite_actuelle")) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 170, $this->source); })()), $context["key"], [], "array", false, false, false, 170), "quantite_actuelle", [], "array", false, false, false, 170);
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 171, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 171, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 172
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 172, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 173
$context["key2"] == "value_actuelle")) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 174, $this->source); })()), $context["key"], [], "array", false, false, false, 174), "prix_net", [], "array", false, false, false, 174);
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumActuel"] = ((isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 175, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 175, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 176
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 176, $this->source); })()), 0, ",", " "), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tTotales(Valeur)
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 187
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 187, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValueInit\" > ";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 190, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 191
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 191, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 194
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 194, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValRecus\" > ";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 197, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 198, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 201, $this->source); })())), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValSortie\" > ";
            // line 204
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 204, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 205, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 208
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 208, $this->source); })()), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"sumValueCurrent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"sumValueCurrent\" > ";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 211, $this->source); })()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumActuel"]) || array_key_exists("sumActuel", $context) ? $context["sumActuel"] : (function () { throw new RuntimeError('Variable "sumActuel" does not exist.', 212, $this->source); })()), 0, ",", " "), "html", null, true);
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
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p> <a href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("situation", ["mois" => (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 235, $this->source); })()), "annee" => (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 235, $this->source); })())]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline-danger\" >Imprimer</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 243
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"";
            // line 247
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 251
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit_disponible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 251,  563 => 247,  557 => 243,  546 => 235,  536 => 228,  517 => 212,  513 => 211,  507 => 208,  501 => 205,  497 => 204,  491 => 201,  485 => 198,  481 => 197,  475 => 194,  469 => 191,  465 => 190,  459 => 187,  451 => 181,  444 => 179,  438 => 178,  433 => 176,  428 => 175,  425 => 174,  423 => 173,  419 => 172,  414 => 171,  411 => 170,  409 => 169,  405 => 168,  400 => 167,  397 => 166,  395 => 165,  391 => 164,  386 => 163,  383 => 162,  381 => 161,  376 => 160,  373 => 159,  370 => 158,  368 => 157,  364 => 156,  359 => 155,  356 => 154,  354 => 153,  350 => 152,  345 => 151,  342 => 150,  340 => 149,  336 => 148,  331 => 147,  328 => 146,  326 => 145,  321 => 144,  319 => 143,  313 => 142,  310 => 141,  305 => 140,  302 => 139,  299 => 138,  296 => 137,  293 => 136,  290 => 135,  287 => 134,  284 => 133,  282 => 132,  252 => 107,  238 => 96,  228 => 89,  213 => 78,  209 => 76,  203 => 73,  194 => 66,  187 => 64,  184 => 63,  182 => 62,  177 => 60,  171 => 57,  165 => 54,  159 => 51,  155 => 49,  150 => 48,  147 => 47,  145 => 46,  121 => 27,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  94 => 9,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t", "produit_disponible.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\produit_disponible.html.twig");
    }
}
