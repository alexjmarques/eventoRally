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
class __TwigTemplate_7756de5281231d5bb929b4ee708e629e0fbe244a35d63788516d8cae3552f9bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

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

<main>
    <div class=\"well col-md-8\">
    <div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div>
    <p class=\"text-right\">Evento: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 31, $this->source); })()), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 31, $this->source); })()), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 31, $this->source); })()), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo " </p></div>
        <div class=\"clearfix col-md-12\">
        <h5>Selecione a forma de pagamento</h5>
                <div class=\"clearfix\"></div>
                <br>
                <h6><strong>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 36, $this->source); })()), "titulo", []), "html", null, true);
        echo "</strong></h6>
                <h6>";
        // line 37
        echo twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 37, $this->source); })()), "descricaoCurta", []);
        echo "</h6>
                <h6>Valor: R\$ ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 38, $this->source); })()), "valor", []), 2, ",", "."), "html", null, true);
        echo "</h6>
                <br>
                <div class=\"\">
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <div class=\"form-check form-radio-inline col-md-12 border\">
                                <label class=\"radio-inline\"><input class=\"form-check-input\" type=\"radio\" id=\"cc\" name=\"paymentForm\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["metodoPagamentoCartaoCredito"]) || array_key_exists("metodoPagamentoCartaoCredito", $context) ? $context["metodoPagamentoCartaoCredito"] : (function () { throw new RuntimeError('Variable "metodoPagamentoCartaoCredito" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\"><span class=\"checkmark circle\"></span><h4>Cartão de Credito</h4></a></label>
                            </div>
                        </div>

                        <div class=\"col-sm\">
                            <div class=\"form-check form-radio-inline col-md-12 border\">
                                <label class=\"radio-inline\"><input class=\"form-check-input\" type=\"radio\" id=\"boleto\" name=\"paymentForm\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["metodoPagamentoBoleto"]) || array_key_exists("metodoPagamentoBoleto", $context) ? $context["metodoPagamentoBoleto"] : (function () { throw new RuntimeError('Variable "metodoPagamentoBoleto" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\"><span class=\"checkmark circle\"></span><h4>Boleto</h4></a></label>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class=\"clearfix\"></div>
                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pagSeguroBoletoForm"]) || array_key_exists("pagSeguroBoletoForm", $context) ? $context["pagSeguroBoletoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroBoletoForm" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroBoletoForm"]) || array_key_exists("pagSeguroBoletoForm", $context) ? $context["pagSeguroBoletoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroBoletoForm" does not exist.', 57, $this->source); })()), "session", []), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroBoletoForm"]) || array_key_exists("pagSeguroBoletoForm", $context) ? $context["pagSeguroBoletoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroBoletoForm" does not exist.', 67, $this->source); })()), "_token", []), 'widget');
        echo "
                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pagSeguroBoletoForm"]) || array_key_exists("pagSeguroBoletoForm", $context) ? $context["pagSeguroBoletoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroBoletoForm" does not exist.', 68, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "


                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 72, $this->source); })()), "session", []), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 85, $this->source); })()), "cartaoCredito", []), "numero", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 90, $this->source); })()), "cartaoCredito", []), "codigoSeguranca", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 95, $this->source); })()), "cartaoCredito", []), "mesVencimento", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 100, $this->source); })()), "cartaoCredito", []), "anoVencimento", []), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 107, $this->source); })()), "cartaoCredito", []), "nomeImpressoCartao", []), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-5\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 114, $this->source); })()), "cartaoCredito", []), "cpfTitular", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 119, $this->source); })()), "cartaoCredito", []), "dataNascimento", []), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-groups small text-uppercase\">
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 124, $this->source); })()), "cartaoCredito", []), "parcelas", []), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 139, $this->source); })()), "valorTotal", []), 'row');
        echo "
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 140, $this->source); })()), "cartaoCredito", []), "token", []), 'row');
        echo "
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 141, $this->source); })()), "cartaoCredito", []), "bandeira", []), 'row');
        echo "
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 142, $this->source); })()), "_token", []), 'widget');
        echo "
                ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["pagSeguroCartaoCreditoForm"]) || array_key_exists("pagSeguroCartaoCreditoForm", $context) ? $context["pagSeguroCartaoCreditoForm"] : (function () { throw new RuntimeError('Variable "pagSeguroCartaoCreditoForm" does not exist.', 143, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
           

           

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
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 143,  315 => 142,  311 => 141,  307 => 140,  303 => 139,  285 => 124,  277 => 119,  269 => 114,  259 => 107,  249 => 100,  241 => 95,  233 => 90,  225 => 85,  209 => 72,  205 => 71,  199 => 68,  195 => 67,  182 => 57,  178 => 56,  169 => 50,  160 => 44,  151 => 38,  147 => 37,  143 => 36,  133 => 31,  122 => 22,  117 => 20,  113 => 19,  110 => 18,  105 => 16,  101 => 15,  98 => 14,  96 => 13,  89 => 9,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
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

<main>
    <div class=\"well col-md-8\">
    <div class=\"col-md-12 title-evento\"><div class=\"group\"><h4>Pagamento da Inscrição</h4></div>
    <p class=\"text-right\">Evento: {{ evento.titulo }} | {{ evento.data ? evento.data|date('d/m/Y') : '' }} </p></div>
        <div class=\"clearfix col-md-12\">
        <h5>Selecione a forma de pagamento</h5>
                <div class=\"clearfix\"></div>
                <br>
                <h6><strong>{{ evento.titulo }}</strong></h6>
                <h6>{{ evento.descricaoCurta|raw }}</h6>
                <h6>Valor: R\$ {{ evento.valor|number_format(2, ',', '.') }}</h6>
                <br>
                <div class=\"\">
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <div class=\"form-check form-radio-inline col-md-12 border\">
                                <label class=\"radio-inline\"><input class=\"form-check-input\" type=\"radio\" id=\"cc\" name=\"paymentForm\" value=\"{{ metodoPagamentoCartaoCredito }}\"><span class=\"checkmark circle\"></span><h4>Cartão de Credito</h4></a></label>
                            </div>
                        </div>

                        <div class=\"col-sm\">
                            <div class=\"form-check form-radio-inline col-md-12 border\">
                                <label class=\"radio-inline\"><input class=\"form-check-input\" type=\"radio\" id=\"boleto\" name=\"paymentForm\" value=\"{{ metodoPagamentoBoleto }}\"><span class=\"checkmark circle\"></span><h4>Boleto</h4></a></label>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class=\"clearfix\"></div>
                {{ form_start(pagSeguroBoletoForm) }}
                    {{ form_row(pagSeguroBoletoForm.session) }}
                    <div class=\"row btn-submit-payment\">
                        <div class=\"col-sm-12\">
                            <p class=\"text-center\" style=\"margin-bottom: 0;\">
                                <button id=\"button\" class=\"btn btn-info btn-block\" type=\"submit\">
                                    <i class=\"fa fa-lock\"></i> GERAR BOLETO BANCARIO
                                </button>
                            </p>
                        </div>
                    </div>
                {{ form_widget(pagSeguroBoletoForm._token) }}
                {{ form_end(pagSeguroBoletoForm, {'render_rest': false}) }}


                {{ form_start(pagSeguroCartaoCreditoForm) }}
                    {{ form_row(pagSeguroCartaoCreditoForm.session) }}

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
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.numero) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.codigoSeguranca) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.mesVencimento) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-2 col-xs-6\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.anoVencimento) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.nomeImpressoCartao) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-5\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.cpfTitular) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-3\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.dataNascimento) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"form-groups small text-uppercase\">
                                        {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.parcelas) }}
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
                    {{ form_row(pagSeguroCartaoCreditoForm.valorTotal) }}
                    {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.token) }}
                    {{ form_row(pagSeguroCartaoCreditoForm.cartaoCredito.bandeira) }}
                    {{ form_widget(pagSeguroCartaoCreditoForm._token) }}
                {{ form_end(pagSeguroCartaoCreditoForm, {'render_rest': false}) }}
           

           

            </div>
            
        </div>
    </div>
</main>
{% endblock %}", "checkout/index.html.twig", "/var/www/html/evento/templates/checkout/index.html.twig");
    }
}
