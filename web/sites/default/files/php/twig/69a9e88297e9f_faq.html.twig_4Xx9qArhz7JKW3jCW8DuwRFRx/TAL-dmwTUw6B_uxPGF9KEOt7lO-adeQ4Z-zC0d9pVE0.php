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

/* modules/custom/base_structure/templates/views/faq.html.twig */
class __TwigTemplate_abd7a40b2627794de3c02e295a6065c4 extends Template
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
        yield "<!-- View: News -->

";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "items", [], "any", false, false, true, 3)) {
            // line 4
            yield "
\t<div id='faq-view' data-aos=\"fade-right\">
\t
\t    ";
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "banner", [], "any", false, false, true, 7)) {
                // line 8
                yield "\t\t\t<img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "banner", [], "any", false, false, true, 8)), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Banner"));
                yield "\">
\t    ";
            }
            // line 9
            yield "\t
\t\t
\t\t";
            // line 12
            yield "\t\t<div class=\"separator\"></div>

\t\t<div class='faq-items view-content container'>

\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "items", [], "any", false, false, true, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield "\t

\t\t\t\t<details>
\t\t\t\t\t<summary> ";
                // line 19
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "get", ["title"], "method", false, false, true, 19), "value", [], "any", false, false, true, 19), "html", null, true);
                yield " </summary>
\t\t\t\t\t<div class=\"faq-description\">
\t\t\t\t\t\t";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "get", ["field_rich_description"], "method", false, false, true, 21), "value", [], "any", false, false, true, 21));
                yield "
\t\t\t\t\t</div>
\t\t\t\t</details>
\t\t\t\t\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "
\t\t</div>

\t</div>
  
";
        }
        // line 31
        yield "\t";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/base_structure/templates/views/faq.html.twig";
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
        return array (  107 => 31,  99 => 26,  88 => 21,  83 => 19,  75 => 16,  69 => 12,  65 => 9,  57 => 8,  55 => 7,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/base_structure/templates/views/faq.html.twig", "/var/www/html/multiconsulting/web/modules/custom/base_structure/templates/views/faq.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "for" => 16];
        static $filters = ["escape" => 8, "t" => 8, "raw" => 21];
        static $functions = ["file_url" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'raw'],
                ['file_url'],
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
