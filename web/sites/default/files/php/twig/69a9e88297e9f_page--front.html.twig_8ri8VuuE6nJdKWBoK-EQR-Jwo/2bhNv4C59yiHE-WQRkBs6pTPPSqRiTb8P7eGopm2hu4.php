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

/* themes/custom/xara/templates/layout/page--front.html.twig */
class __TwigTemplate_36eaa07357a7d2fb8fba5904c8ea1ea6 extends Template
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
        yield from $this->loadTemplate("@xara/template-parts/header.html.twig", "themes/custom/xara/templates/layout/page--front.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/custom/xara/templates/layout/page--front.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content front-content\">
        ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, true, 8), "html", null, true);
        yield "
      </main>
    ";
        // line 10
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 10))) {
            // line 11
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/custom/xara/templates/layout/page--front.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "    ";
        }
        // line 13
        yield "    ";
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 13))) {
            // line 14
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/custom/xara/templates/layout/page--front.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "    ";
        }
        // line 16
        yield "    </div><!--/main-container -->
</div><!--/main-wrapper -->
";
        // line 18
        yield from $this->loadTemplate("@xara/template-parts/footer.html.twig", "themes/custom/xara/templates/layout/page--front.html.twig", 18)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "front_sidebar"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/xara/templates/layout/page--front.html.twig";
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
        return array (  83 => 18,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  62 => 10,  57 => 8,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/xara/templates/layout/page--front.html.twig", "/var/www/html/multiconsulting/web/themes/custom/xara/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 2];
        static $filters = ["escape" => 8];
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
