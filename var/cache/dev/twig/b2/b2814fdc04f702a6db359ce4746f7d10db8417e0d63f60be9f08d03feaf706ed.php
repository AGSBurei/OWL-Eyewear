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
class __TwigTemplate_03426411477b4a9979046acf5bd38719d3c7ec187ca17dffdef30debfeb665f3 extends \Twig\Template
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
            <h1>Owl Eyewear - Améliorez (boostez) votre vision la nuit.</h1>
            <p></p>
            <p><strong>LES LUNETTES OWL SONT CONÇU AVEC DES VERRES HAUTS DE GAMME PERFORMANTS QUI<br> AMELIORENT LA VISION LA NUIT. ELLE PERMET DE CONDUIRE PLUS SEREINEMENT ET AISEMENT.</strong></p>
            <p> La nuit, le trafic routier ne représente que <strong>10% du trafic journalier </strong> mais <strong>génère 40% des accidents<br> graves ou mortels</strong>. Plusieurs 
            raisons sont en cause : la <strong>fatigue, la faible luminosité, une vision trouble, l’éblouissement dû aux phares</strong>, etc…</p>
            <p>La vision est moins précise car les yeux ont <strong>besoin de temps </strong>pour s’adapter aux <strong>variations de luminosité</strong><br> et pour 
               <strong>percevoir les reliefs</strong> et <strong>les distances.</strong></p>
          </div>
        </div>
      <br>
      <br>
      <br>
      <br>
      <br>
  

    <div class=\"txt\">
    <img class=\"logoOwl\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/OWL_logo.5da53e41.png"), "html", null, true);
        echo "\" alt=\"logoOwlEyeWear\">
  <p></p>
        <h2>Que faison nous pour vous ?</h2>
        
        <p></p>
        <p>Pour éliminer ces inconforts, nous avons développé des lunettes ayant des <strong>verres évolués</strong> qui <br> permettent d’<strong>d’améliorer grandement la vision.</strong> </p>
        <p>Grâce à <strong>Owl Eyewear !</strong> Vous aurez un <strong>meilleur confort visuel</strong> lors de vos déplacements dans <br>
        des <strong>conditions de faible luminosité</strong> et rendrez les routes plus sures !</p>
        <div class=\"newsletter\">
        <p></p>
        <p></p>
        <p><strong>Si vous souhaitez être au courant des dernières nouvelles du projet souscrivez à la newsletter</strong></p> 
          ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row');
        echo "
          <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
          ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
        <br>
        <br>
       
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\" id=\"SpecGlass\">
        </div>
            <br>
        <div class=\"labelSepcFR\">
              <img class=\"lblSpecFR\" src= \"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
        </div>
            <br>
        <div class=\"GlassDetailFR\">
            <img class=\"imgGlassDetailEN\" src= \"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Lunettes araignée.b9a13f1f.png"), "html", null, true);
        echo "\" alt=\"lblGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatType\" src= \"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
        
        <img class=\"coatdetail\" src =\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Détails des traitements.ee731cde.png"), "html", null, true);
        echo "\" alt=\"coatdetail\">
    </img>
    
        <br>
    </div>

  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR3.484e8eb8.png"), "html", null, true);
        echo "\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/quand_les_porter.0935229d.png"), "html", null, true);
        echo "\" alt=\"label quand les porte\">
        <p></p>
          <p>Les lunettes Owl Eyewear peuvent être portées dans <strong>différentes situations</strong>. Vous pouvez les<br> utiliser 
            sur ’importe quelle <strong>route sombre</strong> (en ville ou à la campagne). Elles peuvent être portées <br> au <strong>crépuscule</strong>,
            la <strong>nuit</strong>, dans le <strong>brouillard</strong> et sous de <strong>fortes averses</strong>.</p>

            <p>Lorsque vous portez les lunettes, vous rendez la route plus sure, pour vous ainsi que pour <br> 
            les autres. Vous serez ravis des <strong> améliorations </strong> que vous apportera cet équipement !</p>
        <p></p>
        
        <img class=\"gifSolv\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <p></p>
        <img class =\"genbenef\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gene_et_benef.292fd87c.png"), "html", null, true);
        echo "\" alt=\"lblgenbenef\">
        <p></p>
        <img class =\"imgtableau\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/recap.27b6e826.png"), "html", null, true);
        echo "\" alt=\"tableau\">
        <p></p>
        <img class=\"lblWhoisConcern\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/personnes_concernees.b22c5392.png"), "html", null, true);
        echo "\" alt=\"label personne concerné\">
        <p></p>
        <p>Pour toutes les personnes ressentant des gênes ou voulant un meilleur confort visuel.</p>
        <img class=\"imgConcerner\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Pour_Qui.465be7be.png"), "html", null, true);
        echo "\" alt=\"pour qui\">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées en <strong>voiture, à moto, à vélo et même en <br>trottinette électrique !</strong></p>
      </div>
      <br>    
    
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR2.1671e564.png"), "html", null, true);
        echo "\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/verres jaunes.cb45cc79.png"), "html", null, true);
        echo "\" alt=\"lblYellowFR\">
    
        <p></p>
          <p>La teinte jaune (catégorie 0) est <strong>la solution</strong> contre les gênes visuelles dans des <strong>conditions <br> de conduite difficiles.</strong></p>
          <p>Le filtre jaune permet de filtrer les basses longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. <strong>Les longueurs d’onde concernées</strong> sont <strong>entre 350 et 500nm.</strong></p>

          <p>Riches en énergie, elles sont plus diffusées dans l’atmosphère que les autres du spectre visible. <strong><br>
          La lumière bleue</strong> est le <strong>facteur principal</strong> de <strong>l’éblouissement</strong> et donne une <strong>impression de<br> vision floue.</strong></p>

          <p>Par conséquent, <strong>les verres jaunes</strong> offrent une <strong>protection</strong> maximale <strong>contre les rayons UV</strong> <br>
             et <strong>améliorent la vision des contrastes</strong> et offre ainsi un <strong>meilleur confort.</strong></p>
        <div class=\"graph\">
      <img class=\"pngGraphGlsFR\" src =\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRcourbe.57889c14.png"), "html", null, true);
        echo "\" alt=\"pngGraphGlsFR\">

      <p>Comparaison coupure UV d'un verre ordinaire contre un verre Owl Eyewear </p>
