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
class __TwigTemplate_1cec4dda799fb3e573ff2f644d2f8bb9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "produit_disponible.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Recaputilation generales | Paositra Malagasy
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11)) {
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
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["mois"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["month"] ?? null)] ?? null) : null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["product"] ?? null));
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
                $context["sumNumber"] = (($context["sumNumber"] ?? null) + twig_get_attribute($this->env, $this->source, $context["index"], "nombre", [], "any", false, false, false, 62));
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["sumValue"] = (($context["sumValue"] ?? null) + twig_get_attribute($this->env, $this->source, $context["index"], "valeur", [], "any", false, false, false, 63));
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumNumber"] ?? null)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"somme_recap_dispo\" > ";
            // line 76
            echo twig_escape_filter($this->env, ($context["sumValue"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValue"] ?? null), 0, ",", " "), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impression_produit_disponible", ["mois" => ($context["month"] ?? null), "annee" => ($context["year"] ?? null)]), "html", null, true);
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
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["mois"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["month"] ?? null)] ?? null) : null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["courant"] ?? null));
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
                        $context["valeur"] = (($__internal_compile_2 = (($__internal_compile_3 = ($context["initial"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null);
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantInt"] = (($context["sumQuantInt"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 148
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 149
$context["key2"] == "valeur_init")) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = (($__internal_compile_4 = (($__internal_compile_5 = ($context["init"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["prix_net"] ?? null) : null);
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValueInit"] = (($context["sumValueInit"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 152
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 153
$context["key2"] == "qunad_recus")) {
                        // line 154
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = (($__internal_compile_6 = (($__internal_compile_7 = ($context["quantiteEntrer"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null);
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantEntrer"] = (($context["sumQuantEntrer"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 156
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 157
$context["key2"] == "val_recus")) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = (($__internal_compile_8 = (($__internal_compile_9 = ($context["valeurEntrer"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null);
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValRRecus"] = (($context["sumValRRecus"] ?? null) + ($context["valeur"] ?? null));
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 161
$context["key2"] == "quantite_sortie")) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs((($__internal_compile_10 = (($__internal_compile_11 = ($context["quantiteOut"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null));
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantSortie"] = (($context["sumQuantSortie"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 164
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 165
$context["key2"] == "val_sortie")) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = abs((($__internal_compile_12 = (($__internal_compile_13 = ($context["valueOut"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["key"]] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null));
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumValSortie"] = (($context["sumValSortie"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 168
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 169
$context["key2"] == "quantite_actuelle")) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = (($__internal_compile_14 = (($__internal_compile_15 = ($context["courant"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["key"]] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["quantite_actuelle"] ?? null) : null);
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumQuantCurrent"] = (($context["sumQuantCurrent"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 172
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 173
$context["key2"] == "value_actuelle")) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valeur"] = (($__internal_compile_16 = (($__internal_compile_17 = ($context["courant"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["key"]] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["prix_net"] ?? null) : null);
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["sumActuel"] = (($context["sumActuel"] ?? null) + ($context["valeur"] ?? null));
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td> ";
                        // line 176
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["valeur"] ?? null), 0, ",", " "), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantInt"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValueInit\" > ";
            // line 190
            echo twig_escape_filter($this->env, ($context["sumValueInit"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 191
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValueInit"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 194
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantEntrer"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValRecus\" > ";
            // line 197
            echo twig_escape_filter($this->env, ($context["sumValRRecus"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValRRecus"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, abs(($context["sumQuantSortie"] ?? null)), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\" id=\"sumValSortie\" > ";
            // line 204
            echo twig_escape_filter($this->env, ($context["sumValSortie"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumValSortie"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 208
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumQuantCurrent"] ?? null), 0, ",", " "), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th id=\"sumValueCurrent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"display:none\"  id=\"sumValueCurrent\" > ";
            // line 211
            echo twig_escape_filter($this->env, ($context["sumActuel"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sumActuel"] ?? null), 0, ",", " "), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("situation", ["mois" => ($context["month"] ?? null), "annee" => ($context["year"] ?? null)]), "html", null, true);
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
        return array (  540 => 251,  533 => 247,  527 => 243,  516 => 235,  506 => 228,  487 => 212,  483 => 211,  477 => 208,  471 => 205,  467 => 204,  461 => 201,  455 => 198,  451 => 197,  445 => 194,  439 => 191,  435 => 190,  429 => 187,  421 => 181,  414 => 179,  408 => 178,  403 => 176,  398 => 175,  395 => 174,  393 => 173,  389 => 172,  384 => 171,  381 => 170,  379 => 169,  375 => 168,  370 => 167,  367 => 166,  365 => 165,  361 => 164,  356 => 163,  353 => 162,  351 => 161,  346 => 160,  343 => 159,  340 => 158,  338 => 157,  334 => 156,  329 => 155,  326 => 154,  324 => 153,  320 => 152,  315 => 151,  312 => 150,  310 => 149,  306 => 148,  301 => 147,  298 => 146,  296 => 145,  291 => 144,  289 => 143,  283 => 142,  280 => 141,  275 => 140,  272 => 139,  269 => 138,  266 => 137,  263 => 136,  260 => 135,  257 => 134,  254 => 133,  252 => 132,  222 => 107,  208 => 96,  198 => 89,  183 => 78,  179 => 76,  173 => 73,  164 => 66,  157 => 64,  154 => 63,  152 => 62,  147 => 60,  141 => 57,  135 => 54,  129 => 51,  125 => 49,  120 => 48,  117 => 47,  115 => 46,  91 => 27,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "produit_disponible.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\produit_disponible.html.twig");
    }
}
