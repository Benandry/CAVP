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
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 400px;text-align: center;\">
                            <div class=\"card card-body\" >
                                <form method=\"post\">
                                    <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\">
                                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-PPT.webp"), "html", null, true);
        echo "\" width=\"60\" height=\"70\">Paositra malagasy
                                        </span>
                                    </div>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control validate\" autocomplete=\"email\" placeholder=\" Adresse email\" required
                                            style=\"border: 2px solid #999999;border-radius: 14px;;text-align: center;margin: 5px auto;cursor: pointer;height: 35px;width: 300px;\"/>                                         
                                    </div>
                                    <hr style=\"color: red;\"></hr>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control validate\" autocomplete=\"current-password\" placeholder=\"Password\" required
                                            style=\"border: 2px solid #999999;text-align: center;margin: 5px auto;border-radius: 14px;cursor: pointer;height: 35px;width: 300px;\"/>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    ";
        // line 45
        echo "                                    <div class=\"pt-1 mb-4\">
                                        <button class=\"btn btn-danger btn-lg btn-block\" type=\"submit\" style=\"border: 2px solid #fff;margin: 5px auto;text-align: center;border-radius: 24px;width: 300px;\">Connexion</button>
                                    </div>
                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? 
                                        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_inscription");
        echo "\" style=\"color:#498000; text-decoration:none;\">Register here</a>
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
        return array (  100 => 49,  94 => 45,  90 => 34,  79 => 26,  72 => 22,  55 => 8,  51 => 7,  43 => 1,);
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
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 400px;text-align: center;\">
                            <div class=\"card card-body\" >
                                <form method=\"post\">
                                    <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\">
                                            <img src=\"{{ asset('build/images/logo-PPT.webp') }}\" width=\"60\" height=\"70\">Paositra malagasy
                                        </span>
                                    </div>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control validate\" autocomplete=\"email\" placeholder=\" Adresse email\" required
                                            style=\"border: 2px solid #999999;border-radius: 14px;;text-align: center;margin: 5px auto;cursor: pointer;height: 35px;width: 300px;\"/>                                         
                                    </div>
                                    <hr style=\"color: red;\"></hr>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control validate\" autocomplete=\"current-password\" placeholder=\"Password\" required
                                            style=\"border: 2px solid #999999;text-align: center;margin: 5px auto;border-radius: 14px;cursor: pointer;height: 35px;width: 300px;\"/>
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
                                        <button class=\"btn btn-danger btn-lg btn-block\" type=\"submit\" style=\"border: 2px solid #fff;margin: 5px auto;text-align: center;border-radius: 24px;width: 300px;\">Connexion</button>
                                    </div>
                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? 
                                        <a href=\"{{ path('page_inscription') }}\" style=\"color:#498000; text-decoration:none;\">Register here</a>
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
