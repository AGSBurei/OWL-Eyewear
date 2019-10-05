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
class __TwigTemplate_89c898029724d8f8e516f51877f9ca23741e2260a6ca4114e0c60d255df6aef2 extends \Twig\Template
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
            La nuit, le trafic routier ne représente que 10% du trafic journalier mais génère 40% des accidents graves ou mortels. Plusieurs raisons sont en cause: fatigue, faible luminosité, vision trouble, l’éblouissement dû aux phares, etc… </p>
            <p>La vision est moins précise car les yeux ont besoin de temps pour s’adapter aux variations de luminosité et bien percevoir les reliefs et les distances</p>
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
        <p>Pour éliminer ces inconforts, nous avons développé des lunettes ayant des verres évolués qui <br> permettront d’améliorer grandement la vision. </p>
        <p>Remerciez Owl Eyewear ! Vous aurez un meilleur confort visuel lors de vos déplacements dans des <br>conditions de faible luminosité et rendrez les routes plus sures !</p>
        
    </div>
        <br>
        <br>
        <!--Caratéristique des verres-->
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\" id=\"SpecGlass\">
        </div>
            <br>
        <div class=\"labelSepcFR\">
              <img class=\"lblSpecFR\" src= \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
        </div>
            <br>
        <div class=\"GlassDetailFR\">
            <img class=\"imgGlassDetailEN\" src= \"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Lunettes araignée.b9a13f1f.png"), "html", null, true);
        echo "\" alt=\"lblGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatType\" src= \"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
        
        <img class=\"coatdetail\" src =\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Détails des traitements.ee731cde.png"), "html", null, true);
        echo "\" alt=\"coatdetail\">
    </img>
    
        <br>
    <!-- section -->
  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR3.484e8eb8.png"), "html", null, true);
        echo "\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/quand_les_porter.0935229d.png"), "html", null, true);
        echo "\" alt=\"label quand les porte\">
        <p></p>
          <p>Les lunettes Owl Eyewear peuvent être portées dans différentes situations. Vous pouvez les utiliser <br>
            sur ’importe quelle route sombre (en ville ou à la campagne).Elles peuvent être portées au crépuscule,<br> 
            la nuit, dans le brouillard et sous de fortes averses.Lorsque vous portez les lunettes, vous rendez<br>
            la route plus sure, pour vous ainsi que pour les autres. Vous serez ravis des améliorations <br>
            que vous apportera cet équipement !</p>
        <p></p>
        <img class=\"gifSolv\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <img class=\"lblWhenWear2\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/quand_les_porter.0935229d.png"), "html", null, true);
        echo "\" alt=\"label quand les porter \">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées en voiture, à moto, à vélo et même en trottinette <br>électrique !</p>
        <img class=\"lblWhoisConcern\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/personnes_concernees.b22c5392.png"), "html", null, true);
        echo "\" alt=\"label personne concerné\">
        <p></p>
        <img class=\"imgConcerner\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Pour_Qui.465be7be.png"), "html", null, true);
        echo "\" alt=\"pour qui\">
      </div>
      <br>
      <br>
      <!--Info Adittionel-->
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR2.1671e564.png"), "html", null, true);
        echo "\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/verres jaunes.cb45cc79.png"), "html", null, true);
        echo "\" alt=\"lblYellowFR\">
      
        <p></p>
          <p>La teinte jaune (catégorie 0) est la solution contre les gênes visuelles dans des conditions <br> de conduite difficile.</p>
          <p>Le filtre jaune permet de filtrer les basses longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. Les longueurs d’ondes concernées sont entre 350 et 500nm.</p>
          <p>Riche en énergie, ces longueurs d’ondes sont plus diffusées dans l’atmosphère que les autres <br>longueurs d’ondes du spectre visible. La lumière bleue est le facteur principal de l’éblouissement <br> 
             et donne une impression de vision floue.</p>
          <p>Par conséquent, les verres jaunes offrent une protection maximale contre les rayons UV <br>
             et améliorent  la vision des contrastes et offre ainsi un meilleur confort.</p>
      <img class=\"pngGraphGlsFR\" src =\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRcourbe.57889c14.png"), "html", null, true);
        echo "\" alt=\"pngGraphGlsFR\">
      <p></p>
      <p></p>
      <p></p>
       <img class=\"lblNightMyopFR\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Myopi noc.54895fea.png"), "html", null, true);
        echo "\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, l’acuité visuelle diminue. C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un phénomène optique naturel. La myopie est un défaut visuel corrigé par des verres <br>négatifs divergents.
           Quand une personne est myope, sa vision de loin est trouble, sans possibilité <br> 
           de compenser  soit même ce défaut. </p>
        <p>La nuit, les conducteurs sont légèrement myopisés, c’est pourquoi nous avons ajouté une petite <br>
           correction de la myopie de -0.25D dans les verres afin d’apporter une vision parfaitement <br>
           nette et confortable.</p>

           <!--Myopie-->
          <div class= \"pngViewFR\" id=\"precision\">
                <img class=\"pngSunViewFR\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/net.c81b8bd3.png"), "html", null, true);
        echo "\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>

                <img class=\"pngNightViewFR\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Flou.77ea1e45.png"), "html", null, true);
        echo "\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit<p>

                <img class=\"pngNihtViewCorFR\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/corrige.c6f47421.png"), "html", null, true);
        echo "\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
          </div>
           <p></p>
           <p></p>
      <img class=\"lblPolarFR\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/verres polas.4267f8d5.png"), "html", null, true);
        echo "\" alt=\"lblPolarFR\">
      <p></p>
      <p> Conduire dans des mauvaises conditions lumineuses peut faire partie de notre vie de tous les <br>
          jours et c’est pour cela que nous espérons que ces lunettes deviendront un accessoire<br> 
          indispensable à toute personne ayant des gênes visuelles !</p> <br>
      </div>
      </div>
     
     <!--Statistique-->
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR4.c5c9ac1b.png"), "html", null, true);
        echo "\" alt=\"statisticsFR\" id=\"statsup\">
        <p></p>
        <p>D’après une étude réalisée en France, 42% des automobilistes conduisent la nuit au moins une <br> 
           fois par semaine et 89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.<br>
           De plus, la moitié des accidents mortels surviennent la nuit alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investit beaucoup d’efforts pour <br>
           développer des lunettes offrant confort et sérénité aux conducteurs.</p>
      <p></p>
      <p></p>
      </div>

      <!--Monture dispo-->
      <div class=\"framelst\">
          <img class=\"frame\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR5.7549b27e.png"), "html", null, true);
        echo "\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carac.f0aa1af4.png"), "html", null, true);
        echo "\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe 8 modèles de lunettes, disponibles uniquement sur Kickstarter. Vous pouvez choisir<br> 
             entre 6 modèles de montures classiques si vous ne portez pas de lunettes ou si vous portez<br>
             des lentillesde contact.</p>
          <p>Pour ceux ayant besoin de corrections nous proposons 2 sur-lunettes dans deux tailles différentes.<br>
             Elles sont conçues pour se placer par-dessus vos lunettes correctrices.</p>
          <div>Il existe différentes couleurs pour les modèles plastiques ainsi que différentes formes.<br> 
             Vous permettant de choisir le modèle qui vous convient le mieux.<br>
          <p>D’autres modèles seront disponibles si les objectifs de campagne sont atteints<br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle.</p>

          <img class=\"pngLblframe\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Nos modSles.c402ed27.png"), "html", null, true);
        echo "\" alt=\"lblFrame\">
    
          </div>
          <p></p>
          <p></p>
          <p></p>
          <!--Image-->
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/27a16970da1f818ea2419f93a8a16be4_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame1\">
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a84715986501781141e5074442b89746_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame2\">
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png"), "html", null, true);
        echo "\" alt=\"imgFrame3\">
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png"), "html", null, true);
        echo "\" alt=\"imgFrame4\">
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png"), "html", null, true);
        echo "\" alt=\"imgFrame5\">
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/5782e86838a62dd05d3348f28b44c4a2_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame6\">
          </img>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame7\">
          </div>
          <p></p>
          <div class=\"img8\">
          <img class=\"imgframe8\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame8\">
          </div>
          <p></p>
          <div class=\"img9\">
          <img class=\"imgframe9\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame9\">
          </div>
          <p></p>
          <div class=\"img10\">
          <img class=\"imgFrame10\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame10\">
          </div>
          <p></p>
          <div class=\"img11\">
          <img class=\"imgFrame11\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6f774fecf7de574748fb0bb69072090f_original.9dc1edab.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame11\">   
          </div>
          <p></p>
          <div class=\"gifMonture\">
          <img class=\"gifMonture\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gif.7cd42fe3.gif"), "html", null, true);
        echo "\" alt=\"gifMonture\">
          </dif>
          </div>
          <!--Fin des images-->
          <p></p>
          <!--Comment faire vôtre choix -->
          <p></p>
          <div class=\"choix\">
          <img class=\"banChoix\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR6.bfb517ea.png"), "html", null, true);
        echo "\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/choix_taille.9bdf361c.png"), "html", null, true);
        echo "\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 

          </div>
              <p></p>
      </div>
  
        <!--Réception -->
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR7.64d4c2e0.png"), "html", null, true);
        echo "\" alt=\"banniere reception\">
            <p></p>
            <p>La lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre<br> 
               le produit en valeur avec un packaging dans le thème de notre produit : l’obscurité.</p>
            <p>Dans le but de les protéger, vous disposerez également d’un étui souple. Grâce à celui-ci,<br>
               vos verres seront protégés et vous conserverez un bon confort visuel. Vous pouvez aussi les<br>
               ranger facilement dans la portière de votre voiture ou dans votre boite à gant sans risques.<br> 
               Il sera également fourni une microfibre pour nettoyer vos lunettes.</p>
            <p>Pour finir, nous vous offrons 2 stickers Owl Eyewear pour les collez ou vous le souhaitez !</p>
            <p></p>
            <img class=\"imgPack\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/PackFR.e1fd8347.png"), "html", null, true);
        echo "\" alt=\"image pack\">
            <p></p>
            <img class=\"banHowMake\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR8.7b369de1.png"), "html", null, true);
        echo "\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
            <p>Dès que nous aurons reçus les réponses aux questionnaires, nous enverrons les commandes à nos<br>
               fournisseurs des montures et des verres.</p>
            <img class=\"gifMaker\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif"), "html", null, true);
        echo "\" alt=\"gif fabriquation\">
            <p></p>
            <p>Nous assemblerons l’ensemble des équipements dans notre atelier en France. Les verres, seront<br> 
               taillés, monté ; les montures seront ajustées, nettoyées et minutieusement emballées par<br>
               des opticiens qualifiés.</p>
            <p></p>
            <p></p>
            <img class=\"lblOrigine\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Origines_verres.png"), "html", null, true);
        echo "\" alt =\"labelorigin\">
            <p></p>
            <img class=\"imgOrigine\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/InfoFR.c1aac979.png"), "html", null, true);
        echo "\" alt=\"imageg Origine\">
        </div>
        <p></p>
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Avis_des_testeurs.2a67f876.png"), "html", null, true);
        echo "\" alt=\"bannière testeur\">
        <p></p>
        <p>nous testons nos produit sur divers profile de conducteurs, voici quelques avis:</p>
        <img class=\"imgavis\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/AvisFR.03ac66c6.png"), "html", null, true);
        echo "\" alt=\"avis\">
        </div>
        <!--Objectif de campagne-->
        <div class=\"objectif\">
          <img class=\"banbanObjectnO\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR9.02bfd0dc.png"), "html", null, true);
        echo "\" alt=\"objectif\" id=\"objectif\">
          <p></p>
          <img class=\"imgObject\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Objectifs.1ecbce6e.png"), "html", null, true);
        echo "\" alt =\"image objectif\">
        </div>
        <!--RoadMap-->
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR10.1cd7fac0.png"), "html", null, true);
        echo "\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Timeline FR.79bc3124.png"), "html", null, true);
        echo "\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR11.d4b54aa5.png"), "html", null, true);
        echo "\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Pack 1.2b135557.png"), "html", null, true);
        echo "\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Pack 2.ceee6629.png"), "html", null, true);
        echo "\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Pack 3.8564b63a.png"), "html", null, true);
        echo "\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Pack 4.68626dfe.png"), "html", null, true);
        echo "\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Pack 5.9915f16a.png"), "html", null, true);
        echo "\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 
        </div>
        <!--Comment pledge-->
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR12.9f3e1ce8.png"), "html", null, true);
        echo "\" alt=\"ban how to pledge\">
            <p></p>
            <p>1. Cliquez sur «Back this Project»: sélectionnez le niveau de récompense disponible que vous<br> 
               souhaitez engager sur le côté droit de la page. Chaque contributeur ne peut s'engager qu'une seule fois.</p>
            <p>2. Paiement : Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun <br>
               modèle à ce stade, vous autoriserez uniquement Kickstarter à vous facturer le coût de la promesse <br>
               à la fin de la campagne si nous atteignons l'objectif initial.</p>
            <p>3. Informations sur le modèle, la couleur et la livraison : Ne vous inquiétez pas pour le moment<br> 
               ! Une fois la campagne terminée, vous recevrez un sondage indiquant vos informations de modèle<br> 
               choisi, la couleur et le lieu d’expédition.</p>
            <p>À tous les donateurs : Nous expédierons Owl Eyewear dans le monde entier. Merci à tous !</p>

        <div class=\"parainage\">
        <p></p>
            <img class=\"lblSpons\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/parrainage.bf9e3fde.png"), "html", null, true);
        echo "\" alt=\"label Parainage\">
            <p> </p>
            <p>Obtenez un spray nettoyant gratuitement grâce à notre système de parrainage. </p>
            <p>C’est très simple :</p>
            <p>Si vous connaissez quelqu’un qui pourrait être intéressé par les Owl Eyewear, vous pouvez<br> 
               lui partager la campagne et s’il contribue ensuite, vous pouvez avoir un spray nettoyant<br> 
               GRATUITEMENT !! Lorsque vous aurez reçu le questionnaire, nous vous demanderons le nom<br>
               et le numéro de contributeur du parrain à la personne parrainée, et inversement. </p>
            <p></p>
            </p>Vous pouvez trouver votre numéro de participant en haut de la page :</p>
            <img class=\"imgkickstart\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/0403e075ba013fa0d8a9ceac0a1206a4.eb0076ad.png"), "html", null, true);
        echo "\" alt=\"image kickstarter\">
            <p>Nous vous recommandons vivement de partager la campagne sur vos médias sociaux pour nous<br>
               aider et vous aider à trouver quelqu'un et obtenir un spray nettoyant gratuitement !!</p>
               <p></p>
               <p></p>
        </div>
        <p></p>
          <img class=\"banWhoWheAre\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR14.466d13c4.png"), "html", null, true);
        echo "\" alt=\"Qui somme nous\" id=\"equipe\">
          <p></p>
          <img class=\"imgEquipe\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ED.eea96dcb.png"), "html", null, true);
        echo "\" alt=\"Equipe\" >
          <p></p>
          <p>Deux opticiens français souhaitant sécuriser votre vie quotidienne !</p>
          <p>Le désir de développer ce projet est né de nos expériences professionnelles. Nous travaillions<br>
           tous les deux dans magasins d’optique différents ; et nous avons eu beaucoup de demandes de personnes<br>
            souhaitant améliorer leur vision la nuit.</p>
          <p>Nous avons donc développé un projet visant à offrir une solution qualitative à toutes les personnes<br>
           ayants des gênes. Et maintenant, nous sommes très fiers de vous présenter les lunettes Owl Eyewear.</p>
           <p></p>
           <p></p>
           <p></p>
           <img class =\"lblneedyou\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Besoin vous.b9df6fff.png"), "html", null, true);
        echo "\" alt=\"qui somme nous\">
           <p></p>
           <p>Nous avons besoin de vous ! Notre objectif est de lancer notre entreprise et de démocratiser notre<br>
              produit pour qu’il y ait moins d’accidents sur les routes. Nous voulons que ce produit de qualité soit<br>
              accessible et connu de tous.</p>

           <p>C’est pourquoi nous nous lançons sur Kickstarter en proposant des lunettes de haute qualité à petit prix.<br>
               Actuellement sur Kickstarter vous bénéficiez d’un tarif exclusif, cependant lorsque cette campagne sera<br> 
               clause, nos produits seront uniquement disponibles au prix de 95€.  En vue de la technicité et des<br>
              caractéristiques des verres, nous vous proposons un prix Kickstarter très intéressant.</p>

           <p>Nous espérons de tout cœur que notre produit vous convienne.</p>

           <p>Risques et défis :</p>

           <p>Les retards de livraison et de production sont toujours des risques, mais des risques imprévisibles.<br>
              Pour éviter les retards, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils puissent<br>
              nous fournir dans les délais les plus courts.</p>

           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde à vos<br>
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>

           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous avons accompli<br>
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous soutenons des campagnes depuis<br>
              plusieurs années et nous souhaitions depuis longtemps en créer une !</p>
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
        return array (  643 => 366,  629 => 355,  624 => 353,  614 => 346,  601 => 336,  584 => 322,  577 => 318,  572 => 316,  567 => 314,  562 => 312,  557 => 310,  552 => 308,  546 => 305,  538 => 300,  533 => 298,  524 => 292,  519 => 290,  512 => 286,  506 => 283,  499 => 279,  494 => 277,  484 => 270,  477 => 266,  472 => 264,  459 => 254,  446 => 244,  441 => 242,  436 => 240,  425 => 232,  418 => 228,  411 => 224,  404 => 220,  397 => 216,  390 => 212,  383 => 208,  376 => 204,  369 => 200,  362 => 196,  355 => 192,  348 => 188,  337 => 180,  320 => 166,  315 => 164,  310 => 162,  294 => 149,  279 => 137,  271 => 132,  265 => 129,  259 => 126,  244 => 114,  237 => 110,  224 => 100,  219 => 98,  210 => 92,  205 => 90,  199 => 87,  193 => 84,  182 => 76,  175 => 72,  165 => 65,  158 => 61,  149 => 55,  142 => 51,  135 => 47,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
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
            La nuit, le trafic routier ne représente que 10% du trafic journalier mais génère 40% des accidents graves ou mortels. Plusieurs raisons sont en cause: fatigue, faible luminosité, vision trouble, l’éblouissement dû aux phares, etc… </p>
            <p>La vision est moins précise car les yeux ont besoin de temps pour s’adapter aux variations de luminosité et bien percevoir les reliefs et les distances</p>
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
        <p>Pour éliminer ces inconforts, nous avons développé des lunettes ayant des verres évolués qui <br> permettront d’améliorer grandement la vision. </p>
        <p>Remerciez Owl Eyewear ! Vous aurez un meilleur confort visuel lors de vos déplacements dans des <br>conditions de faible luminosité et rendrez les routes plus sures !</p>
        
    </div>
        <br>
        <br>
        <!--Caratéristique des verres-->
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
    <!-- section -->
  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"{{ asset (\"/build/images/FR3.484e8eb8.png\") }}\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"{{ asset ('/build/images/quand_les_porter.0935229d.png') }}\" alt=\"label quand les porte\">
        <p></p>
          <p>Les lunettes Owl Eyewear peuvent être portées dans différentes situations. Vous pouvez les utiliser <br>
            sur ’importe quelle route sombre (en ville ou à la campagne).Elles peuvent être portées au crépuscule,<br> 
            la nuit, dans le brouillard et sous de fortes averses.Lorsque vous portez les lunettes, vous rendez<br>
            la route plus sure, pour vous ainsi que pour les autres. Vous serez ravis des améliorations <br>
            que vous apportera cet équipement !</p>
        <p></p>
        <img class=\"gifSolv\" src=\"{{ asset (\"/build/images/FIGFINAL.396b4767.gif\") }}\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <img class=\"lblWhenWear2\" src=\"{{ asset(\"/build/images/quand_les_porter.0935229d.png\") }}\" alt=\"label quand les porter \">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées en voiture, à moto, à vélo et même en trottinette <br>électrique !</p>
        <img class=\"lblWhoisConcern\" src=\"{{ asset(\"/build/images/personnes_concernees.b22c5392.png\") }}\" alt=\"label personne concerné\">
        <p></p>
        <img class=\"imgConcerner\" src=\"{{ asset(\"/build/images/Pour_Qui.465be7be.png\") }}\" alt=\"pour qui\">
      </div>
      <br>
      <br>
      <!--Info Adittionel-->
    <div class=\"infoAdit\">
      <img class=\"lblInfoSupFR\" src = \"{{ asset (\"/build/images/FR2.1671e564.png\") }}\" alt=\"lblInfoSupFR\" id=\"infoSup\">
      <p></p>
      <img class=\"lblYellowFR\" src = \"{{ asset (\"/build/images/verres jaunes.cb45cc79.png\") }}\" alt=\"lblYellowFR\">
      
        <p></p>
          <p>La teinte jaune (catégorie 0) est la solution contre les gênes visuelles dans des conditions <br> de conduite difficile.</p>
          <p>Le filtre jaune permet de filtrer les basses longueurs d’onde, particulièrement la lumière bleue, <br> 
             source d’éblouissement. Les longueurs d’ondes concernées sont entre 350 et 500nm.</p>
          <p>Riche en énergie, ces longueurs d’ondes sont plus diffusées dans l’atmosphère que les autres <br>longueurs d’ondes du spectre visible. La lumière bleue est le facteur principal de l’éblouissement <br> 
             et donne une impression de vision floue.</p>
          <p>Par conséquent, les verres jaunes offrent une protection maximale contre les rayons UV <br>
             et améliorent  la vision des contrastes et offre ainsi un meilleur confort.</p>
      <img class=\"pngGraphGlsFR\" src =\"{{ asset(\"build/images/FRcourbe.57889c14.png\") }}\" alt=\"pngGraphGlsFR\">
      <p></p>
      <p></p>
      <p></p>
       <img class=\"lblNightMyopFR\" src=\"{{ asset(\"build/images/Myopi noc.54895fea.png\") }}\" alt=\"lblNightMyopFR\">
      <p></p>
        <p>La nuit, l’acuité visuelle diminue. C’est ce que l’on appelle la myopie nocturne physiologique.<br> 
           Il s’agit d’un phénomène optique naturel. La myopie est un défaut visuel corrigé par des verres <br>négatifs divergents.
           Quand une personne est myope, sa vision de loin est trouble, sans possibilité <br> 
           de compenser  soit même ce défaut. </p>
        <p>La nuit, les conducteurs sont légèrement myopisés, c’est pourquoi nous avons ajouté une petite <br>
           correction de la myopie de -0.25D dans les verres afin d’apporter une vision parfaitement <br>
           nette et confortable.</p>

           <!--Myopie-->
          <div class= \"pngViewFR\" id=\"precision\">
                <img class=\"pngSunViewFR\" src=\"{{ asset(\"build/images/net.c81b8bd3.png\") }}\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>

                <img class=\"pngNightViewFR\" src=\"{{ asset(\"build/images/Flou.77ea1e45.png\") }}\" alt=\"pngNightViewFR\">
                <p>Visionision flou de nuit<p>

                <img class=\"pngNihtViewCorFR\" src=\"{{ asset(\"build/images/corrige.c6f47421.png\") }}\" alt=\"pngNihtViewCorFR\">
                <p>Vision corriger de nuit avec les verres OWL EyeWear</p>
          </div>
           <p></p>
           <p></p>
      <img class=\"lblPolarFR\" src=\"{{ asset(\"build/images/verres polas.4267f8d5.png\") }}\" alt=\"lblPolarFR\">
      <p></p>
      <p> Conduire dans des mauvaises conditions lumineuses peut faire partie de notre vie de tous les <br>
          jours et c’est pour cela que nous espérons que ces lunettes deviendront un accessoire<br> 
          indispensable à toute personne ayant des gênes visuelles !</p> <br>
      </div>
      </div>
     
     <!--Statistique-->
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"{{ asset('build/images/FR4.c5c9ac1b.png') }}\" alt=\"statisticsFR\" id=\"statsup\">
        <p></p>
        <p>D’après une étude réalisée en France, 42% des automobilistes conduisent la nuit au moins une <br> 
           fois par semaine et 89.3% des conducteurs ressentent des gênes durant ces trajets nocturnes.<br>
           De plus, la moitié des accidents mortels surviennent la nuit alors que le trafic ne représente<br>
           que 10% du trafic journalier. C’est pourquoi nous avons investit beaucoup d’efforts pour <br>
           développer des lunettes offrant confort et sérénité aux conducteurs.</p>
      <p></p>
      <p></p>
      </div>

      <!--Monture dispo-->
      <div class=\"framelst\">
          <img class=\"frame\" src=\"{{ asset('build/images/FR5.7549b27e.png') }}\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"{{ asset('build/images/Carac monture.e5411406.png') }}\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"{{ asset('build/images/carac.f0aa1af4.png') }}\" alt=\"spec\">
          <p></p>
          <p></p>
          <p></p>
          <p>Il existe 8 modèles de lunettes, disponibles uniquement sur Kickstarter. Vous pouvez choisir<br> 
             entre 6 modèles de montures classiques si vous ne portez pas de lunettes ou si vous portez<br>
             des lentillesde contact.</p>
          <p>Pour ceux ayant besoin de corrections nous proposons 2 sur-lunettes dans deux tailles différentes.<br>
             Elles sont conçues pour se placer par-dessus vos lunettes correctrices.</p>
          <div>Il existe différentes couleurs pour les modèles plastiques ainsi que différentes formes.<br> 
             Vous permettant de choisir le modèle qui vous convient le mieux.<br>
          <p>D’autres modèles seront disponibles si les objectifs de campagne sont atteints<br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle.</p>

          <img class=\"pngLblframe\" src=\"{{ asset('build/images/Nos modSles.c402ed27.png') }}\" alt=\"lblFrame\">
    
          </div>
          <p></p>
          <p></p>
          <p></p>
          <!--Image-->
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"{{ asset('build/images/27a16970da1f818ea2419f93a8a16be4_original.png') }}\" alt=\"imgFrame1\">
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"{{ asset('build/images/a84715986501781141e5074442b89746_original.png') }}\" alt=\"imgFrame2\">
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"{{ asset('build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png') }}\" alt=\"imgFrame3\">
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"{{ asset('build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png') }}\" alt=\"imgFrame4\">
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"{{ asset('build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png') }}\" alt=\"imgFrame5\">
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"{{ asset('build/images/5782e86838a62dd05d3348f28b44c4a2_original.png') }}\" alt=\"imgFrame6\">
          </img>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"{{ asset('build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png') }}\" alt=\"imgFrame7\">
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
          <p></p>
          <div class=\"gifMonture\">
          <img class=\"gifMonture\" src=\"{{ asset('build/images/gif.7cd42fe3.gif') }}\" alt=\"gifMonture\">
          </dif>
          </div>
          <!--Fin des images-->
          <p></p>
          <!--Comment faire vôtre choix -->
          <p></p>
          <div class=\"choix\">
          <img class=\"banChoix\" src=\"{{ asset('build/images/FR6.bfb517ea.png') }}\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"{{ asset('build/images/choix_taille.9bdf361c.png') }}\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 

          </div>
              <p></p>
      </div>
  
        <!--Réception -->
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"{{ asset('build/images/FR7.64d4c2e0.png') }}\" alt=\"banniere reception\">
            <p></p>
            <p>La lunette choisie ne sera pas la seule chose que vous recevrez. Nous avons décidé de mettre<br> 
               le produit en valeur avec un packaging dans le thème de notre produit : l’obscurité.</p>
            <p>Dans le but de les protéger, vous disposerez également d’un étui souple. Grâce à celui-ci,<br>
               vos verres seront protégés et vous conserverez un bon confort visuel. Vous pouvez aussi les<br>
               ranger facilement dans la portière de votre voiture ou dans votre boite à gant sans risques.<br> 
               Il sera également fourni une microfibre pour nettoyer vos lunettes.</p>
            <p>Pour finir, nous vous offrons 2 stickers Owl Eyewear pour les collez ou vous le souhaitez !</p>
            <p></p>
            <img class=\"imgPack\" src=\"{{ asset('build/images/PackFR.e1fd8347.png') }}\" alt=\"image pack\">
            <p></p>
            <img class=\"banHowMake\" src=\"{{ asset('build/images/FR8.7b369de1.png') }}\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
            <p>Dès que nous aurons reçus les réponses aux questionnaires, nous enverrons les commandes à nos<br>
               fournisseurs des montures et des verres.</p>
            <img class=\"gifMaker\" src=\"{{ asset('build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif') }}\" alt=\"gif fabriquation\">
            <p></p>
            <p>Nous assemblerons l’ensemble des équipements dans notre atelier en France. Les verres, seront<br> 
               taillés, monté ; les montures seront ajustées, nettoyées et minutieusement emballées par<br>
               des opticiens qualifiés.</p>
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
        <!--Objectif de campagne-->
        <div class=\"objectif\">
          <img class=\"banbanObjectnO\" src=\"{{ asset('build/images/FR9.02bfd0dc.png') }}\" alt=\"objectif\" id=\"objectif\">
          <p></p>
          <img class=\"imgObject\" src=\"{{ asset('build/images/Objectifs.1ecbce6e.png') }}\" alt =\"image objectif\">
        </div>
        <!--RoadMap-->
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
                <img class=\"pledge1\" src=\"{{ asset('build/images/Pack 1.2b135557.png') }}\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"{{ asset('build/images/Pack 2.ceee6629.png') }}\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"{{ asset('build/images/Pack 3.8564b63a.png') }}\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"{{ asset('build/images/Pack 4.68626dfe.png') }}\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"{{ asset('build/images/Pack 5.9915f16a.png') }}\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"{{ asset('build/images/Frais_de_port.5f5d9ab4.png') }}\" alt=\"frais de port\"> 
        </div>
        <!--Comment pledge-->
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"{{ asset('build/images/FR12.9f3e1ce8.png') }}\" alt=\"ban how to pledge\">
            <p></p>
            <p>1. Cliquez sur «Back this Project»: sélectionnez le niveau de récompense disponible que vous<br> 
               souhaitez engager sur le côté droit de la page. Chaque contributeur ne peut s'engager qu'une seule fois.</p>
            <p>2. Paiement : Entrez vos informations de paiement. Vous ne payerez ni ne choisirez aucun <br>
               modèle à ce stade, vous autoriserez uniquement Kickstarter à vous facturer le coût de la promesse <br>
               à la fin de la campagne si nous atteignons l'objectif initial.</p>
            <p>3. Informations sur le modèle, la couleur et la livraison : Ne vous inquiétez pas pour le moment<br> 
               ! Une fois la campagne terminée, vous recevrez un sondage indiquant vos informations de modèle<br> 
               choisi, la couleur et le lieu d’expédition.</p>
            <p>À tous les donateurs : Nous expédierons Owl Eyewear dans le monde entier. Merci à tous !</p>

        <div class=\"parainage\">
        <p></p>
            <img class=\"lblSpons\" src=\"{{ asset('build/images/parrainage.bf9e3fde.png') }}\" alt=\"label Parainage\">
            <p> </p>
            <p>Obtenez un spray nettoyant gratuitement grâce à notre système de parrainage. </p>
            <p>C’est très simple :</p>
            <p>Si vous connaissez quelqu’un qui pourrait être intéressé par les Owl Eyewear, vous pouvez<br> 
               lui partager la campagne et s’il contribue ensuite, vous pouvez avoir un spray nettoyant<br> 
               GRATUITEMENT !! Lorsque vous aurez reçu le questionnaire, nous vous demanderons le nom<br>
               et le numéro de contributeur du parrain à la personne parrainée, et inversement. </p>
            <p></p>
            </p>Vous pouvez trouver votre numéro de participant en haut de la page :</p>
            <img class=\"imgkickstart\" src=\"{{ asset('build/images/0403e075ba013fa0d8a9ceac0a1206a4.eb0076ad.png') }}\" alt=\"image kickstarter\">
            <p>Nous vous recommandons vivement de partager la campagne sur vos médias sociaux pour nous<br>
               aider et vous aider à trouver quelqu'un et obtenir un spray nettoyant gratuitement !!</p>
               <p></p>
               <p></p>
        </div>
        <p></p>
          <img class=\"banWhoWheAre\" src=\"{{ asset('build/images/FR14.466d13c4.png') }}\" alt=\"Qui somme nous\" id=\"equipe\">
          <p></p>
          <img class=\"imgEquipe\" src=\"{{ asset('build/images/ED.eea96dcb.png') }}\" alt=\"Equipe\" >
          <p></p>
          <p>Deux opticiens français souhaitant sécuriser votre vie quotidienne !</p>
          <p>Le désir de développer ce projet est né de nos expériences professionnelles. Nous travaillions<br>
           tous les deux dans magasins d’optique différents ; et nous avons eu beaucoup de demandes de personnes<br>
            souhaitant améliorer leur vision la nuit.</p>
          <p>Nous avons donc développé un projet visant à offrir une solution qualitative à toutes les personnes<br>
           ayants des gênes. Et maintenant, nous sommes très fiers de vous présenter les lunettes Owl Eyewear.</p>
           <p></p>
           <p></p>
           <p></p>
           <img class =\"lblneedyou\" src=\"{{ asset('build/images/Besoin vous.b9df6fff.png') }}\" alt=\"qui somme nous\">
           <p></p>
           <p>Nous avons besoin de vous ! Notre objectif est de lancer notre entreprise et de démocratiser notre<br>
              produit pour qu’il y ait moins d’accidents sur les routes. Nous voulons que ce produit de qualité soit<br>
              accessible et connu de tous.</p>

           <p>C’est pourquoi nous nous lançons sur Kickstarter en proposant des lunettes de haute qualité à petit prix.<br>
               Actuellement sur Kickstarter vous bénéficiez d’un tarif exclusif, cependant lorsque cette campagne sera<br> 
               clause, nos produits seront uniquement disponibles au prix de 95€.  En vue de la technicité et des<br>
              caractéristiques des verres, nous vous proposons un prix Kickstarter très intéressant.</p>

           <p>Nous espérons de tout cœur que notre produit vous convienne.</p>

           <p>Risques et défis :</p>

           <p>Les retards de livraison et de production sont toujours des risques, mais des risques imprévisibles.<br>
              Pour éviter les retards, nous avons pris des précautions auprès de nos fournisseurs afin qu'ils puissent<br>
              nous fournir dans les délais les plus courts.</p>

           <p>Le plus gros défi aura été de développer un produit innovant, de qualité et abordable qui réponde à vos<br>
             besoins ! C'est incroyable d'être ici en train d'écrire ces lignes ! </p>

           <p>Nous travaillons sur ce projet depuis un moment et nous sommes très fiers de ce que nous avons accompli<br>
              pour notre première expérience en tant que créateurs sur Kickstarter. Nous soutenons des campagnes depuis<br>
              plusieurs années et nous souhaitions depuis longtemps en créer une !</p>
        </div>
        
    </div>
  

   
{% endblock %}
", "main/home.html.twig", "/home/burei/Documents/OWL-Eyewear/templates/main/home.html.twig");
    }
}
