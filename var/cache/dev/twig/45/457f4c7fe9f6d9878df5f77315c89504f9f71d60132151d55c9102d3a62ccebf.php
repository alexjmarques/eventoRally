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
class __TwigTemplate_69aa2377e69b2c3a7ffda4dddcf583e6b193c4ffc8028240b9ef273874c73bec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/menu_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_inc/menu_admin.html.twig"));

        // line 1
        echo "<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></div>
        <div class=\"col-sm\"></div>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  70 => 15,  64 => 13,  59 => 11,  54 => 10,  52 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm\"><img src=\"/assets/images/4x4.png\"><img src=\"/assets/images/rally.png\"></div>
        <div class=\"col-sm\"></div>
        <div class=\"col-sm right\">
          <ul class=\"nav site-menu\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {# <li><a href=\"{{ path('cliente_index') }}\">Clientes</a></li> #}
                <li><a href=\"{{ path('evento_index') }}\">Expedições</a></li>
                <li><a href=\"{{ path('cliente_logout') }}\">Sair</a></li>
            {% else %}
                <li><a href=\"{{ path('site') }}\">Expedições</a></li>
            {% endif %}
          </ul>
        </div>
      </div>
    </div>
</header>", "_inc/menu_admin.html.twig", "/var/www/html/evento/templates/_inc/menu_admin.html.twig");
    }
}
