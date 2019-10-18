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

/* @EasyAdmin/default/field_country.html.twig */
class __TwigTemplate_58146964acdb3053db8acc3826d440f67f478bb20d16f15a4141ee0f36046088 extends \Twig\Template
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
        if (((((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", true, true, false, 1) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", false, false, false, 1)))) ? (twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_flag", [], "any", false, false, false, 1)) : (true)) &&  !(null === ($context["country_name"] ?? null)))) {
            // line 2
            echo "    <img class=\"country-flag\" alt=\"";
            echo twig_escape_filter($this->env, ($context["country_name"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/images/flags/" . ($context["value"] ?? null)) . ".png")), "html", null, true);
            echo "\">
";
        }
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "with_name", [], "any", false, false, false, 4)) : (true))) {
            // line 5
            echo "    ";
            ((((isset($context["country_name"]) || array_key_exists("country_name", $context)) &&  !(null === ($context["country_name"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["country_name"] ?? null), "html", null, true))) : (print ("")));
            echo "
";
        }
        // line 7
        if ((null === ($context["country_name"] ?? null))) {
            // line 8
            echo "    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "templates", [], "any", false, false, false, 8), "label_null", [], "any", false, false, false, 8));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  55 => 7,  49 => 5,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_country.html.twig", "E:\\wamp64\\www\\owleyewear\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\field_country.html.twig");
    }
}
