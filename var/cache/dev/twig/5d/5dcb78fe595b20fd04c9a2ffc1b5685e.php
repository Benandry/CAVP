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
class __TwigTemplate_6b29c1e30323489c6166c35b16929ef4 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ordre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <title> Odre de sortie | Paositra Malagasy</title>
</head>
<body>
";
        // line 11
        $context["types_order"] = [0 => "PN", 1 => "FP"];
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            echo " 
<span class=\"float-right\" style=\"margin-top: 5px;\">
    Selectionner le : <button type=\"button\" class=\"btn btn-secondary btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Types</button>
    <div class=\"modal\" id=\"myModal\">
        ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
            echo "
            <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"> Types</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
            echo "
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                            <label for=\"select\">Types de sortie :</label>
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "select", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                        <div class=\"form-group\">
                        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "submit", [], "any", false, false, false, 32), 'row', ["label" => "Selectionner"]);
            echo "
                    </div>
                </div>
                ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
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
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 44, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 44, $this->source); })()) - 1), [], "array", false, false, false, 44), "html", null, true);
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
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 60
                echo "                    <tr>
                        <td> ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 61), "html", null, true);
                echo "</td> 
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 64)), "html", null, true);
                echo "</td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 65) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 65))), "html", null, true);
                echo "</td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["pro"], "tpParPl", [], "any", false, false, false, 66) * abs(twig_get_attribute($this->env, $this->source, $context["pro"], "quantite", [], "any", false, false, false, 66))) * twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 66)), "html", null, true);
                echo "</td>
                        <td rowspan=\"4\">";
                // line 67
                echo twig_escape_filter($this->env, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 67, $this->source); })()), "html", null, true);
                echo " bureau</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            <tbody>
        </table>
        
    <p> Antananarivo le ,";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
        <span style=\"margin-top1: 25px;\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
            echo "</span>
     </p>
    
        <h4 id=\"repartitions\">Etat de repartition de Valeurs N° ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 78, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 78, $this->source); })()) - 1), [], "array", false, false, false, 78), "html", null, true);
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
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 90
                echo "                    <tr>
                        <td> ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "ordre", [], "any", false, false, false, 91), "html", null, true);
                echo "</td> 
                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 92), "html", null, true);
                echo "</td>
                        <td> ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 93), "html", null, true);
                echo "</td>
                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            <tbody>
        </table>
    </div>
        <p> Antananarivo le ,";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "<br>
        <span style=\"margin-top1: 25px;\"> Chef de  Centre d'Approvisionnement en Valeurs Postales </span><br />
        <span style=\"margin-top1: 25px;\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
            echo "</span>
     </p>
    <h4 id=\"bordereau\">Bordereau d'envoi </h4>
    <h5>Bordéreau d'envoi N° ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/ --";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["types_order"]) || array_key_exists("types_order", $context) ? $context["types_order"] : (function () { throw new RuntimeError('Variable "types_order" does not exist.', 105, $this->source); })()), ((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 105, $this->source); })()) - 1), [], "array", false, false, false, 105), "html", null, true);
            echo "</h5>
    <table width=\"100%\" style=\"border-collapse: collapse;\" border=\"1\">
        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 108
                echo "           <tr>
            <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 110
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau");
                echo "\"> <i class='fa fa-info-circle'> info</i> </a></td>
           </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    </table>           
";
        } else {
            // line 115
            echo "<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
</p>
";
        }
        // line 122
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  286 => 122,  280 => 119,  274 => 115,  270 => 113,  261 => 110,  257 => 109,  254 => 108,  250 => 107,  243 => 105,  237 => 102,  232 => 100,  227 => 97,  218 => 94,  214 => 93,  210 => 92,  206 => 91,  203 => 90,  199 => 89,  183 => 78,  177 => 75,  172 => 73,  167 => 70,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  131 => 60,  127 => 59,  107 => 44,  95 => 35,  89 => 32,  81 => 27,  74 => 23,  64 => 16,  57 => 12,  55 => 11,  43 => 1,);
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
    <title> Odre de sortie | Paositra Malagasy</title>
</head>
<body>
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
</body>
</html>", "order/ordre.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\order\\ordre.html.twig");
    }
}
