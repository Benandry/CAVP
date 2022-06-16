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
        
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand titre\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage", ["source" => "page d'acceuil de CAVP"]);
        echo "\">CAVP Paositra Malagasy</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin", ["source" => "administrateur"]);
            echo "\">Administrateur</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_dispo", ["source" => "produits disponible"]);
            echo "\">Produits Dispo</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_de_stock", ["source" => "etat de stock"]);
            echo "\">Etat de Stock</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_out", ["source" => "ordre de sortie"]);
            echo "\">Ordre de sortie</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("history", ["source" => "compte rendu "]);
            echo "\">Compte Rendu</a>
                            </li>
                        </ul>
                        <div class=\"d-flex\">
                            <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout", ["source" => "deconnecter"]);
            echo "\" class=\"btn btn-outline-danger\">Logout</a>
                        </div>
                    ";
        } else {
            // line 42
            echo "                        <div class=\"d-flex\">
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["source" => " connecter "]);
            echo "\" class=\"btn btn-outline-danger\">Login</a>
                        </div>
                    ";
        }
        // line 46
        echo "                </div>
            </div>
            </nav>
        </div>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
  <!-- FOOTER -->
  <footer class=\"container\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a>
    </p>
    <p>&copy; Copyright <span style=\"color:#498000;\">";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span> Paositra Malagasy <i style=\"color:#e3151a;\" class=\"fa-thin fa-barcode\"></i>
        <a href=\"paositramada.mg/cavp\"> Paositramalagasy CAVP </a></p>
  </footer>
        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
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

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
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
        return array (  232 => 61,  222 => 60,  204 => 51,  191 => 7,  181 => 6,  162 => 5,  151 => 63,  149 => 60,  143 => 57,  136 => 52,  134 => 51,  127 => 46,  121 => 43,  118 => 42,  112 => 39,  105 => 35,  99 => 32,  93 => 29,  87 => 26,  81 => 23,  77 => 21,  75 => 20,  67 => 15,  59 => 9,  57 => 6,  53 => 5,  47 => 1,);
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
        
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand titre\" href=\"{{ path('homepage', {'source':'page d\\'acceuil de CAVP'}) }}\">CAVP Paositra Malagasy</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    {% if app.user %}
                        <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                            <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('admin', {'source':'administrateur'}) }}\">Administrateur</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('Product_dispo', {'source':'produits disponible'}) }}\">Produits Dispo</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('etat_de_stock', {'source':'etat de stock'}) }}\">Etat de Stock</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('order_out', {'source':'ordre de sortie'}) }}\">Ordre de sortie</a>
                            </li>
                            <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('history', {'source':'compte rendu '}) }}\">Compte Rendu</a>
                            </li>
                        </ul>
                        <div class=\"d-flex\">
                            <a href=\"{{ path('app_logout', {'source':'deconnecter'}) }}\" class=\"btn btn-outline-danger\">Logout</a>
                        </div>
                    {% else %}
                        <div class=\"d-flex\">
                        <a href=\"{{ path('app_login', {'source':' connecter '}) }}\" class=\"btn btn-outline-danger\">Login</a>
                        </div>
                    {% endif %}
                </div>
            </div>
            </nav>
        </div>

    {% block body %}{% endblock %}

  <!-- FOOTER -->
  <footer class=\"container\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a>
    </p>
    <p>&copy; Copyright <span style=\"color:#498000;\">{{ 'now' | date('Y') }}</span> Paositra Malagasy <i style=\"color:#e3151a;\" class=\"fa-thin fa-barcode\"></i>
        <a href=\"paositramada.mg/cavp\"> Paositramalagasy CAVP </a></p>
  </footer>
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\base.html.twig");
    }
}
