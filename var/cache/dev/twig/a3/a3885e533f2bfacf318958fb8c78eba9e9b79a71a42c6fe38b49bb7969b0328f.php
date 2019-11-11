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

/* main/faq.html.twig */
class __TwigTemplate_6d7e227d0d4bffbc550a0bf7f64d4e56fbd7841253b1a75e7f0932388ff6dd9f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/faq.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "main/faq.html.twig", 1);
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
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basesStyle");
        echo " ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("faq");
        
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

  <h1><p class=\"title\">Foire aux questions</p></h1>
  
  <div id=\"accordion\">
    <div class=\"card\">
        <div class=\"card-header\" id=\"headingOne\">
            <h5 class=\"mb-0\">
                <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                Ou sont faites les lunettes ?
                </button>
            </h5>
        </div>
        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
            <div class=\"card-body\">
                <p>Nos lunettes sont assemblées en France dans un atelier français, par des Opticiens diplômés et compétents.</p>
            </div>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-header\" id=\"headingTwo\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
            Comment nettoyer mes lunettes ?
            </button>
        </h5>
        </div>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Pour nettoyer vos lunettes nous vous conseillons d’utiliser la microfibre. Vous pouvez utiliser de l’eau tiède ou des produits nettoyants achetés chez des Opticiens ! Les produits de grande surface peuvent endommager les traitements.</p>
                <p>Les solutions suivantes sont à proscrire :<br>
                - Essuie-tout,<br>
                - Vêtements,<br>
                - Eau Chaude,<br>
                - Solvants,<br>
                - Lave-vaisselle.</p>
        </div>
        </div>
    </div>
    

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingThree\">
            <h5 class=\"mb-0\">
                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                Comment faire pour l’ajustage et les réparations ?
                </button>
            </h5>
        </div>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
            <div class=\"card-body\">
                <p>Si votre monture glisse ou n’est pas confortable, n’hésitez pas à vous rendre chez un opticien pour qu’il puisse vous ajuster les montures.</p>
                <p>Si la lunette présente un défaut, nos produits n’étant pas garantis, nous vous invitons à vous rendre dans un magasin d’optique pour effectuer
                 la réparation. Si la monture n’est pas réparable nous vous conseillons de demander une retaille de verre sur une autre monture.</p>

            </div>
        </div>
    </div>
 

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingfourth\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapsefourth\" aria-expanded=\"false\" aria-controls=\"collapsefourth\">
            Comment choisir sa taille ?
            </button>
        </h5>
        </div>
        <div id=\"collapsefourth\" class=\"collapse\" aria-labelledby=\"headingfourth\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Le choix des tailles est très important. La procédure est simple, il suffit de juger de votre largeur de visage. Les personnes ayant un visage
             plutôt large ou une racine nasale large, seront invités à prendre les montures de forme rectangulaire. Les personnes au visage plus minces peuvent opter pour n’importe quelle monture.</p>
            <p>Les sur-lunettes existent dans deux tailles différentes.</p>
            <p>Si la taille ne vous convient pas, des réglages sont possibles ! N’hésitez pas à vous rendre dans un magasin d’optique pour demander un ajustage !</p>


        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingfifth\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapsefifth\" aria-expanded=\"false\" aria-controls=\"collapsefifth\">
            Les montures sont-elles unisexe ?
            </button>
        </h5>
        </div>
        <div id=\"collapsefifth\" class=\"collapse\" aria-labelledby=\"headingfifth\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nous avons choisi nos montures pour qu’elles conviennent à tous les genres ! Elles sont donc unisexes !</p>
        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading6\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
            Quand utiliser les lunettes Owl Eyewear ?
            </button>
        </h5>
        </div>
        <div id=\"collapse6\" class=\"collapse\" aria-labelledby=\"heading6\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nos lunettes ont été conçues pour être portées dans plusieurs situations :<br>
                - Au crépuscule<br>
                - La nuit<br>
                - Dans le brouillard<br>
                - Sous de fortes pluies<br>
            Chacun aura un ressenti différents. Il est important d’effectuer des essais dans ces différentes situations. Il faut savoir que d’après une étude réalisée auprès de plusieurs centaines de Français, 95% des porteurs de ces équipements sont satisfait alors que la majorité des équipements étaient moins évolués que les nôtres !</p>

        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading7\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse7\" aria-expanded=\"false\" aria-controls=\"collapse7\">
                Peut-on adapter les lunettes à ma vue ?
            </button>
        </h5>
        </div>
        <div id=\"collapse7\" class=\"collapse\" aria-labelledby=\"heading7\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>En tant qu’opticien, nous avons pris la décision de ne pas adapter nos produits à la vue et ceux pour plusieurs raisons : Quand les verres corrigent votre défaut visuel, des mesures précises doivent être prises pour garantir un bon centrage des verres et votre confort.<br>
            Nous proposons une solution plus simple et surtout plus économique !<br>
            Optez pour des sur-lunettes à placer par-dessus vos lunettes correctrices !<br>
            Tous nos modèles peuvent être portés par-dessus des lentilles de contact</p>

        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading8\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse8\" aria-expanded=\"false\" aria-controls=\"collapse8\">
                Dois-je payer des frais supplémentaires ?
            </button>
        </h5>
        </div>
        <div id=\"collapse8\" class=\"collapse\" aria-labelledby=\"heading8\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Les taxes dépendent de votre pays. Nous vous conseillons de vous renseigner auprès de votre bureau de poste local pour plus d’informations.<br>
            Nous ne pouvons facturer des taxes ou la TVA de chaque pays, s’ils sont applicables ils doivent (en général) être réglées à la réception du colis.</p>
           <p> Nous envoyons les colis par le service de poste national Français (La Poste). Les personnes situées en France et dans l’Union Européenne ne payeront normalement pas de taxes supplémentaires.</p>

        </div>
        </div>
    </div>

        <div class=\"card\">
        <div class=\"card-header\" id=\"heading9\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse9\" aria-expanded=\"false\" aria-controls=\"collapse9\">
                Quelle est la politique d’annulation et de remboursement ?
            </button>
        </h5>
        </div>
        <div id=\"collapse9\" class=\"collapse\" aria-labelledby=\"heading9\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Etant une jeune entreprise créant une campagne Kickstarter, nous avons un budget limité. L’ensemble des revenus est destiné à la commande des produits
            et à l’amélioration de la société. Nous commandons le nombre de produits indiqué par nos contributeurs. Nous ne pouvons donc supporter le retour de la
             marchandise et le remboursement des équipements une fois les commandes passées.</p>

        </div>
        </div>
    </div>
    
    <div class=\"card\">
        <div class=\"card-header\" id=\"heading10\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse10\" aria-expanded=\"false\" aria-controls=\"collapse10\">
                Quelles sont les garanties ?
            </button>
        </h5>
        </div>
        <div id=\"collapse10\" class=\"collapse\" aria-labelledby=\"heading10\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nos produits sont de bonne qualité, dans une situation d’utilisation normale il n’y a aucun risque de casse, de plus nos produits sont<br>
           minutieusement inspectés et préparés avant l’envoi. Nos contributeurs sont situés partout dans le monde.</p>
           <p>C’est pour ces raisons que nos produits ne sont pas garantis.</p>
            <p>Si toute fois un de vos lunettes venait à casser, nous vous conseillons de vous rendre chez un opticien près de chez vous, il trouvera certainement une solution.</p>
        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading11\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse11\" aria-expanded=\"false\" aria-controls=\"collapse11\">
                \tQue se passe-t-il après la campagne ?
            </button>
        </h5>
        </div>
        <div id=\"collapse11\" class=\"collapse\" aria-labelledby=\"heading11\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Un grand merci si nous arrivons à cette étape !!</p>
            <p>Après la campagne, vous serez prélevé du montant de votre contribution, pensez à la mettre à jour votre CB si ce n’est pas encore fait ! (En<br>
            général 5% des contributeurs ne paye pas leur contribution)</p>
            <p>Vous aurez une semaine après la fin de la campagne pour régler votre participation.</p>
            <p>Les fonds nous sont versés 14 jours après la fin de la campagne. Nous avons à ce moment-là la liste définitive des contributeurs et nous vous<br>
             feront parvenir un questionnaire pour nous indiquer votre choix ! Merci de répondre au plus vite à ce questionnaire afin de lancer les<br>
              commandes et la production le plus rapidement possible. Vous aurez un délai de 1 semaine pour répondre au questionnaire. Au-delà de ce<br>
               délai, la livraison de votre équipement ne pourra être assuré pour la date de livraison prévue initialement.</p>
