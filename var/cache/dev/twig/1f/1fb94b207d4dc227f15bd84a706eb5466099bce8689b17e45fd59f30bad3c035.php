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
class __TwigTemplate_3160db658461d1ce1ce00584fb368a0e94a3d6f1ca9383281279d4a52d7b5cbe extends \Twig\Template
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
        echo "
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
              <h1>Owl Eyewear - Améliorez votre vision la nuit.</h1>
              <p></p>
              <p><mark><strong>LES LUNETTES OWL EYEWEAR SONT CONÇUES AVEC DES VERRES HAUT DE GAMME PERFORMANTS PERMETTANT D’AMÉLIORER VOTRE VISION LA NUIT ET AINSI DE CONDUIRE PLUS SEREINEMENT ET AISÉMENT.</strong></mark></p>
              <p><mark>Vous voici sur la version française de notre campagne de lunettes pour la conduite nocturne. La vente du produit s’effectue UNIQUEMENT sur KICKSTARTER, un site de financement
               participatif international permettant aux jeunes entrepreneurs de développer plus facilement leur projet. La façon de participer est assez simple et expliquée dans l’onglet « PARTICIPER ».
                Nous vous laissons prendre connaissance du produit que nous avons développé en espérant qu’il puisse vous satisfaire. Nous sommes très fiers de pouvoir aujourd’hui vous proposer le proposer.</mark></p>
          </div>
            <a href=\"#participer\"><img class=\"kickstarter\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/participer.72f3bd98.png"), "html", null, true);
        echo "\" alt=\"imgParticiper\"></a>
        </div>
      <br>
   

      <br>
      <br>
    <div class=\"txt\">

    <img class=\"logoOwl\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/OWL_logo.5da53e41.png"), "html", null, true);
        echo "\" alt=\"logoOwlEyeWear\">
  <p></p>
  
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mEHTSKNrzC8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

        <img class=\"lblwhyowleyewear\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Pourquoi_Owl_eyewear.46a32322.png"), "html", null, true);
        echo "\" alt=\"lblWhyOwlEyeWear\">
        <p></p>
        <p></p> 
        <div class=\"txtintro\">
        <p>La nuit, le trafic routier ne représente que <strong>10% du trafic journalier</strong> mais <strong>génère 40% des accidents graves ou mortels.</strong> Plusieurs raisons sont en cause : <strong>la fatigue, la faible luminosité, une vision trouble, l’éblouissement dû aux phares</strong>, etc…</p>
        <p>La vision est moins précise car <strong>les yeux ont besoin de temps pour s’adapter aux variations de luminosité et pour percevoir les reliefs et les distances.</strong></p>
        <p>Pour éliminer les inconforts visuels lors de la conduite de nuit, nous avons développé des lunettes ayant des <strong>verres évolués</strong> qui permettent <strong>d’améliorer grandement le confort visuel.</strong></p>
        <p>Grâce à celles-ci, vous aurez plus de facilité pour vous déplacer la nuit ou lors de vos déplacements dans des conditions de faible luminosité. <strong>Vous rendrez également les routes plus sûres !</strong></p>
        </div>

        
    </div>
        <br>
        <img class=\"objectifbanner\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/objectif_banner.bc8435ed.png"), "html", null, true);
        echo "\" alt=\"imgObjectifBanner\">   
        <br>
      <p></p>
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\" id=\"SpecGlass\">
        </div>
            <br>
        <div class=\"labelSepcFR\">
              <img class=\"lblSpecFR\" src= \"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
        </div>
            <br>
        <div class=\"GlassDetailFR\">
            <img class=\"imgGlassDetailEN\" src= \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Lunettes araignée.632bfb25.png"), "html", null, true);
        echo "\" alt=\"imgGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatType\" src= \"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
        
        <img class=\"coatdetail\" src =\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Détails des traitements.ee731cde.png"), "html", null, true);
        echo "\" alt=\"coatdetail\">
    </img>
    
        <br>
    </div>

  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR3.484e8eb8.png"), "html", null, true);
        echo "\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/quand_les_porter.0935229d.png"), "html", null, true);
        echo "\" alt=\"label quand les porte\">
        <p></p>
          <p>Les lunettes Owl Eyewear peuvent être utilisées <strong>dans toutes situations durant lesquelles la luminosité est faible </strong>
          (en ville ou à la campagne). Elles peuvent être portées au crépuscule, la nuit, dans le brouillard et pendant de fortes averses.</p>

            <p>Lorsque vous portez les lunettes, vous rendez les routes plus sûres, pour vous ainsi que pour les autres. 
            Vous serez ravis du <strong>gain de confort</strong> que vous apportera Owl Eyewear !</p>
        <p></p>
        
        <img class=\"gifSolv\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <p></p>
        <img class =\"genbenef\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gene_et_benef.09e95592.png"), "html", null, true);
        echo "\" alt=\"lblgenbenef\">
        <p></p>
        <img class =\"imgtableau\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/recap.61746e12.png"), "html", null, true);
        echo "\" alt=\"tableau\">
        <p></p>
        <img class=\"lblWhoisConcern\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/personnes_concernees.b22c5392.png"), "html", null, true);
        echo "\" alt=\"label personne concerné\">
        <p></p>
        <p>Owl Eyewear peut être utile pour toutes les personnes <strong>ressentant des gênes</strong> ou voulant <strong>un meilleur confort visuel la nuit.</strong></p>
        <img class=\"imgConcerner\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Pour_Qui.10560b30.png"), "html", null, true);
        echo "\" alt=\"pour qui\">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées par <strong>les conducteurs de voiture, de moto, de bus, de camion, à vélo et même en trottinette électrique</strong>.</p>
      </div>
      <br>    
    
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR4.c5c9ac1b.png"), "html", null, true);
        echo "\" alt=\"statisticsFR\" id=\"statsup\">
        <p> Conduire dans de <strong>faibles conditions lumineuses</strong> fait partie de notre <strong>vie de tous les jours</strong> et c’est pour cela que nous espérons que ces lunettes deviendront un accessoire indispensable et disponible à tous !</p> 
        <p>D’après une étude réalisée en France, <strong>42% des automobilistes conduisent la nuit</strong> au moins<br>  une 
           fois par semaine et <strong>89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.</strong><br>
           De plus, <strong>la moitié des accidents mortels surviennent la nuit</strong> alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investi beaucoup d’efforts pour développer <strong>des lunettes offrant confort, précision visuelle et sérénité aux conducteurs.</strong></p>
      <p></p>
      <p></p>
      </div>
      

    
      <div class=\"framelst\">
          <img class=\"frame\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR5.7549b27e.png"), "html", null, true);
        echo "\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carac.ca818c99.png"), "html", null, true);
        echo "\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe <strong>8 modèles de lunettes</strong>, disponibles <strong>uniquement sur Kickstarter</strong>.</p> 
          <p></p>
          <p></p>
          <div>
          <p><strong>Différentes couleurs</strong> pour les modèles plastiques ainsi que <strong>différentes formes</strong> vous sont proposées, vous permettant de choisir le modèle qui vous convient le mieux.<br></p>
            
          <img class=\"pngLblframe\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/finfr.6b7f7df8.gif"), "html", null, true);
        echo "\" alt=\"giflunetteportee\">
          <p>Nous n’avons pas choisi de proposer des lunettes adaptables à la vue, nous avons opté pour des sur-lunettes. <strong>Le confort visuel est identique, le prix est moins cher et les utilisateurs </strong>peuvent continuer à les utiliser si leurs corrections changent.</p>
          <p>Les sur-lunettes peuvent être portées par-dessus tout type de lunettes correctrices: avec des verres de vision de loin, des verres progressifs ou verres bifocaux. Elles sont conçues pour s'adapter à vos lunettes correctrices. </p>

          <p><strong>D’autres modèles</strong> seront disponibles <strong>si les objectifs de campagne sont atteints</strong><br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle débloqué.</p>
          </div>

          <div class=\"picbox\">
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Ronde_Ecaille.0414298f.png"), "html", null, true);
        echo "\" alt=\"imgFrame1\">
          <p></p>
          <p>Ronde Ecaille</p>
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/27a16970da1f818ea2419f93a8a16be4_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame2\">
          <p>Ronde noir mat</p>
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png"), "html", null, true);
        echo "\" alt=\"imgFrame3\">
          <p>Rectangle brun brillant</p>
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png"), "html", null, true);
        echo "\" alt=\"imgFrame4\">
          <p>Rectangle noir mat</p>
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png"), "html", null, true);
        echo "\" alt=\"imgFrame5\">
          <p>sur-lunette</p>
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/5782e86838a62dd05d3348f28b44c4a2_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame6\">
          <p>Combinée ecaille</p>
          </div>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame7\">
          <p>Ronde noir métal</p>
          </div>
          <p></p>
          <div class=\"img8\">
          <img class=\"imgframe8\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame8\">
          </div>
          <p></p>
          <div class=\"img9\">
          <img class=\"imgframe9\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame9\">
          </div>
          <p></p>
          <div class=\"img10\">
          <img class=\"imgFrame10\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame10\">
          </div>
          <p></p>
          <div class=\"img11\">
          <img class=\"imgFrame11\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6f774fecf7de574748fb0bb69072090f_original.9dc1edab.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame11\">   
          </div>
          </div>
          <p></p>
          </div>
          <p></p>
          <p></p>
          <div class=\"choix\">
          <img class=\"banChoix\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR6.bfb517ea.png"), "html", null, true);
        echo "\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/choix_taille.c505f783.png"), "html", null, true);
        echo "\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 

          </div>
              <p></p>
  
        
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR7.64d4c2e0.png"), "html", null, true);
        echo "\" alt=\"banniere reception\">
            <p></p>
            <p>La paire de lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre en valeur notre produit avec 
                un <strong>packaging</strong> dans le thème de notre produit : <strong>l’obscurité</strong>.</p>
                <p><img class=\"imgPack\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/PackFR.e1fd8347.png"), "html", null, true);
        echo "\" alt=\"image pack\"></p>
                
            <p>Dans le but de <strong>les protéger</strong>, vous recevrez également un <strong>étui souple</strong>. Grâce à celui-ci, vos verres seront conservés et vous garderez
             <strong>un bon confort visuel</strong> dans le temps. Vous pourrez aussi les <strong>ranger facilement</strong> dans la portière de votre voiture ou dans votre boîte à gants <strong>sans risques</strong>.
              Une <strong>micro-fibre</strong> sera également fournie pour nettoyer vos lunettes.</p>

               <img class=\"gifcar\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gifcar.a7470e31.gif"), "html", null, true);
        echo "\" alt=\"gifcar\">
               <p></p>
            <p>Pour finir, nous vous offrons <strong>2 stickers</strong> Owl Eyewear à coller ou vous souhaitez !</p>
            <p></p>
            
            <p></p>
            </div>

            <div class=\"fabrication\">
            <img class=\"banHowMake\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/process.5f63f1a7.png"), "html", null, true);
        echo "\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
                  <p>Nous assemblerons l’ensemble des lunettes dans <strong>notre atelier en France.</strong> Les verres<br>
               seront taillés, montés; les montures seront <strong>ajustées, nettoyées</strong>, <strong>minutieusement emballées</strong><br>
               par des <strong>opticiens diplômés.</strong></p>
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/veLOW5-W6Mk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            <p></p>
      
            <p></p>
            <p></p>
           
            </div>
       <div class=\"infoAdit\">    
          <img class=\"lblInfoSupFR\" src = \"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR2.1671e564.png"), "html", null, true);
        echo "\" alt=\"lblInfoSupFR\" id=\"precision\">
          <p></p>
          <img class=\"lblOrigine\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Origines_verres.png"), "html", null, true);
        echo "\" alt =\"labelorigin\">
          <p></p>
          <img class=\"imgOrigine\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRFR.839f1199.jpg"), "html", null, true);
        echo "\" alt=\"imageg Origine\">
          <p></p>
          <img class=\"lblYellowFR\" src = \"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/verres jaunes.cb45cc79.png"), "html", null, true);
        echo "\" alt=\"lblYellowFR\">
    
          <p></p>
          <p>La teinte jaune (catégorie 0) est <strong>la solution</strong> contre les gênes visuelles dans des <strong>conditions <br> de conduite difficiles.</strong></p>
          <p>Le filtre jaune permet de filtrer les courtes longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. <strong>Les longueurs d’onde concernées</strong> sont <strong>entre 350 et 500nm.</strong></p>

          <p>Riches en énergie, elles sont plus diffusées dans l’atmosphère que les autres du spectre visible. <strong><br>
          La lumière bleue</strong> est le <strong>facteur principal</strong> de <strong>l’éblouissement</strong> et donne une <strong>impression de<br> vision floue.</strong></p>

          <p>Par conséquent, <strong>les verres jaunes</strong> offrent une protection maximale <strong>contre l’éblouissement</strong> et <strong>améliorent la perception des contrastes</strong> et offre ainsi <strong>un meilleur confort.</strong></strong></p>
        <div class=\"graph\">
      <img class=\"pngGraphGlsFR\" src =\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRcourbe.57889c14.png"), "html", null, true);
        echo "\" alt=\"pngGraphGlsFR\">
        <div class=\"legendeGraph\">
      <p>Courbe de transmission d'un verre ordinaire contre un verre Owl Eyewear</p>
      </div>
      
