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
class __TwigTemplate_1a07a2075b16764d24890ce280b8146b extends \Twig\Template
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
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
  <title> Inscription sur cavp | Paositra Malagasy</title>
</head>
<body>

    <section class=\"vh-100\" style=\"background-color: #c82232;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"col-lg-6 col-sm-6\" >
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 450px;heigth: 700px;text-align: center;\">
                            <div class=\"card card-body\">
                                <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\"><img src=\"/images/logo-PPT.webp\" width=\"50\" height=\"50\">Page d'inscription de CAVP</span>
                                    </div>
                                <h1 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px; color:#e3151a;\">  </h1>
                                    ";
        // line 25
        if ((isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["notif"]) || array_key_exists("notif", $context) ? $context["notif"] : (function () { throw new RuntimeError('Variable "notif" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "
                                    ";
        }
        // line 28
        echo "                                    <form method=\"post\" style=\"width: 23rem;\">
                                        <div class=\"form-outline mb-4\">
                                            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formule"]) || array_key_exists("formule", $context) ? $context["formule"] : (function () { throw new RuntimeError('Variable "formule" does not exist.', 30, $this->source); })()), 'form');
        echo "
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>











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
        return array (  81 => 30,  77 => 28,  71 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
  <title> Inscription sur cavp | Paositra Malagasy</title>
</head>
<body>

    <section class=\"vh-100\" style=\"background-color: #c82232;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">
                    <div class=\"col-lg-6 col-sm-6\" >
                        <div class=\"box-element card card-solid\" style=\"margin: 0% 0% 10% 50%;width: 450px;heigth: 700px;text-align: center;\">
                            <div class=\"card card-body\">
                                <div class=\"d-flex align-items-center mb-3 pb-1\">
                                        <i style=\"color: #444; font-size: 2rem;\" class=\"pb-1 fad fa-cauldron\"></i>
                                        <span class=\"h3 fw-bold mb-0\" style=\"color:#e3151a;margin: 2px auto;\"><img src=\"/images/logo-PPT.webp\" width=\"50\" height=\"50\">Page d'inscription de CAVP</span>
                                    </div>
                                <h1 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px; color:#e3151a;\">  </h1>
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
                </div>
            </div>
        </div>
    </section>











</body>
</html>", "register/index.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\register\\index.html.twig");
    }
}
