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

/* admin.twig */
class __TwigTemplate_08e38415c20b254f27514a65bbc0b6e835203430ed7d8457f95827acaeca722b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.twig"));

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
        <div class=\"mainbar\">
            <nav class=\"navbar fixed-top navbar-expand-xl flex-md-nowrap p-0 navbar-custom\">        
                <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\"src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Fichier_4.8f8cdf3f.svg"), "html", null, true);
        echo "\"></a></a>
                <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"disabled\" >PANNEAU D'ADMINISTRATION</a>
                        </li>
                </ul>
            </nav>
        </div>
        <div class=\"barside\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
                        <div class=\"sidebar-sticky\">
                                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                                    <span>Sous-menu</span>
                                </h6>
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            accueil
                                        </a>
                                    </li>
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            item 2
                                        </a>
                                    </li>
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            item 3
                                        </a>
                                    </li>
                                </ul>
                                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                                    <span>Accès  rapide</span>
                                </h6>
                                   <ul class=\"nav flex-column\">
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 1
                                            </a>
                                        </li>
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 2
                                            </a>
                                        </li>
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 3
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </nav>
                    <div>
                </div>
            </div>
        ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        </div>
        ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OWL Eyewear - Admin pannel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminbar");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
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

    // line 85
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
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 85,  202 => 83,  181 => 11,  162 => 10,  150 => 86,  148 => 85,  145 => 84,  143 => 83,  82 => 25,  67 => 12,  65 => 11,  61 => 10,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"vitrine Lunette OwlEyewear\">
        <meta name=\"keywords\" content=\"Lunette, nuit, correction, voiture, Owl Eyewear\">
        <meta name=\"author\" content=\"Zachari BLINN et Rommanirs Mer\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.1, shrink-to-fit=no\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/build/images/favicon.5ee79b31.ico') }}\"/>
        <title>{% block title %}OWL Eyewear - Admin pannel{% endblock %}</title>
        {% block stylesheets %}{{ encore_entry_link_tags('app') }} {{ encore_entry_link_tags('adminbar') }}{% endblock %}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-151174461-1%22%3E\"</script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-151174461-1');
        </script>
    </head>
    <body>
        <div class=\"mainbar\">
            <nav class=\"navbar fixed-top navbar-expand-xl flex-md-nowrap p-0 navbar-custom\">        
                <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\"src=\"{{ asset('/build/images/Fichier_4.8f8cdf3f.svg') }}\"></a></a>
                <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"disabled\" >PANNEAU D'ADMINISTRATION</a>
                        </li>
                </ul>
            </nav>
        </div>
        <div class=\"barside\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
                        <div class=\"sidebar-sticky\">
                                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                                    <span>Sous-menu</span>
                                </h6>
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            accueil
                                        </a>
                                    </li>
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            item 2
                                        </a>
                                    </li>
                                    <li class=\"nav-item\"> 
                                        <a class=\"nav-link\" href=\"#\">
                                            item 3
                                        </a>
                                    </li>
                                </ul>
                                <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                                    <span>Accès  rapide</span>
                                </h6>
                                   <ul class=\"nav flex-column\">
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 1
                                            </a>
                                        </li>
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 2
                                            </a>
                                        </li>
                                        <li class=\"nav-item\"> 
                                            <a class=\"nav-link\" href=\"#\">
                                                item 3
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </nav>
                    <div>
                </div>
            </div>
        {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{{ encore_entry_script_tags('app') }}{% endblock %}
    </body>
</html>
", "admin.twig", "C:\\wamp64\\www\\OWL-Eyewear\\templates\\admin.twig");
    }
}
