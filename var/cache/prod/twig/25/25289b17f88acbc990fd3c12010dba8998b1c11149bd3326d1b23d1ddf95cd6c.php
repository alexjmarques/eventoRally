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

/* site/show.html.twig */
class __TwigTemplate_ada6e2e36cd1339e73281df956d2fea3b2ed12744ef0b30fc67f9ca3be404e56 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/show.html.twig", 1);
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
        echo "Expedição 4x4 Aventura";
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
<style>
.parallax { 
  background-image: url(\"/uploads/eventos/";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "imagem", []), "html", null, true);
        echo "\");
}
</style>
<main class=\"container rel_ativo\">
<div class=\"parallax\"></div>
<div class=\"well\">

<div class=\"painel\">
          

            <h2>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo "</h2>
            <div class=\"data\"><i class=\"fas fa-calendar-alt\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</div>

            <div class=\"col-md-8\">
            <div class=\"partida\"><i class=\"fas fa-map-marker-alt\"></i> Partida:  ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localPartida", []), "html", null, true);
        echo "</div>
            <div class=\"chegada\"><i class=\"fas fa-map-marker-alt\"></i> Chegada:  ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localChegada", []), "html", null, true);
        echo "</div>

            <div class=\"chegada\"><i class=\"fas fa-users\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "vagas", []), "html", null, true);
        echo " Vagas</div>
            
            <div class=\"group_dados\">
            <div class=\"col-md-6\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "pais", []), "html", null, true);
        echo "</div>
            </div>
            <div class=\"group_dados\">
            <div class=\"col-md-6\">";
        // line 52
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "Y")) : ("")), "html", null, true);
        echo "</div>
            </div>
            </div>
            <div class=\"col-md-4\">
            <div class=\"price\">
            R\$ ";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
        echo "
            </div>


            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "vagas", []) == 0)) {
            // line 62
            echo "              <span class=\"btn btn-lg btn-primary disabled\">Em Breve</span>
             ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 63
($context["evento"] ?? null), "usuarioEventos", [])) == twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "vagas", []))) {
            // line 64
            echo "              <span class=\"btn btn-lg btn-primary disabled\">Esgotado</span>
            ";
        } else {
            // line 66
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_showresumo_site", ["slug" => twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-primary\">Inscreva-se</a>
            ";
        }
        // line 68
        echo "</div>
            <div class=\"col-md-12\"><p>";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "descricaoLonga", []);
        echo "</p></div>


          
            ";
        // line 76
        echo "            </div>

    
    
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "site/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  180 => 69,  177 => 68,  171 => 66,  167 => 64,  165 => 63,  162 => 62,  160 => 61,  153 => 57,  145 => 52,  139 => 49,  133 => 46,  128 => 44,  124 => 43,  118 => 40,  114 => 39,  101 => 29,  92 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site/show.html.twig", "/var/www/html/evento/templates/site/show.html.twig");
    }
}
