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
class __TwigTemplate_5018102d1574fcf3927d134bd13c87ce extends \Twig\Template
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
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "y"), "html", null, true);
            echo "/  </h4>
    <div class=\"table responsive-xxl\">
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
        <thead>
            <tr>
                <th>Categorie </th>
                <th>Valeur Faciales </th>
                <th>TP/PL </th>
                <th>Nombre de planche </th>
                <th>Nombre TP </th>
                <th>Montant </th>
                <th>Obervatiions </th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 62
                echo "                <tr>
                    <td> ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "categorie", [], "any", false, false, false, 63), "html", null, true);
                echo "</td> 
                    <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "somme", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                    <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                    <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        <tbody>
        </table>
        
    <p> Antananarivo le ,";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>

    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
        ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
            echo "
    
        <h4 id=\"repartitions\">Etat de repartition de Valeurs N° </h4>
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
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 92
                echo "                    <tr>
                        <td> ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "ordre", [], "any", false, false, false, 93), "html", null, true);
                echo "</td> 
                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "vf", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                        <td> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_cat", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
                        <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "nombre_agence", [], "any", false, false, false, 96), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "            <tbody>
        </table>
    </div>
    <p> Antananarivo le ,";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " </p>

    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
        ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "prenom", [], "any", false, false, false, 105), "html", null, true);
            echo "
    
    <h4 id=\"bordereau\">Bordereau d'envoi </h4>
    <h5>Bordéreau d'envoi N° </h5>
    <table width=\"100%\" style=\"border-collapse: collapse;\" border=\"1\">
        ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dispo"]) || array_key_exists("dispo", $context) ? $context["dispo"] : (function () { throw new RuntimeError('Variable "dispo" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                // line 111
                echo "           <tr>
            <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "bureau", [], "any", false, false, false, 112), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 113
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bordereau");
                echo "\"> <i class='fa fa-info-circle'> info</i> </a></td>
           </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    </table>           
";
        } else {
            // line 118
            echo "<h1>Page not found 404 </h1>

<p>
    The requested page couldn't be located. Checkout for any URL
    misspelling or <a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
</p>
";
        }
        // line 125
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
        return array (  277 => 125,  271 => 122,  265 => 118,  261 => 116,  252 => 113,  248 => 112,  245 => 111,  241 => 110,  233 => 105,  227 => 102,  222 => 99,  213 => 96,  209 => 95,  205 => 94,  201 => 93,  198 => 92,  194 => 91,  178 => 78,  172 => 75,  167 => 72,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  138 => 64,  134 => 63,  131 => 62,  127 => 61,  109 => 46,  95 => 35,  89 => 32,  81 => 27,  74 => 23,  64 => 16,  57 => 12,  55 => 11,  43 => 1,);
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
<h4 id=\"recapitulation\">Récapitulation N° {{ 'now' |date(\"y\") }}/  </h4>
    <div class=\"table responsive-xxl\">
        <table width=\"100%\" style=\"border-collapse:collapse;\" border=\"1\">
        <thead>
            <tr>
                <th>Categorie </th>
                <th>Valeur Faciales </th>
                <th>TP/PL </th>
                <th>Nombre de planche </th>
                <th>Nombre TP </th>
                <th>Montant </th>
                <th>Obervatiions </th>
            </tr>
        </thead>
        <tbody>
            {% for pro in dispo %}
                <tr>
                    <td> {{ pro.categorie }}</td> 
                    <td>{{ pro.somme }}</td>
                    <td>{{ pro.vf }}</td>
                    <td>{{ pro.vf }}</td>
                    <td>{{ pro.vf }}</td>
                    <td>{{ pro.vf }}</td>
                    <td>{{ pro.vf }}</td>
                </tr>
            {% endfor %}
        <tbody>
        </table>
        
    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>

    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
        {{ app.user.prenom }}
    
        <h4 id=\"repartitions\">Etat de repartition de Valeurs N° </h4>
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
    <p> Antananarivo le ,{{ 'now' |format_date(locale='fr') }} </p>

    <p><span> Chef de  Centre d'Approvisionnement en Valeurs Postales </span></p>
        {{ app.user.prenom }}
    
    <h4 id=\"bordereau\">Bordereau d'envoi </h4>
    <h5>Bordéreau d'envoi N° </h5>
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
