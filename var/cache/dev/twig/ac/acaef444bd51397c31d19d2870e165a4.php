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
        echo "\t<main>
\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t\t";
            $context["mois_tab"] = [0 => ["00" => "Janvier", "01" => "Février", "02" => "Mars", "03" => "Avril", "04" => "Mai", "05" => "Juin", "06" => "Juillet", "07" => "Aout", "08" => "Septembre", "09" => "Octobre", "10" => "Novembre", "11" => "Décembre"]];
            // line 10
            echo "\t\t\t";
            $context["mois"] = twig_date_format_filter($this->env, "now", "F");
            // line 11
            echo "\t\t\t<h2 class=\"fw-bolder text-center\">Rapport général</h2>

\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<nav class=\"nav nav-tabs\">
\t\t\t\t\t<a class=\"nav-item nav-link active\" style=\"font-size:16px;\" href=\"#recapitulation\" data-toggle=\"tab\">Récapitulation Générale</a>
\t\t\t\t\t<a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#situation\" data-toggle=\"tab\">Situation Générale</a>
\t\t\t\t</nav>
\t\t\t\t<div
\t\t\t\t\tclass=\"tab-content\">
\t\t\t\t\t<!-- Situation -->
\t\t\t\t\t<div class=\"tab-pane active\" id=\"recapitulation\" style=\"text-align:justify\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Récapitulation Générale de la situation des stocks des Valeurs Postales, Mois du
\t\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"recap\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>OBJETS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>ABBREVIATIONS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>NOMBRES
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>VALEURS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 43
            $context["sumValue"] = 0;
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["sumNumber"] = 0;
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "objet", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "abbr", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 54), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 57), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                $context["sumNumber"] = ((isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 59, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 59));
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["sumValue"] = ((isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 60, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 60));
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th colspan=\"2\" class=\"text-right pr-3\">
\t\t\t\t\t\t\t\t\t\t\t\tTotaux(Valeur)
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["sumNumber"]) || array_key_exists("sumNumber", $context) ? $context["sumNumber"] : (function () { throw new RuntimeError('Variable "sumNumber" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["sumValue"]) || array_key_exists("sumValue", $context) ? $context["sumValue"] : (function () { throw new RuntimeError('Variable "sumValue" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p id=\"arret\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\">
\t\t\t\t\t\t\t\t\t\t\tArreté a :</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tAntananarivo le ,";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"situation\" style=\"text-align:justify\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du
\t\t\t\t\t\t\t\t";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 104, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
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
                                    ";
            // line 131
            $context["sumQuantInt"] = 0;
            // line 132
            echo "                                    ";
            $context["sumValueInit"] = 0;
            // line 133
            echo "                                    ";
            $context["sumQuantEntrer"] = 0;
            // line 134
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantCurrent"] = 0;
            // line 135
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValueCurrent"] = 0;
            // line 136
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumQuantSortie"] = 0;
            // line 137
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValSortie"] = 0;
            // line 138
            echo "\t\t\t\t\t\t\t\t\t";
            $context["sumValRRecus"] = 0;
            // line 139
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 140
                echo "                                            <tr>
                                                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key2"] => $context["value2"]) {
                    echo "             
                                                    ";
                    // line 142
                    if (($context["key2"] == "nomProduit")) {
                        // line 143
                        echo "                                                        <td> ";
                        echo twig_escape_filter($this->env, $context["value2"], "html", null, true);
                        echo " </td> 
                                                    ";
                    } elseif ((                    // line 144
$context["key2"] == "quantite_init")) {
                        // line 145
                        echo "                                                    \t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["initial"]) || array_key_exists("initial", $context) ? $context["initial"] : (function () { throw new RuntimeError('Variable "initial" does not exist.', 145, $this->source); })()), $context["key"], [], "array", false, false, false, 145), 0, [], "array", false, false, false, 145);
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantInt"] = ((isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 146, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 146, $this->source); })()));
                        echo " 
                                                        <td> ";
                        // line 147
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 147, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 148
$context["key2"] == "valeur_init")) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["init"]) || array_key_exists("init", $context) ? $context["init"] : (function () { throw new RuntimeError('Variable "init" does not exist.', 149, $this->source); })()), $context["key"], [], "array", false, false, false, 149), "prix_net", [], "array", false, false, false, 149);
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValueInit"] = ((isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 150, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 150, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 151
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 151, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 152
$context["key2"] == "qunad_recus")) {
                        // line 153
                        echo "                                                    \t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteEntrer"]) || array_key_exists("quantiteEntrer", $context) ? $context["quantiteEntrer"] : (function () { throw new RuntimeError('Variable "quantiteEntrer" does not exist.', 153, $this->source); })()), $context["key"], [], "array", false, false, false, 153), 0, [], "array", false, false, false, 153);
                        // line 154
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantEntrer"] = ((isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 154, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 154, $this->source); })()));
                        echo " 
                                                        <td> ";
                        // line 155
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 155, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 156
$context["key2"] == "val_recus")) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valeurEntrer"]) || array_key_exists("valeurEntrer", $context) ? $context["valeurEntrer"] : (function () { throw new RuntimeError('Variable "valeurEntrer" does not exist.', 157, $this->source); })()), $context["key"], [], "array", false, false, false, 157), 0, [], "array", false, false, false, 157);
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValRRecus"] = ((isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 158, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 158, $this->source); })()));
                        // line 159
                        echo "                                                        <td> ";
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 159, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 160
$context["key2"] == "quantite_sortie")) {
                        // line 161
                        echo "                                                    \t";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quantiteOut"]) || array_key_exists("quantiteOut", $context) ? $context["quantiteOut"] : (function () { throw new RuntimeError('Variable "quantiteOut" does not exist.', 161, $this->source); })()), $context["key"], [], "array", false, false, false, 161), 0, [], "array", false, false, false, 161));
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantSortie"] = ((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 162, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 162, $this->source); })()));
                        echo " 
                                                        <td> ";
                        // line 163
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 163, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 164
$context["key2"] == "val_sortie")) {
                        // line 165
                        echo "                                                        ";
                        $context["valeur"] = abs(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["valueOut"]) || array_key_exists("valueOut", $context) ? $context["valueOut"] : (function () { throw new RuntimeError('Variable "valueOut" does not exist.', 165, $this->source); })()), $context["key"], [], "array", false, false, false, 165), 0, [], "array", false, false, false, 165));
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValSortie"] = ((isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 166, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 166, $this->source); })()));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 167
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 167, $this->source); })()), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 168
$context["key2"] == "quantite_actuelle")) {
                        // line 169
                        echo "                                                    \t";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 169, $this->source); })()), $context["key"], [], "array", false, false, false, 169), "quantite_actuelle", [], "array", false, false, false, 169);
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantCurrent"] = ((isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 170, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 170, $this->source); })()));
                        echo " 
                                                        <td> ";
                        // line 171
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 171, $this->source); })()), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 172
$context["key2"] == "value_actuelle")) {
                        // line 173
                        echo "                                                        ";
                        $context["valeur"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["courant"]) || array_key_exists("courant", $context) ? $context["courant"] : (function () { throw new RuntimeError('Variable "courant" does not exist.', 173, $this->source); })()), $context["key"], [], "array", false, false, false, 173), "prix_net", [], "array", false, false, false, 173);
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValueCurrent"] = ((isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 174, $this->source); })()) + (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 174, $this->source); })()));
                        echo " 
                                                        <td> ";
                        // line 175
                        echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 175, $this->source); })()), "html", null, true);
                        echo " </td>
                                                    ";
                    }
                    // line 177
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tTotales(Valeur)
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 186
            echo twig_escape_filter($this->env, (isset($context["sumQuantInt"]) || array_key_exists("sumQuantInt", $context) ? $context["sumQuantInt"] : (function () { throw new RuntimeError('Variable "sumQuantInt" does not exist.', 186, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["sumValueInit"]) || array_key_exists("sumValueInit", $context) ? $context["sumValueInit"] : (function () { throw new RuntimeError('Variable "sumValueInit" does not exist.', 189, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["sumQuantEntrer"]) || array_key_exists("sumQuantEntrer", $context) ? $context["sumQuantEntrer"] : (function () { throw new RuntimeError('Variable "sumQuantEntrer" does not exist.', 192, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["sumValRRecus"]) || array_key_exists("sumValRRecus", $context) ? $context["sumValRRecus"] : (function () { throw new RuntimeError('Variable "sumValRRecus" does not exist.', 195, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, abs((isset($context["sumQuantSortie"]) || array_key_exists("sumQuantSortie", $context) ? $context["sumQuantSortie"] : (function () { throw new RuntimeError('Variable "sumQuantSortie" does not exist.', 198, $this->source); })())), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, (isset($context["sumValSortie"]) || array_key_exists("sumValSortie", $context) ? $context["sumValSortie"] : (function () { throw new RuntimeError('Variable "sumValSortie" does not exist.', 201, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            echo twig_escape_filter($this->env, (isset($context["sumQuantCurrent"]) || array_key_exists("sumQuantCurrent", $context) ? $context["sumQuantCurrent"] : (function () { throw new RuntimeError('Variable "sumQuantCurrent" does not exist.', 204, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            echo twig_escape_filter($this->env, (isset($context["sumValueCurrent"]) || array_key_exists("sumValueCurrent", $context) ? $context["sumValueCurrent"] : (function () { throw new RuntimeError('Variable "sumValueCurrent" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p id=\"arret\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\">
\t\t\t\t\t\t\t\t\t\t\tArreté a :</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse bd-highlight\">
\t\t\t\t\t\t\t\t<div class=\"p-2 bd-highlight\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAntananarivo le ,";
            // line 223
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\tChef de  Centre d'Approvisionnement en Valeurs Postales
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 237
            echo "\t\t\t<h1>Page not found 404
\t\t\t</h1>
\t\t\t<p>
\t\t\t\tThe requested page couldn't be located. Checkout for any URL misspelling or
\t\t\t\t<a href=\"";
            // line 241
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">return to the authentification
\t\t\t\t</a>.
\t\t\t</p>
\t\t";
        }
        // line 245
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
        return array (  542 => 245,  535 => 241,  529 => 237,  512 => 223,  493 => 207,  487 => 204,  481 => 201,  475 => 198,  469 => 195,  463 => 192,  457 => 189,  451 => 186,  443 => 180,  436 => 178,  430 => 177,  425 => 175,  420 => 174,  417 => 173,  415 => 172,  411 => 171,  406 => 170,  403 => 169,  401 => 168,  397 => 167,  392 => 166,  389 => 165,  387 => 164,  383 => 163,  378 => 162,  375 => 161,  373 => 160,  368 => 159,  365 => 158,  362 => 157,  360 => 156,  356 => 155,  351 => 154,  348 => 153,  346 => 152,  342 => 151,  337 => 150,  334 => 149,  332 => 148,  328 => 147,  323 => 146,  320 => 145,  318 => 144,  313 => 143,  311 => 142,  305 => 141,  302 => 140,  297 => 139,  294 => 138,  291 => 137,  288 => 136,  285 => 135,  282 => 134,  279 => 133,  276 => 132,  274 => 131,  245 => 105,  241 => 104,  221 => 87,  204 => 73,  198 => 70,  189 => 63,  182 => 61,  179 => 60,  177 => 59,  172 => 57,  166 => 54,  160 => 51,  154 => 48,  150 => 46,  145 => 45,  142 => 44,  140 => 43,  120 => 26,  116 => 25,  100 => 11,  97 => 10,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recaputilation generales | Paositra Malagasy
{% endblock %}

{% block body %}
\t<main>
\t\t{% if app.user %}
\t\t\t{% set mois_tab = [ {'00' :'Janvier', '01' :'Février','02' :'Mars','03' :'Avril','04' :'Mai','05' :'Juin','06' :'Juillet','07' :'Aout','08' :'Septembre','09' :'Octobre','10' :'Novembre','11' :'Décembre' }] %}
\t\t\t{% set mois = 'now' | date('F') %}
\t\t\t<h2 class=\"fw-bolder text-center\">Rapport général</h2>

\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<nav class=\"nav nav-tabs\">
\t\t\t\t\t<a class=\"nav-item nav-link active\" style=\"font-size:16px;\" href=\"#recapitulation\" data-toggle=\"tab\">Récapitulation Générale</a>
\t\t\t\t\t<a class=\"nav-item nav-link\" style=\"font-size:16px;\" href=\"#situation\" data-toggle=\"tab\">Situation Générale</a>
\t\t\t\t</nav>
\t\t\t\t<div
\t\t\t\t\tclass=\"tab-content\">
\t\t\t\t\t<!-- Situation -->
\t\t\t\t\t<div class=\"tab-pane active\" id=\"recapitulation\" style=\"text-align:justify\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Récapitulation Générale de la situation des stocks des Valeurs Postales, Mois du
\t\t\t\t\t\t\t\t\t{{ mois }}
\t\t\t\t\t\t\t\t\t{{ 'now' | date('Y') }}</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
\t\t\t\t\t\t\t\t<table class=\"table\" id=\"recap\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>OBJETS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>ABBREVIATIONS
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>NOMBRES
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>VALEURS
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
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.nombre }}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ index.valeur }}
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
\t\t\t\t\t\t\t\t\t\t\t\t{{ sumNumber }}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValue }}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p id=\"arret\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\">
\t\t\t\t\t\t\t\t\t\t\tArreté a :</span>
\t\t\t\t\t\t\t\t\t</p>
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
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"situation\" style=\"text-align:justify\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h4 class=\"fw-bold\">Situation Générale de la situation des stocks des Valeurs Postales, Mois du
\t\t\t\t\t\t\t\t{{ mois }}
\t\t\t\t\t\t\t\t{{ 'now' | date('Y') }}</h4>
\t\t\t\t\t\t\t<div class=\"table responsive-xxl\">
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
                                    {% set sumQuantInt = 0 %}
                                    {% set sumValueInit = 0 %}
                                    {% set sumQuantEntrer = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumQuantCurrent = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValueCurrent = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumQuantSortie = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValSortie = 0 %}
\t\t\t\t\t\t\t\t\t{% set sumValRRecus = 0 %}
                                        {% for key,value in courant %}
                                            <tr>
                                                {% for key2, value2 in value %}             
                                                    {% if key2 =='nomProduit' %}
                                                        <td> {{ value2 }} </td> 
                                                    {% elseif key2 =='quantite_init' %}
                                                    \t{% set valeur = initial[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantInt = sumQuantInt + valeur %} 
                                                        <td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='valeur_init' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = init[key]['prix_net'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValueInit = sumValueInit + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='qunad_recus' %}
                                                    \t{% set valeur = quantiteEntrer[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantEntrer = sumQuantEntrer + valeur %} 
                                                        <td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='val_recus' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valeur = valeurEntrer[key][0] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValRRecus = sumValRRecus + valeur %}
                                                        <td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='quantite_sortie' %}
                                                    \t{% set valeur = quantiteOut[key][0]|abs %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantSortie = sumQuantSortie + valeur %} 
                                                        <td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='val_sortie' %}
                                                        {% set valeur = valueOut[key][0]|abs %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValSortie = sumValSortie + valeur %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> {{ valeur }} </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='quantite_actuelle' %}
                                                    \t{% set valeur = courant[key]['quantite_actuelle'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumQuantCurrent = sumQuantCurrent + valeur %} 
                                                        <td> {{ valeur }} </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif key2 =='value_actuelle' %}
                                                        {% set valeur = courant[key]['prix_net'] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set sumValueCurrent = sumValueCurrent + valeur %} 
                                                        <td> {{ valeur }} </td>
                                                    {% endif %}
                                                {% endfor %}
                                            </tr>
                                        {% endfor %}
\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tTotales(Valeur)
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantInt }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValueInit }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantEntrer }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValRRecus }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantSortie|abs }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValSortie }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumQuantCurrent }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ sumValueCurrent }}
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p id=\"arret\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-uppercase\">
\t\t\t\t\t\t\t\t\t\t\tArreté a :</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
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
", "/produit_disponible.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\produit_disponible.html.twig");
    }
}
