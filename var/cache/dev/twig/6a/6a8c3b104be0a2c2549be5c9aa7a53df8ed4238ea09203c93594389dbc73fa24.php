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

/* evento/show.html.twig */
class __TwigTemplate_cf3c57f2a4f40d93446a7ba1c83047e76c0d88222b440769823ddf3155af694f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evento/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/show.html.twig"));

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

        echo "Expedições 4x4 Aventura - Expedição";
        
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
        $this->loadTemplate("_inc/menu_admin.html.twig", "evento/show.html.twig", 6)->display($context);
        // line 7
        echo "<main>
    <div class=\"well col-md-8\">
        <div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Expedição</h4></div><p class=\"text-right\"></p></div>
    <div class=\"col-md-12\">
    <div class=\"card promoting-card\">
    <div class=\"card-body d-flex flex-row\">
        <img src=\"/uploads/eventos/";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 13, $this->source); })()), "imagem", []), "html", null, true);
        echo "\" class=\"rounded-circle mr-3\" height=\"50px\" width=\"50px\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 13, $this->source); })()), "titulo", []), "html", null, true);
        echo "\">
        <div>
        <h4 class=\"card-title font-weight-bold mb-2\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 15, $this->source); })()), "titulo", []), "html", null, true);
        echo " - R\$ ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 15, $this->source); })()), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h4>
        <p class=\"card-text\"><i class=\"far fa-clock pr-2\"></i>";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 16, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 16, $this->source); })()), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</p>
        </div>
    </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th class=\"l_b\">Largada:</th>
                    <td class=\"left_b\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 23, $this->source); })()), "localPartida", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Chegada:</th>
                    <td class=\"left_b\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 25, $this->source); })()), "localChegada", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Pais:</th>
                    <td class=\"left_b\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 27, $this->source); })()), "pais", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Vagas:</th>
                    <td class=\"left_b\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 29, $this->source); })()), "vagas", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Disponíveis:</th>
                    <td class=\"left_b\">";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 31, $this->source); })()), "vagas", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 31, $this->source); })()), "usuarioEventos", []))), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br/>
    <div class=\"title-evento\"><div class=\"group\"><h5>Inscritos</h5></div><p class=\"text-right\"></p></div>
        <table class=\"table table-striped table-bordered dataTable\">
            <thead>
                <tr>
                    <th>Nome </th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 50, $this->source); })()), "usuarioEventos", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuarioEvento"]) {
            // line 51
            echo "                    <tr>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "cliente", []), "nome", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "cliente", []), "email", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "cliente", []), "cpf", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "cliente", []), "cnh", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "cliente", []), "telefoneCelular", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\PagSeguroExtension']->getStatusPagamentoLabel(twig_get_attribute($this->env, $this->source, $context["usuarioEvento"], "statusPagamento", [])), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"6\" class=\"text-center\"><p>Sem inscritos até o momento</p></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuarioEvento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </tbody>
        </table>
            <div class=\"form-group\">
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evento/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 67,  204 => 64,  195 => 60,  187 => 57,  183 => 56,  179 => 55,  175 => 54,  171 => 53,  167 => 52,  164 => 51,  159 => 50,  137 => 31,  132 => 29,  127 => 27,  122 => 25,  117 => 23,  107 => 16,  101 => 15,  94 => 13,  86 => 7,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Expedições 4x4 Aventura - Expedição{% endblock %}

{% block body %}
{% include '_inc/menu_admin.html.twig' %}
<main>
    <div class=\"well col-md-8\">
        <div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Expedição</h4></div><p class=\"text-right\"></p></div>
    <div class=\"col-md-12\">
    <div class=\"card promoting-card\">
    <div class=\"card-body d-flex flex-row\">
        <img src=\"/uploads/eventos/{{ evento.imagem }}\" class=\"rounded-circle mr-3\" height=\"50px\" width=\"50px\" alt=\"{{ evento.titulo }}\">
        <div>
        <h4 class=\"card-title font-weight-bold mb-2\">{{ evento.titulo }} - R\$ {{ evento.valor|number_format(2, ',', '.') }}</h4>
        <p class=\"card-text\"><i class=\"far fa-clock pr-2\"></i>{{ evento.data ? evento.data|date('d/m/Y') : '' }}</p>
        </div>
    </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th class=\"l_b\">Largada:</th>
                    <td class=\"left_b\">{{ evento.localPartida }}</td>
                    <th class=\"l_b\">Chegada:</th>
                    <td class=\"left_b\">{{ evento.localChegada }}</td>
                    <th class=\"l_b\">Pais:</th>
                    <td class=\"left_b\">{{ evento.pais }}</td>
                    <th class=\"l_b\">Vagas:</th>
                    <td class=\"left_b\">{{ evento.vagas }}</td>
                    <th class=\"l_b\">Disponíveis:</th>
                    <td class=\"left_b\">{{ evento.vagas - evento.usuarioEventos|length }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br/>
    <div class=\"title-evento\"><div class=\"group\"><h5>Inscritos</h5></div><p class=\"text-right\"></p></div>
        <table class=\"table table-striped table-bordered dataTable\">
            <thead>
                <tr>
                    <th>Nome </th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {% for usuarioEvento in evento.usuarioEventos %}
                    <tr>
                        <td>{{ usuarioEvento.cliente.nome }}</td>
                        <td>{{ usuarioEvento.cliente.email }}</td>
                        <td>{{ usuarioEvento.cliente.cpf }}</td>
                        <td>{{ usuarioEvento.cliente.cnh }}</td>
                        <td>{{ usuarioEvento.cliente.telefoneCelular }}</td>
                        <td>{{ usuarioEvento.statusPagamento | statusPagamentoLabel }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\"><p>Sem inscritos até o momento</p></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
            <div class=\"form-group\">
                <a href=\"{{ path('evento_index') }}\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</main>
{% endblock %}
", "evento/show.html.twig", "/var/www/html/evento/templates/evento/show.html.twig");
    }
}