</div>
       <img class=\"lblNightMyopFR\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Myopi noc.54895fea.png"), "html", null, true);
        echo "\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, <strong>l’acuité visuelle diminue.</strong> C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un <strong>phénomène optique naturel</strong>.</p>

           <p>La myopie est un défaut visuel corrigé par des verres négatifs divergents. Quand une personne <br> 
            est myope, <strong>sa vision de loin est trouble</strong>, sans possibilité de compenser  soit même ce défaut. </p>

        <p>La nuit, les conducteurs sont <strong>légèrement myopisés</strong>, c’est pourquoi nous avons ajouté une <strong>petite <br>
           correction de la myopie</strong> de -0.25D dans les verres afin d’apporter une <strong>vision parfaitement <br>
           nette et confortable.</strong></p>

         
          <div class= \"pngViewFR\" id=\"precision\">
                <img class=\"pngSunViewFR\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/net.c81b8bd3.png"), "html", null, true);
        echo "\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>

                <img class=\"pngNightViewFR\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Flou.77ea1e45.png"), "html", null, true);
        echo "\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit</p>

                <img class=\"pngNihtViewCorFR\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/corrige.c6f47421.png"), "html", null, true);
        echo "\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
          </div>
           <p></p>
           <p></p>
      <p></p>
 
  
      </div>
     
  
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR4.c5c9ac1b.png"), "html", null, true);
        echo "\" alt=\"statisticsFR\" id=\"statsup\">
        <p> Conduire dans des <strong>mauvaises conditions lumineuses</strong> fait partie de notre <strong>vie de tous les jours</strong> <br>et 
            c’est pour cela que nous espérons que ces lunettes deviendront un accessoire indispensable à<br> tous !</p> 
        <p>D’après une étude réalisée en France, <strong>42% des automobilistes conduisent la nuit</strong> au moins une <br> 
           fois par semaine et <strong>89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.</strong><br>
           De plus, <strong>la moitié des accidents mortels surviennent la nuit</strong> alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investit beaucoup d’efforts pour <br>
           développer des <strong>lunettes offrant confort et sérénité</strong> aux conducteurs.</p>
      <p></p>
      <p></p>
      </div>
      

    
      <div class=\"framelst\">
          <img class=\"frame\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR5.7549b27e.png"), "html", null, true);
        echo "\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carac.f0aa1af4.png"), "html", null, true);
        echo "\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe <strong>8 modèles de lunettes</strong>, disponibles <strong>uniquement sur Kickstarter</strong>.</p> 
          <p>Vous pouvez choisir entre <strong>6 modèles de montures classiques</strong> si vous ne portez pas de lunettes<br> 
          ou si vous portez des lentilles de contact.</p>
          <p></p>
            <div class=\"gifMonture\">
          <img class=\"gifMonture\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gif.7cd42fe3.gif"), "html", null, true);
        echo "\" alt=\"gif- Lunettes portées par Alison et Damien\">
          </div>
          <p></p>

          <p>Pour ceux ayant besoin de corrections nous proposons <strong>2 sur-lunettes</strong> dans <strong>deux tailles<br> différentes.</strong>>
             Elles sont conçues pour se placer <strong>par-dessus vos lunettes correctrices.</strong></p>
            <img class=\"gifsurglass\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.6910b146.gif"), "html", null, true);
        echo "\" alt=\"surlunette\">
          <p></p>
          <div><p>Il existe <strong>différentes couleurs</strong> pour les modèles plastiques ainsi que <strong>différentes formes.</strong><br> 
             Vous permettant de choisir le modèle qui <strong>vous convient le mieux.</strong><br>
          <p><strong>D’autres modèles</strong> seront disponibles <strong>si les objectifs de campagne sont atteints</strong><br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle.</p>

          <img class=\"pngLblframe\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Nos modSles.c402ed27.png"), "html", null, true);
        echo "\" alt=\"lblFrame\">
    
          </div>
          <p></p>
          <p></p>
          <p></p>
          
          <div class=\"picbox\">
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/27a16970da1f818ea2419f93a8a16be4_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame1\">
          <p></p>
          <p>Ronde Ecaille</p>
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a84715986501781141e5074442b89746_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame2\">
          <p>Ronde noir mat</p>
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png"), "html", null, true);
        echo "\" alt=\"imgFrame3\">
          <p>Rectangle brun brillant</p>
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png"), "html", null, true);
        echo "\" alt=\"imgFrame4\">
          <p>Rectangle noir mat</p>
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png"), "html", null, true);
        echo "\" alt=\"imgFrame5\">
          <p>sur-lunette</p>
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/5782e86838a62dd05d3348f28b44c4a2_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame6\">
          <p>Combinée ecaille</p>
          </div>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame7\">
          <p>Ronde noir métal</p>
          </div>
          <p></p>
          <div class=\"img8\">
          <img class=\"imgframe8\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame8\">
          </div>
          <p></p>
          <div class=\"img9\">
          <img class=\"imgframe9\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame9\">
          </div>
          <p></p>
          <div class=\"img10\">
          <img class=\"imgFrame10\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame10\">
          </div>
          <p></p>
          <div class=\"img11\">
          <img class=\"imgFrame11\" src=\"";
        // line 258
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
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR6.bfb517ea.png"), "html", null, true);
        echo "\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/choix_taille.9bdf361c.png"), "html", null, true);
        echo "\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 

          </div>
              <p></p>
  
        
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR7.64d4c2e0.png"), "html", null, true);
        echo "\" alt=\"banniere reception\">
            <p></p>
            <p>La lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre<br> 
               le produit en valeur avec un <strong>packaging</strong> dans le thème de notre produit: <strong>l’obscurité.</strong></p>
            <p>Dans le but de <strong>les protéger</strong>, vous disposerez également d’un <strong>étui souple</strong>. Grâce à celui-ci,<br>
               vos verres seront <strong>protégés</strong> et vous conserverez un <strong>bon confort visuel.</strong> Vous pouvez aussi les<br>
               <strong>ranger facilement</strong> dans la portière de votre voiture ou dans votre boite à gant <strong>sans risques.</strong><br> 
               Il sera également fourni une microfibre pour nettoyer vos lunettes.</p>
            <p>Pour finir, nous vous offrons <strong>2 stickers</strong> Owl Eyewear pour les collez ou vous le souhaitez !</p>
            <p></p>
            <img class=\"imgPack\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/PackFR.e1fd8347.png"), "html", null, true);
        echo "\" alt=\"image pack\">
            <p></p>
            </div>

            <div class=\"fabrication\">
            <img class=\"banHowMake\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/process.5f63f1a7.png"), "html", null, true);
        echo "\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
            <p>Une fois que nous aurons reçu les questionnaires avec la monture que vous aurez choisie.<br>
               Nos fournisseurs nous feront parvenir les verres ainsi que les montures.</p>
            <img class=\"gifMaker\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif"), "html", null, true);
        echo "\" alt=\"gif fabriquation\">
            <p></p>
            <p>Nous assemblerons l’ensemble des équipements dans <strong>notre atelier en France.</strong> Les verres,<br>
               seront taillés, monté ; les montures seront <strong>ajustées, nettoyées</strong> et <strong>minutieusement emballées</strong><br>
               par des <strong>opticiens diplômés.</strong></p>
            <p></p>
            <p></p>
            <img class=\"lblOrigine\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Origines_verres.png"), "html", null, true);
        echo "\" alt =\"labelorigin\">
            <p></p>
            <img class=\"imgOrigine\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/InfoFR.c1aac979.png"), "html", null, true);
        echo "\" alt=\"imageg Origine\">
            </div>
     
        <p></p>
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Avis_des_testeurs.2a67f876.png"), "html", null, true);
        echo "\" alt=\"bannière testeur\">
        <p></p>
        <p>nous testons nos produit sur divers profile de conducteurs, voici quelques avis:</p>
        <img class=\"imgavis\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/AvisFR.03ac66c6.png"), "html", null, true);
        echo "\" alt=\"avis\">
        </div>
        
        <div class=\"objectif\">
          <img class=\"banbanObjectnO\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR9.02bfd0dc.png"), "html", null, true);
        echo "\" alt=\"objectif\" id=\"objectif\">
          <p></p>
          <img class=\"imgObject\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Objectifs.1ecbce6e.png"), "html", null, true);
        echo "\" alt =\"image objectif\">
        </div>
        
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR10.1cd7fac0.png"), "html", null, true);
        echo "\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Timeline FR.79bc3124.png"), "html", null, true);
        echo "\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR11.d4b54aa5.png"), "html", null, true);
        echo "\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.e5ff50a3.png"), "html", null, true);
        echo "\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2.12448040.png"), "html", null, true);
        echo "\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/4.61d04de2.png"), "html", null, true);
        echo "\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/10.7b031ebc.png"), "html", null, true);
        echo "\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/20.33ee32de.png"), "html", null, true);
        echo "\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 
        </div>
 
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR12.9f3e1ce8.png"), "html", null, true);
        echo "\" alt=\"ban how to pledge\">
            <p></p>
            <!---->
            <p><strong>1. Cliquez sur «Back this Project»:</strong> sélectionnez le niveau de récompense disponible que vous<br> 
               souhaitez engager sur le côté droit de la page. Chaque contributeur ne peut s'engager qu'une <br>seule fois.</p>
               <!---->
            <p><strong>2. Paiement :</strong> Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun <br>
               modèle à ce stade, vous autoriserez uniquement Kickstarter à vous facturer le coût de la <br>promesse 
               à la fin de la campagne si nous atteignons l'objectif initial.</p>
               <!---->
            <p><strong>3. Informations sur le modèle, la couleur et la livraison :</strong> Ne vous inquiétez pas pour le<br>  
                moment
               ! Une fois la campagne terminée, vous recevrez un sondage indiquant vos informations <br>de modèle 
               choisi, la couleur et le lieu d’expédition.</p>
               <!---->
            <p>À tous les donateurs : Nous expédierons Owl Eyewear dans le monde entier. Merci à tous !</p>

        <div class=\"parainage\">
        <p></p>
            <img class=\"lblSpons\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/parrainage.bf9e3fde.png"), "html", null, true);
        echo "\" alt=\"label Parainage\">
            <p> </p>
            <!---->
            <p>Obtenez un spray nettoyant <strong>gratuitement</strong> grâce à notre <strong>système de parrainage.</strong> </p>
            <!---->
            <p>C’est <strong>très simple :</strong></p>
            <!---->
            <p>Si vous connaissez <strong>quelqu’un</strong> qui pourrait être <strong>intéressé par les Owl Eyewear</strong>, vous pouvez<br> 
               lui partager la campagne et s’il contribue ensuite, vous pouvez avoir un <strong>spray nettoyant<br> 
               GRATUITEMENT !!</strong> Lorsque vous aurez reçu le questionnaire, nous vous demanderons le nom<br>
               et le numéro de contributeur du parrain à la personne parrainée, et inversement. </p>
            <p></p>
            <!---->
            </p>Vous pouvez trouver votre numéro de participant en haut de la page :</p>
            <img class=\"imgkickstart\" src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/0403e075ba013fa0d8a9ceac0a1206a4.eb0076ad.png"), "html", null, true);
        echo "\" alt=\"image kickstarter\">
            <p></p>
            <!---->
            <p>Nous vous <strong>recommandons vivement de partager la campagne sur vos réseaux sociaux</strong><br> pour nous
               aider et vous aider à trouver quelqu'un et obtenir <strong>un spray nettoyant gratuitement !!</strong></p>
               <p></p>
               <p></p>
        </div>
        </div>
        <p></p>
     
        <div class=\"crew\">
          <img class=\"banWhoWheAre\" src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR14.466d13c4.png"), "html", null, true);
        echo "\" alt=\"Qui somme nous\" id=\"equipe\">
          <!---->
          <p></p>
          <img class=\"imgEquipe\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ED.eea96dcb.png"), "html", null, true);
        echo "\" alt=\"Equipe\" >
          <p></p>
          <!---->
          <p>Deux opticiens français souhaitant <strong>sécuriser votre vie quotidienne !</strong></p>
          <!---->
          <p>Le désir de développer ce projet est né de nos <strong>expériences professionnelles.</strong> Nous travaillions<br>
           tous les deux dans magasins d’optique différents ; et nous avons <strong>eu beaucoup de demandes<br> de personnes
            souhaitant améliorer leur vision la nuit.</strong></p>
          <!---->
          <p>Nous avons donc développé un projet visant à offrir une solution qualitative à toutes les<br> personnes
           ayants des gênes. Et maintenant, <strong>nous sommes très fiers de vous présenter les <br>lunettes Owl Eyewear.</strong></p>
        
           <img class =\"lblneedyou\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Besoin vous.b9df6fff.png"), "html", null, true);
        echo "\" alt=\"qui somme nous\">
           <!---->
           <p></p>
           <p><strong>Nous avons besoin de vous !</strong> Notre objectif est de lancer notre entreprise et de <strong>démocratiser</strong><br> notre
              produit pour qu’il y ait <strong>moins d’accidents sur les routes.</strong> Nous voulons que ce produit <strong>de <br>qualité soit
              accessible et connu de tous.</strong></p>
            <!---->
           <p>C’est pourquoi nous nous lançons sur Kickstarter en proposant des <strong>lunettes de haute qualité <br>à petit prix.</strong>
               Actuellement sur Kickstarter vous bénéficiez d’un <strong>tarif exclusif</strong>, cependant lorsque <br>cette campagne sera 
               clause, nos produits seront uniquement disponibles au prix de 95€.  En vue <br>de la technicité et des
              caractéristiques des verres, nous vous proposons un<strong> prix Kickstarter très<br> intéressant.</strong></p>
           <p><strong>Nous espérons de tout cœur que notre produit vous convienne.</strong></p>
            <p><p>
            <!---->
           <p>Risques et défis :</p>
            <!---->
           <p>Les retards de livraison et de production sont toujours des risques, mais des risques imprévisibles.<br>
              Pour éviter les retards, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils <br>puissent
              nous fournir dans les délais les plus courts.</p>
            <!---->
           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde <br>à vos
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>
            <!---->
           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous<br> avons accompli
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous<br> soutenons des 
              campagnes depuis plusieurs années et nous souhaitions depuis longtemps<br> en créer une !</p>
        </div>
        </div>
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
        return array (  706 => 414,  691 => 402,  685 => 399,  670 => 387,  653 => 373,  631 => 354,  624 => 350,  619 => 348,  614 => 346,  609 => 344,  604 => 342,  599 => 340,  593 => 337,  585 => 332,  580 => 330,  571 => 324,  566 => 322,  559 => 318,  553 => 315,  545 => 310,  540 => 308,  530 => 301,  523 => 297,  515 => 292,  502 => 282,  490 => 273,  485 => 271,  480 => 269,  466 => 258,  459 => 254,  452 => 250,  445 => 246,  437 => 241,  429 => 236,  421 => 231,  413 => 226,  405 => 221,  397 => 216,  388 => 210,  376 => 201,  366 => 194,  357 => 188,  345 => 179,  340 => 177,  335 => 175,  317 => 160,  300 => 146,  294 => 143,  288 => 140,  271 => 126,  264 => 122,  248 => 109,  243 => 107,  233 => 100,  227 => 97,  222 => 95,  217 => 93,  210 => 89,  197 => 79,  190 => 75,  179 => 67,  172 => 63,  163 => 57,  156 => 53,  149 => 49,  138 => 41,  133 => 39,  129 => 38,  114 => 26,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
            <h1>Owl Eyewear - Améliorez (boostez) votre vision la nuit.</h1>
            <p></p>
            <p><strong>LES LUNETTES OWL SONT CONÇU AVEC DES VERRES HAUTS DE GAMME PERFORMANTS QUI<br> AMELIORENT LA VISION LA NUIT. ELLE PERMET DE CONDUIRE PLUS SEREINEMENT ET AISEMENT.</strong></p>
            <p> La nuit, le trafic routier ne représente que <strong>10% du trafic journalier </strong> mais <strong>génère 40% des accidents<br> graves ou mortels</strong>. Plusieurs 
            raisons sont en cause : la <strong>fatigue, la faible luminosité, une vision trouble, l’éblouissement dû aux phares</strong>, etc…</p>
            <p>La vision est moins précise car les yeux ont <strong>besoin de temps </strong>pour s’adapter aux <strong>variations de luminosité</strong><br> et pour 
               <strong>percevoir les reliefs</strong> et <strong>les distances.</strong></p>
          </div>
        </div>
      <br>
      <br>
      <br>
      <br>
      <br>
  

    <div class=\"txt\">
    <img class=\"logoOwl\" src=\"{{ asset (\"/build/images/OWL_logo.5da53e41.png\") }}\" alt=\"logoOwlEyeWear\">
  <p></p>
        <h2>Que faison nous pour vous ?</h2>
        
        <p></p>
        <p>Pour éliminer ces inconforts, nous avons développé des lunettes ayant des <strong>verres évolués</strong> qui <br> permettent d’<strong>d’améliorer grandement la vision.</strong> </p>
        <p>Grâce à <strong>Owl Eyewear !</strong> Vous aurez un <strong>meilleur confort visuel</strong> lors de vos déplacements dans <br>
        des <strong>conditions de faible luminosité</strong> et rendrez les routes plus sures !</p>
        <div class=\"newsletter\">
        <p></p>
        <p></p>
        <p><strong>Si vous souhaitez être au courant des dernières nouvelles du projet souscrivez à la newsletter</strong></p> 
          {{ form_start(form) }}
          {{ form_row(form.email) }}
          <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
          {{ form_end(form) }}
        </div>
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
            <img class=\"imgGlassDetailEN\" src= \"{{ asset (\"/build/images/Lunettes araignée.b9a13f1f.png\") }}\" alt=\"lblGlassDetailFR\">
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
          <p>Les lunettes Owl Eyewear peuvent être portées dans <strong>différentes situations</strong>. Vous pouvez les<br> utiliser 
            sur ’importe quelle <strong>route sombre</strong> (en ville ou à la campagne). Elles peuvent être portées <br> au <strong>crépuscule</strong>,
            la <strong>nuit</strong>, dans le <strong>brouillard</strong> et sous de <strong>fortes averses</strong>.</p>

            <p>Lorsque vous portez les lunettes, vous rendez la route plus sure, pour vous ainsi que pour <br> 
            les autres. Vous serez ravis des <strong> améliorations </strong> que vous apportera cet équipement !</p>
        <p></p>
        
        <img class=\"gifSolv\" src=\"{{ asset (\"/build/images/FIGFINAL.396b4767.gif\") }}\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <p></p>
        <img class =\"genbenef\" src=\"{{ asset (\"build/images/gene_et_benef.292fd87c.png\") }}\" alt=\"lblgenbenef\">
        <p></p>
        <img class =\"imgtableau\" src=\"{{ asset (\"build/images/recap.27b6e826.png\") }}\" alt=\"tableau\">
        <p></p>
        <img class=\"lblWhoisConcern\" src=\"{{ asset(\"/build/images/personnes_concernees.b22c5392.png\") }}\" alt=\"label personne concerné\">
        <p></p>
        <p>Pour toutes les personnes ressentant des gênes ou voulant un meilleur confort visuel.</p>
        <img class=\"imgConcerner\" src=\"{{ asset(\"/build/images/Pour_Qui.465be7be.png\") }}\" alt=\"pour qui\">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées en <strong>voiture, à moto, à vélo et même en <br>trottinette électrique !</strong></p>
      </div>
      <br>    
    
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"{{ asset (\"/build/images/FR2.1671e564.png\") }}\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"{{ asset (\"/build/images/verres jaunes.cb45cc79.png\") }}\" alt=\"lblYellowFR\">
    
        <p></p>
          <p>La teinte jaune (catégorie 0) est <strong>la solution</strong> contre les gênes visuelles dans des <strong>conditions <br> de conduite difficiles.</strong></p>
          <p>Le filtre jaune permet de filtrer les basses longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. <strong>Les longueurs d’onde concernées</strong> sont <strong>entre 350 et 500nm.</strong></p>

          <p>Riches en énergie, elles sont plus diffusées dans l’atmosphère que les autres du spectre visible. <strong><br>
          La lumière bleue</strong> est le <strong>facteur principal</strong> de <strong>l’éblouissement</strong> et donne une <strong>impression de<br> vision floue.</strong></p>

          <p>Par conséquent, <strong>les verres jaunes</strong> offrent une <strong>protection</strong> maximale <strong>contre les rayons UV</strong> <br>
             et <strong>améliorent la vision des contrastes</strong> et offre ainsi un <strong>meilleur confort.</strong></p>
        <div class=\"graph\">
      <img class=\"pngGraphGlsFR\" src =\"{{ asset(\"build/images/FRcourbe.57889c14.png\") }}\" alt=\"pngGraphGlsFR\">

      <p>Comparaison coupure UV d'un verre ordinaire contre un verre Owl Eyewear </p>
</div>
       <img class=\"lblNightMyopFR\" src=\"{{ asset(\"build/images/Myopi noc.54895fea.png\") }}\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, <strong>l’acuité visuelle diminue.</strong> C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un <strong>phénomène optique naturel</strong>.</p>

           <p>La myopie est un défaut visuel corrigé par des verres négatifs divergents. Quand une personne <br> 
            est myope, <strong>sa vision de loin est trouble</strong>, sans possibilité de compenser  soit même ce défaut. </p>

        <p>La nuit, les conducteurs sont <strong>légèrement myopisés</strong>, c’est pourquoi nous avons ajouté une <strong>petite <br>
           correction de la myopie</strong> de -0.25D dans les verres afin d’apporter une <strong>vision parfaitement <br>
           nette et confortable.</strong></p>

         
          <div class= \"pngViewFR\" id=\"precision\">
                <img class=\"pngSunViewFR\" src=\"{{ asset(\"build/images/net.c81b8bd3.png\") }}\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>

                <img class=\"pngNightViewFR\" src=\"{{ asset(\"build/images/Flou.77ea1e45.png\") }}\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit</p>

                <img class=\"pngNihtViewCorFR\" src=\"{{ asset(\"build/images/corrige.c6f47421.png\") }}\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
          </div>
           <p></p>
           <p></p>
      <p></p>
 
  
      </div>
     
  
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"{{ asset('build/images/FR4.c5c9ac1b.png') }}\" alt=\"statisticsFR\" id=\"statsup\">
        <p> Conduire dans des <strong>mauvaises conditions lumineuses</strong> fait partie de notre <strong>vie de tous les jours</strong> <br>et 
            c’est pour cela que nous espérons que ces lunettes deviendront un accessoire indispensable à<br> tous !</p> 
        <p>D’après une étude réalisée en France, <strong>42% des automobilistes conduisent la nuit</strong> au moins une <br> 
           fois par semaine et <strong>89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.</strong><br>
           De plus, <strong>la moitié des accidents mortels surviennent la nuit</strong> alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investit beaucoup d’efforts pour <br>
           développer des <strong>lunettes offrant confort et sérénité</strong> aux conducteurs.</p>
      <p></p>
      <p></p>
      </div>
      

    
      <div class=\"framelst\">
          <img class=\"frame\" src=\"{{ asset('build/images/FR5.7549b27e.png') }}\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"{{ asset('build/images/Carac monture.e5411406.png') }}\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"{{ asset('build/images/carac.f0aa1af4.png') }}\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe <strong>8 modèles de lunettes</strong>, disponibles <strong>uniquement sur Kickstarter</strong>.</p> 
          <p>Vous pouvez choisir entre <strong>6 modèles de montures classiques</strong> si vous ne portez pas de lunettes<br> 
          ou si vous portez des lentilles de contact.</p>
          <p></p>
            <div class=\"gifMonture\">
          <img class=\"gifMonture\" src=\"{{ asset ('build/images/gif.7cd42fe3.gif') }}\" alt=\"gif- Lunettes portées par Alison et Damien\">
          </div>
          <p></p>

          <p>Pour ceux ayant besoin de corrections nous proposons <strong>2 sur-lunettes</strong> dans <strong>deux tailles<br> différentes.</strong>>
             Elles sont conçues pour se placer <strong>par-dessus vos lunettes correctrices.</strong></p>
            <img class=\"gifsurglass\" src=\"{{ asset('build/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.6910b146.gif') }}\" alt=\"surlunette\">
          <p></p>
          <div><p>Il existe <strong>différentes couleurs</strong> pour les modèles plastiques ainsi que <strong>différentes formes.</strong><br> 
             Vous permettant de choisir le modèle qui <strong>vous convient le mieux.</strong><br>
          <p><strong>D’autres modèles</strong> seront disponibles <strong>si les objectifs de campagne sont atteints</strong><br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle.</p>

          <img class=\"pngLblframe\" src=\"{{ asset('build/images/Nos modSles.c402ed27.png') }}\" alt=\"lblFrame\">
    
          </div>
          <p></p>
          <p></p>
          <p></p>
          
          <div class=\"picbox\">
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"{{ asset('build/images/27a16970da1f818ea2419f93a8a16be4_original.png') }}\" alt=\"imgFrame1\">
          <p></p>
          <p>Ronde Ecaille</p>
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"{{ asset('build/images/a84715986501781141e5074442b89746_original.png') }}\" alt=\"imgFrame2\">
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
          <img class=\"imgChoix\" src=\"{{ asset('build/images/choix_taille.9bdf361c.png') }}\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 

          </div>
              <p></p>
  
        
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"{{ asset('build/images/FR7.64d4c2e0.png') }}\" alt=\"banniere reception\">
            <p></p>
            <p>La lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre<br> 
               le produit en valeur avec un <strong>packaging</strong> dans le thème de notre produit: <strong>l’obscurité.</strong></p>
            <p>Dans le but de <strong>les protéger</strong>, vous disposerez également d’un <strong>étui souple</strong>. Grâce à celui-ci,<br>
               vos verres seront <strong>protégés</strong> et vous conserverez un <strong>bon confort visuel.</strong> Vous pouvez aussi les<br>
               <strong>ranger facilement</strong> dans la portière de votre voiture ou dans votre boite à gant <strong>sans risques.</strong><br> 
               Il sera également fourni une microfibre pour nettoyer vos lunettes.</p>
            <p>Pour finir, nous vous offrons <strong>2 stickers</strong> Owl Eyewear pour les collez ou vous le souhaitez !</p>
            <p></p>
            <img class=\"imgPack\" src=\"{{ asset('build/images/PackFR.e1fd8347.png') }}\" alt=\"image pack\">
            <p></p>
            </div>

            <div class=\"fabrication\">
            <img class=\"banHowMake\" src=\"{{ asset('build/images/process.5f63f1a7.png') }}\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
            <p>Une fois que nous aurons reçu les questionnaires avec la monture que vous aurez choisie.<br>
               Nos fournisseurs nous feront parvenir les verres ainsi que les montures.</p>
            <img class=\"gifMaker\" src=\"{{ asset('build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif') }}\" alt=\"gif fabriquation\">
            <p></p>
            <p>Nous assemblerons l’ensemble des équipements dans <strong>notre atelier en France.</strong> Les verres,<br>
               seront taillés, monté ; les montures seront <strong>ajustées, nettoyées</strong> et <strong>minutieusement emballées</strong><br>
               par des <strong>opticiens diplômés.</strong></p>
            <p></p>
            <p></p>
            <img class=\"lblOrigine\" src=\"{{ asset('build/images/Origines_verres.png') }}\" alt =\"labelorigin\">
            <p></p>
            <img class=\"imgOrigine\" src=\"{{ asset('build/images/InfoFR.c1aac979.png') }}\" alt=\"imageg Origine\">
            </div>
     
        <p></p>
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"{{ asset('build/images/Avis_des_testeurs.2a67f876.png') }}\" alt=\"bannière testeur\">
        <p></p>
        <p>nous testons nos produit sur divers profile de conducteurs, voici quelques avis:</p>
        <img class=\"imgavis\" src=\"{{ asset('build/images/AvisFR.03ac66c6.png') }}\" alt=\"avis\">
        </div>
        
        <div class=\"objectif\">
          <img class=\"banbanObjectnO\" src=\"{{ asset('build/images/FR9.02bfd0dc.png') }}\" alt=\"objectif\" id=\"objectif\">
          <p></p>
          <img class=\"imgObject\" src=\"{{ asset('build/images/Objectifs.1ecbce6e.png') }}\" alt =\"image objectif\">
        </div>
        
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"{{ asset('build/images/FR10.1cd7fac0.png') }}\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"{{ asset('build/images/Timeline FR.79bc3124.png') }}\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"{{ asset('build/images/FR11.d4b54aa5.png') }}\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"{{ asset('build/images/1.e5ff50a3.png') }}\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"{{ asset('build/images/2.12448040.png') }}\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"{{ asset('build/images/4.61d04de2.png') }}\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"{{ asset('build/images/10.7b031ebc.png') }}\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"{{ asset('build/images/20.33ee32de.png') }}\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 
        </div>
 
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"{{ asset('build/images/FR12.9f3e1ce8.png') }}\" alt=\"ban how to pledge\">
            <p></p>
            <!---->
            <p><strong>1. Cliquez sur «Back this Project»:</strong> sélectionnez le niveau de récompense disponible que vous<br> 
               souhaitez engager sur le côté droit de la page. Chaque contributeur ne peut s'engager qu'une <br>seule fois.</p>
               <!---->
            <p><strong>2. Paiement :</strong> Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun <br>
               modèle à ce stade, vous autoriserez uniquement Kickstarter à vous facturer le coût de la <br>promesse 
               à la fin de la campagne si nous atteignons l'objectif initial.</p>
               <!---->
            <p><strong>3. Informations sur le modèle, la couleur et la livraison :</strong> Ne vous inquiétez pas pour le<br>  
                moment
               ! Une fois la campagne terminée, vous recevrez un sondage indiquant vos informations <br>de modèle 
               choisi, la couleur et le lieu d’expédition.</p>
               <!---->
            <p>À tous les donateurs : Nous expédierons Owl Eyewear dans le monde entier. Merci à tous !</p>

        <div class=\"parainage\">
        <p></p>
            <img class=\"lblSpons\" src=\"{{ asset('build/images/parrainage.bf9e3fde.png') }}\" alt=\"label Parainage\">
            <p> </p>
            <!---->
            <p>Obtenez un spray nettoyant <strong>gratuitement</strong> grâce à notre <strong>système de parrainage.</strong> </p>
            <!---->
            <p>C’est <strong>très simple :</strong></p>
            <!---->
            <p>Si vous connaissez <strong>quelqu’un</strong> qui pourrait être <strong>intéressé par les Owl Eyewear</strong>, vous pouvez<br> 
               lui partager la campagne et s’il contribue ensuite, vous pouvez avoir un <strong>spray nettoyant<br> 
               GRATUITEMENT !!</strong> Lorsque vous aurez reçu le questionnaire, nous vous demanderons le nom<br>
               et le numéro de contributeur du parrain à la personne parrainée, et inversement. </p>
            <p></p>
            <!---->
            </p>Vous pouvez trouver votre numéro de participant en haut de la page :</p>
            <img class=\"imgkickstart\" src=\"{{ asset('build/images/0403e075ba013fa0d8a9ceac0a1206a4.eb0076ad.png') }}\" alt=\"image kickstarter\">
            <p></p>
            <!---->
            <p>Nous vous <strong>recommandons vivement de partager la campagne sur vos réseaux sociaux</strong><br> pour nous
               aider et vous aider à trouver quelqu'un et obtenir <strong>un spray nettoyant gratuitement !!</strong></p>
               <p></p>
               <p></p>
        </div>
        </div>
        <p></p>
     
        <div class=\"crew\">
          <img class=\"banWhoWheAre\" src=\"{{ asset('build/images/FR14.466d13c4.png') }}\" alt=\"Qui somme nous\" id=\"equipe\">
          <!---->
          <p></p>
          <img class=\"imgEquipe\" src=\"{{ asset('build/images/ED.eea96dcb.png') }}\" alt=\"Equipe\" >
          <p></p>
          <!---->
          <p>Deux opticiens français souhaitant <strong>sécuriser votre vie quotidienne !</strong></p>
          <!---->
          <p>Le désir de développer ce projet est né de nos <strong>expériences professionnelles.</strong> Nous travaillions<br>
           tous les deux dans magasins d’optique différents ; et nous avons <strong>eu beaucoup de demandes<br> de personnes
            souhaitant améliorer leur vision la nuit.</strong></p>
          <!---->
          <p>Nous avons donc développé un projet visant à offrir une solution qualitative à toutes les<br> personnes
           ayants des gênes. Et maintenant, <strong>nous sommes très fiers de vous présenter les <br>lunettes Owl Eyewear.</strong></p>
        
           <img class =\"lblneedyou\" src=\"{{ asset('build/images/Besoin vous.b9df6fff.png') }}\" alt=\"qui somme nous\">
           <!---->
           <p></p>
           <p><strong>Nous avons besoin de vous !</strong> Notre objectif est de lancer notre entreprise et de <strong>démocratiser</strong><br> notre
              produit pour qu’il y ait <strong>moins d’accidents sur les routes.</strong> Nous voulons que ce produit <strong>de <br>qualité soit
              accessible et connu de tous.</strong></p>
            <!---->
           <p>C’est pourquoi nous nous lançons sur Kickstarter en proposant des <strong>lunettes de haute qualité <br>à petit prix.</strong>
               Actuellement sur Kickstarter vous bénéficiez d’un <strong>tarif exclusif</strong>, cependant lorsque <br>cette campagne sera 
               clause, nos produits seront uniquement disponibles au prix de 95€.  En vue <br>de la technicité et des
              caractéristiques des verres, nous vous proposons un<strong> prix Kickstarter très<br> intéressant.</strong></p>
           <p><strong>Nous espérons de tout cœur que notre produit vous convienne.</strong></p>
            <p><p>
            <!---->
           <p>Risques et défis :</p>
            <!---->
           <p>Les retards de livraison et de production sont toujours des risques, mais des risques imprévisibles.<br>
              Pour éviter les retards, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils <br>puissent
              nous fournir dans les délais les plus courts.</p>
            <!---->
           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde <br>à vos
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>
            <!---->
           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous<br> avons accompli
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous<br> soutenons des 
              campagnes depuis plusieurs années et nous souhaitions depuis longtemps<br> en créer une !</p>
        </div>
        </div>
        </div>
       
    </div>
{% endblock %}

", "main/home.html.twig", "E:\\wamp64\\www\\OWL-Eyewear\\templates\\main\\home.html.twig");
    }
}