<div class =\"myopienuit\">
       <img class=\"lblNightMyopFR\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Myopi noc.54895fea.png"), "html", null, true);
        echo "\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, <strong>l’acuité visuelle diminue.</strong> C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un <strong>phénomène optique naturel</strong>.</p>

           <p>La myopie est un défaut visuel corrigé par des verres négatifs divergents. Quand une personne <br> 
            est myope, <strong>sa vision de loin est trouble</strong>, sans possibilité de compenser  soit même ce défaut. </p>

        <p>La nuit, les conducteurs sont <strong>légèrement myopisés</strong>, c’est pourquoi nous avons conçu ces verres afin qu'ils puissent compenser ce défaut
         pour toutes les personnes portant des lunettes ou non afin de vous apporter une <strong>vision parfaitement nette et confortable</strong>.</p>

         
          <div class= \"pngViewFR\">
                <img class=\"pngSunViewFR\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/net.c81b8bd3.png"), "html", null, true);
        echo "\" alt=\"pngSunViewFR\">
                <p>Vision pendant la journée = claire et confortable.</p>

                <img class=\"pngNightViewFR\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Flou.77ea1e45.png"), "html", null, true);
        echo "\" alt=\"pngNightViewFR\">
                <p>Œil devenu myope en raison de la faible luminosité = Vision floue.</p>

                <img class=\"pngNihtViewCorFR\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/corrige.c6f47421.png"), "html", null, true);
        echo "\" alt=\"pngNihtViewCorFR\">
                <p>Œil compensé par un verre Owl Eyewear = Vision claire et confortable.</p>
                <p></p>
                <img class=\"pngAdaptationFR\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Adapatation.448958e1.png"), "html", null, true);
        echo "\" alt=\"imageAdaptation\">
                <p></p>
                <div class=\"text\"><p>L'adaptation aux lunettes OWL Eyewear est <strong>immédiate</strong>. Les verres jaunes, la compensation de la myopie nocturne et les traitements <strong>augmentent le confort visuel et la perception</strong>, mais 
                n'induisent en aucun cas une détérioration ou des troubles de la vision. L’adaptation est immédiate car nous sélectionnons avec soin des verres de <strong>haute qualité</strong> pour répondre aux attentes des conducteurs.</p>
     </div>
      </div>
           <p></p>
           <p></p>
      <p></p>
      </div>

        
      </div>
        <p></p>
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Avis_des_testeurs.2a67f876.png"), "html", null, true);
        echo "\" alt=\"bannière testeur\">
        <p></p>
        <p>Nous avons testé nos produits sur différents profils de conducteurs, voici quelques retours :</p>
        <img class=\"imgavis\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/AvisFR.ab4855c3.png"), "html", null, true);
        echo "\" alt=\"avis\">
        <p></p>
        <p></p>
        </div>
        
        <div class=\"objectif\">
       
          <img class=\"banbanObjectnO\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR9.02bfd0dc.png"), "html", null, true);
        echo "\" alt=\"objectif\" id=\"objectif\">
          <p></p>
           <p>Notre objectif minimal de financement est de 10 000€. Si cette somme n'est pas atteinte, notre projet ne pourra malheureusement pas débuté. Vos contributions ne vous seront donc pas facturées. Si cet objectif est atteint, les modèles présentés ci-dessous seront débloqués à partir de différents seuils (25 000€, 50 000€, 75 000€).</p>
          <img class=\"imgObject\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Objectifs.1ecbce6e.png"), "html", null, true);
        echo "\" alt =\"image objectif\">
        </div>
        
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR10.1cd7fac0.png"), "html", null, true);
        echo "\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Timeline FR.8cad95d2.png"), "html", null, true);
        echo "\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR11.d4b54aa5.png"), "html", null, true);
        echo "\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.ab0773eb.png"), "html", null, true);
        echo "\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2.27c1c474.png"), "html", null, true);
        echo "\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/4.ad691bd1.png"), "html", null, true);
        echo "\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/10.c97191a6.png"), "html", null, true);
        echo "\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/20.de2930c0.png"), "html", null, true);
        echo "\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 
        </div>
 
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR12.9f3e1ce8.png"), "html", null, true);
        echo "\" alt=\"ban how to pledge\">
            <p></p>
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3R5yb6UNk-w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            <p></p>
            <p>Dans un premier temps, <strong>rendez-vous sur notre page Kickstarter :</strong></p>
            <a href=\"https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"kickstarter\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Groupe_1.fb8da3ee.png"), "html", null, true);
        echo "\" alt=\"imgKickstarter\"></a>
            <!---->
            <p>1. <strong>Cliquez sur «Je soutiens ce projet»</strong> puis sélectionnez le pack que vous souhaitez recevoir. Ou sélectionnez directement le pack que vous souhaitez sur
             le côté droit de la page. Chaque contributeur ne peut s'engager qu'une seule fois.</p>
               <!---->
            <p>2. <strong>Paiement</strong> : Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun modèle à ce stade, vous autoriserez uniquement Kickstarter à vous
             facturer le pack choisi à la fin de la campagne si nous atteignons notre objectif de financement.</p>
               <!---->
            <p>3. <strong>Choix du modèle, de la couleur et la livraison</strong> : Ne vous inquiétez pas pour le moment ! Une fois la campagne terminée, vous recevrez un questionnaire
             vous permettant d'indiquer le modèle choisi, la couleur et l'adresse d’expédition.</p>
               <!---->
            <p>Les lunettes Owl Eyewear sont expédiées gratuitement partout dans le monde!</p>
            <a href=\"https://www.facebook.com/sharer.php?u=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"Facebook\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FBFR.7936bd6e.png"), "html", null, true);
        echo "\" alt=\"imgFacebook\"></a>
            <p></p>
            <a href=\"https://twitter.com/intent/tweet?url=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"Twitter\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/TwitterFR.58384f76.png"), "html", null, true);
        echo "\" alt=\"imgTwitter\"></a>
            <p></p>
            <a href=\"https://www.linkedin.com/shareArticle?url=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"linkedin\" src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/LinkedFR.721957d7.png"), "html", null, true);
        echo "\" alt=\"imglinkedin\"></a>

        </div>
        <p></p>
     
        <div class=\"crew\">
          <img class=\"banWhoWheAre\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR14.466d13c4.png"), "html", null, true);
        echo "\" alt=\"Qui somme nous\" id=\"equipe\">
          <!---->
          <p></p>
          <img class=\"imgEquipe\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ED.eea96dcb.png"), "html", null, true);
        echo "\" alt=\"Equipe\" >
          <p></p>
          <!---->
          <p>Deux opticiens français souhaitant <strong>sécuriser votre vie quotidienne !</strong></p>
          <!---->
          <p>Le désir de développer ce projet est né de nos<strong> expériences professionnelles</strong>. Nous avons tous les deux travaillé dans des magasins d’optique 
          différents et avons eu <strong>beaucoup de demandes de personnes souhaitant améliorer leur vision la nuit.</strong> </p>
          <!---->
          <p>Nous avons donc développé un projet visant à offrir une <strong>solution qualitative et abordable à toutes les personnes ayant des gênes</strong>. Nous sommes 
            maintenant très fiers de vous présenter les lunettes <strong>Owl Eyewear.</strong></p>
        
           <img class =\"lblneedyou\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Besoin vous.b9df6fff.png"), "html", null, true);
        echo "\" alt=\"qui somme nous\">
           <!---->
        
           <p></p>
           <p><strong>Nous avons besoin de vous !</strong> Notre objectif est de lancer notre entreprise et de démocratiser notre produit pour <strong>diminuer le nombre d'accidents sur les routes.</strong>
               Nous voulons que celui-ci soit <strong>de qualité, accessible et connu de tous.</strong></p>
            <!---->
           <p>C’est pourquoi nous nous lançons sur <strong>Kickstarter</strong> en proposant <strong>des lunettes de haute qualité à petit prix</strong>. Actuellement, vous bénéficiez d’un tarif exclusif, 
            cependant lorsque cette campagne sera clause, nos produits seront uniquement disponibles au prix de 99€. Au vue de <strong>la technicité</strong> et <strong>des caractéristiques des verres</strong>,
             nous vous proposons un prix Kickstarter très intéressant.</p>
           <p><strong>Nous espérons de tout cœur que notre produit vous convienne.</strong></p>
            <p><p>
            <!---->
            <a href=\"https://www.youtube.com/channel/UCPVO51qjTq6RhMmh66610pQ\" target=\"_blank\"><img class=\"linkedin\" src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/YTfr.4efad40f.png"), "html", null, true);
        echo "\" alt=\"imglinkedin\"></a>
            <p></p>
            <a href=\"https://www.instagram.com/owleyewearfr/\" target=\"_blank\"><img class=\"linkedin\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/InstaFR.736fd080.png"), "html", null, true);
        echo "\" alt=\"imglinkedin\"></a>
           <p>Risques et défis :</p>
            <!---->
           <p>Les retards de livraison et de production sont des risques imprévisibles.<br>
              Pour les éviter, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils puissent nous livrer dans les délais les plus courts.</p>
            <!---->
           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde à vos
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>
            <!---->
           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous<br> avons accompli
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous<br> soutenons des 
              campagnes depuis plusieurs années et nous souhaitions depuis longtemps<br> en créer une !</p>
          </div>
        </div>
      </div>
       
    </div>
    </body>
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
        return array (  704 => 405,  699 => 403,  683 => 390,  669 => 379,  663 => 376,  654 => 370,  649 => 368,  644 => 366,  629 => 354,  621 => 349,  614 => 345,  609 => 343,  604 => 341,  599 => 339,  594 => 337,  589 => 335,  583 => 332,  575 => 327,  570 => 325,  561 => 319,  555 => 316,  545 => 309,  539 => 306,  521 => 291,  515 => 288,  509 => 285,  503 => 282,  487 => 269,  478 => 263,  463 => 251,  458 => 249,  453 => 247,  448 => 245,  432 => 232,  420 => 223,  411 => 217,  404 => 213,  392 => 204,  387 => 202,  382 => 200,  371 => 192,  364 => 188,  357 => 184,  350 => 180,  342 => 175,  334 => 170,  326 => 165,  318 => 160,  310 => 155,  302 => 150,  293 => 144,  280 => 134,  267 => 124,  262 => 122,  257 => 120,  241 => 107,  229 => 98,  223 => 95,  218 => 93,  213 => 91,  206 => 87,  194 => 78,  187 => 74,  176 => 66,  169 => 62,  160 => 56,  153 => 52,  146 => 48,  138 => 43,  122 => 30,  114 => 25,  102 => 16,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}

