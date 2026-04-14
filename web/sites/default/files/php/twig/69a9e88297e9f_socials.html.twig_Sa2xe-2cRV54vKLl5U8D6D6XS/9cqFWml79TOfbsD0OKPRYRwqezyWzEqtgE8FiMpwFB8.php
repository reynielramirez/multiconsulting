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

/* modules/custom/base_structure/templates/blocks/socials.html.twig */
class __TwigTemplate_b9d2b51f52d1df05aa85cf656d2fcd3b extends Template
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
        yield "<!-- Block: Socials -->

<div id='socials-block'>

\t<!-- Social -->
\t<ul class=\"social-icons\">

\t\t";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "facebook", [], "any", false, false, true, 8)) {
            // line 9
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "facebook", [], "any", false, false, true, 9), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
\t\t";
        }
        // line 10
        yield "\t
\t\t
\t\t";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "twitter", [], "any", false, false, true, 12)) {
            // line 13
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "twitter", [], "any", false, false, true, 13), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
\t\t";
        }
        // line 14
        yield "\t

\t\t";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "instagram", [], "any", false, false, true, 16)) {
            // line 17
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "instagram", [], "any", false, false, true, 17), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
\t\t";
        }
        // line 18
        yield "\t

\t\t";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "linkedin", [], "any", false, false, true, 20)) {
            // line 21
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "linkedin", [], "any", false, false, true, 21), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
\t\t";
        }
        // line 22
        yield "\t

\t\t";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "youtube", [], "any", false, false, true, 24)) {
            // line 25
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "youtube", [], "any", false, false, true, 25), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
\t\t";
        }
        // line 26
        yield "\t

\t\t";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "vimeo", [], "any", false, false, true, 28)) {
            // line 29
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "vimeo", [], "any", false, false, true, 29), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-vimeo\"></i></a></li>
\t\t";
        }
        // line 30
        yield "\t

\t\t";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "telegram", [], "any", false, false, true, 32)) {
            // line 33
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "telegram", [], "any", false, false, true, 33), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
\t\t";
        }
        // line 34
        yield "\t

\t\t";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "whatsapp", [], "any", false, false, true, 36)) {
            // line 37
            yield "\t\t\t<li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "whatsapp", [], "any", false, false, true, 37), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
\t\t";
        }
        // line 38
        yield "\t

\t</ul>
\t
</div>
  
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/base_structure/templates/blocks/socials.html.twig";
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
        return array (  145 => 38,  139 => 37,  137 => 36,  133 => 34,  127 => 33,  125 => 32,  121 => 30,  115 => 29,  113 => 28,  109 => 26,  103 => 25,  101 => 24,  97 => 22,  91 => 21,  89 => 20,  85 => 18,  79 => 17,  77 => 16,  73 => 14,  67 => 13,  65 => 12,  61 => 10,  55 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/base_structure/templates/blocks/socials.html.twig", "/var/www/html/multiconsulting/web/modules/custom/base_structure/templates/blocks/socials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 8];
        static $filters = ["escape" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
