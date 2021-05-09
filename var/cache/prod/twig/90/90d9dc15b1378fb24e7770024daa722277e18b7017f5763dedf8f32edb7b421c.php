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

/* base.html.twig */
class __TwigTemplate_35c6a3dea9b408f48217151c5f06466d3f74a8a85730f052cd3fb230368f9bca extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
    <div id=\"overlay\">
        <div class=\"overlay-message\"></div>
    </div>
    ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    <footer class=\"rodape\">
        <div class=\"in_container\">
            <div class=\"col-md-12 text-center\">
                <img src=\"/assets/images/seguro.png\">
                <p>Você esta em um ambiente seguro, todas as informações colhidas seram utilizadas somente<br/> para as expedições que você estiver participando.</p>
            </div>
            <div class=\"sub_container\">
                <p class=\"container\">© Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href=\"https://fonts.googleapis.com/css?family=Assistant:300,400,600,700\" rel=\"stylesheet\">
        
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link href=\"//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        // line 39
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.tiny.cloud/1/1gynmt6biui7yo713cxe0avaiicbqc9quif500b40zeyiush/tinymce/5/tinymce.min.js\"></script>
        <!-- Main Quill library -->
    
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mask.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["PAGSEGURO_JS"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  134 => 46,  130 => 45,  122 => 40,  117 => 39,  114 => 38,  109 => 26,  103 => 19,  93 => 11,  90 => 10,  85 => 9,  79 => 49,  77 => 38,  64 => 27,  62 => 26,  55 => 21,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/evento/templates/base.html.twig");
    }
}
