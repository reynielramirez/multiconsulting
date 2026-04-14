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

/* modules/custom/base_structure/templates/views/contact.html.twig */
class __TwigTemplate_52bfc93379891f949613a8c6a1b77793 extends Template
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
        yield "<!-- View: Contact -->

";
        // line 3
        if (($context["data"] ?? null)) {
            // line 4
            yield "
\t<div id='contact-view' data-aos=\"fade-right\">
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

\t\t<div class=\"contact-box\">
\t\t
\t\t\t<div class=\"map\"> 
\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7524.818332111021!2d-99.186286!3d19.437918000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8a96d009e17%3A0x436d88921a83e08f!2sAv.%20Ej%C3%A9rcito%20Nacional%20Mexicano%20373-piso%203%2C%20Chapultepec%20Morales%2C%20Granada%2C%20Miguel%20Hidalgo%2C%2011520%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX%2C%20M%C3%A9xico!5e0!3m2!1ses!2sus!4v1758118494750!5m2!1ses!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t</div>
\t\t\t
\t\t\t<div class='dark-form'>
\t\t\t\t";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "form", [], "any", false, false, true, 21), "html", null, true);
            yield "
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>
  
";
        }
        // line 28
        yield "\t";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/base_structure/templates/views/contact.html.twig";
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
        return array (  91 => 28,  80 => 21,  69 => 12,  65 => 9,  57 => 8,  55 => 7,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/base_structure/templates/views/contact.html.twig", "/var/www/html/multiconsulting/web/modules/custom/base_structure/templates/views/contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3];
        static $filters = ["escape" => 8, "t" => 8];
        static $functions = ["file_url" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
