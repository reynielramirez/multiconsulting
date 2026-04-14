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

/* modules/custom/base_structure/templates/views/page_403.html.twig */
class __TwigTemplate_39eccbc881b70bc3b055b8ee7e7aa163 extends Template
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
        yield "
<!-- View: Page 403 -->

";
        // line 4
        if (($context["data"] ?? null)) {
            // line 5
            yield "
\t<div id=\"error-view\" class=\"container error-page\" data-aos=\"fade-right\">
\t\t<div class=\"error-container row margin-top-40 margin-bottom-60\">
\t\t\t<div class=\"col-md-12 number\">
\t\t\t\t<h2 class=\"view-title\"> ";
            // line 9
            yield "403";
            yield " </h2>
\t\t\t</div>
\t\t\t<div class=\" col-md-12 details\">
\t\t\t\t<h3> Acceso Denegado </h3>
\t\t\t\t<p>
\t\t\t\t\tEl recurso solicitado requiere autenticación. 
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "base_path", [], "any", false, false, true, 16), "html", null, true);
            yield "es/user/login\">Inicie sesión</a> 
\t\t\t\t\to regrese a la 
\t\t\t\t\t<a href=\"";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
            yield "es\">Página de inicio</a>.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 24
        yield "\t

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data", "base_path"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/base_structure/templates/views/page_403.html.twig";
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
        return array (  82 => 24,  72 => 18,  67 => 16,  57 => 9,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/base_structure/templates/views/page_403.html.twig", "/var/www/html/multiconsulting/web/modules/custom/base_structure/templates/views/page_403.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4];
        static $filters = ["escape" => 16];
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
