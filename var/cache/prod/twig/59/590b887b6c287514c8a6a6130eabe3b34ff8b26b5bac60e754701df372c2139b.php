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

/* cliente/fields.html.twig */
class __TwigTemplate_525b267d627b284051c48dda42cc25b1ab750824cf8db4959295b95b44f6529f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "cliente/fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form_label"])) {
            throw new RuntimeError('Block "form_label" is not defined in trait "form_div_layout.html.twig".', 1, $this->source);
        }

        $_trait_0_blocks["base_form_label"] = $_trait_0_blocks["form_label"]; unset($_trait_0_blocks["form_label"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_label', $context, $blocks);
    }

    public function block_form_label($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayBlock("base_form_label", $context, $blocks);
        echo "

    ";
        // line 6
        if (( !(($context["label"] ?? null) === false) && ($context["required"] ?? null))) {
            // line 7
            echo "        <span class=\"required\" title=\"This field is required\">*</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "cliente/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  69 => 6,  63 => 4,  57 => 3,  54 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cliente/fields.html.twig", "/var/www/html/evento/templates/cliente/fields.html.twig");
    }
}
