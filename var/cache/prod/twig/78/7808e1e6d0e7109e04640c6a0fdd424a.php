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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_1859d45a9615856657c56e1d027d61c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content_title' => [$this, 'block_content_title'],
            'page_content' => [$this, 'block_page_content'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_86a299b15248546eb01f4076eac8b76daed887b7fb9b2f7ffd919f940037b152"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content";
    }

    // line 6
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        @trigger_error("The \"page_title\" block is deprecated, use \"content_title\" instead."." (\"@EasyAdmin/page/content.html.twig\" at line 7).", E_USER_DEPRECATED);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_title", $context, $blocks);
    }

    // line 12
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        @trigger_error("The \"page_content\" block is deprecated, use \"main\" instead."." (\"@EasyAdmin/page/content.html.twig\" at line 13).", E_USER_DEPRECATED);
    }

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_content", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  79 => 13,  75 => 12,  68 => 10,  63 => 7,  59 => 6,  52 => 4,  48 => 2,  46 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "C:\\Users\\Nandry\\Desktop\\CAVP\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\content.html.twig");
    }
}
