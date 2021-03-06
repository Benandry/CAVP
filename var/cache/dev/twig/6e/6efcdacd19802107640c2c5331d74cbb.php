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
        echo "<main>
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "      <div class=\"carousel-inner\">
          <div class=\"overlay-image\" style=\"background-image:url('image/logofront.png');\"></div>
            <div class=\"carousel-item active\">
          </div>
        </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- Three columns of text below the carousel -->
      <div class=\"row\">

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/vonona.png"), "html", null, true);
            echo "\" class=\"imageHomepage\"/>
            <h2 class=\"fw-bolder\">Information </h2>
              <p>
                  Le CAVP assure l???approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philat??liques qu???il confectionne par ses soins. 
                  Il effectue la vente par correspondance ?? l???Etranger, et g??re les comptes de r??serve des philat??listes. 
                  Le CAVP ??labore le catalogue des produits philat??liques dont il dispose au caveau.
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/menabe-maitso.png"), "html", null, true);
            echo "\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">CAVP</h2> 
              <p>
                  Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d???approvisionnement en Timbres-Poste et le Service Philat??lique auparavant. 
                  Il est rattach?? directement ?? la Direction des Op??rations Postales. Le CAVP est compos?? de : section commande, section exp??dition et secr??tariat
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/TIMBRE 1200dpi.jpg "), "html", null, true);
            echo "\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">Produits Postaux</h2>
          <p class=\"d-inline\">    
              CAVP est la fusion du Centre d???approvisionnement en Timbres-Poste et le Service Philat??lique auparavant.
              Il est rattach?? directement ?? la Direction des Op??rations Postales.</p>
        </div>
      </div>

      <hr class=\"featurette-divider\">
  ";
        } else {
            // line 51
            echo "    <h1>Page not found 404 </h1>
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">return to the authentification </a>.
    </p>
  ";
        }
        // line 57
        echo "</main>
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
        return array (  159 => 57,  153 => 54,  148 => 51,  135 => 41,  123 => 32,  110 => 22,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Page d'accueil de CAVP | Paositra malagasy! {% endblock %}

{% block body %}
<main>
  {% if app.user %}
      <div class=\"carousel-inner\">
          <div class=\"overlay-image\" style=\"background-image:url('image/logofront.png');\"></div>
            <div class=\"carousel-item active\">
          </div>
        </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- Three columns of text below the carousel -->
      <div class=\"row\">

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\" src=\"{{ asset('build/images/vonona.png') }}\" class=\"imageHomepage\"/>
            <h2 class=\"fw-bolder\">Information </h2>
              <p>
                  Le CAVP assure l???approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philat??liques qu???il confectionne par ses soins. 
                  Il effectue la vente par correspondance ?? l???Etranger, et g??re les comptes de r??serve des philat??listes. 
                  Le CAVP ??labore le catalogue des produits philat??liques dont il dispose au caveau.
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"{{ asset('build/images/menabe-maitso.png') }}\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">CAVP</h2> 
              <p>
                  Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d???approvisionnement en Timbres-Poste et le Service Philat??lique auparavant. 
                  Il est rattach?? directement ?? la Direction des Op??rations Postales. Le CAVP est compos?? de : section commande, section exp??dition et secr??tariat
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"{{ asset('build/images/TIMBRE 1200dpi.jpg ') }}\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">Produits Postaux</h2>
          <p class=\"d-inline\">    
              CAVP est la fusion du Centre d???approvisionnement en Timbres-Poste et le Service Philat??lique auparavant.
              Il est rattach?? directement ?? la Direction des Op??rations Postales.</p>
        </div>
      </div>

      <hr class=\"featurette-divider\">
  {% else %}
    <h1>Page not found 404 </h1>
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the authentification </a>.
    </p>
  {% endif %}
</main>
{% endblock %}
", "home/homepage.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\home\\homepage.html.twig");
    }
}
