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

/* historique/precision.html.twig */
class __TwigTemplate_14ecae4feb4563ff98015cecc8db0fcb extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/precision.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/precision.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <title>Modal Form 
    </title>
    <style type=\"text/css\">
      .modal-header{
          background: #dc3444;
          color: #fff;
      }
      .required: 1after{
        content: \"*\";
        color: red;
      }

    </style>
  </head>
  <body>
    <button type=\"button\" class=\"btn btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Preciser la date</button>
        <div class=\"modal\" id=\"myModal\">
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
            <div class=\"modal-dialog\">
               <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <h5 class=\"modal-title\"> Preciser la date </h5>
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                  </div>
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "preciser", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                      </form>
                  </div>
                  <div class=\"modal-footer\">
                        <div class=\"form-group\">
                         ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "submit", [], "any", false, false, false, 44), 'row', ["label" => "valider"]);
        echo "
                       </div>
                  </div>
                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "historique/precision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  97 => 44,  88 => 38,  82 => 35,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <title>Modal Form 
    </title>
    <style type=\"text/css\">
      .modal-header{
          background: #dc3444;
          color: #fff;
      }
      .required: 1after{
        content: \"*\";
        color: red;
      }

    </style>
  </head>
  <body>
    <button type=\"button\" class=\"btn btn-light\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal\"> Preciser la date</button>
        <div class=\"modal\" id=\"myModal\">
        {{ form_start(form) }}
            <div class=\"modal-dialog\">
               <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <h5 class=\"modal-title\"> Preciser la date </h5>
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                  </div>
                {{ form_start(form) }}
                  <div class=\"modal-body\">
                       <div class=\"form-group\">
                                {{ form_row(form.preciser, {'attr': {'class': 'form-control'}}) }}
                        </div>
                      </form>
                  </div>
                  <div class=\"modal-footer\">
                        <div class=\"form-group\">
                         {{ form_row(form.submit, { 'label': 'valider' }) }}
                       </div>
                  </div>
                {{ form_end(form) }}
                </div>
            </div>
        </div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
", "historique/precision.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\templates\\historique\\precision.html.twig");
    }
}
