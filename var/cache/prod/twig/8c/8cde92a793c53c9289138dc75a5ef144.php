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

/* security/login.html.twig */
class __TwigTemplate_75cf7d48d2315a59ae62333fff0da663 extends \Twig\Template
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
  <title> Authentification de cavp | Paositra Malagasy </title>
   ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
   ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
</head>
<body>
    <section class=\"vh-100\" style=\"background-color: #ffffff;\" >
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"col-lg-6 col-sm-6\" >
                        <div class=\"box-element card card-solid\" id=\"card-solid\">
                            <div class=\"card card-body\">
                                <form method=\"post\">
                                    <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <h3 class=\"h3 fw-normal\" style=\"color:#e3151a;margin: 2px auto;\"> Authentification de CAVP </h3>
                                    </div>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" required class=\"form-control validate\" autocomplete=\"email\" placeholder=\" Adresse email\" required />                                         
                                    </div>
                                    <hr style=\"color: red;\"></hr>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control validate\" autocomplete=\"current-password\" placeholder=\"Password\" required />
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    ";
        // line 40
        echo "                                    <div class=\"pt-1 mb-4\">
                                        <button class=\"btn btn-danger btn-sm btn-block\" type=\"submit\">Connexion</button>
                                    </div>
                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Vous n'avez pas de compte ? 
                                        Contacter au(x) administrateur(s) de CAVP
                                        </p>
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</body>
</html>
 ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  76 => 29,  67 => 23,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\security\\login.html.twig");
    }
}
