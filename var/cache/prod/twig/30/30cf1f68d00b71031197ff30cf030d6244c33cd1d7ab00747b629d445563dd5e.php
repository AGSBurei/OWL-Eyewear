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
class __TwigTemplate_0509293f0534aa9ffd8509777562e91e0915a5a2f7ca8385e5832c5bfb2184dc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homeStyle");
        echo "\">
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <body>
        <div class=\"bg-image\"> 

            <div class=\"Countdown\">
  
            </div>
            <div class=\" txt-presentation\">
              <h1>Owl Eyewear - Améliorez votre vision la nuit.</h1>
              <p></p>
              <p><strong>LES LUNETTES OWL SONT CONÇU AVEC DES VERRES HAUTS DE GAMME PERFORMANTS QUI AMELIORENT LA VISION LA NUIT. ELLE PERMET DE CONDUIRE PLUS SEREINEMENT ET AISEMENT.</strong></p>
              <p> La nuit, le trafic routier ne représente que <strong>10% du trafic journalier </strong> mais <strong>génère 40% des accidents graves ou mortels</strong>. Plusieurs 
              raisons sont en cause : la <strong>fatigue, la faible luminosité, une vision trouble, l’éblouissement dû aux phares</strong>, etc…</p>
              <p>La vision est moins précise car les yeux ont <strong>besoin de temps </strong>pour s’adapter aux <strong>variations de luminosité</strong> et pour 
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
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/OWL_logo.5da53e41.png"), "html", null, true);
        echo "\" alt=\"logoOwlEyeWear\">
  <p></p>
        <h2>Qui sommes-nous ?</h2>
        
        <p></p>
        <p>Pour éliminer ces inconforts, nous avons développé des lunettes ayant des <strong>verres évolués</strong> qui <br> permettent d’<strong>d’améliorer grandement la vision.</strong> </p>
        <p>Grâce à <strong>Owl Eyewear !</strong> Vous aurez un <strong>meilleur confort visuel</strong> lors de vos déplacements dans <br>
        des <strong>conditions de faible luminosité</strong> et rendrez les routes plus sures !</p>
        <div class=\"newsletter\">
        <p></p>
        <p></p>
        <p><strong>Si vous êtes intéressé par nos lunettes, renseignez votre adresse mail ci-dessous pour être averti lors de la mise en ligne de notre campagne de financement participative !</strong></p> 
          
          ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 44), 'row');
        echo " 
          <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
          ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
        <br>
        <br>
       
    <div class=\"glass\">
        <div class=\"labelFR\">
            <img class=\"lblFR\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR.456ebb3d.png"), "html", null, true);
        echo "\" alt=\"lblGlassFR\" id=\"SpecGlass\">
        </div>
            <br>
        <div class=\"labelSepcFR\">
              <img class=\"lblSpecFR\" src= \"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"lblSpecFR\">
        </div>
            <br>
        <div class=\"GlassDetailFR\">
            <img class=\"imgGlassDetailEN\" src= \"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Lunettes araignée.b9a13f1f.png"), "html", null, true);
        echo "\" alt=\"lblGlassDetailFR\">
        </div>
    </div>
        <br>
    <div class=\"coat\">
        <div class=\"labelCoatType\">
          <img class =\"lblCoatType\" src= \"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Details traitements.7474e869.png"), "html", null, true);
        echo "\" alt=\"lblCoatTypeFR\"> 
        </div>
            <br>
        
        <img class=\"coatdetail\" src =\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Détails des traitements.ee731cde.png"), "html", null, true);
        echo "\" alt=\"coatdetail\">
    </img>
    
        <br>
    </div>

  <br>
      <div class=\"solution\">
        <img class=\"lblsolutFR\" src = \"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR3.484e8eb8.png"), "html", null, true);
        echo "\" alt=\"lblSolv\" id=\"resolut\">
   
        <br>
        <p></p>
        <img class=\"lblWhenWear\" src = \"";
        // line 84
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
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FIGFINAL.396b4767.gif"), "html", null, true);
        echo "\" alt=\"gifSolv\">
        <p></p>
        <p></p>
        <p></p>
        <img class =\"genbenef\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gene_et_benef.292fd87c.png"), "html", null, true);
        echo "\" alt=\"lblgenbenef\">
        <p></p>
        <img class =\"imgtableau\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/recap.27b6e826.png"), "html", null, true);
        echo "\" alt=\"tableau\">
        <p></p>
        <img class=\"lblWhoisConcern\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/personnes_concernees.b22c5392.png"), "html", null, true);
        echo "\" alt=\"label personne concerné\">
        <p></p>
        <p>Pour toutes les personnes ressentant des gênes ou voulant un meilleur confort visuel.</p>
        <img class=\"imgConcerner\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/Pour_Qui.465be7be.png"), "html", null, true);
        echo "\" alt=\"pour qui\">
        <p></p>
        <p>Les lunettes Owl Eyewear peuvent être portées en <strong>voiture, à moto, à vélo et même en <br>trottinette électrique !</strong></p>
      </div>
      <br>    
    
  
 
  
      
     
  
      <div class=\"stats\">
      <p></p>
      <p></p>
        <img class=\"statisticsFR\" src=\"";
        // line 120
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
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR5.7549b27e.png"), "html", null, true);
        echo "\" alt=\"lstMonture\" id=\"listMonture\">
          <p></p>
          <img class=\"pngspec\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Carac monture.e5411406.png"), "html", null, true);
        echo "\" alt=\"pngspec\">
          <p></p>
          <img class=\"spec\" src=\"";
        // line 139
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
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gif.7cd42fe3.gif"), "html", null, true);
        echo "\" alt=\"gif- Lunettes portées par Alison et Damien\">
          </div>
          <p></p>

          <p>Pour ceux ayant besoin de corrections nous proposons <strong>2 sur-lunettes</strong> dans <strong>deux tailles<br> différentes.</strong>>
             Elles sont conçues pour se placer <strong>par-dessus vos lunettes correctrices.</strong></p>
            <img class=\"gifsurglass\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.6910b146.gif"), "html", null, true);
        echo "\" alt=\"surlunette\">
          <p></p>
          <div><p>Il existe <strong>différentes couleurs</strong> pour les modèles plastiques ainsi que <strong>différentes formes.</strong><br> 
             Vous permettant de choisir le modèle qui <strong>vous convient le mieux.</strong><br>
          <p><strong>D’autres modèles</strong> seront disponibles <strong>si les objectifs de campagne sont atteints</strong><br> 
          (25000€, 50000€, 75000€). Une seule couleur est disponible par modèle.</p>

          <img class=\"pngLblframe\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Nos modSles.c402ed27.png"), "html", null, true);
        echo "\" alt=\"lblFrame\">
    
          </div>



          <div class=\"picbox\">
          <div class=\"img1\">
          <img class=\"imgframe1\"  src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Ronde_Ecaille.0414298f.png"), "html", null, true);
        echo "\" alt=\"imgFrame1\">
          <p></p>
          <p>Ronde Ecaille</p>
          </div>
          <p></p>
          <div class=\"img2\">
          <img class=\"imgframe2\"  src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/27a16970da1f818ea2419f93a8a16be4_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame2\">
          <p>Ronde noir mat</p>
          </div>
          <p></p>
          <div class=\"img3\">
          <img class=\"imgframe3\"  src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png"), "html", null, true);
        echo "\" alt=\"imgFrame3\">
          <p>Rectangle brun brillant</p>
          </div>
          <p></p>
          <div class=\"img4\">
          <img class=\"imgframe4\"  src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png"), "html", null, true);
        echo "\" alt=\"imgFrame4\">
          <p>Rectangle noir mat</p>
          </div>
          <p></p>
          <div class=\"img5\">
          <img class=\"imgframe5\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png"), "html", null, true);
        echo "\" alt=\"imgFrame5\">
          <p>sur-lunette</p>
          </div>
          <p></p>
          <div class=\"img6\">
          <img class=\"imgFrame6\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/5782e86838a62dd05d3348f28b44c4a2_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame6\">
          <p>Combinée ecaille</p>
          </div>
          <p></p>
          <div class=\"img7\">
          <img class=\"imgframe7\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png"), "html", null, true);
        echo "\" alt=\"imgFrame7\">
          <p>Ronde noir métal</p>
          </div>
          <p></p>
          <div class=\"img8\">
          <img class=\"imgframe8\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame8\">
          </div>
          <p></p>
          <div class=\"img9\">
          <img class=\"imgframe9\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame9\">
          </div>
          <p></p>
          <div class=\"img10\">
          <img class=\"imgFrame10\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg"), "html", null, true);
        echo "\" alt=\"imgFrame10\">
          </div>
          <p></p>
          <div class=\"img11\">
          <img class=\"imgFrame11\" src=\"";
        // line 217
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR6.bfb517ea.png"), "html", null, true);
        echo "\" alt=\"BannièreChoix\" id=\"taille\">
          <p></p>
          <img class=\"imgChoix\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/choix_taille.9bdf361c.png"), "html", null, true);
        echo "\" alt=\"imageChoix\">
          <p></p>
          <img class=\"imgPort1\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 

          </div>
              <p></p>
  
        
        <div class=\"reception\">
            <p></p>
            <p></p>
            <img class=\"banRecep\" src=\"";
        // line 238
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
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/PackFR.e1fd8347.png"), "html", null, true);
        echo "\" alt=\"image pack\">
            <p></p>
            </div>

            <div class=\"fabrication\">
            <img class=\"banHowMake\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/process.5f63f1a7.png"), "html", null, true);
        echo "\" alt=\"image How Make\" id=\"fabrique\">
            <p></p>
            <p>Une fois que nous aurons reçu les questionnaires avec la monture que vous aurez choisie.<br>
               Nos fournisseurs nous feront parvenir les verres ainsi que les montures.</p>
            <img class=\"gifMaker\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif"), "html", null, true);
        echo "\" alt=\"gif fabriquation\">
            <p></p>
            <p>Nous assemblerons l’ensemble des équipements dans <strong>notre atelier en France.</strong> Les verres,<br>
               seront taillés, monté ; les montures seront <strong>ajustées, nettoyées</strong> et <strong>minutieusement emballées</strong><br>
               par des <strong>opticiens diplômés.</strong></p>
            <p></p>
            <p></p>
           
            </div>
       <div class=\"infoAdit\">

       
          <img class=\"lblInfoSupFR\" src = \"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/FR2.1671e564.png"), "html", null, true);
        echo "\" alt=\"lblInfoSupFR\" id=\"infoSup\">
          <p></p>
          <img class=\"lblOrigine\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Origines_verres.png"), "html", null, true);
        echo "\" alt =\"labelorigin\">
          <p></p>
          <img class=\"imgOrigine\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/InfoFR.4a6c20e9.png"), "html", null, true);
        echo "\" alt=\"imageg Origine\">
          <p></p>
          <img class=\"lblYellowFR\" src = \"";
        // line 275
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
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FRcourbe.57889c14.png"), "html", null, true);
        echo "\" alt=\"pngGraphGlsFR\">
        <div class=\"legendeGraph\">
      <p>Comparaison coupure UV d'un verre ordinaire contre un verre Owl Eyewear </p>
      </div>
      
