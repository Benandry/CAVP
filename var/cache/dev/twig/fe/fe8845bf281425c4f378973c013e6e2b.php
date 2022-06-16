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

/* historique/history.html.twig */
class __TwigTemplate_250ddc8a63152ac322b2c54e8ff6c4c6 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/history.html.twig", 1);
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

        echo "Compte rendu | Paositra Malagasy";
        
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
        echo "    <div style=\"background-color: #e5e6e7;\">
        <div class=\"clearfix\">
            <span class=\"float-right\" style=\"margin-top: 10px;\">
                <ul class=\"nav\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span> Les produits:  <span></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                            <a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "tous les produits par categorie"]);
        echo "\">Tous</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_enter", ["source" => "tous les produits entrée par categorie"]);
        echo "\">Entrées</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("integreted", ["source" => "tous les produits integrés par categorie"]);
        echo "\">Reintegrées</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history_out", ["source" => "tous les produits sorties par categorie"]);
        echo "\">Sorties</a>
                        </div>
                    </li>
                </ul>
            </span>
        </div>
        <h5 class=\"q-title\"> Compte rendu produits   </h5>

            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Preciser la date</button>
            <div class=\"modal\" id=\"myModal\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"> Preciser la date </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "preciser", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                            <div class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "submit", [], "any", false, false, false, 42), 'row', ["label" => "valider"]);
        echo "
                        </div>
                    </div>
                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        <div class=\"row\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["histo"]) {
            // line 51
            echo "                <div class=\"col-lg-4 col-sm-6\" >
                <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
                <div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
                        <div class=\"card card-body\">
                            <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                                <span class=\"text-uppercase\" style=\"color:#498000;\">
                                ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "dat", [], "any", false, false, false, 57), "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "

                                </span>
                            </h4>
                            <p>
                                <span> <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-voucher-mail.png"), "html", null, true);
            echo "\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "product", [], "any", false, false, false, 62), "html", null, true);
            echo "</span> <br/><br/>
                                Categorie : <span style=\"color:#498000;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "categorie", [], "any", false, false, false, 63), "html", null, true);
            echo "</span> <br/><br/>
                                Action : <span style=\"color:#498000;\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "types", [], "any", false, false, false, 64), "html", null, true);
            echo "</span> <br/><br/>
                                <u>Nombre :</u> <span style=\"color:#498000;\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "nombre", [], "any", false, false, false, 65), "html", null, true);
            echo "</span> <br/><br/>
                                Reference : <span style=\"color:#498000;\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "reference", [], "any", false, false, false, 66), "html", null, true);
            echo "</span> <br/><br/>
                                Destination : <span style=\"color:#498000;\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["histo"], "destination", [], "any", false, false, false, 67), "html", null, true);
            echo "</span> <br/>
                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['histo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "historique/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  203 => 67,  199 => 66,  195 => 65,  191 => 64,  187 => 63,  181 => 62,  173 => 57,  165 => 51,  161 => 50,  153 => 45,  147 => 42,  138 => 36,  132 => 33,  122 => 26,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compte rendu | Paositra Malagasy{% endblock %}

{% block body %}
    <div style=\"background-color: #e5e6e7;\">
        <div class=\"clearfix\">
            <span class=\"float-right\" style=\"margin-top: 10px;\">
                <ul class=\"nav\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span> Les produits:  <span></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown09\">
                            <a class=\"dropdown-item\" href=\"{{ path('history', {'source':'tous les produits par categorie'}) }}\">Tous</a>
                            <a class=\"dropdown-item\" href=\"{{ path('history_enter', {'source':'tous les produits entrée par categorie'}) }}\">Entrées</a>
                            <a class=\"dropdown-item\" href=\"{{ path('integreted', {'source':'tous les produits integrés par categorie'}) }}\">Reintegrées</a>
                            <a class=\"dropdown-item\" href=\"{{ path('history_out', {'source':'tous les produits sorties par categorie'}) }}\">Sorties</a>
                        </div>
                    </li>
                </ul>
            </span>
        </div>
        <h5 class=\"q-title\"> Compte rendu produits   </h5>

            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Preciser la date</button>
            <div class=\"modal\" id=\"myModal\">
                {{ form_start(form) }}
                <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"> Preciser la date </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    {{ form_start(form) }}
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                                    {{ form_row(form.preciser, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                            <div class=\"form-group\">
                            {{ form_row(form.submit, { 'label': 'valider' }) }}
                        </div>
                    </div>
                    {{ form_end(form) }}
                    </div>
                </div>
            </div>
        <div class=\"row\">
            {% for histo in history%}
                <div class=\"col-lg-4 col-sm-6\" >
                <!-- <div style=\"box-shadow: 7px 7px 10px 0px #afafaf,-10px -10px 20px 0px #F0F0F2; background-color: #BDBDBB;\"> !-->
                <div class=\"box-element card card-solid\" style=\"margin: 20px;width: 400px; height:380px\">
                        <div class=\"card card-body\">
                            <h4 style=\"display: flex;\"><img src=\"/images/calendrier.png\" width=\"30\" height=\"35\"> : 
                                <span class=\"text-uppercase\" style=\"color:#498000;\">
                                {{ histo.dat|format_date(locale='fr') }}

                                </span>
                            </h4>
                            <p>
                                <span> <img src=\"{{ asset('images/shopping-voucher-mail.png') }}\" alt=\"img product\" width=\"25\" height=\"30\"></span>produits : <span style=\"color:#498000;\">{{ histo.product }}</span> <br/><br/>
                                Categorie : <span style=\"color:#498000;\">{{ histo.categorie }}</span> <br/><br/>
                                Action : <span style=\"color:#498000;\">{{ histo.types }}</span> <br/><br/>
                                <u>Nombre :</u> <span style=\"color:#498000;\">{{ histo.nombre }}</span> <br/><br/>
                                Reference : <span style=\"color:#498000;\">{{ histo.reference }}</span> <br/><br/>
                                Destination : <span style=\"color:#498000;\">{{ histo.destination }}</span> <br/>
                            </p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "historique/history.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\history.html.twig");
    }
}
