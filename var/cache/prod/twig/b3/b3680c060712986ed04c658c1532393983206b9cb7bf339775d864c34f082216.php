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

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_febc1a6cf063ce8e3272ee62ba7b74b2a896b6d10fc3e77c738b4e5e221da682 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions_wrapper' => [$this, 'block_global_actions_wrapper'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_help' => [$this, 'block_content_help'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'content_footer' => [$this, 'block_content_footer'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        ";
        // line 20
        if (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color") != "hsl(230, 55%, 60%)")) {
            // line 21
            echo "        <style>
            :root { --color-primary: ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.brand_color"), "html", null, true);
            echo "; }
        </style>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) {
            // line 36
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-rtl.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 38
        echo "    </head>

    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 192
        echo "</html>
";
    }

    // line 10
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 26
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "            ";
        $context["favicon"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.favicon");
        // line 28
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "mime_type", [], "any", false, false, false, 28), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["favicon"] ?? null), "path", [], "any", false, false, false, 28)), "html", null, true);
        echo "\" />
        ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
        <script>
            document.body.classList.add(
                'easyadmin-content-width-' + (localStorage.getItem('easyadmin/content/width') || 'normal'),
                'easyadmin-sidebar-width-' + (localStorage.getItem('easyadmin/sidebar/width') || 'normal')
            );
        </script>

        ";
        // line 49
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 184
        echo "
        ";
        // line 185
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 186
        echo "
        ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 188
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "    </body>
    ";
    }

    // line 41
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "        <div class=\"wrapper\">
        ";
        // line 51
        $this->displayBlock('wrapper', $context, $blocks);
        // line 182
        echo "        </div>
        ";
    }

    // line 51
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "            <header class=\"main-header\">
                ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 116
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 119
        $this->displayBlock('sidebar', $context, $blocks);
        // line 131
        echo "            </aside>

            <div class=\"content-wrapper\">
                ";
        // line 134
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 137
        echo "
                <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 178
        echo "
                <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
            </div>
        ";
    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                    <nav class=\"navbar\" role=\"navigation\">
                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"header-logo\">
                            ";
        // line 60
        $this->displayBlock('header_logo', $context, $blocks);
        // line 65
        echo "                        </div>
                    </nav>

                    ";
        // line 68
        $context["_user_name"] = _twig_default_filter($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.name_property_path")), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.unnamed", array(), "EasyAdminBundle"));
        // line 69
        echo "                    ";
        $context["_logout_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getLogoutPath();
        // line 70
        echo "                    ";
        $context["_user_has_logout"] =  !twig_test_empty(($context["_logout_path"] ?? null));
        // line 71
        echo "                    ";
        $context["_user_is_impersonated"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN");
        // line 72
        echo "                    ";
        ob_start(function () { return ''; });
        // line 73
        echo "                        <div class=\"popover-content-section user-details ";
        echo (((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) ? ("user-has-actions") : (""));
        echo "\">
                            <p class=\"small text-muted mb-0\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                            <p class=\"user-details-name\">
                                ";
        // line 76
        if ((((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), false)) : (false)) == false)) {
            // line 77
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                ";
        } else {
            // line 79
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "
                                ";
        }
        // line 81
        echo "                            </p>
                        </div>

                        ";
        // line 84
        $this->displayBlock('user_menu', $context, $blocks);
        // line 96
        echo "                    ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "
                    <div class=\"content-top navbar-custom-menu\">
                        ";
        // line 99
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 114
        echo "                    </div>
                ";
    }

    // line 60
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                                <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                                    ";
        // line 62
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                                </a>
                            ";
    }

    // line 84
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                            ";
        if ((($context["_user_has_logout"] ?? null) || ($context["_user_is_impersonated"] ?? null))) {
            // line 86
            echo "                                <div class=\"popover-content-section user-menu\">
                                    ";
            // line 87
            if (($context["_user_has_logout"] ?? null)) {
                // line 88
                echo "                                        <a class=\"user-action user-action-logout\" href=\"";
                echo twig_escape_filter($this->env, ($context["_logout_path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 90
            echo "                                    ";
            if (($context["_user_is_impersonated"] ?? null)) {
                // line 91
                echo "                                        <a class=\"user-action user-action-exit-impersonation\" href=\"?_switch_user=_exit\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 93
            echo "                                </div>
                            ";
        }
        // line 95
        echo "                        ";
    }

    // line 99
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                            <div class=\"user user-menu-wrapper ";
        echo ((($context["_user_is_impersonated"] ?? null)) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                ";
        // line 101
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_avatar")) {
            // line 102
            echo "                                    ";
            $context["_avatar_image_path"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->readProperty(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.avatar_property_path"));
            // line 103
            echo "                                    ";
            if ((null == ($context["_avatar_image_path"] ?? null))) {
                // line 104
                echo "                                        <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 104))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                    ";
            } else {
                // line 106
                echo "                                        <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, ($context["_avatar_image_path"] ?? null), "html", null, true);
                echo "\" />
                                    ";
            }
            // line 108
            echo "                                ";
        }
        // line 109
        echo "                                ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("user.display_name")) {
            // line 110
            echo "                                    <span class=\"user-name\">";
            echo twig_escape_filter($this->env, ($context["_user_name"] ?? null), "html", null, true);
            echo "</span>
                                ";
        }
        // line 112
        echo "                            </div>
                        ";
    }

    // line 119
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                <section class=\"sidebar\">
                    ";
        // line 121
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 128
        echo "                </section>

            ";
    }

    // line 121
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                        ";
        echo twig_include($this->env, $context, [0 => ((        // line 123
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 123), "menu", [], "any", false, false, false, 123)) : ("")), 1 => $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"]);
        // line 126
        echo "
                    ";
    }

    // line 134
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                    ";
        echo twig_include($this->env, $context, (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 135), "flash_messages", [], "any", false, false, false, 135)) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                    <div class=\"content\">
                        ";
        // line 142
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 166
        echo "
                        <section id=\"main\" class=\"content-body\">
                            ";
        // line 168
        $this->displayBlock('main', $context, $blocks);
        // line 169
        echo "                        </section>

                        ";
        // line 171
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 176
        echo "                    </div>
                ";
    }

    // line 142
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                        ";
        $context["_has_content_help"] = ((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "query", [], "any", false, false, false, 143), "get", [0 => "action"], "method", false, false, false, 143), [], "array", false, true, false, 143), "help", [], "array", true, true, false, 143)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "query", [], "any", false, false, false, 143), "get", [0 => "action"], "method", false, false, false, 143), [], "array", false, true, false, 143)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["help"] ?? null) : null), false)) : (false)));
        // line 144
        echo "                        <section class=\"content-header ";
        echo ((($context["_has_content_help"] ?? null)) ? ("has-content-help") : (""));
        echo "\">
                            ";
        // line 145
        $this->displayBlock('content_header', $context, $blocks);
        // line 164
        echo "                        </section>
                        ";
    }

    // line 145
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                                <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                    <div class=\"content-header-title\">
                                        <h1 class=\"title\">";
        // line 148
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                                    </div>

                                    ";
        // line 151
        $this->displayBlock('global_actions_wrapper', $context, $blocks);
        // line 154
        echo "                                </div>

                                ";
        // line 156
        $this->displayBlock('content_help', $context, $blocks);
        // line 163
        echo "                            ";
    }

    // line 148
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 151
    public function block_global_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                                        <div class=\"global-actions\">";
        $this->displayBlock('global_actions', $context, $blocks);
        echo "</div>
                                    ";
    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 156
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                    ";
        if (((isset($context["_entity_config"]) || array_key_exists("_entity_config", $context)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 157), "query", [], "any", false, false, false, 157), "get", [0 => "action"], "method", false, false, false, 157), [], "array", false, true, false, 157), "help", [], "array", true, true, false, 157)) ? (_twig_default_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 157), "query", [], "any", false, false, false, 157), "get", [0 => "action"], "method", false, false, false, 157), [], "array", false, true, false, 157)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["help"] ?? null) : null), false)) : (false)))) {
            // line 158
            echo "                                        <div class=\"content-header-help\">
                                            ";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["_entity_config"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 159), "query", [], "any", false, false, false, 159), "get", [0 => "action"], "method", false, false, false, 159)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 159));
            echo "
                                        </div>
                                    ";
        }
        // line 162
        echo "                                ";
    }

    // line 168
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 171
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                            <section class=\"content-footer\">
                                ";
        // line 173
        $this->displayBlock('content_footer', $context, $blocks);
        // line 174
        echo "                            </section>
                        ";
    }

    // line 173
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 185
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 185,  655 => 173,  650 => 174,  648 => 173,  645 => 172,  641 => 171,  635 => 168,  631 => 162,  625 => 159,  622 => 158,  619 => 157,  615 => 156,  603 => 152,  599 => 151,  593 => 148,  589 => 163,  587 => 156,  583 => 154,  581 => 151,  575 => 148,  571 => 146,  567 => 145,  562 => 164,  560 => 145,  555 => 144,  552 => 143,  548 => 142,  543 => 176,  541 => 171,  537 => 169,  535 => 168,  531 => 166,  529 => 142,  526 => 141,  522 => 140,  515 => 135,  511 => 134,  506 => 126,  504 => 123,  502 => 122,  498 => 121,  492 => 128,  490 => 121,  487 => 120,  483 => 119,  478 => 112,  472 => 110,  469 => 109,  466 => 108,  460 => 106,  454 => 104,  451 => 103,  448 => 102,  446 => 101,  439 => 100,  435 => 99,  431 => 95,  427 => 93,  421 => 91,  418 => 90,  410 => 88,  408 => 87,  405 => 86,  402 => 85,  398 => 84,  391 => 62,  382 => 61,  378 => 60,  373 => 114,  371 => 99,  367 => 97,  364 => 96,  362 => 84,  357 => 81,  351 => 79,  345 => 77,  343 => 76,  338 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  319 => 68,  314 => 65,  312 => 60,  304 => 54,  300 => 53,  293 => 178,  291 => 140,  286 => 137,  284 => 134,  279 => 131,  277 => 119,  272 => 116,  270 => 53,  267 => 52,  263 => 51,  258 => 182,  256 => 51,  253 => 50,  249 => 49,  238 => 41,  233 => 190,  224 => 188,  220 => 187,  217 => 186,  215 => 185,  212 => 184,  210 => 49,  196 => 41,  192 => 40,  185 => 32,  181 => 31,  172 => 28,  169 => 27,  165 => 26,  158 => 13,  154 => 12,  147 => 10,  142 => 192,  140 => 40,  136 => 38,  130 => 36,  128 => 35,  125 => 34,  123 => 31,  120 => 30,  118 => 26,  115 => 25,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  92 => 17,  88 => 16,  85 => 15,  83 => 12,  78 => 10,  67 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/layout.html.twig", "/home/burei/OWL-Eyewear/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
