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
class __TwigTemplate_0591de9c73326b14293688a239371e5fd3444f38003b2877d43df41bc7caee74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/termos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/termos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Expedições 4x4 Aventura";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></a></div>
        <div class=\"col-sm\"></div>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", []), "d")) : ("")), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", []), "M Y")) : ("")), "html", null, true);
        echo " </p></div>

<div class=\"col-md-4 border\">
<h4 class=\"data\"> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 33, $this->source); })()), "titulo", []), "html", null, true);
        echo "</h4>

<div class=\"data laranja \"><strong>Data:</strong> ";
        // line 35
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 35, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 35, $this->source); })()), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</div>
<div class=\"partida laranja mt15\"><strong>Partida:</strong>  ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 36, $this->source); })()), "localPartida", []), "html", null, true);
        echo "</div>
<div class=\"chegada laranja\"><strong>Encerramento:</strong> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 37, $this->source); })()), "localChegada", []), "html", null, true);
        echo "</div>
<div class=\"chegada laranja mt15\"><strong>Pais:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 38, $this->source); })()), "pais", []), "html", null, true);
        echo "</div>
</div>
    <div class=\"col-md-8\">
    <h4>Objetivo</h4>
    ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 42, $this->source); })()), "descricaoLonga", []);
        echo "
    <h4 class=\"valor mt15 pull-right\" style=\" margin-top: 20px; font-size: 26px;\"><strong style=\"font-size: 16px;\">Valor total:</strong> R\$ ";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 43, $this->source); })()), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h4>
</div>
    
<div class=\"col-md-12 mt15\">

    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_showpagamento_site", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 48, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Pagar e Finalizar</a>
    </div>
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  178 => 48,  170 => 43,  166 => 42,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  142 => 33,  132 => 30,  122 => 22,  117 => 20,  113 => 19,  110 => 18,  105 => 16,  101 => 15,  98 => 14,  96 => 13,  89 => 9,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Expedições 4x4 Aventura{% endblock %}

{% block body %}
<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><a href=\"{{ path('site') }}\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></a></div>
        <div class=\"col-sm\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"{{ path('site') }}\">Expedições</a></li>
                <li><a href=\"{{ path('cliente_logout') }}\">Sair</a></li>
            {% else %}
                <li><a href=\"https://www.4x4aventura.com.br\">Site 4x4 Aventura</a></li>
                <li><a href=\"{{ path('site') }}\">Expedições</a></li>
                <li><a href=\"{{ path('cliente_login') }}\">Cadastrar</a></li>
            {% endif %}
          </ul>
        </div>
      </div>
    </div>
</header>
<main class=\"container\">
<div class=\"well\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Detalhes da Inscrição</h4></div><p class=\"text-right\">Evento: {{ evento.titulo }} | {{ evento.data ? evento.data|date('d') : '' }} de {{ evento.data ? evento.data|date('M Y') : '' }} </p></div>

<div class=\"col-md-4 border\">
<h4 class=\"data\"> {{ evento.titulo }}</h4>

<div class=\"data laranja \"><strong>Data:</strong> {{ evento.data ? evento.data|date('d/m/Y') : '' }}</div>
<div class=\"partida laranja mt15\"><strong>Partida:</strong>  {{ evento.localPartida }}</div>
<div class=\"chegada laranja\"><strong>Encerramento:</strong> {{ evento.localChegada }}</div>
<div class=\"chegada laranja mt15\"><strong>Pais:</strong> {{ evento.pais }}</div>
</div>
    <div class=\"col-md-8\">
    <h4>Objetivo</h4>
    {{ evento.descricaoLonga|raw }}
    <h4 class=\"valor mt15 pull-right\" style=\" margin-top: 20px; font-size: 26px;\"><strong style=\"font-size: 16px;\">Valor total:</strong> R\$ {{ evento.valor|number_format(2, ',', '.') }}</h4>
</div>
    
<div class=\"col-md-12 mt15\">

    <a href=\"{{ path('evento_showpagamento_site', {'slug': evento.slug}) }}\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Pagar e Finalizar</a>
    </div>
    </div>
</main>
{% endblock %}
", "site/termos.html.twig", "/var/www/html/evento/templates/site/termos.html.twig");
    }
}