{% endblock %}
{% block body %}
  <body>
        <div class=\"bg-image\">      
            <div class=\" txt-presentation\">
              <h1>Owl Eyewear - Améliorez votre vision la nuit.</h1>
              <p></p>
              <p><mark><strong>LES LUNETTES OWL EYEWEAR SONT CONÇUES AVEC DES VERRES HAUT DE GAMME PERFORMANTS PERMETTANT D’AMÉLIORER VOTRE VISION LA NUIT ET AINSI DE CONDUIRE PLUS SEREINEMENT ET AISÉMENT.</strong></mark></p>
              <p><mark>Vous voici sur la version française de notre campagne de lunettes pour la conduite nocturne. La vente du produit s’effectue UNIQUEMENT sur KICKSTARTER, un site de financement
               participatif international permettant aux jeunes entrepreneurs de développer plus facilement leur projet. La façon de participer est assez simple et expliquée dans l’onglet « PARTICIPER ».
                Nous vous laissons prendre connaissance du produit que nous avons développé en espérant qu’il puisse vous satisfaire. Nous sommes très fiers de pouvoir aujourd’hui vous proposer le proposer.</mark></p>
          </div>
            <a href=\"#participer\"><img class=\"kickstarter\" src=\"{{ asset('build/images/participer.72f3bd98.png') }}\" alt=\"imgParticiper\"></a>
        </div>
      <br>
   

      <br>
      <br>
    <div class=\"txt\">

    <img class=\"logoOwl\" src=\"{{ asset (\"/build/images/OWL_logo.5da53e41.png\") }}\" alt=\"logoOwlEyeWear\">
  <p></p>
  
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mEHTSKNrzC8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

        <img class=\"lblwhyowleyewear\" src=\"{{ asset (\"/build/images/Pourquoi_Owl_eyewear.46a32322.png\") }}\" alt=\"lblWhyOwlEyeWear\">
        <p></p>
        <p></p> 
        <div class=\"txtintro\">
        <p>La nuit, le trafic routier ne représente que <strong>10% du trafic journalier</strong> mais <strong>génère 40% des accidents graves ou mortels.</strong> Plusieurs raisons sont en cause : <strong>la fatigue, la faible luminosité, une vision trouble, l’éblouissement dû aux phares</strong>, etc…</p>
        <p>La vision est moins précise car <strong>les yeux ont besoin de temps pour s’adapter aux variations de luminosité et pour percevoir les reliefs et les distances.</strong></p>
        <p>Pour éliminer les inconforts visuels lors de la conduite de nuit, nous avons développé des lunettes ayant des <strong>verres évolués</strong> qui permettent <strong>d’améliorer grandement le confort visuel.</strong></p>
        <p>Grâce à celles-ci, vous aurez plus de facilité pour vous déplacer la nuit ou lors de vos déplacements dans des conditions de faible luminosité. <strong>Vous rendrez également les routes plus sûres !</strong></p>
        </div>

        
    </div>
        <br>
        <img class=\"objectifbanner\" src=\"{{ asset (\"build/images/objectif_banner.bc8435ed.png\") }}\" alt=\"imgObjectifBanner\">   
        <br>
      <p></p>
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
            <img class=\"imgGlassDetailEN\" src= \"{{ asset (\"/build/images/Lunettes araignée.632bfb25.png\") }}\" alt=\"imgGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatType\" src= \"{{ asset (\"/build/images/Details traitements.7474e869.png\") }}\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
        
        <img class=\"coatdetail\" src =\"{{ asset (\"/build/images/Détails des traitements.ee731cde.png\") }}\" alt=\"coatdetail\">
    </img>
    
        <br>
    </div>

  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"{{ asset (\"/build/images/FR3.484e8eb8.png\") }}\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"{{ asset ('/build/images/quand_les_porter.0935229d.png') }}\" alt=\"label quand les porte\">
        <p></p>
          <p>Les lunettes Owl Eyewear peuvent être utilisées <strong>dans toutes situations durant lesquelles la luminosité est faible </strong>
          (en ville ou à la campagne). Elles peuvent être portées au crépuscule, la nuit, dans le brouillard et pendant de fortes averses.</p>

            <p>Lorsque vous portez les lunettes, vous rendez les routes plus sûres, pour vous ainsi que pour les autres. 
            Vous serez ravis du <strong>gain de confort</strong> que vous apportera Owl Eyewear !</p>
        <p></p>
        
        <img class=\"gifSolv\" src=\"{{ asset (\"/build/images/FIGFINAL.396b4767.gif\") }}\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <p></p>
        <img class =\"genbenef\" src=\"{{ asset (\"build/images/gene_et_benef.09e95592.png\") }}\" alt=\"lblgenbenef\">
        <p></p>
        <img class =\"imgtableau\" src=\"{{ asset (\"build/images/recap.61746e12.png\") }}\" alt=\"tableau\">
        <p></p>
        <img class=\"lblWhoisConcern\" src=\"{{ asset(\"/build/images/personnes_concernees.b22c5392.png\") }}\" alt=\"label personne concerné\">
        <p></p>
        <p>Owl Eyewear peut être utile pour toutes les personnes <strong>ressentant des gênes</strong> ou voulant <strong>un meilleur confort visuel la nuit.</strong></p>
        <img class=\"imgConcerner\" src=\"{{ asset(\"/build/images/Pour_Qui.10560b30.png\") }}\" alt=\"pour qui\">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées par <strong>les conducteurs de voiture, de moto, de bus, de camion, à vélo et même en trottinette électrique</strong>.</p>
      </div>
      <br>    
    
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"{{ asset('build/images/FR4.c5c9ac1b.png') }}\" alt=\"statisticsFR\" id=\"statsup\">
        <p> Conduire dans de <strong>faibles conditions lumineuses</strong> fait partie de notre <strong>vie de tous les jours</strong> et c’est pour cela que nous espérons que ces lunettes deviendront un accessoire indispensable et disponible à tous !</p> 
        <p>D’après une étude réalisée en France, <strong>42% des automobilistes conduisent la nuit</strong> au moins<br>  une 
           fois par semaine et <strong>89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.</strong><br>
           De plus, <strong>la moitié des accidents mortels surviennent la nuit</strong> alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investi beaucoup d’efforts pour développer <strong>des lunettes offrant confort, précision visuelle et sérénité aux conducteurs.</strong></p>
      <p></p>
      <p></p>
      </div>
      

    
      <div class=\"framelst\">
          <img class=\"frame\" src=\"{{ asset('build/images/FR5.7549b27e.png') }}\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"{{ asset('build/images/Carac monture.e5411406.png') }}\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"{{ asset('build/images/carac.ca818c99.png') }}\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe <strong>8 modèles de lunettes</strong>, disponibles <strong>uniquement sur Kickstarter</strong>.</p> 
          <p></p>
          <p></p>
          <div>
          <p><strong>Différentes couleurs</strong> pour les modèles plastiques ainsi que <strong>différentes formes</strong> vous sont proposées, vous permettant de choisir le modèle qui vous convient le mieux.<br></p>
            
          <img class=\"pngLblframe\" src=\"{{ asset('build/images/finfr.6b7f7df8.gif') }}\" alt=\"giflunetteportee\">
          <p>Nous n’avons pas choisi de proposer des lunettes adaptables à la vue, nous avons opté pour des sur-lunettes. <strong>Le confort visuel est identique, le prix est moins cher et les utilisateurs </strong>peuvent continuer à les utiliser si leurs corrections changent.</p>
          <p>Les sur-lunettes peuvent être portées par-dessus tout type de lunettes correctrices: avec des verres de vision de loin, des verres progressifs ou verres bifocaux. Elles sont conçues pour s'adapter à vos lunettes correctrices. </p>

          <p><strong>D’autres modèles</strong> seront disponibles <strong>si les objectifs de campagne sont atteints</strong><br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle débloqué.</p>
          </div>

          <div class=\"picbox\">
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"{{ asset('build/images/Ronde_Ecaille.0414298f.png') }}\" alt=\"imgFrame1\">
          <p></p>
          <p>Ronde Ecaille</p>
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"{{ asset('build/images/27a16970da1f818ea2419f93a8a16be4_original.png') }}\" alt=\"imgFrame2\">
          <p>Ronde noir mat</p>
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"{{ asset('build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png') }}\" alt=\"imgFrame3\">
          <p>Rectangle brun brillant</p>
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"{{ asset('build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png') }}\" alt=\"imgFrame4\">
          <p>Rectangle noir mat</p>
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"{{ asset('build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png') }}\" alt=\"imgFrame5\">
          <p>sur-lunette</p>
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"{{ asset('build/images/5782e86838a62dd05d3348f28b44c4a2_original.png') }}\" alt=\"imgFrame6\">
          <p>Combinée ecaille</p>
          </div>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"{{ asset('build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png') }}\" alt=\"imgFrame7\">
          <p>Ronde noir métal</p>
          </div>
          <p></p>
          <div class=\"img8\">
          <img class=\"imgframe8\" src=\"{{ asset('build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg') }}\" alt=\"imgFrame8\">
          </div>
          <p></p>
          <div class=\"img9\">
          <img class=\"imgframe9\" src=\"{{ asset('build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg') }}\" alt=\"imgFrame9\">
          </div>
          <p></p>
          <div class=\"img10\">
          <img class=\"imgFrame10\" src=\"{{ asset('build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg') }}\" alt=\"imgFrame10\">
          </div>
          <p></p>
          <div class=\"img11\">
          <img class=\"imgFrame11\" src=\"{{ asset('build/images/6f774fecf7de574748fb0bb69072090f_original.9dc1edab.jpg') }}\" alt=\"imgFrame11\">   
          </div>
          </div>
          <p></p>
          </div>
          <p></p>
          <p></p>
          <div class=\"choix\">
          <img class=\"banChoix\" src=\"{{ asset('build/images/FR6.bfb517ea.png') }}\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"{{ asset('build/images/choix_taille.c505f783.png') }}\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 

          </div>
              <p></p>
  
        
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"{{ asset('build/images/FR7.64d4c2e0.png') }}\" alt=\"banniere reception\">
            <p></p>
            <p>La paire de lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre en valeur notre produit avec 
                un <strong>packaging</strong> dans le thème de notre produit : <strong>l’obscurité</strong>.</p>
                <p><img class=\"imgPack\" src=\"{{ asset('build/images/PackFR.e1fd8347.png') }}\" alt=\"image pack\"></p>
                
            <p>Dans le but de <strong>les protéger</strong>, vous recevrez également un <strong>étui souple</strong>. Grâce à celui-ci, vos verres seront conservés et vous garderez
             <strong>un bon confort visuel</strong> dans le temps. Vous pourrez aussi les <strong>ranger facilement</strong> dans la portière de votre voiture ou dans votre boîte à gants <strong>sans risques</strong>.
              Une <strong>micro-fibre</strong> sera également fournie pour nettoyer vos lunettes.</p>

               <img class=\"gifcar\" src=\"{{ asset('build/images/gifcar.a7470e31.gif') }}\" alt=\"gifcar\">
               <p></p>
            <p>Pour finir, nous vous offrons <strong>2 stickers</strong> Owl Eyewear à coller ou vous souhaitez !</p>
            <p></p>
            
            <p></p>
            </div>

            <div class=\"fabrication\">
            <img class=\"banHowMake\" src=\"{{ asset('build/images/process.5f63f1a7.png') }}\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
                  <p>Nous assemblerons l’ensemble des lunettes dans <strong>notre atelier en France.</strong> Les verres<br>
               seront taillés, montés; les montures seront <strong>ajustées, nettoyées</strong>, <strong>minutieusement emballées</strong><br>
               par des <strong>opticiens diplômés.</strong></p>
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/veLOW5-W6Mk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            <p></p>
      
            <p></p>
            <p></p>
           
            </div>
       <div class=\"infoAdit\">    
          <img class=\"lblInfoSupFR\" src = \"{{ asset (\"/build/images/FR2.1671e564.png\") }}\" alt=\"lblInfoSupFR\" id=\"precision\">
          <p></p>
          <img class=\"lblOrigine\" src=\"{{ asset('build/images/Origines_verres.png') }}\" alt =\"labelorigin\">
          <p></p>
          <img class=\"imgOrigine\" src=\"{{ asset('build/images/FRFR.839f1199.jpg') }}\" alt=\"imageg Origine\">
          <p></p>
          <img class=\"lblYellowFR\" src = \"{{ asset (\"/build/images/verres jaunes.cb45cc79.png\") }}\" alt=\"lblYellowFR\">
    
          <p></p>
          <p>La teinte jaune (catégorie 0) est <strong>la solution</strong> contre les gênes visuelles dans des <strong>conditions <br> de conduite difficiles.</strong></p>
          <p>Le filtre jaune permet de filtrer les courtes longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. <strong>Les longueurs d’onde concernées</strong> sont <strong>entre 350 et 500nm.</strong></p>

          <p>Riches en énergie, elles sont plus diffusées dans l’atmosphère que les autres du spectre visible. <strong><br>
          La lumière bleue</strong> est le <strong>facteur principal</strong> de <strong>l’éblouissement</strong> et donne une <strong>impression de<br> vision floue.</strong></p>

          <p>Par conséquent, <strong>les verres jaunes</strong> offrent une protection maximale <strong>contre l’éblouissement</strong> et <strong>améliorent la perception des contrastes</strong> et offre ainsi <strong>un meilleur confort.</strong></strong></p>
        <div class=\"graph\">
      <img class=\"pngGraphGlsFR\" src =\"{{ asset(\"build/images/FRcourbe.57889c14.png\") }}\" alt=\"pngGraphGlsFR\">
        <div class=\"legendeGraph\">
      <p>Courbe de transmission d'un verre ordinaire contre un verre Owl Eyewear</p>
      </div>
      
