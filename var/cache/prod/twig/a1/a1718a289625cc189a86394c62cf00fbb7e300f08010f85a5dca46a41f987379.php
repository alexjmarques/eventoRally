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
class __TwigTemplate_27a396617b44e431df482086c85403c0630b4cfe5aaa8bbabe155c7fee9e4905 extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Expedições 4x4 Aventura - Expedição";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "imagem", []), "html", null, true);
        echo "\" class=\"rounded-circle mr-3\" height=\"50px\" width=\"50px\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo "\">
        <div>
        <h4 class=\"card-title font-weight-bold mb-2\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo " - R\$ ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h4>
        <p class=\"card-text\"><i class=\"far fa-clock pr-2\"></i>";
        // line 16
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</p>
        </div>
    </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    <th class=\"l_b\">Largada:</th>
                    <td class=\"left_b\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localPartida", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Chegada:</th>
                    <td class=\"left_b\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "localChegada", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Pais:</th>
                    <td class=\"left_b\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "pais", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Vagas:</th>
                    <td class=\"left_b\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "vagas", []), "html", null, true);
        echo "</td>
                    <th class=\"l_b\">Disponíveis:</th>
                    <td class=\"left_b\">";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "vagas", []) - twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "usuarioEventos", []))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "usuarioEventos", []));
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
        return array (  179 => 67,  174 => 64,  165 => 60,  157 => 57,  153 => 56,  149 => 55,  145 => 54,  141 => 53,  137 => 52,  134 => 51,  129 => 50,  107 => 31,  102 => 29,  97 => 27,  92 => 25,  87 => 23,  77 => 16,  71 => 15,  64 => 13,  56 => 7,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evento/show.html.twig", "/var/www/html/evento/templates/evento/show.html.twig");
    }
}
