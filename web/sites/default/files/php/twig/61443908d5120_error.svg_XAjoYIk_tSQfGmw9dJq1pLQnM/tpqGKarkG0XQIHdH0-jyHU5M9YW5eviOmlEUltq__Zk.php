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

/* @olivero/../images/error.svg */
class __TwigTemplate_5aea2061e488ac5a0a05e14b7fb48cbc95f27d24f03adb66d8abf487048f213a extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"31px\" height=\"31px\" viewBox=\"0 0 31 31\">
  <path d=\"M0,16.2C0.5,23.1,5.2,29,12,30.6c6.3,1.5,13.1-1.2,16.6-6.7c3.4-5.3,3.2-12.3-0.5-17.4C24.2,1,16.9-1.4,10.6,0.8C4.2,3-0.5,9.4,0,16.2z M3.9,14.5c0.4-4.1,3-7.8,6.7-9.5c1.9-0.9,3.9-1.2,5.9-1c1,0.1,2,0.3,3,0.7c0.4,0.1,2.2,0.7,2.3,1.2C22,6,19.5,8.1,19.3,8.3c-1.8,1.8-3.6,3.6-5.4,5.5c-1.8,1.8-3.6,3.6-5.5,5.4c-0.6,0.6-1.2,1.2-1.8,1.8c-0.1,0.1-0.6,0.8-0.8,0.8c-0.6,0-1.5-3.2-1.6-3.7C3.9,16.9,3.8,15.7,3.9,14.5z M25.3,9.1c0.7,0.7,1.2,2.2,1.4,3.1c0.3,1.2,0.5,2.4,0.4,3.7c-0.1,2.8-1.2,5.4-3.1,7.5c-3.8,4.1-10.2,4.9-14.9,1.8C10.7,23.6,25.1,9,25.3,9.1z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@olivero/../images/error.svg";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/../images/error.svg", "/opt/web/core/themes/olivero/images/error.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