<div class =\"myopienuit\">
       <img class=\"lblNightMyopFR\" src=\"{{ asset(\"build/images/Myopi noc.54895fea.png\") }}\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, <strong>l’acuité visuelle diminue.</strong> C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un <strong>phénomène optique naturel</strong>.</p>

           <p>La myopie est un défaut visuel corrigé par des verres négatifs divergents. Quand une personne <br> 
            est myope, <strong>sa vision de loin est trouble</strong>, sans possibilité de compenser  soit même ce défaut. </p>

        <p>La nuit, les conducteurs sont <strong>légèrement myopisés</strong>, c’est pourquoi nous avons conçu ces verres afin qu'ils puissent compenser ce défaut
         pour toutes les personnes portant des lunettes ou non afin de vous apporter une <strong>vision parfaitement nette et confortable</strong>.</p>

         
          <div class= \"pngViewFR\">
                <img class=\"pngSunViewFR\" src=\"{{ asset(\"build/images/net.c81b8bd3.png\") }}\" alt=\"pngSunViewFR\">
                <p>Vision pendant la journée = claire et confortable.</p>

                <img class=\"pngNightViewFR\" src=\"{{ asset(\"build/images/Flou.77ea1e45.png\") }}\" alt=\"pngNightViewFR\">
                <p>Œil devenu myope en raison de la faible luminosité = Vision floue.</p>

                <img class=\"pngNihtViewCorFR\" src=\"{{ asset(\"build/images/corrige.c6f47421.png\") }}\" alt=\"pngNihtViewCorFR\">
                <p>Œil compensé par un verre Owl Eyewear = Vision claire et confortable.</p>
                <p></p>
                <img class=\"pngAdaptationFR\" src=\"{{ asset(\"build/images/Adapatation.448958e1.png\") }}\" alt=\"imageAdaptation\">
                <p></p>
                <div class=\"text\"><p>L'adaptation aux lunettes OWL Eyewear est <strong>immédiate</strong>. Les verres jaunes, la compensation de la myopie nocturne et les traitements <strong>augmentent le confort visuel et la perception</strong>, mais 
                n'induisent en aucun cas une détérioration ou des troubles de la vision. L’adaptation est immédiate car nous sélectionnons avec soin des verres de <strong>haute qualité</strong> pour répondre aux attentes des conducteurs.</p>
     </div>
      </div>
           <p></p>
           <p></p>
      <p></p>
      </div>

        
      </div>
        <p></p>
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"{{ asset('build/images/Avis_des_testeurs.2a67f876.png') }}\" alt=\"bannière testeur\">
        <p></p>
        <p>Nous avons testé nos produits sur différents profils de conducteurs, voici quelques retours :</p>
        <img class=\"imgavis\" src=\"{{ asset('build/images/AvisFR.ab4855c3.png') }}\" alt=\"avis\">
        <p></p>
        <p></p>
        </div>
        
        <div class=\"objectif\">
       
          <img class=\"banbanObjectnO\" src=\"{{ asset('build/images/FR9.02bfd0dc.png') }}\" alt=\"objectif\" id=\"objectif\">
          <p></p>
           <p>Notre objectif minimal de financement est de 10 000€. Si cette somme n'est pas atteinte, notre projet ne pourra malheureusement pas débuté. Vos contributions ne vous seront donc pas facturées. Si cet objectif est atteint, les modèles présentés ci-dessous seront débloqués à partir de différents seuils (25 000€, 50 000€, 75 000€).</p>
          <img class=\"imgObject\" src=\"{{ asset('build/images/Objectifs.1ecbce6e.png') }}\" alt =\"image objectif\">
        </div>
        
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"{{ asset('build/images/FR10.1cd7fac0.png') }}\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"{{ asset('build/images/Timeline FR.8cad95d2.png') }}\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"{{ asset('build/images/FR11.d4b54aa5.png') }}\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"{{ asset('build/images/1.ab0773eb.png') }}\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"{{ asset('build/images/2.27c1c474.png') }}\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"{{ asset('build/images/4.ad691bd1.png') }}\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"{{ asset('build/images/10.c97191a6.png') }}\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"{{ asset('build/images/20.de2930c0.png') }}\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 
        </div>
 
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"{{ asset('build/images/FR12.9f3e1ce8.png') }}\" alt=\"ban how to pledge\">
            <p></p>
            <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3R5yb6UNk-w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            <p></p>
            <p>Dans un premier temps, <strong>rendez-vous sur notre page Kickstarter :</strong></p>
            <a href=\"https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"kickstarter\" src=\"{{ asset('build/images/Groupe_1.fb8da3ee.png') }}\" alt=\"imgKickstarter\"></a>
            <!---->
            <p>1. <strong>Cliquez sur «Je soutiens ce projet»</strong> puis sélectionnez le pack que vous souhaitez recevoir. Ou sélectionnez directement le pack que vous souhaitez sur
             le côté droit de la page. Chaque contributeur ne peut s'engager qu'une seule fois.</p>
               <!---->
            <p>2. <strong>Paiement</strong> : Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun modèle à ce stade, vous autoriserez uniquement Kickstarter à vous
             facturer le pack choisi à la fin de la campagne si nous atteignons notre objectif de financement.</p>
               <!---->
            <p>3. <strong>Choix du modèle, de la couleur et la livraison</strong> : Ne vous inquiétez pas pour le moment ! Une fois la campagne terminée, vous recevrez un questionnaire
             vous permettant d'indiquer le modèle choisi, la couleur et l'adresse d’expédition.</p>
               <!---->
            <p>Les lunettes Owl Eyewear sont expédiées gratuitement partout dans le monde!</p>
            <a href=\"https://www.facebook.com/sharer.php?u=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"Facebook\" src=\"{{ asset('build/images/FBFR.7936bd6e.png') }}\" alt=\"imgFacebook\"></a>
            <p></p>
            <a href=\"https://twitter.com/intent/tweet?url=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"Twitter\" src=\"{{ asset('build/images/TwitterFR.58384f76.png') }}\" alt=\"imgTwitter\"></a>
            <p></p>
            <a href=\"https://www.linkedin.com/shareArticle?url=https://www.kickstarter.com/projects/nvision/owl-eyewear-improve-your-night-vision\" target=\"_blank\"><img class=\"linkedin\" src=\"{{ asset('build/images/LinkedFR.721957d7.png') }}\" alt=\"imglinkedin\"></a>

        </div>
        <p></p>
     
        <div class=\"crew\">
          <img class=\"banWhoWheAre\" src=\"{{ asset('build/images/FR14.466d13c4.png') }}\" alt=\"Qui somme nous\" id=\"equipe\">
          <!---->
          <p></p>
          <img class=\"imgEquipe\" src=\"{{ asset('build/images/ED.eea96dcb.png') }}\" alt=\"Equipe\" >
          <p></p>
          <!---->
          <p>Deux opticiens français souhaitant <strong>sécuriser votre vie quotidienne !</strong></p>
          <!---->
          <p>Le désir de développer ce projet est né de nos<strong> expériences professionnelles</strong>. Nous avons tous les deux travaillé dans des magasins d’optique 
          différents et avons eu <strong>beaucoup de demandes de personnes souhaitant améliorer leur vision la nuit.</strong> </p>
          <!---->
          <p>Nous avons donc développé un projet visant à offrir une <strong>solution qualitative et abordable à toutes les personnes ayant des gênes</strong>. Nous sommes 
            maintenant très fiers de vous présenter les lunettes <strong>Owl Eyewear.</strong></p>
        
           <img class =\"lblneedyou\" src=\"{{ asset('build/images/Besoin vous.b9df6fff.png') }}\" alt=\"qui somme nous\">
           <!---->
        
           <p></p>
           <p><strong>Nous avons besoin de vous !</strong> Notre objectif est de lancer notre entreprise et de démocratiser notre produit pour <strong>diminuer le nombre d'accidents sur les routes.</strong>
               Nous voulons que celui-ci soit <strong>de qualité, accessible et connu de tous.</strong></p>
            <!---->
           <p>C’est pourquoi nous nous lançons sur <strong>Kickstarter</strong> en proposant <strong>des lunettes de haute qualité à petit prix</strong>. Actuellement, vous bénéficiez d’un tarif exclusif, 
            cependant lorsque cette campagne sera clause, nos produits seront uniquement disponibles au prix de 99€. Au vue de <strong>la technicité</strong> et <strong>des caractéristiques des verres</strong>,
             nous vous proposons un prix Kickstarter très intéressant.</p>
           <p><strong>Nous espérons de tout cœur que notre produit vous convienne.</strong></p>
            <p><p>
            <!---->
            <a href=\"https://www.youtube.com/channel/UCPVO51qjTq6RhMmh66610pQ\" target=\"_blank\"><img class=\"linkedin\" src=\"{{ asset('build/images/YTfr.4efad40f.png') }}\" alt=\"imglinkedin\"></a>
            <p></p>
            <a href=\"https://www.instagram.com/owleyewearfr/\" target=\"_blank\"><img class=\"linkedin\" src=\"{{ asset('build/images/InstaFR.736fd080.png') }}\" alt=\"imglinkedin\"></a>
           <p>Risques et défis :</p>
            <!---->
           <p>Les retards de livraison et de production sont des risques imprévisibles.<br>
              Pour les éviter, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils puissent nous livrer dans les délais les plus courts.</p>
            <!---->
           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde à vos
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>
            <!---->
           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous<br> avons accompli
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous<br> soutenons des 
              campagnes depuis plusieurs années et nous souhaitions depuis longtemps<br> en créer une !</p>
          </div>
        </div>
      </div>
       
    </div>
    </body>
{% endblock %}

", "main/home.html.twig", "E:\\wamp64\\www\\owleyewear\\templates\\main\\home.html.twig");
    }
}
