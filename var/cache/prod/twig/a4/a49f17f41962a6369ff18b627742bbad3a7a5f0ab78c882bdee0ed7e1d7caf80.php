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

/* navbar.html.twig */
class __TwigTemplate_88c8226cb3a50707cd89be019600fe89f5f0465ad40c23268bc2db4818abce61 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"vitrine Lunette OwlEyewear\">
        <meta name=\"keywords\" content=\"Lunette, nuit, correction, voiture, Owl Eyewear\">
        <meta name=\"author\" content=\"Zachari BLINN et Rommanirs Mer\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.1, shrink-to-fit=no\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/favicon.5ee79b31.ico"), "html", null, true);
        echo "\"/>
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-151174461-1%22%3E\"</script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-151174461-1');
        </script>
    </head>
    <body>
        <nav class=\"navbar navbar-expand-xl navbar-custom\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\"src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Fichier_4.8f8cdf3f.svg"), "html", null, true);
        echo "\"></a></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" > 
                <span class=\"navbar-toggler-icon\"></span>
            </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"/\">ACCUEIL</a>
                        </li>
     
                        <class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/faq\">FAQ<span class=\"sr-only\">(current)</span></a>
                        </class>

                       
                    </ul>
                </div>
        </div>
    </nav>


        <div class=\"container\">
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>

        

 
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "OWL Eyewear";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  135 => 48,  126 => 11,  119 => 10,  109 => 51,  107 => 50,  104 => 49,  102 => 48,  76 => 25,  61 => 12,  59 => 11,  55 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html.twig", "E:\\wamp64\\www\\owleyewear\\templates\\navbar.html.twig");
    }
}
