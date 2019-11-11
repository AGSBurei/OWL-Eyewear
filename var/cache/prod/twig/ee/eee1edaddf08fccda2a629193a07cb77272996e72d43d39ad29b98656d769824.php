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
class __TwigTemplate_c814e419908ce9193ae3359590fcd52ca17f7b6d3d6ee3c7907a7095d3b02593 extends \Twig\Template
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
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-xl navbar-custom\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\"src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Fichier_4.8f8cdf3f.svg"), "html", null, true);
        echo "\"></a></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" > 
                <span class=\"navbar-toggler-icon\"></span>
            </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#SpecGlass\">CARACTERISTIQUES<span class=\"sr-only\">(current)</span></a>
                        </li>
     
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#resolut\">SOLUTIONS</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#statsup\">STATISTIQUES</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#listMonture\">MODELES</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#taille\">TAILLES</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#pack\">CONTENU</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#fabrique\">ASSEMBLAGE</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#precision\">PRECISIONS</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#objectif\">OBJECTIFS</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#participer\">PARTICIPER</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#equipe\">EQUIPE</a>
                        </li>

                        <class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/faq\">FAQ</a>
                        </class=\"nav-item\">
                    </ul>
                </div>
        </div>
    </nav>

        <div class=\"container\">
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        </div>
        ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    </body>
    <footer>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-149618743-1%22%3E\"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-149618743-1');
        </script>
    </footer>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "OWL Eyewear";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 79,  170 => 77,  161 => 12,  154 => 11,  138 => 80,  136 => 79,  133 => 78,  131 => 77,  68 => 17,  62 => 13,  60 => 12,  56 => 11,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "E:\\wamp64\\www\\owleyewear\\templates\\base.html.twig");
    }
}
