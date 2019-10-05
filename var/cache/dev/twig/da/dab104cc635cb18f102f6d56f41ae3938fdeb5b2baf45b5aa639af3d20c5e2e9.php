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
class __TwigTemplate_883ff9e6e6ff6731d9ceb849aad2fbdb0f8184aabdb5a8630566949de43c8766 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OWL EyeWear";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  203 => 61,  185 => 59,  164 => 9,  145 => 8,  129 => 62,  127 => 61,  124 => 60,  122 => 59,  76 => 16,  68 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width-device-width, initial-scale=1, shrink-to-fit=no\">
                <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/build/images/favicon.5ee79b31.ico') }}\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/build/images/favicon.5ee79b31.ico') }}\"/>
        <title>{% block title %}OWL EyeWear{% endblock %}</title>
        {% block stylesheets %}{{ encore_entry_link_tags('app') }} {{ encore_entry_link_tags('basesStyle') }}{% endblock %}
    </head>
    <body>
    <div class =\"band\">

    </div>
    <nav class=\"navbar navbar-expand-lg navbar-custom\">
        <a class=\"navbar-brand\" href=\"#\"><a href=\"/\"><img class=\"logo\"src=\"{{ asset('/build/images/Fichier_4.8f8cdf3f.svg') }}\"></a></a>
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
        {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{{ encore_entry_script_tags('app') }}{% endblock %}
    </body>
    
    <footer>
        I'm a footer
    </footer>
</html>
", "base.html.twig", "/home/burei/Documents/OWL-Eyewear/templates/base.html.twig");
    }
}
