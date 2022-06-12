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

/* core/themes/olivero/templates/maintenance-page.html.twig */
class __TwigTemplate_d05973a80f89fe626d768a00c87081fd31efe7458ccede98ae0407a154626473 extends \Twig\Template
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
        // line 11
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\">
      <div class=\"section\">
        ";
        // line 15
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 16
            echo "          <div id=\"name-and-slogan\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hide_site_name"] ?? null) && ($context["hide_site_slogan"] ?? null))) ? (" class=\"visually-hidden\"") : ("")));
            echo ">
            ";
            // line 17
            if (($context["site_name"] ?? null)) {
                // line 18
                echo "              <div id=\"site-name\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hide_site_name"] ?? null)) ? (" class=\"visually-hidden\"") : ("")));
                echo ">
                <strong>
                  <a href=\"";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 20, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\"><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 20, $this->source), "html", null, true);
                echo "</span></a>
                </strong>
              </div>
            ";
            }
            // line 24
            echo "            ";
            if (($context["site_slogan"] ?? null)) {
                // line 25
                echo "              <div id=\"site-slogan\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hide_site_slogan"] ?? null)) ? (" class=\"visually-hidden\"") : ("")));
                echo ">
                ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 26, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 29
            echo "          </div>
        ";
        }
        // line 31
        echo "      </div>
    </header>
    <div id=\"main-wrapper\">
      <div id=\"main\">
        <main id=\"content\" class=\"column\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\"></a>
            ";
        // line 38
        if (($context["title"] ?? null)) {
            // line 39
            echo "              <h1 class=\"title\" id=\"page-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 39, $this->source), "html", null, true);
            echo "</h1>
            ";
        }
        // line 41
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
            ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
          </section>
        </main>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  106 => 41,  100 => 39,  98 => 38,  89 => 31,  85 => 29,  79 => 26,  74 => 25,  71 => 24,  60 => 20,  54 => 18,  52 => 17,  47 => 16,  45 => 15,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/maintenance-page.html.twig", "/opt/web/core/themes/olivero/templates/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 20, "t" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
