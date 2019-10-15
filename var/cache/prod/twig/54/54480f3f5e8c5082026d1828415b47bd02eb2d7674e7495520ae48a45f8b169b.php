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
class __TwigTemplate_35f7e276187bf6e5811c1bcf45e310857692e77871b3a1911ab04e93712c533a extends \Twig\Template
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
        <meta name=\"description\" content=\"Site vitrine\">
        <meta name=\"keywords\" content=\"Lunette, nuit, correction, voiture, Owl Eyewear\">
        <meta name=\"author\" content=\"Zachari BLINN & Rommanirs Mer\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.1, shrink-to-fit=no\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/favicon.5ee79b31.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
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

    <nav class=\"navbar navbar-expand-lg navbar-custom\">
        <a class=\"navbar-brand\" href=\"#\"><a href=\"/\"><img class=\"logo\"src=\"";
        // line 17
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
                <class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#equipe\">EQUIPE</a>
                </class=\"nav-item\">
                </ul>
            </div>
        </nav>
        <div class=\"container\">
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        </div>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
    
    <footer>
        
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-149618743-1%22%3E\"</script>
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
        echo "OWL EyeWear";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 62
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
        return array (  164 => 62,  158 => 60,  149 => 12,  142 => 11,  124 => 63,  122 => 62,  119 => 61,  117 => 60,  71 => 17,  65 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\rmer1\\Desktop\\pull\\OWL-Eyewear\\templates\\base.html.twig");
    }
}
