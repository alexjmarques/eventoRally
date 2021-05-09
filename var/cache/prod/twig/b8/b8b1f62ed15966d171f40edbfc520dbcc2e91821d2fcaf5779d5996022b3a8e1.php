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
class __TwigTemplate_df599c68c4607db37ba47f9bc1cf5c445fb37a4193a58b254d1548ce5b4968cf extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Informações do Cliente";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "email", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "nome", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apelido</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "apelido", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DataNascimento</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "dataNascimento", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rg</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "rg", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cpf</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "cpf", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cnh</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "cnh", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "sexo", []) == 1)) {
            // line 45
            echo "                <td>Masculino</td>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 46
($context["cliente"] ?? null), "sexo", []) == 2)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "telefoneResidencial", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefone Celular</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "telefoneCelular", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Endereco</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "endereco", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "numero", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Complemento</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "complemento", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "bairro", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cep</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "cep", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "cidade", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cliente"] ?? null), "estado", []), "html", null, true);
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
        return array (  205 => 96,  194 => 88,  187 => 84,  180 => 80,  173 => 76,  166 => 72,  159 => 68,  152 => 64,  145 => 60,  138 => 56,  131 => 51,  127 => 49,  123 => 47,  121 => 46,  118 => 45,  116 => 44,  109 => 40,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  74 => 20,  67 => 16,  56 => 7,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cliente/show.html.twig", "/var/www/html/evento/templates/cliente/show.html.twig");
    }
}
