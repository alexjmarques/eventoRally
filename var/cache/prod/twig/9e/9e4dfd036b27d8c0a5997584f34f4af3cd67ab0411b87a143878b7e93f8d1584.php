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

/* security/admin/login.html.twig */
class __TwigTemplate_dd8e42e107a5c6603dab7ffccb71f8f5efed10cc6d646cd9ee1b9b61c43bf1cc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/admin/login.html.twig", 1);
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
        echo "Login Sistema";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<header>
    <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm\">
       <img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\">
    </div>
    <div class=\"col-sm\">
      
    </div>
    <div class=\"col-sm right\">
      <a href=\"https://www.4x4aventura.com.br\" class=\"btn-vazado\">Voltar ao site</a>
    </div>
  </div>
    </div>
</header>

<main>
    <form method=\"post\" class=\"well col-md-4\">
        <div class=\"col-md-12\">
                <div class=\"center-block\">
                    ";
        // line 26
        if (($context["error"] ?? null)) {
            // line 27
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 29
        echo "                    <h3>Login Sistema</h3>
                    <p>Sistema Administrativo</p>
                    <div class=\"form-group\">
                    <label for=\"inputEmail\" class=\"col-md-3 control-label f-left\">Email</label>
                    <div class=\"col-md-9 f-left\"><input type=\"email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus></div>
                    </div>

                    <div class=\"form-group\">
                    <label for=\"inputPassword\" class=\"col-md-3 control-label f-left\">Senha</label>
                    <div class=\"col-md-9 f-left\"><input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required></div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <div class=\"col-md-12 footer_form\">
                            <button class=\"btn btn-lg btn-primary pull-right\" type=\"submit\">Login</button>
                        </div>
                    </div>          
                </div>
        </div>
        <div class=\"clearfix\"></div>
    </form>
</main>
";
    }

    public function getTemplateName()
    {
        return "security/admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  90 => 33,  84 => 29,  78 => 27,  76 => 26,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/admin/login.html.twig", "/var/www/html/evento/templates/security/admin/login.html.twig");
    }
}
