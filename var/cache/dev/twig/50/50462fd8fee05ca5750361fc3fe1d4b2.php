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

/* order/ordre.html.twig */
class __TwigTemplate_8c815bafb82215ba1a439afc1e83ca83 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/ordre.html.twig", 1);
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

        echo "Ordre de sortie | Paositra Malagasy";
        
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
        echo "    ";
        $context["types_order"] = [0 => "PN", 1 => "FP"];
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            echo " 
    <span class=\"float-right\" style=\"margin-top: 5px;\">
        Selectionner le : <button type=\"button\" class=\"btn btn-secondary btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Types</button>
        <div class=\"modal\" id=\"myModal\">
            ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
                <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"> Types</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
            echo "
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "select", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                            <div class=\"form-group\">
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "submit", [], "any", false, false, false, 27), 'row', ["label" => "Selectionner"]);
            echo "
                        </div>
                    </div>
                    ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
            echo "
                    </div>
                </div>
            </div>
        </div>
    </span>
    <a href=\"#recapitulation\" style=\"margin:40px;\">Recapitulation </a>
    <a href=\"#repartitions\" style=\"margin:40px;\">Etat de repartition de Valeur </a>
    <a href=\"#bordereau\" style=\"margin:40px;\">Bordereau d'envoi </a>
    <h4 id=\"recapitulation\">Récapitulation N° ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 39, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 39, $this->source); })()) - 1), [], "array", false, false, false, 39), "html", null, true);
            echo " </h4>
        <div class=\"table responsive-xxl\">
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
                <thead>
                    <tr>
                        <th>Categorie </th>
                        <th>Valeur Faciales </th>
                        <th>TP/PL </th>
                        <th>Planche </th>
                        <th>TP </th>
                        <th>Montant </th>
                        <th>Obervatiions </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 55
                echo "                        <tr>
                            <td> ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 56), "html", null, true);
                echo "</td> 
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 59)), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 60) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 60))), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 61) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 61))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 61)), "html", null, true);
                echo "</td>
                            <td rowspan=\"4\">";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 62, $this->source); })()), "html", null, true);
                echo " bureau</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                <tbody>
            </table>
            
        <p> Antananarivo le ,";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
            <span style=\"margin-top1: 25px;\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
        </p>
        
            <h4 id=\"repartitions\">Etat de repartition de Valeurs N° ";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 73, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 73, $this->source); })()) - 1), [], "array", false, false, false, 73), "html", null, true);
            echo " </h4>
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
                <thead>
                    <tr>
                        <th>Ordre </th>
                        <th>Valeur Faciales </th>
                        <th>Valeur </th>
                        <th>total par bureau </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 85
                echo "                        <tr>
                            <td> ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "ordre", [], "any", false, false, false, 86), "html", null, true);
                echo "</td> 
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                            <td> ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                            <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                <tbody>
            </table>
        </div>
            <p> Antananarivo le ,";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
            <span style=\"margin-top1: 25px;\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>
        </p>
        <h4 id=\"bordereau\">Bordereau d'envoi </h4>
        <h5>Bordéreau d'envoi N° ";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 100, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 100, $this->source); })()) - 1), [], "array", false, false, false, 100), "html", null, true);
            echo "</h5>
        <table width=\"100%\" style=\"border-collapse: collapse;\" border=\"1\">
            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 103
                echo "            <tr>
                <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 105
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau");
                echo "\"> <i class='fa fa-info-circle'> info</i> </a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        </table>           
    ";
        } else {
            // line 110
            echo "    <h1>Page not found 404 </h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
    </p>
    ";
        }
        // line 116
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/ordre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 116,  315 => 114,  309 => 110,  305 => 108,  296 => 105,  292 => 104,  289 => 103,  285 => 102,  278 => 100,  272 => 97,  267 => 95,  262 => 92,  253 => 89,  249 => 88,  245 => 87,  241 => 86,  238 => 85,  234 => 84,  218 => 73,  212 => 70,  207 => 68,  202 => 65,  193 => 62,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  169 => 56,  166 => 55,  162 => 54,  142 => 39,  130 => 30,  124 => 27,  116 => 22,  109 => 18,  99 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ordre de sortie | Paositra Malagasy{% endblock %}

