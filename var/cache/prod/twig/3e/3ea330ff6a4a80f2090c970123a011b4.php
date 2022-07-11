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

/* base.html.twig */
class __TwigTemplate_2eb7dbe57c816aab3d4b9db3efa5c11a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    <header>
        <nav class=\"navbar navbar-expand-lg fixed-top navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand titre fw-bold\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage", ["source" => "page d'acceuil de CAVP"]);
        echo "\"> CAVP Paositra Malagasy</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link liens\" aria-current=\"page\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin", ["source" => "administrateur"]);
            echo "\"><i class='fas fa-user-cog' class=\"admin\"></i> Administrateur</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link liens\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_dispo", ["source" => "produitsdisponible"]);
            echo "\" ><i class='fas fa-coins' class=\"admin\"></i> Recapitulation </a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn-lg liens\"  href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock", ["source" => "etatdestock"]);
            echo "\"> <i class='fas fa-bacon' class=\"admin\"></i> Etat de Stock</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn-lg liens\"  href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "compterendu "]);
            echo "\"> <i class=\"fas fa-file-alt\"></i>  Compte Rendu</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn-lg liens\"  id=\"ordre_de_sortie\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_out", ["source" => "ordredesortie"]);
            echo "\"> <i class='fas fa-external-link-alt'></i>  Ordre de sortie</a>
                            </li>
                        </ul>
                        <div class=\"d-flex\">
                            <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout", ["source" => "deconnecter"]);
            echo "\" class=\"btn btn-outline-danger btn-sm\"> <i class=\"fa-solid fa-user-slash\"></i>Deconnexion</a>
                        </div>
                    ";
        } else {
            // line 41
            echo "                        <span class=\"float-end\">
                            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["source" => " connecter "]);
            echo "\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fa-solid fa-user\"></i>Connexion</a>
                        </span>
                    ";
        }
        // line 45
        echo "                </div>
            </div>
        </nav>
    </header>
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
  <!-- FOOTER -->


  
<footer class=\"footer mt-auto py-3 bg-light\">
  <div class=\"container\">
        <p>
            &copy; Copyright <span style=\"color:#498000;\">";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span> Paositra Malagasy <i style=\"color:#e3151a;\" class=\"fa-thin fa-barcode\"></i>
            <a href=\"paositramada.mg/cavp\"> Paositramalagasy CAVP </a>
        </p>
  </div>
</footer>
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Centre d'Approvisionnement en Valeurs Postales (CAVP) | Paositra malagasy!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    <main>
    </main>
    ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 67,  181 => 66,  175 => 50,  171 => 49,  164 => 7,  160 => 6,  153 => 5,  148 => 69,  146 => 66,  138 => 61,  128 => 53,  126 => 49,  120 => 45,  114 => 42,  111 => 41,  105 => 38,  98 => 34,  92 => 31,  86 => 28,  80 => 25,  74 => 22,  70 => 20,  68 => 19,  60 => 14,  53 => 9,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\base.html.twig");
    }
}
