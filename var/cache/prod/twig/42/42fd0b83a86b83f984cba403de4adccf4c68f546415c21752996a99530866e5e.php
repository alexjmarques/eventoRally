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

/* evento/_form.html.twig */
class __TwigTemplate_b3ae5c41aa2ba302be0b860c54cfe4bf912727fc1c2d4b38fec31239fef6b25c extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
     <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block forms\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titulo", []), 'row', ["label" => "Nome da expedição"]);
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", []), 'row', ["label" => "URL amigável"]);
        echo "
            <div class=\"input-group form-group\">
            <label class=\"control-label required\" for=\"evento_pais\">Imagem de capa</label>
            <div class=\"clearfix\"></div>
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"inputGroupFileAddon01\" style=\"padding: 4px;\">Upload</span>
            </div>
            <div class=\"custom-file\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imagem", []), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imagem", []), 'label', ["label_attr" => ["class" => "custom-file-label"], "label" => " "]);
        echo "
            </div>
            </div>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "data", []), 'row', ["label" => "Data de início"]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localPartida", []), 'row', ["label" => "Local de largada"]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localChegada", []), 'row', ["label" => "Local da chegada"]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pais", []), 'row', ["label" => "Pais"]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descricaoLonga", []), 'row', ["label" => "Informação da expedição"]);
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "descricaoCurta", []), 'row', ["label" => "Descrição curta"]);
        echo "

            <div class=\"input-group form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "valor", []), 'label', ["label_attr" => ["class" => ""], "label" => "Valor (Exemplo.: 2000,35)"]);
        echo "
            <div class=\"clearfix\"></div>
            <div class=\"input-group-prepend input-group-prepend_tp\">
                <span class=\"input-group-text\" id=\"inputGroupFileAddon01\">R\$</span>
            </div>
            <div class=\"custom-file\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "valor", []), 'widget', ["attr" => ["class" => ""]]);
        echo "
            </div>
            </div>

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vagas", []), 'row', ["label" => "Vagas disponíveis para esta Expedição"]);
        echo "

            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <div class=\"clearfix\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block\">
            <button class=\"btn btn-lg btn-primary pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Salvar")) : ("Salvar")), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evento_index");
        echo "\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
            <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "evento/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  127 => 45,  123 => 44,  113 => 37,  108 => 35,  101 => 31,  92 => 25,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  60 => 14,  56 => 13,  45 => 5,  41 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evento/_form.html.twig", "/var/www/html/evento/templates/evento/_form.html.twig");
    }
}
