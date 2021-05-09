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

/* cliente/_form-steps.html.twig */
class __TwigTemplate_ddf4f25d8952c238749e42c3bc3e07f03c888b8624880ca822a5d793c538fdd7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"col-md-12 forms\">

    <div class=\"col-md-8\">
        <h4>";
        // line 6
        echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
        echo "</h4>
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <div class=\"clearfix\"></div>
    </div>        
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-12 colmais\">
            <button class=\"btn btn-lg btn-primary pull-right\">";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Salvar")) : ("Salvar")), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
        </div>
    </div>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "cliente/_form-steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 14,  55 => 13,  46 => 7,  42 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "cliente/_form-steps.html.twig", "/var/www/html/evento/templates/cliente/_form-steps.html.twig");
    }
}
