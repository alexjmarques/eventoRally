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

/* checkout/index.html.twig */
class __TwigTemplate_d135dbb6833035fcdcf913e219bc72a094737b5e3728ab417ffa3541889cd3c5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "checkout/index.html.twig", 1);
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
    <div class=\"well col-md-8\">
    <div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div>
    <p class=\"text-right\">Evento: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo " </p></div>
        <div class=\"clearfix col-md-12\">
        <h5>Selecione a forma de pagamento</h5>
                <div class=\"clearfix\"></div>
                <br>
                <h6><strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo "</strong></h6>
                <h6>";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "descricaoCurta", []);
        echo "</h6>
                <h6>Valor: R\$ ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h6>
                <br>
                <div class=\"\">
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <div class=\"form-check form-radio-inline col-md-12 border\">
                                <label class=\"radio-inline\"><input class=\"form-check-input\" type=\"radio\" id=\"cc\" name=\"paymentForm\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["metodoPagamentoCartaoCredito"] ?? null), "html", null, true);
        echo "\"><span class=\"checkmark circle\"></span><h4>Cartão de Credito</h4></a></label>
                            </div>
                        </div>

                        ";
        // line 53
        echo "                    </div>
                    </div>
                <div class=\"clearfix\"></div>
                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pagSeguroBoletoForm"] ?? null), 'form_start');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["pagSeguroBoletoForm"] ?? null), "session", []), 'row');
        echo "
                    <div class=\"row btn-submit-payment\">
                        <div class=\"col-sm-12\">
                            <p class=\"text-center\" style=\"margin-bottom: 0;\">
                                <button id=\"button\" class=\"btn btn-info btn-block\" type=\"submit\">
                                    <i class=\"fa fa-lock\"></i> GERAR BOLETO BANCARIO
                                </button>
                            </p>
                        </div>
                    </div>
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["pagSeguroBoletoForm"] ?? null), "_token", []), 'widget');
        echo "
                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pagSeguroBoletoForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo "


                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pagSeguroCartaoCreditoForm"] ?? null), 'form_start');
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "session", []), 'row');
        echo "

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-credit-card\"></i> Pagar com Cartão de Crédito
                            <div id=\"brand\" class=\"pull-right\">

                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "numero", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "codigoSeguranca", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "mesVencimento", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "anoVencimento", []), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "nomeImpressoCartao", []), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "cpfTitular", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "dataNascimento", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "parcelas", []), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <p class=\"text-center\" style=\"margin-bottom: 0;\">
                                        <button id=\"button\" class=\"btn btn-info btn-block\" type=\"submit\"><i
                                                    class=\"fa fa-lock\"></i> PAGAR COM CARTÃO
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "valorTotal", []), 'row');
        echo "
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "token", []), 'row');
        echo "
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "cartaoCredito", []), "bandeira", []), 'row');
        echo "
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["pagSeguroCartaoCreditoForm"] ?? null), "_token", []), 'widget');
        echo "
                ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pagSeguroCartaoCreditoForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
           

           

            </div>
            
        </div>
    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 143,  279 => 142,  275 => 141,  271 => 140,  267 => 139,  249 => 124,  241 => 119,  233 => 114,  223 => 107,  213 => 100,  205 => 95,  197 => 90,  189 => 85,  173 => 72,  169 => 71,  163 => 68,  159 => 67,  146 => 57,  142 => 56,  137 => 53,  130 => 44,  121 => 38,  117 => 37,  113 => 36,  103 => 31,  92 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "checkout/index.html.twig", "/var/www/html/evento/templates/checkout/index.html.twig");
    }
}
