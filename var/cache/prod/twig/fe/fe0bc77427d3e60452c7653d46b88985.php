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
class __TwigTemplate_3512576d69596c428a8e098861b98309 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Page d'accueil de CAVP | Paositra malagasy! ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<main>
  ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
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
                  Le CAVP assure l’approvisionnement des bureaux en valeurs postales tel que Timbre-poste et Produits Nouveaux Postaux (autres produits et produits philatéliques qu’il confectionne par ses soins. 
                  Il effectue la vente par correspondance à l’Etranger, et gère les comptes de réserve des philatélistes. 
                  Le CAVP élabore le catalogue des produits philatéliques dont il dispose au caveau.
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/menabe-maitso.png"), "html", null, true);
            echo "\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">CAVP</h2> 
              <p>
                  Centre d'Approvisionement des Valeurs Postales est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant. 
                  Il est rattaché directement à la Direction des Opérations Postales. Le CAVP est composé de : section commande, section expédition et secrétariat
              </p>
        </div>

        <div class=\"col-lg-4\">
          <img loading=\"lazy\" width=\"150\" height=\"150\"src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/TIMBRE 1200dpi.jpg "), "html", null, true);
            echo "\" class=\"imageHomepage\"/>
          <h2 class=\"fw-bolder\">Produits Postaux</h2>
          <p class=\"d-inline\">    
              CAVP est la fusion du Centre d’approvisionnement en Timbres-Poste et le Service Philatélique auparavant.
              Il est rattaché directement à la Direction des Opérations Postales.</p>
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
        return array (  129 => 57,  123 => 54,  118 => 51,  105 => 41,  93 => 32,  80 => 22,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/homepage.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\home\\homepage.html.twig");
    }
}
