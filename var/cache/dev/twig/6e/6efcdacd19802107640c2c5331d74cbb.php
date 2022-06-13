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

/* home/homepage.html.twig */
class __TwigTemplate_90dacf16a8154924f9b95ea51ba279cc extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Page d'accueil de CAVP | Paositra malagasy! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\" jumbotron\" style=\"background-color: #ffe77b; margin-top: 20px\">
    <div class=\"container\">
        <h1 class=\"display-4\" style=\"color: #fff\">Home page CAVP </h1>
        <p>Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. Il est rattaché directement à la Direction des Opérations Postales. Le CAVP est composé de : section commande, section expédition et secrétariat</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\" style=\"display: flex;\">
        <div style=\"margin: 5rem auto\" >
            <img src=\"/images/cavp-accueil.png\" alt=\"\">
        </div>
        
    </div>
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/menabe-maitso.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                          <h2 class=\"q-title\">Information </h2>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">
                                    Le CAVP assure l’approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philatéliques qu’il confectionne par ses soins. 
                                     Il effectue la vente par correspondance à l’Etranger, et gère les comptes de réserve des philatélistes. 
                                     Le CAVP élabore le catalogue des produits philatéliques dont il dispose au caveau.</p>
                                <p class=\"pt-4\"><strong>--Timbre postales --</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"/images/TIMBRE 1200dpi.jpg\" width=\"150\" height=\"200\">
                        </div>
                        <div class=\"col\">
                            <h1 class=\"q-title-show\"> CAVP </h1>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">CAVP est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. Il est rattaché directement à la Direction des Opérations Postales.</p>
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"pt-4\"><strong>-- Produit des valeurs Postaux -- </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Page d'accueil de CAVP | Paositra malagasy! {% endblock %}

{% block body %}

<div class=\" jumbotron\" style=\"background-color: #ffe77b; margin-top: 20px\">
    <div class=\"container\">
        <h1 class=\"display-4\" style=\"color: #fff\">Home page CAVP </h1>
        <p>Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. Il est rattaché directement à la Direction des Opérations Postales. Le CAVP est composé de : section commande, section expédition et secrétariat</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\" style=\"display: flex;\">
        <div style=\"margin: 5rem auto\" >
            <img src=\"/images/cavp-accueil.png\" alt=\"\">
        </div>
        
    </div>
    <div class=\"row\" >
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ asset('images/menabe-maitso.png') }}\" width=\"100\" height=\"100\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                          <h2 class=\"q-title\">Information </h2>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">
                                    Le CAVP assure l’approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philatéliques qu’il confectionne par ses soins. 
                                     Il effectue la vente par correspondance à l’Etranger, et gère les comptes de réserve des philatélistes. 
                                     Le CAVP élabore le catalogue des produits philatéliques dont il dispose au caveau.</p>
                                <p class=\"pt-4\"><strong>--Timbre postales --</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"/images/TIMBRE 1200dpi.jpg\" width=\"150\" height=\"200\">
                        </div>
                        <div class=\"col\">
                            <h1 class=\"q-title-show\"> CAVP </h1>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">CAVP est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. Il est rattaché directement à la Direction des Opérations Postales.</p>
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"pt-4\"><strong>-- Produit des valeurs Postaux -- </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "home/homepage.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\home\\homepage.html.twig");
    }
}
