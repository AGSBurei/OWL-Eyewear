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
class __TwigTemplate_858ba50da3b2511899cc97914a1bfed7f2c1273336eabfb9b385fbed02a8d5c3 extends \Twig\Template
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
        // line 1
        echo "<h1>Inscription à la newsletter</h1>

<p>Merci de votre souscription à la newsletter de OWL Eyeswear</p>

<p>Si vous n'êtes pas à l'origine de cette souscription, merci d'ignorer ce mail</p>

<h2>Confirmer votre souscription</h2>

<p>Pour confirmer votre souscription à la newsletter de OWL Eyeswear, rendez vous sur ce lien : <a href=\"#\">lien</a></p>";
    }

    public function getTemplateName()
    {
        return "email/newsletter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "email/newsletter.html.twig", "C:\\Users\\rmer1\\Desktop\\pull\\OWL-Eyewear\\templates\\email\\newsletter.html.twig");
    }
}
