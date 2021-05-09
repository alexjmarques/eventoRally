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

/* security/cliente/login.html.twig */
class __TwigTemplate_e92f2105687b54b68d4ae0afe9dff7b38810ea9d255e65becd6bc6c89b900b29 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/cliente/login.html.twig", 1);
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
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "
<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></div>
        <div class=\"col-sm\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Home</a></li>
                <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_logout");
            echo "\">Sair</a></li>
            ";
        } else {
            // line 19
            echo "                <li><a href=\"https://www.4x4aventura.com.br\">Home</a></li>
                <li><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_login");
            echo "\">Cadastrar</a></li>
            ";
        }
        // line 23
        echo "          </ul>
        </div>
      </div>
    </div>
</header>
<main class=\"container\">
    <form method=\"post\" class=\"well\">
        <div class=\"col-md-12 title-evento\">
                <div class=\"group\">
                    <h4>Siga os passos para completar<br/> sua inscrição</h4>
                </div>
                ";
        // line 35
        echo "        </div>

        <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <h3>Quero me cadastrar</h3>
                    <p>Após efetuado o cadastro não será necessario enviar as suas informações em futuros eventos seja ele o Evento atual ou outros eventos. Para isso a Inscrição terá de ser sempre feita atraves de nossos canais</p>
                    
                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                           <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_new");
        echo "\" class=\"btn btn-lg btn-primary\">Cadastrar</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>  
<div class=\"clearfix\"></div>
                </div>

                <div class=\"col-md-6\">
                    ";
        // line 52
        if (($context["error"] ?? null)) {
            // line 53
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 55
        echo "                    <h3>Já tenho Cadastro</h3>
                    <p>Efetue o login para concluir a sus inscrição</p>
                    
                    <div class=\"form-group\">
                    <label for=\"inputEmail\" class=\"col-sm-3 control-label\">Email</label>
                    <div class=\"col-md-9\"><input type=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus></div>
                    </div>

                    <div class=\"form-group\">
                    <label for=\"inputPassword\" class=\"col-sm-3 control-label\">Senha</label>
                    <div class=\"col-md-9\"><input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required></div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                    ";
        // line 80
        echo "                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">Login</button>
                            
                        </div>
                    </div>  
                </div>
        </div>
    </form>
</main>
";
    }

    public function getTemplateName()
    {
        return "security/cliente/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 80,  151 => 68,  140 => 60,  133 => 55,  127 => 53,  125 => 52,  114 => 44,  103 => 35,  90 => 23,  85 => 21,  81 => 20,  78 => 19,  73 => 17,  69 => 16,  66 => 15,  64 => 14,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/cliente/login.html.twig", "/var/www/html/evento/templates/security/cliente/login.html.twig");
    }
}
