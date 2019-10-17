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

/* email/newsletter.html.twig */
class __TwigTemplate_91a63a2529b97ed4bbfae699c1bfe4b46e047ae15d370ae9152ef60d1c80b34c extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/newsletter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/newsletter.html.twig"));

        // line 1
        echo "<h1>Inscription à la newsletter</h1>

<p>Merci de votre souscription à la newsletter de OWL Eyeswear</p>

<p>Si vous n'êtes pas à l'origine de cette souscription, merci d'ignorer ce mail</p>

<h2>Confirmer votre souscription</h2>

<p>Pour confirmer votre souscription à la newsletter de OWL Eyeswear, rendez vous sur ce lien : <a href=\"#\">lien</a></p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/newsletter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Inscription à la newsletter</h1>

<p>Merci de votre souscription à la newsletter de OWL Eyeswear</p>

<p>Si vous n'êtes pas à l'origine de cette souscription, merci d'ignorer ce mail</p>

<h2>Confirmer votre souscription</h2>

<p>Pour confirmer votre souscription à la newsletter de OWL Eyeswear, rendez vous sur ce lien : <a href=\"#\">lien</a></p>", "email/newsletter.html.twig", "E:\\wamp64\\www\\owleyewear\\templates\\email\\newsletter.html.twig");
    }
}
