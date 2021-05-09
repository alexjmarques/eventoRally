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

/* site/termos.html.twig */
class __TwigTemplate_0550450ca95b99ef07fbb5aa6b1360820edc82a0bb6089697e2d3a9ae7eb1362 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/termos.html.twig", 1);
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

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Detalhes da Inscrição</h4></div><p class=\"text-right\">Evento: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d")) : ("")), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "M Y")) : ("")), "html", null, true);
        echo " </p></div>

<div class=\"col-md-4 border\">
<h4 class=\"data\"> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo "</h4>

<div class=\"data laranja \"><strong>Data:</strong> ";
        // line 35
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</div>
<div class=\"partida laranja mt15\"><strong>Partida:</strong>  ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localPartida", []), "html", null, true);
        echo "</div>
<div class=\"chegada laranja\"><strong>Encerramento:</strong> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localChegada", []), "html", null, true);
        echo "</div>
<div class=\"chegada laranja mt15\"><strong>Pais:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "pais", []), "html", null, true);
        echo "</div>
</div>
    <div class=\"col-md-8\">
    <h4>Objetivo</h4>
    ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "descricaoLonga", []);
        echo "
    <h4 class=\"valor mt15 pull-right\" style=\" margin-top: 20px; font-size: 26px;\"><strong style=\"font-size: 16px;\">Valor total:</strong> R\$ ";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h4>
</div>
    
<div class=\"col-md-12 mt15\">

    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_showpagamento_site", ["slug" => twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Pagar e Finalizar</a>
    </div>
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "site/termos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  140 => 43,  136 => 42,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  112 => 33,  102 => 30,  92 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site/termos.html.twig", "/var/www/html/evento/templates/site/termos.html.twig");
    }
}
