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
class __TwigTemplate_fbd19f2e2d7b0d332a8f0e9b759ab08f6ce084306daffe2bd47e0ea32ad12b29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/pagamento.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/pagamento.html.twig"));

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

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div><p class=\"text-right\">Evento: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 30, $this->source); })()), "data", []), "d/m/Y")) : ("")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 59, $this->source); })()), "slug", []), "html", null, true);
        echo "/0\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Finalizar</a>
            <div class=\"pull-right\"><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"agree\" value=\"1\" checked><span class=\"checkmark\"></span>Li e aceito a <a href=\"#\" class=\"agree\"><b>Política de Privacidade</b></a></label></div>
        </div>
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  158 => 59,  154 => 57,  132 => 30,  122 => 22,  117 => 20,  113 => 19,  110 => 18,  105 => 16,  101 => 15,  98 => 14,  96 => 13,  89 => 9,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
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

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div><p class=\"text-right\">Evento: {{ evento.titulo }} | {{ evento.data ? evento.data|date('d/m/Y') : '' }} </p></div>

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
{# <div class=\"col-md-4\">
    <div class=\"col-md-12 border\">
        <h3>Detalhes da Inscrição</h3>
    </div>
</div>
<div class=\"col-md-4\">
    <div class=\"col-md-12 border\">
        <h3>Detalhes da Inscrição</h3>
    </div>
</div> #}
    
        <div class=\"col-md-12 mt15\">
            <a href=\"/comprar/{{evento.slug}}/0\" class=\"btn btn-lg btn-primary col-md-4 pull-right\" style=\"max-width: 200px;\">Finalizar</a>
            <div class=\"pull-right\"><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"agree\" value=\"1\" checked><span class=\"checkmark\"></span>Li e aceito a <a href=\"#\" class=\"agree\"><b>Política de Privacidade</b></a></label></div>
        </div>
    </div>
</main>
{% endblock %}
", "site/pagamento.html.twig", "/var/www/html/evento/templates/site/pagamento.html.twig");
    }
}
