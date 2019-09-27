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

/* main/home.html.twig */
class __TwigTemplate_ca378b7b5589f23c4c12d65d0d1eac6fdc42ec50292ac4b984c6dcc313d8c32d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homeStyle");
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <body>
    <div class=\"bg-image\"> 
      <div class=\" txt-presentation\">
        <h1>Owl Eyewear | Improve Your Night Vision</h1>
        <p>Owl eyewear are equipped with advanced lenses that improve your night vision and allow you to drive serenely and easily.<br>
        <br>
        At night, road traffic accounts for only 10% of daily traffic but generates 40% of serious or fatal accidents. <br>
        Several causes: fatigue, lower brightness, blurred vision and the dazzle of car headlights. </At>
        </div>
     </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class=\"txt\">
  <h2>Que faison nous pour vous ? ?</h2>
  <p>Pour éviter ces inconfortables, nous avons développer des montures avec des verres amélioré qui compense votre vue réduite.<br>
     Nous vous aidons à retrouver retrouver une meilleurs visibilité lors de la conduite de nuite vous vous sentirez plus en sécurité ainsi que les autres. </p>
  </div>
  <br>
 <div class=\"glass\">
    <div class=\"labelFR\">
      <img class=\"lblFR\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\">
    </div>
    <br>
    <div class=\"labelSepcFR\">
      <img class=\"lblSpecFR\" src= \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
    </div>
    <br>
    <div class=\"GlassDetailFR\">
      <img class=\"imgGlassDetailEN\" src= \"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/graphique.e6e7b799.png"), "html", null, true);
        echo "\" alt=\"lblGlassDetailFR\">
    </div>

  </div>
  <div class=\"coat\">
    <div class=\"labelCoatType\">
      <img class =\"lblCoatTyp\" src= \"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
    </div>
    <br>
    <div class=\"picBox\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"";
        // line 64
        echo "/build/images/caracs1.f346e818.png";
        echo "\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"";
        // line 67
        echo "/build/images/caracs2.19245c5e.png";
        echo "\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"";
        // line 70
        echo "/build/images/caracs3.7d56b221.png";
        echo "\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"";
        // line 73
        echo "/build/images/caracs4.5bf2bb2d.png";
        echo "\">
        <div
      </div>
    </div>
    
  </div>
  <div class=\"solution\">
    <img class=\"lblsolut\" src = \"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/EN.4e5518d2.png"), "html", null, true);
        echo "\" alt=\"lblSolv\"><p></p>
      <p>The Owl Eyewear can be worn in different situations. 
        You can use them on any dark roads (in city or countryside).<br>
        They can be worn at dusk, at night, in fog and during heavy showers.<br></p>
      <p>When you wearing Owl Eyewear, you make night driving safer for others and for yourself. <br>
        You will be delighted by the assets and the change they bring.</p>
    <img class=\"gifSolv\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
  </div>
  <!--
    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/dummy2.ba38f527.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"dummy\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/dummy2.ba38f527.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"dummy2\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/dummy2.ba38f527.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"dummy3\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
    -->
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 98,  216 => 95,  210 => 92,  201 => 86,  192 => 80,  182 => 73,  176 => 70,  170 => 67,  164 => 64,  155 => 58,  146 => 52,  139 => 48,  132 => 44,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
<link rel=\"stylesheet\" href=\"{{ encore_entry_link_tags('homeStyle') }}\">
{% endblock %}
{% block body %}
  <body>
    <div class=\"bg-image\"> 
      <div class=\" txt-presentation\">
        <h1>Owl Eyewear | Improve Your Night Vision</h1>
        <p>Owl eyewear are equipped with advanced lenses that improve your night vision and allow you to drive serenely and easily.<br>
        <br>
        At night, road traffic accounts for only 10% of daily traffic but generates 40% of serious or fatal accidents. <br>
        Several causes: fatigue, lower brightness, blurred vision and the dazzle of car headlights. </At>
        </div>
     </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class=\"txt\">
  <h2>Que faison nous pour vous ? ?</h2>
  <p>Pour éviter ces inconfortables, nous avons développer des montures avec des verres amélioré qui compense votre vue réduite.<br>
     Nous vous aidons à retrouver retrouver une meilleurs visibilité lors de la conduite de nuite vous vous sentirez plus en sécurité ainsi que les autres. </p>
  </div>
  <br>
 <div class=\"glass\">
    <div class=\"labelFR\">
      <img class=\"lblFR\" src=\"{{ asset (\"/build/images/FR.456ebb3d.png\") }}\" alt=\"lblGlassFR\">
    </div>
    <br>
    <div class=\"labelSepcFR\">
      <img class=\"lblSpecFR\" src= \"{{ asset (\"/build/images/Carac monture.e5411406.png\") }}\" alt=\"lblSpecFR\">
    </div>
    <br>
    <div class=\"GlassDetailFR\">
      <img class=\"imgGlassDetailEN\" src= \"{{ asset (\"/build/images/graphique.e6e7b799.png\") }}\" alt=\"lblGlassDetailFR\">
    </div>

  </div>
  <div class=\"coat\">
    <div class=\"labelCoatType\">
      <img class =\"lblCoatTyp\" src= \"{{ asset (\"/build/images/Details traitements.7474e869.png\") }}\" alt=\"lblCoatTypeFR\"> 
    </div>
    <br>
    <div class=\"picBox\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"{{ (\"/build/images/caracs1.f346e818.png\") }}\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"{{ (\"/build/images/caracs2.19245c5e.png\") }}\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"{{ (\"/build/images/caracs3.7d56b221.png\") }}\">
        </div>
        <div class=\"col-sm\">
          <img class=\"imgCoatDetail1\" src = \"{{ (\"/build/images/caracs4.5bf2bb2d.png\") }}\">
        <div
      </div>
    </div>
    
  </div>
  <div class=\"solution\">
    <img class=\"lblsolut\" src = \"{{ asset (\"/build/images/EN.4e5518d2.png\") }}\" alt=\"lblSolv\"><p></p>
      <p>The Owl Eyewear can be worn in different situations. 
        You can use them on any dark roads (in city or countryside).<br>
        They can be worn at dusk, at night, in fog and during heavy showers.<br></p>
      <p>When you wearing Owl Eyewear, you make night driving safer for others and for yourself. <br>
        You will be delighted by the assets and the change they bring.</p>
    <img class=\"gifSolv\" src=\"{{ asset (\"/build/images/FIGFINAL.396b4767.gif\") }}\" alt=\"gifSolv\">
  </div>
  <!--
    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"{{ asset('/build/images/dummy2.ba38f527.png') }}\" class=\"d-block w-100\" alt=\"dummy\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{ asset('/build/images/dummy2.ba38f527.png') }}\" class=\"d-block w-100\" alt=\"dummy2\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{ asset('/build/images/dummy2.ba38f527.png') }}\" class=\"d-block w-100\" alt=\"dummy3\">
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
    -->
   
{% endblock %}
", "main/home.html.twig", "/home/burei/Documents/OWL-Eyewear/templates/main/home.html.twig");
    }
}
