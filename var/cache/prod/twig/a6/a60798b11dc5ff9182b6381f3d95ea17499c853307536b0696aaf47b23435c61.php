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

/* site/pagamento.html.twig */
class __TwigTemplate_519271abd493f638e4460d72d5f74eddc5192269ba3d6409280feb9a37964165 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/pagamento.html.twig", 1);
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
        echo "Expedições 4x4 Aventura";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></a></div>
        <div class=\"\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_logout");
            echo "\">Sair</a></li>
            ";
        } else {
            // line 18
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_login");
            echo "\">Cadastrar</a></li>
            ";
        }
        // line 22
        echo "          </ul>
        </div>
      </div>
    </div>
</header>
<main class=\"container\">
<div class=\"well\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div><p class=\"text-right\">Evento: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo " </p></div>

<div class=\"col-md-4\">
    <div class=\"col-md-12 border\">
        <label class=\"radio-inline\"><input type=\"radio\" name=\"agree\" value=\"1\"><span class=\"checkmark circle\"></span><h4>Transferência bancária</h4></a></label>
        <span>

        </span>
    </div>

    <div class=\"col-md-12 border\">
        <label class=\"radio-inline\"><input type=\"radio\" name=\"agree\" value=\"1\" checked><span class=\"checkmark circle\"></span><h4>Inscrição VIP <strong class=\"green\">(Somente Convidados)</strong></h4></a></label>
        <span>

        </span>
    </div>
</div>
";
        // line 57
        echo "    
        <div class=\"col-md-12 mt15\">
            <a href=\"/comprar/";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "slug", []), "html", null, true);
        echo "/0\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Finalizar</a>
            <div class=\"pull-right\"><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"agree\" value=\"1\" checked><span class=\"checkmark\"></span>Li e aceito a <a href=\"#\" class=\"agree\"><b>Política de Privacidade</b></a></label></div>
        </div>
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "site/pagamento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 59,  124 => 57,  102 => 30,  92 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site/pagamento.html.twig", "/var/www/html/evento/templates/site/pagamento.html.twig");
    }
}
