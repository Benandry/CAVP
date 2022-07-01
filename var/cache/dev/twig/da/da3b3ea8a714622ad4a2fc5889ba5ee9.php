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
class __TwigTemplate_af06a773e060b9f06de95f3666f6b4c0 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  86 => 40,  82 => 29,  73 => 23,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title> Authentification de cavp | Paositra Malagasy </title>
   {{ encore_entry_link_tags('app') }}
   {{ encore_entry_script_tags('app') }}
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
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" required class=\"form-control validate\" autocomplete=\"email\" placeholder=\" Adresse email\" required />                                         
                                    </div>
                                    <hr style=\"color: red;\"></hr>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control validate\" autocomplete=\"current-password\" placeholder=\"Password\" required />
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                                    {#
                                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                                        See https://symfony.com/doc/current/security/remember_me.html

                                        <div class=\"checkbox mb-3\">
                                            <label>
                                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                            </label>
                                        </div>
                                    #}
                                    <div class=\"pt-1 mb-4\">
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
 ", "security/login.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\security\\login.html.twig");
    }
}
