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
class __TwigTemplate_1398e383e1a39f97beead32cdbea9de3 extends \Twig\Template
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
                    <h3 class=\"fw-normal\" style=\"color:#e3151a;margin: 2px auto;\">Page d'inscription de CAVP</h3>
                </div>
                ";
        // line 18
        if (($context["notif"] ?? null)) {
            // line 19
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["notif"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 21
        echo "                <form method=\"post\" style=\"width: 23rem;\">
                    <div class=\"form-outline mb-4\">
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formule"] ?? null), 'form');
        echo "
                    </div>
                </form>
            </div>
        </div>
    </div>
                
</body>
</html>";
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
        return array (  74 => 23,  70 => 21,  64 => 19,  62 => 18,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\register\\index.html.twig");
    }
}
