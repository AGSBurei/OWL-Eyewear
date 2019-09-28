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
            <p> Les lunettes Owl eyewear sont équiper avec des verres améliorer qui améliore vôtre vue de nuit et vous permet de conduire en sécurité et serainement.<br>
            <br>
            De nuit, le trafic routier ne représente que 10% du trafic moyen journalié mais génére plus de  40% d'accidents grâve. <br>
            Ces incidents ont divers cause: fatigue, luminositer réduite, vision brouillée et les éblouissement des phares de voiture. </At>
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
        <h2>Que faison nous pour vous ?</h2>
        <p>Pour éviter ces situations inconfortable, nous avons développer des montures avec des verres amélioré qui compense votre vue réduite.<br>
        Nous vous aidons à retrouver retrouver une meilleurs visibilité lors de la conduite de nuite vous vous sentirez plus en sécurité ainsi que les autres. </p>
    </div>
        <br>
        <br>
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\" id=\"SpecGlass\">
        </div>
            <br>
        <div class=\"labelSepcFR\">
              <img class=\"lblSpecFR\" src= \"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
        </div>
            <br>
        <div class=\"GlassDetailFR\">
            <img class=\"imgGlassDetailEN\" src= \"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/graphique.e6e7b799.png"), "html", null, true);
        echo "\" alt=\"lblGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatTyp\" src= \"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
    <div class=\"picBox\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail1\" src = \"";
        // line 65
        echo "/build/images/caracs1.f346e818.png";
        echo "\" alt=\"imgCoatDetail1\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail2\" src = \"";
        // line 68
        echo "/build/images/caracs2.19245c5e.png";
        echo "\" alt=\"imgCoatDetail2\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail3\" src = \"";
        // line 71
        echo "/build/images/caracs3.7d56b221.png";
        echo "\" alt=\"imgCoatDetail3\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail4\" src = \"";
        // line 74
        echo "/build/images/caracs4.5bf2bb2d.png";
        echo "\" alt=\"imgCoatDetail3\">
            <div>
          </div>
        </div>
    </div>
    </div>
    
        <br>
    <!-- section -->
  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.484e8eb8.png"), "html", null, true);
        echo "\" alt=\"lblSolv\" id=\"resolut\">
        <br>
          <p>Les monture équiper des verres Owl Eyewear peuvent être utilisé dans divers situations. Elles peuvent être utilisé dans tous les types de routes sombres (en ville ou en campagne).<br>
            elles peuvent aussi être utilisée au crépuscule, de nuit, dans le brouillard et dans les tempêtes.<br></p>
          <p>Quand vous portez les lunettes Owl Eyewear, vous rendez la conduite de nuit plus sur pour vous et les autres usagés. Vous serez satisfait par les effets bégnéfique qu'elle vous apporterons.</p>
        
        <img class=\"gifSolv\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
      </div>
      <br>
      <br>
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.1671e564.png"), "html", null, true);
        echo "\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/verres jaunes.cb45cc79.png"), "html", null, true);
        echo "\" alt=\"lblYellowFR\">
      
        <p></p>
          <Riche>Le filtre jaune est une <strong>solution à la baisse de visibilité de nuit</strong>. Le filtre jaune est un abaisseur de longueur d'onde spécialement la lumière bleu<br>
              qui est source d'éblouissement. <strong>Le spectre visible se situe entre 380 et 500 nm.</strong> Riche en énergie, il est le plus filtré dans l'atmosphere que les autres longueurs<br>
            d'onde du spectre visible. <strong>La lumière Bleu</strong> est le principale facteur <strong>d'éblouissement</strong> et donne des <strong>impression de flou.</strong></Riche></p>
          <p>Par concéquent. <strong>les verres jaunes </strong> offre un maximum de protection contre les UV et procure une <strong>meilleurs<br>
              vision des contrastes</strong> et procure un <strong>meilleurs confort visuel de nuit</strong></p>
      <img class=\"pngGraphGlsFR\" src =\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRcourbe.57889c14.png"), "html", null, true);
        echo "\" alt=\"pngGraphGlsFR\">
      <p></p>
      <p></p>
      <p></p>
       <img class=\"lblNightMyopFR\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Myopi noc.54895fea.png"), "html", null, true);
        echo "\" alt=\"lblNightMyopFR\">
      <p></p>
        <p> De nuit <strong>l'accuité visuel diminue</strong>.Nous appelons cela: la myopie naturel de nuit. il s'agit d'un phenomene optique.<br>
          la myopie est un défaut de la vision qui peut être corriger par une correction négarive (lentille divergente). Quand une personne est myope, <strong>la vision lointaine est flou sans possibilté de s'auto compenssation</strong><br>
        De nuit, un conducteur est senssiblement myope; c'est pour cela que <strong>nous avons ajouter une légère corection de -0.25D dans les verres OWL Eyewear</strong> afin de vous apporté une vision <strong>clair propre et confortable.</strong></De>
          <div class= \"picBox2\" >
            <div class=\"row\">
              <div class=\"col-sm\">
                <img class=\"pngSunViewFR\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/net.c81b8bd3.png"), "html", null, true);
        echo "\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>
              </div>
              <div class=\"col-sm\">
                <img class=\"pngNightViewFR\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Flou.77ea1e45.png"), "html", null, true);
        echo "\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit<p>
              </div>
              <div class=\"col-sm\">
                <img class=\"pngNihtViewCorFR\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/corrige.c6f47421.png"), "html", null, true);
        echo "\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
              </div>
              <div class=\"col-sm\">
                <img class=\"opaque\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Opaque.61d5800f.png"), "html", null, true);
        echo "\" alt=\"opaque\">
              </div>
            </div>
          </div>
           <p></p>
      <img class=\"lblPolarFR\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/verres polas.4267f8d5.png"), "html", null, true);
        echo "\" alt=\"lblPolarFR\">
      <p></p>
      <p> Afin d'éviter les réflection lumineuse  provenant des phares des voitures ou venant de la route pouvant causer des <strong>gêne visuel</strong>, nous avons développer les verres OwlEyeWear avec un <strong>revêtement polarizer.</strong></p>
      <p> Ces verres possède un filtre qui <strong>supprimes les réflection parasite.</strong></p>
      <p> lors de l'usinage, des filtre polarizant sont insérer dans les verres, Cette élément stop les réflection lumineuse reflérer sur les surface plate: route, pare brise...</p> <br>
      </div>
      </div>
     
     
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR.c5c9ac1b.png"), "html", null, true);
        echo "\" alt=\"statisticsFR\" id=\"statsup\">
        <p></p>
        <p>La conduite de nuit est <strong>une part de vôtre vie quotidienne</strong> et c'est pour cela que nous croyons que les lunettes de conduites devrait être un outils <strong>indispenssable et accessible</strong> pour tous le monde.</p>
        <!--<img class=\"manCarimg\" src= \"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bf3121dc2309cf78049447bcbda3c149_original.d257a561.jpg"), "html", null, true);
        echo "\"> -->
        <p>Selon une étude conduit en france 42% des conducteur, 89.3% des conducteurs sont perturbé durant la conduite de nuit. De plus, la moitier des accidents se passe de nuit, alors qu’il ne représente que 10% du trafic routier.C'est pourquoi nous avons déployé beaucoup d'efforts pour développer des lunettes offrant confort et sérénité aux conducteurs.</p>  
      <p></p>
      <p></p>
      </div>
      <div class=\"framelst\">
      <img class=\"frame\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR.7549b27e.png"), "html", null, true);
        echo "\" alt=\"lstMonture\" id=\"listMonture\">
      <img class=\"pngspec\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"pngspec\">
        <p></p>
          <img class=\"spec\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carac.f0aa1af4.png"), "html", null, true);
        echo "\" alt=\"spec\">
            <p></p>
      </div>
    </div>
  
   
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
        return array (  316 => 159,  311 => 157,  307 => 156,  298 => 150,  292 => 147,  277 => 135,  269 => 130,  262 => 126,  255 => 122,  248 => 118,  237 => 110,  230 => 106,  219 => 98,  214 => 96,  206 => 91,  197 => 85,  183 => 74,  177 => 71,  171 => 68,  165 => 65,  156 => 59,  147 => 53,  140 => 49,  133 => 45,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
            <p> Les lunettes Owl eyewear sont équiper avec des verres améliorer qui améliore vôtre vue de nuit et vous permet de conduire en sécurité et serainement.<br>
            <br>
            De nuit, le trafic routier ne représente que 10% du trafic moyen journalié mais génére plus de  40% d'accidents grâve. <br>
            Ces incidents ont divers cause: fatigue, luminositer réduite, vision brouillée et les éblouissement des phares de voiture. </At>
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
        <h2>Que faison nous pour vous ?</h2>
        <p>Pour éviter ces situations inconfortable, nous avons développer des montures avec des verres amélioré qui compense votre vue réduite.<br>
        Nous vous aidons à retrouver retrouver une meilleurs visibilité lors de la conduite de nuite vous vous sentirez plus en sécurité ainsi que les autres. </p>
    </div>
        <br>
        <br>
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"{{ asset (\"/build/images/FR.456ebb3d.png\") }}\" alt=\"lblGlassFR\" id=\"SpecGlass\">
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
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatTyp\" src= \"{{ asset (\"/build/images/Details traitements.7474e869.png\") }}\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
    <div class=\"picBox\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail1\" src = \"{{ (\"/build/images/caracs1.f346e818.png\") }}\" alt=\"imgCoatDetail1\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail2\" src = \"{{ (\"/build/images/caracs2.19245c5e.png\") }}\" alt=\"imgCoatDetail2\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail3\" src = \"{{ (\"/build/images/caracs3.7d56b221.png\") }}\" alt=\"imgCoatDetail3\">
            </div>
            <div class=\"col-sm\">
                <img class=\"imgCoatDetail4\" src = \"{{ (\"/build/images/caracs4.5bf2bb2d.png\") }}\" alt=\"imgCoatDetail3\">
            <div>
          </div>
        </div>
    </div>
    </div>
    
        <br>
    <!-- section -->
  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"{{ asset (\"/build/images/FR.484e8eb8.png\") }}\" alt=\"lblSolv\" id=\"resolut\">
        <br>
          <p>Les monture équiper des verres Owl Eyewear peuvent être utilisé dans divers situations. Elles peuvent être utilisé dans tous les types de routes sombres (en ville ou en campagne).<br>
            elles peuvent aussi être utilisée au crépuscule, de nuit, dans le brouillard et dans les tempêtes.<br></p>
          <p>Quand vous portez les lunettes Owl Eyewear, vous rendez la conduite de nuit plus sur pour vous et les autres usagés. Vous serez satisfait par les effets bégnéfique qu'elle vous apporterons.</p>
        
        <img class=\"gifSolv\" src=\"{{ asset (\"/build/images/FIGFINAL.396b4767.gif\") }}\" alt=\"gifSolv\">
      </div>
      <br>
      <br>
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"{{ asset (\"/build/images/FR.1671e564.png\") }}\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"{{ asset (\"/build/images/verres jaunes.cb45cc79.png\") }}\" alt=\"lblYellowFR\">
      
        <p></p>
          <Riche>Le filtre jaune est une <strong>solution à la baisse de visibilité de nuit</strong>. Le filtre jaune est un abaisseur de longueur d'onde spécialement la lumière bleu<br>
              qui est source d'éblouissement. <strong>Le spectre visible se situe entre 380 et 500 nm.</strong> Riche en énergie, il est le plus filtré dans l'atmosphere que les autres longueurs<br>
            d'onde du spectre visible. <strong>La lumière Bleu</strong> est le principale facteur <strong>d'éblouissement</strong> et donne des <strong>impression de flou.</strong></Riche></p>
          <p>Par concéquent. <strong>les verres jaunes </strong> offre un maximum de protection contre les UV et procure une <strong>meilleurs<br>
              vision des contrastes</strong> et procure un <strong>meilleurs confort visuel de nuit</strong></p>
      <img class=\"pngGraphGlsFR\" src =\"{{ asset(\"build/images/FRcourbe.57889c14.png\") }}\" alt=\"pngGraphGlsFR\">
      <p></p>
      <p></p>
      <p></p>
       <img class=\"lblNightMyopFR\" src=\"{{ asset(\"build/images/Myopi noc.54895fea.png\") }}\" alt=\"lblNightMyopFR\">
      <p></p>
        <p> De nuit <strong>l'accuité visuel diminue</strong>.Nous appelons cela: la myopie naturel de nuit. il s'agit d'un phenomene optique.<br>
          la myopie est un défaut de la vision qui peut être corriger par une correction négarive (lentille divergente). Quand une personne est myope, <strong>la vision lointaine est flou sans possibilté de s'auto compenssation</strong><br>
        De nuit, un conducteur est senssiblement myope; c'est pour cela que <strong>nous avons ajouter une légère corection de -0.25D dans les verres OWL Eyewear</strong> afin de vous apporté une vision <strong>clair propre et confortable.</strong></De>
          <div class= \"picBox2\" >
            <div class=\"row\">
              <div class=\"col-sm\">
                <img class=\"pngSunViewFR\" src=\"{{ asset(\"build/images/net.c81b8bd3.png\") }}\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>
              </div>
              <div class=\"col-sm\">
                <img class=\"pngNightViewFR\" src=\"{{ asset(\"build/images/Flou.77ea1e45.png\") }}\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit<p>
              </div>
              <div class=\"col-sm\">
                <img class=\"pngNihtViewCorFR\" src=\"{{ asset(\"build/images/corrige.c6f47421.png\") }}\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
              </div>
              <div class=\"col-sm\">
                <img class=\"opaque\" src=\"{{ asset(\"build/images/Opaque.61d5800f.png\") }}\" alt=\"opaque\">
              </div>
            </div>
          </div>
           <p></p>
      <img class=\"lblPolarFR\" src=\"{{ asset(\"build/images/verres polas.4267f8d5.png\") }}\" alt=\"lblPolarFR\">
      <p></p>
      <p> Afin d'éviter les réflection lumineuse  provenant des phares des voitures ou venant de la route pouvant causer des <strong>gêne visuel</strong>, nous avons développer les verres OwlEyeWear avec un <strong>revêtement polarizer.</strong></p>
      <p> Ces verres possède un filtre qui <strong>supprimes les réflection parasite.</strong></p>
      <p> lors de l'usinage, des filtre polarizant sont insérer dans les verres, Cette élément stop les réflection lumineuse reflérer sur les surface plate: route, pare brise...</p> <br>
      </div>
      </div>
     
     
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"{{ asset('build/images/FR.c5c9ac1b.png') }}\" alt=\"statisticsFR\" id=\"statsup\">
        <p></p>
        <p>La conduite de nuit est <strong>une part de vôtre vie quotidienne</strong> et c'est pour cela que nous croyons que les lunettes de conduites devrait être un outils <strong>indispenssable et accessible</strong> pour tous le monde.</p>
        <!--<img class=\"manCarimg\" src= \"{{ asset('build/images/bf3121dc2309cf78049447bcbda3c149_original.d257a561.jpg') }}\"> -->
        <p>Selon une étude conduit en france 42% des conducteur, 89.3% des conducteurs sont perturbé durant la conduite de nuit. De plus, la moitier des accidents se passe de nuit, alors qu’il ne représente que 10% du trafic routier.C'est pourquoi nous avons déployé beaucoup d'efforts pour développer des lunettes offrant confort et sérénité aux conducteurs.</p>  
      <p></p>
      <p></p>
      </div>
      <div class=\"framelst\">
      <img class=\"frame\" src=\"{{ asset('build/images/FR.7549b27e.png') }}\" alt=\"lstMonture\" id=\"listMonture\">
      <img class=\"pngspec\" src=\"{{ asset('build/images/Carac monture.e5411406.png') }}\" alt=\"pngspec\">
        <p></p>
          <img class=\"spec\" src=\"{{ asset('build/images/carac.f0aa1af4.png') }}\" alt=\"spec\">
            <p></p>
      </div>
    </div>
  
   
{% endblock %}
", "main/home.html.twig", "/home/burei/Documents/OWL-Eyewear/templates/main/home.html.twig");
    }
}
