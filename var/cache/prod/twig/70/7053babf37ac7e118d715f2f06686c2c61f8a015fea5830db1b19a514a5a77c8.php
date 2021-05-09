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

/* _inc/menu_admin.html.twig */
class __TwigTemplate_2e68313d0fd77d9c6dcdcf4ce5f15c2edfaae2c2258895a38d416bfc45c3641d extends \Twig\Template
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
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></div>
        <div class=\"\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "                ";
            // line 10
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
            echo "\">Expedições</a></li>
                <li><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cliente_logout");
            echo "\">Sair</a></li>
            ";
        } else {
            // line 13
            echo "                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">Expedições</a></li>
            ";
        }
        // line 15
        echo "          </ul>
        </div>
      </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "_inc/menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  58 => 13,  53 => 11,  48 => 10,  46 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_inc/menu_admin.html.twig", "/var/www/html/evento/templates/_inc/menu_admin.html.twig");
    }
}
