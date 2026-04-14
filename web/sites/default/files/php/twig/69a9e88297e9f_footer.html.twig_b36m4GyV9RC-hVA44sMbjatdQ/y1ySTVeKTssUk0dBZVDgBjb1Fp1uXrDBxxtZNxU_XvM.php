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

/* @xara/template-parts/footer.html.twig */
class __TwigTemplate_ddc117526b2d75026444eb89fe5e6724 extends Template
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
        yield "<footer class=\"site-footer footer\">
";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@xara/template-parts/footer.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 5))) {
            // line 6
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@xara/template-parts/footer.html.twig", 6)->unwrap()->yield($context);
        }
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 8) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 8))) {
            // line 9
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@xara/template-parts/footer.html.twig", 9)->unwrap()->yield($context);
        }
        // line 11
        if ((($context["copyright_text"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 11))) {
            // line 12
            yield "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 15
            if (($context["copyright_text"] ?? null)) {
                // line 16
                yield "          ";
                yield from $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@xara/template-parts/footer.html.twig", 16)->unwrap()->yield($context);
                // line 17
                yield "        ";
            }
            // line 18
            yield "        ";
            yield from $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@xara/template-parts/footer.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 19), "html", null, true);
            yield "
      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 24
        yield "</footer>
";
        // line 25
        if (($context["scrolltotop_on"] ?? null)) {
            // line 26
            yield "  <div id=\"scrolltop\" class=\"scrolltop\"><i class=\"icon-arrow-up\"></i></div>
";
        }
        // line 28
        yield from $this->loadTemplate("@xara/template-parts/style.html.twig", "@xara/template-parts/footer.html.twig", 28)->unwrap()->yield($context);
        // line 29
        if (($context["fontawesome_four"] ?? null)) {
            // line 30
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 32
        if (($context["fontawesome_five"] ?? null)) {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 35
        if (($context["bootstrapicons"] ?? null)) {
            // line 36
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "bootstrapicons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@xara/template-parts/footer.html.twig";
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
        return array (  121 => 36,  119 => 35,  113 => 33,  111 => 32,  105 => 30,  103 => 29,  101 => 28,  97 => 26,  95 => 25,  92 => 24,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  67 => 12,  65 => 11,  61 => 9,  59 => 8,  55 => 6,  53 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@xara/template-parts/footer.html.twig", "/var/www/html/multiconsulting/web/themes/custom/xara/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 3];
        static $filters = ["escape" => 19];
        static $functions = ["attach_library" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['attach_library'],
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
