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
class __TwigTemplate_b84b3d0cc4ec44e9094429c2269172c74d276cf95644ce94957938cef8bb87cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/cliente/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/cliente/login.html.twig"));

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

        echo "Login";
        
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", []), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 60, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  186 => 80,  181 => 68,  170 => 60,  163 => 55,  157 => 53,  155 => 52,  144 => 44,  133 => 35,  120 => 23,  115 => 21,  111 => 20,  108 => 19,  103 => 17,  99 => 16,  96 => 15,  94 => 14,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}

<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></div>
        <div class=\"col-sm\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a href=\"https://www.4x4aventura.com.br\">Home</a></li>
                <li><a href=\"{{ path('site') }}\">Expedições</a></li>
                <li><a href=\"{{ path('cliente_logout') }}\">Sair</a></li>
            {% else %}
                <li><a href=\"https://www.4x4aventura.com.br\">Home</a></li>
                <li><a href=\"{{ path('site') }}\">Expedições</a></li>
                <li><a href=\"{{ path('cliente_login') }}\">Cadastrar</a></li>
            {% endif %}
          </ul>
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
                {# <p class=\"text-right\">Evento: SERTÕES 2019 | De 24 de agosto até 01 setembro 2019</p> #}
        </div>

        <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                    <h3>Quero me cadastrar</h3>
                    <p>Após efetuado o cadastro não será necessario enviar as suas informações em futuros eventos seja ele o Evento atual ou outros eventos. Para isso a Inscrição terá de ser sempre feita atraves de nossos canais</p>
                    
                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                           <a href=\"{{ path('cliente_new') }}\" class=\"btn btn-lg btn-primary\">Cadastrar</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>  
<div class=\"clearfix\"></div>
                </div>

                <div class=\"col-md-6\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <h3>Já tenho Cadastro</h3>
                    <p>Efetue o login para concluir a sus inscrição</p>
                    
                    <div class=\"form-group\">
                    <label for=\"inputEmail\" class=\"col-sm-3 control-label\">Email</label>
                    <div class=\"col-md-9\"><input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus></div>
                    </div>

                    <div class=\"form-group\">
                    <label for=\"inputPassword\" class=\"col-sm-3 control-label\">Senha</label>
                    <div class=\"col-md-9\"><input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required></div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    {#
                        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                        See https://symfony.com/doc/current/security/remember_me.html

                        <div class=\"checkbox mb-3\">
                            <label>
                                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                            </label>
                        </div>
                    #}
                    <div class=\"form-group\">
                        <div class=\"col-md-12\">
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">Login</button>
                            
                        </div>
                    </div>  
                </div>
        </div>
    </form>
</main>
{% endblock %}
", "security/cliente/login.html.twig", "/var/www/html/evento/templates/security/cliente/login.html.twig");
    }
}