{% block body %}
    {% set types_order = ['PN','FP']  %}
    {% if app.user %} 
    <span class=\"float-right\" style=\"margin-top: 5px;\">
        Selectionner le : <button type=\"button\" class=\"btn btn-secondary btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Types</button>
        <div class=\"modal\" id=\"myModal\">
            {{ form_start(form) }}
                <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"> Types</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    {{ form_start(form) }}
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                                <label for=\"select\">Types de sortie :</label>
                                {{ form_widget(form.select, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                            <div class=\"form-group\">
                            {{ form_row(form.submit, { 'label': 'Selectionner'}) }}
                        </div>
                    </div>
                    {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </span>
    <a href=\"#recapitulation\" style=\"margin:40px;\">Recapitulation </a>
    <a href=\"#repartitions\" style=\"margin:40px;\">Etat de repartition de Valeur </a>
    <a href=\"#bordereau\" style=\"margin:40px;\">Bordereau d'envoi </a>
    <h4 id=\"recapitulation\">Récapitulation N° {{ 'now' |date(\"y\") }}/ --{{ types_order[types - 1]}} </h4>
        <div class=\"table responsive-xxl\">
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
                <thead>
                    <tr>
                        <th>Categorie </th>
                        <th>Valeur Faciales </th>
                        <th>TP/PL </th>
                        <th>Planche </th>
                        <th>TP </th>
                        <th>Montant </th>
                        <th>Obervatiions </th>
                    </tr>
                </thead>
                <tbody>
                    {% for pro in dispo %}
                        <tr>
                            <td> {{ pro.categorie }}</td> 
                            <td>{{ pro.vf }}</td>
                            <td>{{ pro.tpParPl }}</td>
                            <td>{{ pro.quantite|abs}}</td>
                            <td>{{ pro.tpParPl * pro.quantite|abs }}</td>
                            <td>{{ pro.tpParPl * pro.quantite|abs * pro.vf }}</td>
                            <td rowspan=\"4\">{{ agency }} bureau</td>
                        </tr>
                    {% endfor %}
                <tbody>
            </table>
            
        <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}<br>
            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
            <span style=\"margin-top1: 25px;\">{{ app.user.nom }}</span>
        </p>
        
            <h4 id=\"repartitions\">Etat de repartition de Valeurs N° {{ 'now' |date(\"y\") }}/ --{{ types_order[types - 1]}} </h4>
            <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
                <thead>
                    <tr>
                        <th>Ordre </th>
                        <th>Valeur Faciales </th>
                        <th>Valeur </th>
                        <th>total par bureau </th>
                    </tr>
                </thead>
                <tbody>
                    {% for pro in dispo %}
                        <tr>
                            <td> {{ pro.ordre }}</td> 
                            <td>{{ pro.vf }}</td>
                            <td> {{ pro.nombre_cat }}</td>
                            <td>{{ pro.nombre_agence }}</td>
                        </tr>
                    {% endfor %}
                <tbody>
            </table>
        </div>
            <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }}<br>
            <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
            <span style=\"margin-top1: 25px;\">{{ app.user.nom }}</span>
        </p>
        <h4 id=\"bordereau\">Bordereau d'envoi </h4>
        <h5>Bordéreau d'envoi N° {{ 'now' |date(\"y\") }}/ --{{ types_order[types - 1]}}</h5>
        <table width=\"100%\" style=\"border-collapse: collapse;\" border=\"1\">
            {% for pro in dispo %}
            <tr>
                <td>{{ pro.bureau }}</td>
                <td><a href=\"{{ path('bordereau') }}\"> <i class='fa fa-info-circle'> info</i> </a></td>
            </tr>
            {% endfor %}
        </table>           
    {% else %}
    <h1>Page not found 404 </h1>

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
    </p>
    {% endif %}    
{% endblock %}
", "order/ordre.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\ordre.html.twig");
    }
}
