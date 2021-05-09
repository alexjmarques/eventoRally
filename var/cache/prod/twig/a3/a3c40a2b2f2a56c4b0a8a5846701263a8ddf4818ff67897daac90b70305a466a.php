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

/* emails/_registration.html.twig */
class __TwigTemplate_d041515cd989853ca35bde076c5e6ac91aa244fe56f265a4a0c15820d41df424 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<link href=\"https://fonts.googleapis.com/css?family=Assistant:300,400,600,700\" rel=\"stylesheet\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"font-family: 'Assistant', lucida; font-size: 13px; background-color: rgb(255, 255, 255); margin: 5% auto; \">
                <tr>
                    <td style=\"width: 100%; overflow: hidden; background: #ccc; padding: 2px;\" >
                        <div style=\"width: 100%;\">
                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"\" >
                                <tr>
                                    <td align=\"left\" valign=\"top\" style=\"width: 100%; background-color: rgb(255, 255, 255);\">
                                        <div style=\"width: 100%;\">
                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" style=\"\" >
                                                <tr>
                                                    <td align=\"left\" valign=\"top\" style=\"width: 90%;\">
                                                            <table width=\"100%\" border=\"0\">
                                                                    <tr >
                                                                        <td width=\"82%\" style=\"text-align:center;\"></br><h4 style=\"font-family: 'Assistant', lucida; font-size: 2.5em; font-weight:700; text-align:center;\">Inscrição efetuada com sucesso</h4></br>
                                                                            <img src=\"https://expedicoes.4x4aventura.com.br/uploads/email-sertoes.png\" width=\"100%\" style=\"max-width: 200px; margin: 0 auto;\">
                                                                            <p style=\"font-family: 'Assistant', lucida; font-size: 1.4em; font-weight:500; text-align:center; padding:30px 10px 0 10px; width: 70%; margin:0 auto;\">Sua inscrição no evento  <strong style=\"colo:#f68535;\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "titulo", []), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evento"] ?? null), "data", []), "d/m/Y")) : ("")), "html", null, true);
        echo "</strong>, foi efetuada com sucesso.</p>
                                                                            <p style=\"font-family: 'Assistant', lucida; font-size: 1.4em; font-weight:500; text-align:center; padding:30px 10px; width: 90%; margin:0 auto;\">Aqui esta seu acesso ao evento:</p>

                                                                            <img src=\"https://expedicoes.4x4aventura.com.br/uploads/email-qr-code.png\" width=\"100%\" style=\"max-width: 300px; margin: 0 auto;\">

                                                                            <h5 style=\"font-family: 'Assistant', lucida; font-size: 2.4em; font-weight:700; text-align:center; padding:50px 0px; width: 90%; margin:0 auto;\">#99783238798723</h5>

                                                                            <p style=\"font-family: 'Assistant', lucida; font-size: 1.4em; font-weight:500; text-align:center; padding:30px 20px 60px 20px; width: 90%; margin:0 auto;\">
                                                                            Com esse Identificador você terá acesso ao evento, 
                                                                            apresente este email impresso ou pelo celular para 
                                                                            liberar sua entrada. </p>
                                                                        </td>
                                                                    </tr>
                                                            </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div style=\"background-color: #363435; width: 100%;\">
                                            <table  border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\" style=\"background-color: #363435; \">
                                                <tr>
                                                    <td style=\"width: 100%;overflow: hidden; text-align: center;\" align=\"left\" valign=\"top\">
                                                        <img src=\"https://expedicao.4x4aventura.com.br/assets/images/4x4.png\" width=\"100%\" style=\"max-width: 80px; margin: 0 5px;\">
                                                        <img src=\"https://expedicao.4x4aventura.com.br/assets/images/rally.png\" width=\"100%\" style=\"max-width: 130px; margin: 0 auto;\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        ";
    }

    public function getTemplateName()
    {
        return "emails/_registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/_registration.html.twig", "/var/www/html/evento/templates/emails/_registration.html.twig");
    }
}
