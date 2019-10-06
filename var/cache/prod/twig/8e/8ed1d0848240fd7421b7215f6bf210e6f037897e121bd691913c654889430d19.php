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
class __TwigTemplate_63342d9b5d36c9b45a1a37ff2be7fb3798759d135210afac63969fb531e1fecc extends \Twig\Template
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
        <meta name=\"viewport\" content=\"width-device-width, initial-scale=1, shrink-to-fit=no\">
                <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/favicon.5ee79b31.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/favicon.5ee79b31.ico"), "html", null, true);
        echo "\"/>
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
    <div class =\"band\">

    </div>
    <nav class=\"navbar navbar-expand-lg navbar-custom\">
        <a class=\"navbar-brand\" href=\"#\"><a href=\"/\"><img class=\"logo\"src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Fichier_4.8f8cdf3f.svg"), "html", null, true);
        echo "\"></a></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#SpecGlass\">CARACTERISTIQUES<span class=\"sr-only\">(current)</span></a>
                </li>
                 <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#precision\">PRECISION TECHNIQUES</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#resolut\">PROBLEMES RESOLUES</a>
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
                    <a class=\"nav-link\" href=\"#objectif\">OBJECTIFS</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#participer\">PARTICIPER</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#equipe\">EQUIPE</a>
                </li>
                </ul>
            </div>
        </nav>
        <div class=\"container\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        </div>
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
    
    <footer>
        I'm a footer
    </footer>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "OWL EyeWear";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
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
        return array (  155 => 61,  149 => 59,  140 => 9,  133 => 8,  123 => 62,  121 => 61,  118 => 60,  116 => 59,  70 => 16,  62 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/burei/OWL-Eyewear/templates/base.html.twig");
    }
}
