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
class __TwigTemplate_0544a7167fd5d9980e4e080c92fc064d6810f414f65b9f94c6cc17542b9530fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
     <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block forms\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "titulo", []), 'row', ["label" => "Nome da expedição"]);
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "slug", []), 'row', ["label" => "URL amigável"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "imagem", []), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "imagem", []), 'label', ["label_attr" => ["class" => "custom-file-label"], "label" => " "]);
        echo "
            </div>
            </div>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "data", []), 'row', ["label" => "Data de início"]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "localPartida", []), 'row', ["label" => "Local de largada"]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "localChegada", []), 'row', ["label" => "Local da chegada"]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "pais", []), 'row', ["label" => "Pais"]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "descricaoLonga", []), 'row', ["label" => "Informação da expedição"]);
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "descricaoCurta", []), 'row', ["label" => "Descrição curta"]);
        echo "

            <div class=\"input-group form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "valor", []), 'label', ["label_attr" => ["class" => ""], "label" => "Valor (Exemplo.: 2000,35)"]);
        echo "
            <div class=\"clearfix\"></div>
            <div class=\"input-group-prepend input-group-prepend_tp\">
                <span class=\"input-group-text\" id=\"inputGroupFileAddon01\">R\$</span>
            </div>
            <div class=\"custom-file\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "valor", []), 'widget', ["attr" => ["class" => ""]]);
        echo "
            </div>
            </div>

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vagas", []), 'row', ["label" => "Vagas disponíveis para esta Expedição"]);
        echo "

            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
        echo "
        <div class=\"clearfix\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block\">
            <button class=\"btn btn-lg btn-primary pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Salvar")) : ("Salvar")), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  141 => 50,  133 => 45,  129 => 44,  119 => 37,  114 => 35,  107 => 31,  98 => 25,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  51 => 5,  47 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
     <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block forms\">
            {{ form_row(form.titulo, { 'label': 'Nome da expedição' }) }}
            {{ form_row(form.slug, { 'label': 'URL amigável' }) }}
            <div class=\"input-group form-group\">
            <label class=\"control-label required\" for=\"evento_pais\">Imagem de capa</label>
            <div class=\"clearfix\"></div>
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"inputGroupFileAddon01\" style=\"padding: 4px;\">Upload</span>
            </div>
            <div class=\"custom-file\">
                {{ form_widget(form.imagem, {'attr': {'class': 'custom-file-input'}}) }}
                {{ form_label(form.imagem, ' ', {'label_attr': {'class': 'custom-file-label'}}) }}
            </div>
            </div>
            {{ form_row(form.data, { 'label': 'Data de início' }) }}
            {{ form_row(form.localPartida, { 'label': 'Local de largada' }) }}
            {{ form_row(form.localChegada, { 'label': 'Local da chegada' }) }}
            {{ form_row(form.pais, { 'label': 'Pais' }) }}
            {{ form_row(form.descricaoLonga, { 'label': 'Informação da expedição' }) }}
            {{ form_row(form.descricaoCurta, { 'label': 'Descrição curta' }) }}

            <div class=\"input-group form-group\">
            {{ form_label(form.valor, 'Valor (Exemplo.: 2000,35)', {'label_attr': {'class': ''}}) }}
            <div class=\"clearfix\"></div>
            <div class=\"input-group-prepend input-group-prepend_tp\">
                <span class=\"input-group-text\" id=\"inputGroupFileAddon01\">R\$</span>
            </div>
            <div class=\"custom-file\">
            {{ form_widget(form.valor, {'attr': {'class': ''}}) }}
            </div>
            </div>

            {{ form_row(form.vagas, { 'label': 'Vagas disponíveis para esta Expedição' }) }}

            {{ form_widget(form) }}
        <div class=\"clearfix\"></div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-md-12\">
        <div class=\"col-md-7 center-block\">
            <button class=\"btn btn-lg btn-primary pull-right\">{{ button_label|default('Salvar') }}</button>
            <a href=\"{{ path('evento_index') }}\" class=\"btn btn-lg btn-primary pull-right vazado\">Voltar</a>
            <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
{{ form_end(form) }}
", "evento/_form.html.twig", "/var/www/html/evento/templates/evento/_form.html.twig");
    }
}
