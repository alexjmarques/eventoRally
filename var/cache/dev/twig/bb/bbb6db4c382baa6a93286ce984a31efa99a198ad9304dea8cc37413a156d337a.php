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

/* cliente/show.html.twig */
class __TwigTemplate_ba94e102a4795b8288d72c62b24e06ee53d477b13fd2ab4860c185883885758d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/show.html.twig"));

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

        echo "Informações do Cliente";
        
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
        $this->loadTemplate("_inc/menu_admin.html.twig", "cliente/show.html.twig", 6)->display($context);
        // line 7
        echo "<main>
<div class=\"well col-md-8\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Informações do Cliente</h4></div><p class=\"text-right\"></p></div>
<div class=\"col-md-12\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 16, $this->source); })()), "email", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 20, $this->source); })()), "nome", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apelido</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 24, $this->source); })()), "apelido", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DataNascimento</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 28, $this->source); })()), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 28, $this->source); })()), "dataNascimento", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rg</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 32, $this->source); })()), "rg", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cpf</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 36, $this->source); })()), "cpf", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cnh</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 40, $this->source); })()), "cnh", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 44, $this->source); })()), "sexo", []) == 1)) {
            // line 45
            echo "                <td>Masculino</td>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 46, $this->source); })()), "sexo", []) == 2)) {
            // line 47
            echo "                <td>Feminino</td>
                ";
        } else {
            // line 49
            echo "                <td>Não Informado</td>
                ";
        }
        // line 51
        echo "
                
            </tr>
            <tr>
                <th>Telefone Residencial</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 56, $this->source); })()), "telefoneResidencial", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefone Celular</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 60, $this->source); })()), "telefoneCelular", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Endereco</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 64, $this->source); })()), "endereco", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 68, $this->source); })()), "numero", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Complemento</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 72, $this->source); })()), "complemento", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 76, $this->source); })()), "bairro", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cep</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 80, $this->source); })()), "cep", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 84, $this->source); })()), "cidade", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cliente"]) || array_key_exists("cliente", $context) ? $context["cliente"] : (function () { throw new RuntimeError('Variable "cliente" does not exist.', 88, $this->source); })()), "estado", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <div class=\"form-group\">
        <div class=\"col-md-12\">
        
            <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_index");
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
        return "cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 96,  224 => 88,  217 => 84,  210 => 80,  203 => 76,  196 => 72,  189 => 68,  182 => 64,  175 => 60,  168 => 56,  161 => 51,  157 => 49,  153 => 47,  151 => 46,  148 => 45,  146 => 44,  139 => 40,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  97 => 16,  86 => 7,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Informações do Cliente{% endblock %}

{% block body %}
{% include '_inc/menu_admin.html.twig' %}
<main>
<div class=\"well col-md-8\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Informações do Cliente</h4></div><p class=\"text-right\"></p></div>
<div class=\"col-md-12\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Email</th>
                <td>{{ cliente.email }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ cliente.nome }}</td>
            </tr>
            <tr>
                <th>Apelido</th>
                <td>{{ cliente.apelido }}</td>
            </tr>
            <tr>
                <th>DataNascimento</th>
                <td>{{ cliente.dataNascimento ? cliente.dataNascimento|date('d/m/Y') : '' }}</td>
            </tr>
            <tr>
                <th>Rg</th>
                <td>{{ cliente.rg }}</td>
            </tr>
            <tr>
                <th>Cpf</th>
                <td>{{ cliente.cpf }}</td>
            </tr>
            <tr>
                <th>Cnh</th>
                <td>{{ cliente.cnh }}</td>
            </tr>
            <tr>
                <th>Sexo</th>
                {% if cliente.sexo == 1 %}
                <td>Masculino</td>
                {% elseif cliente.sexo == 2 %}
                <td>Feminino</td>
                {% else %}
                <td>Não Informado</td>
                {% endif %}

                
            </tr>
            <tr>
                <th>Telefone Residencial</th>
                <td>{{ cliente.telefoneResidencial }}</td>
            </tr>
            <tr>
                <th>Telefone Celular</th>
                <td>{{ cliente.telefoneCelular }}</td>
            </tr>
            <tr>
                <th>Endereco</th>
                <td>{{ cliente.endereco }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ cliente.numero }}</td>
            </tr>
            <tr>
                <th>Complemento</th>
                <td>{{ cliente.complemento }}</td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td>{{ cliente.bairro }}</td>
            </tr>
            <tr>
                <th>Cep</th>
                <td>{{ cliente.cep }}</td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td>{{ cliente.cidade }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ cliente.estado }}</td>
            </tr>
        </tbody>
    </table>
</div>
    <div class=\"form-group\">
        <div class=\"col-md-12\">
        
            <a href=\"{{ path('cliente_index') }}\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
            <div class=\"clearfix\"></div>
            </div>
    </div>
</div>
</main>
{% endblock %}
", "cliente/show.html.twig", "/var/www/html/evento/templates/cliente/show.html.twig");
    }
}
