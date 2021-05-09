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

/* cliente/new.html.twig */
class __TwigTemplate_acc42238d3c86cf5e04a6c94065f5c1e488fd9fe34f76f57c3e43d03d3195f91 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
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
        echo "Novo Cliente";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        $this->loadTemplate("_inc/menu_admin.html.twig", "cliente/new.html.twig", 6)->display($context);
        // line 7
        echo "<main>
<div class=\"well col-md-8\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Cadastro de Participante</h4></div><p class=\"text-right\"></p></div>

    ";
        // line 12
        echo twig_include($this->env, $context, "cliente/_form.html.twig", ["button_label" => "Cadastrar"]);
        echo "
</div>
</main>
";
    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  56 => 7,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cliente/new.html.twig", "/var/www/html/evento/templates/cliente/new.html.twig");
    }
}
