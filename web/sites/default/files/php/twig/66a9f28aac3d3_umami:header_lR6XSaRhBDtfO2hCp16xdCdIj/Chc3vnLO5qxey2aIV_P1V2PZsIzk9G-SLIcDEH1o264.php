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

/* umami:header */
class __TwigTemplate_ae17969434e25cca61a6cea5513c4fc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
            'dropdown' => [$this, 'block_dropdown'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.umami--header"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "umami:header"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "umami:header"));
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["umami-header"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        yield ">
  <div class=\"umami-header__logo\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
        // line 4
        yield "  </div>
  <button
    type=\"button\"
    class=\"umami-header__burger\"
    aria-controls=\"umami-header__dropdown\"
    aria-expanded=\"false\"
    aria-label=\"";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle the menu"));
        yield "\"
  >
    ";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 12), 12, $this->source) . "/icons/burger.svg")));
        yield "
  </button>
  <div class=\"umami-header__dropdown\">
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('dropdown', $context, $blocks);
        // line 16
        yield "  </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "componentMetadata"]);        return; yield '';
    }

    // line 3
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 15
    public function block_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "umami:header";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 15,  83 => 3,  74 => 16,  72 => 15,  66 => 12,  61 => 10,  53 => 4,  51 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "umami:header", "core/profiles/demo_umami/themes/umami/components/header/header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3);
        static $filters = array("escape" => 1, "t" => 10);
        static $functions = array("source" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape', 't'],
                ['source'],
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
