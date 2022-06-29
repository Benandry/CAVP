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
class __TwigTemplate_141434606bb537a10be252c6dd4abc5c extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "                        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\" aria-current=\"page\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin", ["source" => "administrateur"]);
            echo "\"><i class='fas fa-user-cog' class=\"admin\"></i> Administrateur</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_dispo", ["source" => "produitsdisponible"]);
            echo "\" ><i class='fas fa-coins' class=\"admin\"></i> Recapitulation </a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock", ["source" => "etatdestock"]);
            echo "\"> <i class='fas fa-bacon' class=\"admin\"></i> Etat de Stock</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_out", ["source" => "ordredesortie"]);
            echo "\"> <i class='fas fa-external-link-alt'></i>  Ordre de sortie</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "compterendu "]);
            echo "\"> <i class=\"fas fa-file-alt\"></i>  Compte Rendu</a>
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Centre d'Approvisionnement en Valeurs Postales (CAVP) | Paositra malagasy!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <main>
    </main>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  239 => 67,  229 => 66,  217 => 50,  207 => 49,  194 => 7,  184 => 6,  165 => 5,  154 => 69,  152 => 66,  144 => 61,  134 => 53,  132 => 49,  126 => 45,  120 => 42,  117 => 41,  111 => 38,  104 => 34,  98 => 31,  92 => 28,  86 => 25,  80 => 22,  76 => 20,  74 => 19,  66 => 14,  59 => 9,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Centre d'Approvisionnement en Valeurs Postales (CAVP) | Paositra malagasy!{% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body>
    <header>
        <nav class=\"navbar navbar-expand-lg fixed-top navbar-light bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand titre fw-bold\" href=\"{{ path('homepage', {'source':'page d\\'acceuil de CAVP'}) }}\"> CAVP Paositra Malagasy</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    {% if app.user %}
                        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\" aria-current=\"page\" href=\"{{ path('admin', {'source':'administrateur'}) }}\"><i class='fas fa-user-cog' class=\"admin\"></i> Administrateur</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\" href=\"{{ path('Product_dispo', {'source':'produitsdisponible'}) }}\" ><i class='fas fa-coins' class=\"admin\"></i> Recapitulation </a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"{{ path('etat_de_stock', {'source':'etatdestock'}) }}\"> <i class='fas fa-bacon' class=\"admin\"></i> Etat de Stock</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"{{ path('order_out', {'source':'ordredesortie'}) }}\"> <i class='fas fa-external-link-alt'></i>  Ordre de sortie</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link btn btn-outline-ligth btn-lg liens\"  href=\"{{ path('history', {'source':'compterendu '}) }}\"> <i class=\"fas fa-file-alt\"></i>  Compte Rendu</a>
                            </li>
                        </ul>
                        <div class=\"d-flex\">
                            <a href=\"{{ path('app_logout', {'source':'deconnecter'}) }}\" class=\"btn btn-outline-danger btn-sm\"> <i class=\"fa-solid fa-user-slash\"></i>Deconnexion</a>
                        </div>
                    {% else %}
                        <span class=\"float-end\">
                            <a href=\"{{ path('app_login', {'source':' connecter '}) }}\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fa-solid fa-user\"></i>Connexion</a>
                        </span>
                    {% endif %}
                </div>
            </div>
        </nav>
    </header>
    {% block body %}
    <main>
    </main>
    {% endblock %}

  <!-- FOOTER -->


  
<footer class=\"footer mt-auto py-3 bg-light\">
  <div class=\"container\">
        <p>
            &copy; Copyright <span style=\"color:#498000;\">{{ 'now' | date('Y') }}</span> Paositra Malagasy <i style=\"color:#e3151a;\" class=\"fa-thin fa-barcode\"></i>
            <a href=\"paositramada.mg/cavp\"> Paositramalagasy CAVP </a>
        </p>
  </div>
</footer>
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\base.html.twig");
    }
}