</p>
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
        return "main/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 6,  102 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}
{% block head %}
{% block stylesheets %}{{ encore_entry_link_tags('app') }} {{ encore_entry_link_tags('basesStyle') }} {{ encore_entry_link_tags('faq') }}{% endblock %}
{% endblock %}
{% block body %}
  <body>

  <h1><p class=\"title\">Foire aux questions</p></h1>
  
  <div id=\"accordion\">
    <div class=\"card\">
        <div class=\"card-header\" id=\"headingOne\">
            <h5 class=\"mb-0\">
                <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                Ou sont faites les lunettes ?
                </button>
            </h5>
        </div>
        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
            <div class=\"card-body\">
                <p>Nos lunettes sont assemblées en France dans un atelier français, par des Opticiens diplômés et compétents.</p>
            </div>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-header\" id=\"headingTwo\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
            Comment nettoyer mes lunettes ?
            </button>
        </h5>
        </div>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Pour nettoyer vos lunettes nous vous conseillons d’utiliser la microfibre. Vous pouvez utiliser de l’eau tiède ou des produits nettoyants achetés chez des Opticiens ! Les produits de grande surface peuvent endommager les traitements.</p>
                <p>Les solutions suivantes sont à proscrire :<br>
                - Essuie-tout,<br>
                - Vêtements,<br>
                - Eau Chaude,<br>
                - Solvants,<br>
                - Lave-vaisselle.</p>
        </div>
        </div>
    </div>
    

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingThree\">
            <h5 class=\"mb-0\">
                <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                Comment faire pour l’ajustage et les réparations ?
                </button>
            </h5>
        </div>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
            <div class=\"card-body\">
                <p>Si votre monture glisse ou n’est pas confortable, n’hésitez pas à vous rendre chez un opticien pour qu’il puisse vous ajuster les montures.</p>
                <p>Si la lunette présente un défaut, nos produits n’étant pas garantis, nous vous invitons à vous rendre dans un magasin d’optique pour effectuer
                 la réparation. Si la monture n’est pas réparable nous vous conseillons de demander une retaille de verre sur une autre monture.</p>

            </div>
        </div>
    </div>
 

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingfourth\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapsefourth\" aria-expanded=\"false\" aria-controls=\"collapsefourth\">
            Comment choisir sa taille ?
            </button>
        </h5>
        </div>
        <div id=\"collapsefourth\" class=\"collapse\" aria-labelledby=\"headingfourth\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Le choix des tailles est très important. La procédure est simple, il suffit de juger de votre largeur de visage. Les personnes ayant un visage
             plutôt large ou une racine nasale large, seront invités à prendre les montures de forme rectangulaire. Les personnes au visage plus minces peuvent opter pour n’importe quelle monture.</p>
            <p>Les sur-lunettes existent dans deux tailles différentes.</p>
            <p>Si la taille ne vous convient pas, des réglages sont possibles ! N’hésitez pas à vous rendre dans un magasin d’optique pour demander un ajustage !</p>


        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"headingfifth\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapsefifth\" aria-expanded=\"false\" aria-controls=\"collapsefifth\">
            Les montures sont-elles unisexe ?
            </button>
        </h5>
        </div>
        <div id=\"collapsefifth\" class=\"collapse\" aria-labelledby=\"headingfifth\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nous avons choisi nos montures pour qu’elles conviennent à tous les genres ! Elles sont donc unisexes !</p>
        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading6\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
            Quand utiliser les lunettes Owl Eyewear ?
            </button>
        </h5>
        </div>
        <div id=\"collapse6\" class=\"collapse\" aria-labelledby=\"heading6\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nos lunettes ont été conçues pour être portées dans plusieurs situations :<br>
                - Au crépuscule<br>
                - La nuit<br>
                - Dans le brouillard<br>
                - Sous de fortes pluies<br>
            Chacun aura un ressenti différents. Il est important d’effectuer des essais dans ces différentes situations. Il faut savoir que d’après une étude réalisée auprès de plusieurs centaines de Français, 95% des porteurs de ces équipements sont satisfait alors que la majorité des équipements étaient moins évolués que les nôtres !</p>

        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading7\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse7\" aria-expanded=\"false\" aria-controls=\"collapse7\">
                Peut-on adapter les lunettes à ma vue ?
            </button>
        </h5>
        </div>
        <div id=\"collapse7\" class=\"collapse\" aria-labelledby=\"heading7\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>En tant qu’opticien, nous avons pris la décision de ne pas adapter nos produits à la vue et ceux pour plusieurs raisons : Quand les verres corrigent votre défaut visuel, des mesures précises doivent être prises pour garantir un bon centrage des verres et votre confort.<br>
            Nous proposons une solution plus simple et surtout plus économique !<br>
            Optez pour des sur-lunettes à placer par-dessus vos lunettes correctrices !<br>
            Tous nos modèles peuvent être portés par-dessus des lentilles de contact</p>

        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading8\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse8\" aria-expanded=\"false\" aria-controls=\"collapse8\">
                Dois-je payer des frais supplémentaires ?
            </button>
        </h5>
        </div>
        <div id=\"collapse8\" class=\"collapse\" aria-labelledby=\"heading8\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Les taxes dépendent de votre pays. Nous vous conseillons de vous renseigner auprès de votre bureau de poste local pour plus d’informations.<br>
            Nous ne pouvons facturer des taxes ou la TVA de chaque pays, s’ils sont applicables ils doivent (en général) être réglées à la réception du colis.</p>
           <p> Nous envoyons les colis par le service de poste national Français (La Poste). Les personnes situées en France et dans l’Union Européenne ne payeront normalement pas de taxes supplémentaires.</p>

        </div>
        </div>
    </div>

        <div class=\"card\">
        <div class=\"card-header\" id=\"heading9\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse9\" aria-expanded=\"false\" aria-controls=\"collapse9\">
                Quelle est la politique d’annulation et de remboursement ?
            </button>
        </h5>
        </div>
        <div id=\"collapse9\" class=\"collapse\" aria-labelledby=\"heading9\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Etant une jeune entreprise créant une campagne Kickstarter, nous avons un budget limité. L’ensemble des revenus est destiné à la commande des produits
            et à l’amélioration de la société. Nous commandons le nombre de produits indiqué par nos contributeurs. Nous ne pouvons donc supporter le retour de la
             marchandise et le remboursement des équipements une fois les commandes passées.</p>

        </div>
        </div>
    </div>
    
    <div class=\"card\">
        <div class=\"card-header\" id=\"heading10\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse10\" aria-expanded=\"false\" aria-controls=\"collapse10\">
                Quelles sont les garanties ?
            </button>
        </h5>
        </div>
        <div id=\"collapse10\" class=\"collapse\" aria-labelledby=\"heading10\" data-parent=\"#accordion\">
        <div class=\"card-body\">
           <p>Nos produits sont de bonne qualité, dans une situation d’utilisation normale il n’y a aucun risque de casse, de plus nos produits sont<br>
           minutieusement inspectés et préparés avant l’envoi. Nos contributeurs sont situés partout dans le monde.</p>
           <p>C’est pour ces raisons que nos produits ne sont pas garantis.</p>
            <p>Si toute fois un de vos lunettes venait à casser, nous vous conseillons de vous rendre chez un opticien près de chez vous, il trouvera certainement une solution.</p>
        </div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-header\" id=\"heading11\">
        <h5 class=\"mb-0\">
            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapse11\" aria-expanded=\"false\" aria-controls=\"collapse11\">
                \tQue se passe-t-il après la campagne ?
            </button>
        </h5>
        </div>
        <div id=\"collapse11\" class=\"collapse\" aria-labelledby=\"heading11\" data-parent=\"#accordion\">
        <div class=\"card-body\">
            <p>Un grand merci si nous arrivons à cette étape !!</p>
            <p>Après la campagne, vous serez prélevé du montant de votre contribution, pensez à la mettre à jour votre CB si ce n’est pas encore fait ! (En<br>
            général 5% des contributeurs ne paye pas leur contribution)</p>
            <p>Vous aurez une semaine après la fin de la campagne pour régler votre participation.</p>
            <p>Les fonds nous sont versés 14 jours après la fin de la campagne. Nous avons à ce moment-là la liste définitive des contributeurs et nous vous<br>
             feront parvenir un questionnaire pour nous indiquer votre choix ! Merci de répondre au plus vite à ce questionnaire afin de lancer les<br>
              commandes et la production le plus rapidement possible. Vous aurez un délai de 1 semaine pour répondre au questionnaire. Au-delà de ce<br>
               délai, la livraison de votre équipement ne pourra être assuré pour la date de livraison prévue initialement.</p>
</p>
        </div>
        </div>
    </div>
    

</div>
</body>
{% endblock %}

", "main/faq.html.twig", "E:\\wamp64\\www\\owleyewear\\templates\\main\\faq.html.twig");
    }
}