<div class =\"myopienuit\">
       <img class=\"lblNightMyopFR\" src=\"";
        // line 294
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
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/net.c81b8bd3.png"), "html", null, true);
        echo "\" alt=\"pngSunViewFR\">
                <p>Vision normal de jour</p>

                <img class=\"pngNightViewFR\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Flou.77ea1e45.png"), "html", null, true);
        echo "\" alt=\"pngNightViewFR\">
                <p>Vision flou de nuit</p>

                <img class=\"pngNihtViewCorFR\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/corrige.c6f47421.png"), "html", null, true);
        echo "\" alt=\"pngNihtViewCorFR\">
                <p>Vision corrigée de nuit avec les verres OWL EyeWear</p>
          </div>
           <p></p>
           <p></p>
      <p></p>
      </div>

        <div class=\"parainage\">
        <p></p>
            <img class=\"lblSpons\" src=\"";
        // line 324
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
            <img class=\"gifSpray\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/VID_20191010_161057_1.f93f3aea.gif"), "html", null, true);
        echo "\" alt=\"gifSpray\">
            <!---->
            </p>Vous pouvez trouver votre numéro de participant en haut de la page :</p>
            <img class=\"imgkickstart\" src=\"";
        // line 339
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
        <div class=\"testeur\">
        <img class=\"bantest\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Avis_des_testeurs.2a67f876.png"), "html", null, true);
        echo "\" alt=\"bannière testeur\">
        <p></p>
        <p>Nous avons testé nos produit sur divers profils de conducteurs, voici quelques retours:</p>
        <img class=\"imgavis\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/AvisFR.03ac66c6.png"), "html", null, true);
        echo "\" alt=\"avis\">
        </div>
        
        <div class=\"objectif\">
          <img class=\"banbanObjectnO\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR9.02bfd0dc.png"), "html", null, true);
        echo "\" alt=\"objectif\" id=\"objectif\">
          <p></p>
          <img class=\"imgObject\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Objectifs.1ecbce6e.png"), "html", null, true);
        echo "\" alt =\"image objectif\">
        </div>
        
        <p></p>
        <p></p>
        <div class=\"roadmap\">
          <img class=\"banRoadMap\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR10.1cd7fac0.png"), "html", null, true);
        echo "\" alt=\"banRoadMap\">
          <p></p>
          <img class=\"imgRoadMap\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Timeline FR.79bc3124.png"), "html", null, true);
        echo "\" alt=\"image roadmap\">
        </div>
        <!--kickstarter-->
        <p></p>
        <div class=\"kickstarter\">
            <img class=\"banPledgeList\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR11.d4b54aa5.png"), "html", null, true);
        echo "\" alt=\"Banniere Kick\" id=\"pack\">
            <p></p>
            <div class=\"pledgeListe\">
                <img class=\"pledge1\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.e5ff50a3.png"), "html", null, true);
        echo "\" alt=\"pledge 1\">
                <p></p>
                <img class=\"pledge2\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2.12448040.png"), "html", null, true);
        echo "\" alt=\"pledge 2\">
                <p></p>
                <img class=\"pledge3\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/4.61d04de2.png"), "html", null, true);
        echo "\" alt=\"pledge 3\">
                <p></p>
                <img class=\"pledge4\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/10.7b031ebc.png"), "html", null, true);
        echo "\" alt=\"pledge 4\">
                <p></p>
                <img class=\"pledge5\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/20.33ee32de.png"), "html", null, true);
        echo "\" alt=\"pledge 5\">
            </div>
            <img class=\"imgPort2\" src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Frais_de_port.5f5d9ab4.png"), "html", null, true);
        echo "\" alt=\"frais de port\"> 
        </div>
 
        <div class=\"howTo\" id=\"participer\">
            <img class=\"banhtPledge\" src=\"";
        // line 389
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

        </div>
        <p></p>
     
        <div class=\"crew\">
          <img class=\"banWhoWheAre\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/FR14.466d13c4.png"), "html", null, true);
        echo "\" alt=\"Qui somme nous\" id=\"equipe\">
          <!---->
          <p></p>
          <img class=\"imgEquipe\" src=\"";
        // line 413
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
        // line 425
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
        return array (  690 => 425,  675 => 413,  669 => 410,  645 => 389,  638 => 385,  633 => 383,  628 => 381,  623 => 379,  618 => 377,  613 => 375,  607 => 372,  599 => 367,  594 => 365,  585 => 359,  580 => 357,  573 => 353,  567 => 350,  553 => 339,  547 => 336,  532 => 324,  519 => 314,  513 => 311,  507 => 308,  490 => 294,  481 => 288,  465 => 275,  460 => 273,  455 => 271,  450 => 269,  435 => 257,  428 => 253,  420 => 248,  407 => 238,  395 => 229,  390 => 227,  385 => 225,  374 => 217,  367 => 213,  360 => 209,  353 => 205,  345 => 200,  337 => 195,  329 => 190,  321 => 185,  313 => 180,  305 => 175,  296 => 169,  285 => 161,  275 => 154,  266 => 148,  254 => 139,  249 => 137,  244 => 135,  226 => 120,  208 => 105,  202 => 102,  197 => 100,  192 => 98,  185 => 94,  172 => 84,  165 => 80,  154 => 72,  147 => 68,  138 => 62,  131 => 58,  124 => 54,  113 => 46,  108 => 44,  104 => 43,  88 => 30,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/home.html.twig", "C:\\wamp64\\www\\OWL-Eyewear\\templates\\main\\home.html.twig");
    }
}
