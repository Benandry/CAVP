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

/* register/index.html.twig */
class __TwigTemplate_ad17bb88f1cd0d326c59dfe1706ac244 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
   ";
        // line 6
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
   ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
  <title> Inscription sur cavp | Paositra Malagasy</title>
</head>
<body class=\"corps\">
    <div > 
        <div class=\"box-element card-solid\" id=\"inscriptions\">
            <div class=\"card card-body\">
                <div class=\"d-flex align-items-center mb-3 pb-1\">
                    <i class=\"pb-1 fad fa-cauldron\"></i>
                    <h3 class=\"fw-normal \" style=\"color:#e3151a;margin: 2px auto;\">Page d'inscription de CAVP</h3>
                </div>
                ";
        // line 18
        if ((isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
                ";
        }
        // line 21
        echo "                <form method=\"post\" style=\"width: 23rem;\">
                    <div class=\"form-outline mb-4\">
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new RuntimeError('Variable "formule" does not exist.', 23, $this->source); })()), 'form');
        echo "
                    </div>
                </form>
            </div>
        </div>
    </div>
                
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  76 => 21,  70 => 19,  68 => 18,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
   {{ encore_entry_link_tags('app') }}
   {{ encore_entry_script_tags('app') }}
  <title> Inscription sur cavp | Paositra Malagasy</title>
</head>
<body class=\"corps\">
    <div > 
        <div class=\"box-element card-solid\" id=\"inscriptions\">
            <div class=\"card card-body\">
                <div class=\"d-flex align-items-center mb-3 pb-1\">
                    <i class=\"pb-1 fad fa-cauldron\"></i>
                    <h3 class=\"fw-normal \" style=\"color:#e3151a;margin: 2px auto;\">Page d'inscription de CAVP</h3>
                </div>
                {% if notif %}
                        {{ notif }}
                {% endif %}
                <form method=\"post\" style=\"width: 23rem;\">
                    <div class=\"form-outline mb-4\">
                        {{ form(formule) }}
                    </div>
                </form>
            </div>
        </div>
    </div>
                
</body>
</html>", "register/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\register\\index.html.twig");
    }
}
