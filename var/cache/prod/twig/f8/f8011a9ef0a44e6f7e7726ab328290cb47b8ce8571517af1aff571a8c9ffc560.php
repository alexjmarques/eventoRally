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

/* checkout/resultado.html.twig */
class __TwigTemplate_99082d69da0d92e1b3b88aa2acbd99fa1e09ec4309c2aadc9153e5685dfc988e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "checkout/resultado.html.twig", 1);
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
    <main>
    <div class=\"well col-md-6\">
        <div class=\"col-md-12\">
            <div class=\"center-block agradescimento\">
                ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["objetoPagamento"] ?? null), "getPaymentLink", [], "any", true, true)) {
            // line 32
            echo "                <div class=\"row\">
                    <div class=\"col-md-12 title-evento\">
                        <div class=\"group\">
                            <h3 class=\"text-center\">Boleto gerado com sucesso!</h3>
                        </div>
                        <p class=\"text-center\">Dados do seu pedido<br>
                        Evento: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
            echo "<br>
                        Valor: R\$ ";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
            echo "
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["objetoPagamento"] ?? null), "getPaymentLink", [], "method"), "html", null, true);
            echo "\" target=\"_blank\" class=\"boleto_gerar\">Clique aqui para abrir o boleto</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "id", [])]), "html", null, true);
            echo "\">Voltar para página de pagamento</a>
                        </p>
                    </div>
                </div>
            ";
        } else {
            // line 46
            echo "                <div class=\"row\">
                    <div class=\"col-md-12 title-evento\">
                        <div class=\"group\">
                            <h3 class=\"text-center\">Pagamento efetuado com sucesso!</h3>
                        </div>
                        Dados do seu pedido
                        <p class=\"text-center\">Evento: ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
            echo " </p>
                        <p class=\"text-center\">Valor: R\$ ";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        // line 57
        echo "                </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "checkout/resultado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  149 => 53,  143 => 52,  135 => 46,  127 => 41,  123 => 40,  119 => 39,  113 => 38,  105 => 32,  103 => 31,  92 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/resultado.html.twig", "/var/www/html/evento/templates/checkout/resultado.html.twig");
    }
}
