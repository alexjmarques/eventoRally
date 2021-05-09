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

/* evento/edit.html.twig */
class __TwigTemplate_81db8b634da40a897f464cb2621887c13e5ac4e8876d2f19ae23162d174393cf extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evento/edit.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Editar Evento";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        $this->loadTemplate("_inc/menu_admin.html.twig", "evento/edit.html.twig", 6)->display($context);
        // line 7
        echo "<main>
<div class=\"well col-md-8\">
<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Editar Expedição</h4></div><p class=\"text-right\"></p></div>

    ";
        // line 12
        echo "
    ";
        // line 13
        echo twig_include($this->env, $context, "evento/_form.html.twig", ["button_label" => "Atualizar"]);
        echo "

    <div class=\"imagem_form\">
            <p>Para modificar a imagem basta fazer upload de uma nova que a mesma será alterada</p>
            <img src=\"/uploads/eventos/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "imagem", []), "html", null, true);
        echo "\" width=\"100%\" />
    </div>

    ";
        // line 20
        echo twig_include($this->env, $context, "evento/_delete_form.html.twig");
        echo "
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "evento/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  72 => 17,  65 => 13,  62 => 12,  56 => 7,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evento/edit.html.twig", "/var/www/html/evento/templates/evento/edit.html.twig");
    }
}
