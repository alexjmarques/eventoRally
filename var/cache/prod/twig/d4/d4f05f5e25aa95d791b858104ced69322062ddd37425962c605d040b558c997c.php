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

/* evento/index.html.twig */
class __TwigTemplate_6387f459084ee8e29ca31b3e1f714b383fa18acbf4c56d425db2bc2e2439f5c0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "evento/index.html.twig", 1);
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
        $this->loadTemplate("_inc/menu_admin.html.twig", "evento/index.html.twig", 6)->display($context);
        // line 7
        echo "<main>
<div class=\"well col-md-8\">

<div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Expedições</h4></div><p class=\"text-right\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_new");
        echo "\" class=\"btn btn-lg btn-primary pull-right\">Nova Expedição</a></p></div>

<div class=\"col-md-12 neg_div\">
    <table class=\"table table-striped table-bordered dataTable\">
        <thead>
            <tr>
                <th>Expedição</th>
                <th>Data</th>
                <th>Local da Partida</th>
                <th>Local da Chegada</th>
                <th>Pais</th>
                ";
        // line 22
        echo "                ";
        // line 23
        echo "                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eventos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "titulo", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["evento"], "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "data", []), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "localPartida", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "localChegada", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "pais", []), "html", null, true);
            echo "</td>
                <td>R\$ ";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evento"], "valor", []), 2, ",", "."), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evento"], "id", [])]), "html", null, true);
            echo "\">Ver Inscritos</a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"10\">Sem expedições cadastradas</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    
</div>
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "evento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 43,  126 => 39,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  92 => 30,  89 => 29,  84 => 28,  77 => 23,  75 => 22,  61 => 10,  56 => 7,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evento/index.html.twig", "/var/www/html/evento/templates/evento/index.html.twig");
    }
}
