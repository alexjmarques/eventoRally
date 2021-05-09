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
class __TwigTemplate_21c3205266fa137a5a52b4c9251c7afc61292be31f2e9c1fd415cba91d153b0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></a></div>
        <div class=\"col-sm\"></div>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 37
            echo "        <div class=\"col-md-3\">
            <div class=\"painel\">
            ";
            // line 39
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "usuarioEventos", [])) == twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []))) {
                // line 40
                echo "              <strong class=\"_esgot\">Esgotado</strong>
            ";
            } else {
                // line 42
                echo "            <strong class=\"_dispon\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "usuarioEventos", []))), "html", null, true);
                echo " Vagas disponíveis </strong>
            ";
            }
            // line 44
            echo "            <div class=\"img_full\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
            echo "\"><img src=\"/uploads/eventos/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "imagem", []), "html", null, true);
            echo "\"></a></div>
            <h2><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
            echo "\" class=\"link_1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", []), "html", null, true);
            echo "</a></h2>
            <div class=\"data\"><i class=\"fas fa-calendar-alt\"></i> ";
            // line 46
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["evento"], "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "data", []), "d/m/Y")) : ("")), "html", null, true);
            echo " <i class=\" marginl20 fas fa-users\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []), "html", null, true);
            echo " Vagas</div>
            ";
            // line 49
            echo "           

            <div class=\"_flowover\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["evento"], "descricaoCurta", []);
            echo "</div>
            <div class=\"group_dados\">
            <div class=\"col-md-6\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "pais", []), "html", null, true);
            echo "</div>
            <div class=\"col-md-6\">";
            // line 54
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["evento"], "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "data", []), "Y")) : ("")), "html", null, true);
            echo "</div>
            <div class=\"clearfix\"></div>
            </div>
            <div class=\"price\">
            R\$ ";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "valor", []), 2, ",", "."), "html", null, true);
            echo "
            </div>
            ";
            // line 60
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "usuarioEventos", [])) == twig_get_attribute($this->env, $this->source, $context["evento"], "vagas", []))) {
                // line 61
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
                echo "\" class=\"btn btn-lg btn-primary cinza_esgotado\">Esgotado</a>
            ";
            } else {
                // line 63
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_listagem", ["slug" => twig_get_attribute($this->env, $this->source, $context["evento"], "slug", [])]), "html", null, true);
                echo "\" class=\"btn btn-lg btn-primary\">Confira</a>
            ";
            }
            // line 64
            echo "            
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <div>
                <p>Sem expedições cadastradas</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
        <div class=\"clearfix\"></div>
        <div class=\"pagination__next\"></div>
    </div>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  236 => 72,  227 => 68,  219 => 64,  213 => 63,  207 => 61,  205 => 60,  200 => 58,  193 => 54,  189 => 53,  184 => 51,  180 => 49,  174 => 46,  168 => 45,  161 => 44,  155 => 42,  151 => 40,  149 => 39,  145 => 37,  140 => 36,  136 => 34,  122 => 21,  117 => 19,  113 => 18,  110 => 17,  105 => 15,  101 => 14,  98 => 13,  96 => 12,  89 => 8,  84 => 5,  75 => 4,  57 => 2,  27 => 1,);
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
<main class=\"principal\">
<div class=\"container\">
    <div class=\"well\">
    <div class=\"col-md-12 title-evento\">
                <div class=\"group\">
                    <h4>Confira as expedições disponíveis</h4>
                </div>
                {# <p class=\"text-right\">Evento: SERTÕES 2019 | De 24 de agosto até 01 setembro 2019</p> #}
        </div>
        <div class=\"col-md-12 listagem\">
        {% for evento in eventos %}
        <div class=\"col-md-3\">
            <div class=\"painel\">
            {% if evento.usuarioEventos|length == evento.vagas %}
              <strong class=\"_esgot\">Esgotado</strong>
            {% else %}
            <strong class=\"_dispon\">{{ evento.vagas - evento.usuarioEventos|length }} Vagas disponíveis </strong>
            {% endif %}
            <div class=\"img_full\"><a href=\"{{ path('evento_listagem', {'slug': evento.slug}) }}\"><img src=\"/uploads/eventos/{{ evento.imagem }}\"></a></div>
            <h2><a href=\"{{ path('evento_listagem', {'slug': evento.slug}) }}\" class=\"link_1\">{{ evento.titulo }}</a></h2>
            <div class=\"data\"><i class=\"fas fa-calendar-alt\"></i> {{ evento.data ? evento.data|date('d/m/Y') : '' }} <i class=\" marginl20 fas fa-users\"></i> {{ evento.vagas }} Vagas</div>
            {# <div class=\"partida\"><i class=\"fas fa-map-marker-alt\"></i> Partida:  {{ evento.localPartida }}</div>
            <div class=\"chegada\"><i class=\"fas fa-map-marker-alt\"></i> Chegada:  {{ evento.localChegada }}</div> #}
           

            <div class=\"_flowover\">{{ evento.descricaoCurta|raw }}</div>
            <div class=\"group_dados\">
            <div class=\"col-md-6\">{{ evento.pais }}</div>
            <div class=\"col-md-6\">{{ evento.data ? evento.data|date('Y') : '' }}</div>
            <div class=\"clearfix\"></div>
            </div>
            <div class=\"price\">
            R\$ {{ evento.valor|number_format(2, ',', '.') }}
            </div>
            {% if evento.usuarioEventos|length == evento.vagas %}
              <a href=\"{{ path('evento_listagem', {'slug': evento.slug}) }}\" class=\"btn btn-lg btn-primary cinza_esgotado\">Esgotado</a>
            {% else %}
            <a href=\"{{ path('evento_listagem', {'slug': evento.slug}) }}\" class=\"btn btn-lg btn-primary\">Confira</a>
            {% endif %}            
            </div>
        </div>
        {% else %}
            <div>
                <p>Sem expedições cadastradas</p>
            </div>
        {% endfor %}
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"pagination__next\"></div>
    </div>
</div>
</main>
{% endblock %}
", "site/index.html.twig", "/var/www/html/evento/templates/site/index.html.twig");
    }
}
