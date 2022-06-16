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

/* /home/homepage.html.twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/home/homepage.html.twig", 1);
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
<main>
  <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"overlay-image\" style=\"background-image:url('image/logofront.png');\"></div>
      <div class=\"carousel-item active\">
        <div class=\"container\">
          <div class=\"carousel-caption text-start\">
            <h1>Centre d'Approvisionnement en Valeurs Postales </h1>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class=\"container marketing\">

    <!-- Three columns of text below the carousel -->
    <div class=\"row\">

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/vonona.png"), "html", null, true);
        echo "\"/>
        <h2 class = \"h1\">Information </h2>
            <p>
                Le CAVP assure l’approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philatéliques qu’il confectionne par ses soins. 
                Il effectue la vente par correspondance à l’Etranger, et gère les comptes de réserve des philatélistes. 
                Le CAVP élabore le catalogue des produits philatéliques dont il dispose au caveau.
            </p>
      </div>

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/menabe-maitso.png"), "html", null, true);
        echo "\"/>
        <h2 class=\"q-title-show\">CAVP</h2> 
            <p>
                Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. 
                Il est rattaché directement à la Direction des Opérations Postales. Le CAVP est composé de : section commande, section expédition et secrétariat
            </p>
      </div>

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/TIMBRE 1200dpi.jpg "), "html", null, true);
        echo "\"/>
        <h2 class=\"q-title-show\">Produits Postaux</h2>
        <p class=\"d-inline\">    
            CAVP est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant.
            Il est rattaché directement à la Direction des Opérations Postales.</p>
      </div>
      >
    </div>

    <hr class=\"featurette-divider\">

  </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/home/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 52,  131 => 43,  118 => 33,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Page d'accueil de CAVP | Paositra malagasy! {% endblock %}

{% block body %}

<main>
  <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"overlay-image\" style=\"background-image:url('image/logofront.png');\"></div>
      <div class=\"carousel-item active\">
        <div class=\"container\">
          <div class=\"carousel-caption text-start\">
            <h1>Centre d'Approvisionnement en Valeurs Postales </h1>
            <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class=\"container marketing\">

    <!-- Three columns of text below the carousel -->
    <div class=\"row\">

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\" src=\"{{ asset('build/images/vonona.png') }}\"/>
        <h2 class = \"h1\">Information </h2>
            <p>
                Le CAVP assure l’approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philatéliques qu’il confectionne par ses soins. 
                Il effectue la vente par correspondance à l’Etranger, et gère les comptes de réserve des philatélistes. 
                Le CAVP élabore le catalogue des produits philatéliques dont il dispose au caveau.
            </p>
      </div>

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"{{ asset('build/images/menabe-maitso.png') }}\"/>
        <h2 class=\"q-title-show\">CAVP</h2> 
            <p>
                Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. 
                Il est rattaché directement à la Direction des Opérations Postales. Le CAVP est composé de : section commande, section expédition et secrétariat
            </p>
      </div>

      <div class=\"col-lg-4\">
        <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"{{ asset('build/images/TIMBRE 1200dpi.jpg ') }}\"/>
        <h2 class=\"q-title-show\">Produits Postaux</h2>
        <p class=\"d-inline\">    
            CAVP est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant.
            Il est rattaché directement à la Direction des Opérations Postales.</p>
      </div>
      >
    </div>

    <hr class=\"featurette-divider\">

  </div>
</main>
{% endblock %}
", "/home/homepage.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\home\\homepage.html.twig");
    }
}
