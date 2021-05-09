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

/* site/index.html.twig */
class __TwigTemplate_8630d80dc14b836be9686512d8c2e14dbf6c3a92c158acad1d1de1d346d69cd0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/index.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Expedições 4x4 Aventura";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></a></div>
        <div class=\"\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_logout");
            echo "\">Sair</a></li>
            ";
        } else {
            // line 17
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_login");
            echo "\">Cadastrar</a></li>
            ";
        }
        // line 21
        echo "          </ul>
        </div>
      </div>
    </div>
</header>
<main class=\"principal\">
<div class=\"container\">
    <div class=\"well\">
    <div class=\"col-md-12 title-evento\">
                <div class=\"group\">
                    <h4>Confira as expedições disponíveis</h4>
                </div>
                ";
        // line 34
        echo "        </div>
        <div class=\"col-md-12 listagem\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 37
            echo "        <div class=\"col-md-3\">
            <div class=\"painel\">
            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []) == 0)) {
                // line 40
                echo "              <strong class=\"_esgot\">Em Breve</strong>
            ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 41
$context["evento"], "usuarioEventos", [])) == twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []))) {
                // line 42
                echo "            <strong class=\"_esgot\">Esgotado</strong>
            ";
            } else {
                // line 44
                echo "            <strong class=\"_dispon\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "usuarioEventos", []))), "html", null, true);
                echo " Vagas disponíveis </strong>
            ";
            }
            // line 46
            echo "            <div class=\"img_full\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
            echo "\"><img src=\"/uploads/eventos/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "imagem", []), "html", null, true);
            echo "\"></a></div>
            <h2><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
            echo "\" class=\"link_1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", []), "html", null, true);
            echo "</a></h2>
            <div class=\"data\"><i class=\"fas fa-calendar-alt\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["evento"], "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "data", []), "d/m/Y")) : ("")), "html", null, true);
            echo " <i class=\" marginl20 fas fa-users\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []), "html", null, true);
            echo " Vagas</div>
            ";
            // line 51
            echo "           

            <div class=\"_flowover\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["evento"], "descricaoCurta", []);
            echo "</div>
            <div class=\"group_dados\">
            <div class=\"col-md-6\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "pais", []), "html", null, true);
            echo "</div>
            <div class=\"col-md-6\">";
            // line 56
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["evento"], "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "data", []), "Y")) : ("")), "html", null, true);
            echo "</div>
            <div class=\"clearfix\"></div>
            </div>
            <div class=\"price\">
            R\$ ";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "valor", []), 2, ",", "."), "html", null, true);
            echo "
            </div>
            ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []) == 0)) {
                // line 63
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
                echo "\" class=\"btn btn-lg btn-primary cinza_esgotado\">Em Breve</a>
            ";
            } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 64
$context["evento"], "usuarioEventos", [])) == twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []))) {
                // line 65
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
                echo "\" class=\"btn btn-lg btn-primary cinza_esgotado\">Esgotado</a>
            ";
            } else {
                // line 67
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
                echo "\" class=\"btn btn-lg btn-primary\">Confira</a>
            ";
            }
            // line 68
            echo "            
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "            <div>
                <p>Sem expedições cadastradas</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
        <div class=\"clearfix\"></div>
        <div class=\"pagination__next\"></div>
    </div>
</div>
</main>
";
    }

    public function getTemplateName()
    {
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 76,  209 => 72,  201 => 68,  195 => 67,  189 => 65,  187 => 64,  182 => 63,  180 => 62,  175 => 60,  168 => 56,  164 => 55,  159 => 53,  155 => 51,  149 => 48,  143 => 47,  136 => 46,  130 => 44,  126 => 42,  124 => 41,  121 => 40,  119 => 39,  115 => 37,  110 => 36,  106 => 34,  92 => 21,  87 => 19,  83 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  66 => 12,  59 => 8,  54 => 5,  51 => 4,  45 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site/index.html.twig", "/var/www/html/evento/templates/site/index.html.twig");
    }
}
