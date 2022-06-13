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
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
    <section class=\"vh-100\" style=\"background-color: #c82232;\" >
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"col-lg-6 col-sm-6\" >
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 400px;text-align: center;\">
                            <div class=\"card card-body\">
                                <form method=\"post\">
                                    <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\"><img src=\"/images/logo-PPT.webp\" width=\"50\" height=\"50\">Paositra malagasy</span>
                                    </div>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"email\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control validate\" autocomplete=\"email\" placeholder=\" Adresse email\" required
                                            style=\"border: 2px solid #999999;border-radius: 14px;;text-align: center;margin: 5px auto;cursor: pointer;height: 35px;width: 300px;\"/>                                         
                                    </div>
                                    <hr style=\"color: red;\"></hr>
                                    <div class=\"form-outline mb-4\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control validate\" autocomplete=\"current-password\" placeholder=\"Password\" required
                                            style=\"border: 2px solid #999999;text-align: center;margin: 5px auto;border-radius: 14px;cursor: pointer;height: 35px;width: 300px;\"/>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    ";
        // line 46
        echo "                                    <div class=\"pt-1 mb-4\">
                                        <button class=\"btn btn-danger btn-lg btn-block\" type=\"submit\" style=\"border: 2px solid #fff;margin: 5px auto;text-align: center;border-radius: 24px;width: 300px;\">Connexion</button>
                                    </div>
                                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? 
                                        <a href=\"";
        // line 50
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
        return array (  98 => 50,  92 => 46,  88 => 35,  77 => 27,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title> Authentification de cavp | Paositra Malagasy </title>
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body>
    <section class=\"vh-100\" style=\"background-color: #c82232;\" >
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"col-lg-6 col-sm-6\" >
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 400px;text-align: center;\">
                            <div class=\"card card-body\">
                                <form method=\"post\">
                                    <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\"><img src=\"/images/logo-PPT.webp\" width=\"50\" height=\"50\">Paositra malagasy</span>
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
