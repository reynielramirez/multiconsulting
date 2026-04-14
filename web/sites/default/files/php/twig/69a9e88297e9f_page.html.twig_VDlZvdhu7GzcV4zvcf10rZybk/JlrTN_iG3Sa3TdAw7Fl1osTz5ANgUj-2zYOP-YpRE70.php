<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/xara/templates/layout/page.html.twig */
class __TwigTemplate_4dd4a4d802b6d2ab87b3e65a2469942a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->loadTemplate("@xara/template-parts/header.html.twig", "themes/custom/xara/templates/layout/page.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/custom/xara/templates/layout/page.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        <div class=\"node-content\">
          ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 11), "html", null, true);
        yield "
        </div>
      </main>
    ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 14)) {
            // line 15
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/custom/xara/templates/layout/page.html.twig", 15)->unwrap()->yield($context);
            // line 16
            yield "    ";
        }
        // line 17
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 17)) {
            // line 18
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/custom/xara/templates/layout/page.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "    ";
        }
        // line 20
        yield "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 23
        yield from $this->loadTemplate("@xara/template-parts/footer.html.twig", "themes/custom/xara/templates/layout/page.html.twig", 23)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/xara/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  88 => 23,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  66 => 14,  60 => 11,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/xara/templates/layout/page.html.twig", "/var/www/html/multiconsulting/web/themes/custom/xara/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 2];
        static $filters = ["escape" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                [],
                $this->source
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
