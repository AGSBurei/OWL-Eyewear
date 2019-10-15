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

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_3baf610800aa5ff2bfcd2dc956b5da25a781de486cf85deae1039bcc5625cc76 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'filters_action' => [$this, 'block_filters_action'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 5), "layout", [], "any", false, false, false, 5), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 2
        $context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 2);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 3), [],         // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
($context["_entity_config"] ?? null), "label", [], "any", false, false, false, 3), [],         // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter(($context["_request_parameters"] ?? null), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "action"], "method", false, false, false, 8), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 9), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["app"] ?? null), "request", [], "any", false, false, false, 10), "get", [0 => "menuIndex"], "method", false, false, false, 10), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["app"] ?? null), "request", [], "any", false, false, false, 11), "get", [0 => "submenuIndex"], "method", false, false, false, 11), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["app"] ?? null), "request", [], "any", false, false, false, 12), "get", [0 => "sortField"], "method", false, false, false, 12), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", [0 => "sortDirection"], "method", false, false, false, 13), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", [0 => "page", 1 => 1], "method", false, false, false, 14), "filters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["app"] ?? null), "request", [], "any", false, false, false, 15), "get", [0 => "filters", 1 => []], "method", false, false, false, 15), "referer" => null]);
        // line 19
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "get", [0 => "action"], "method", false, false, false, 19))) {
            // line 20
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", false, false, false, 21), "")) : (""))]);
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ($context["_request_parameters"] ?? null)))]);
        // line 26
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["batch_form"] ?? null), "vars", [], "any", false, false, false, 26), "batch_actions", [], "any", false, false, false, 26)) > 0));
        // line 27
        $context["_has_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", false, false, false, 27), false)) : (false));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 29)), "html", null, true);
    }

    // line 30
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 30))), "html", null, true);
    }

    // line 32
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        ob_start(function () { return ''; });
        // line 34
        echo "        ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "get", [0 => "action"], "method", false, false, false, 34))) {
            // line 35
            echo "            ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", [], "any", false, false, false, 35), [], "EasyAdminBundle");
            // line 36
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 36), "title", [], "any", true, true, false, 36)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", [], "any", false, false, false, 36), [],             // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null))) : (            // line 36
($context["_default_title"] ?? null)));
            echo "
        ";
        } else {
            // line 38
            echo "            ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 39
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 39), "title", [], "any", true, true, false, 39)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null))) : (            // line 39
($context["_default_title"] ?? null)));
            echo "
        ";
        }
        // line 41
        echo "    ";
        $___internal_3dd3acf2fda914eae46dac3af26d2b147c940d537c1b1f23fb92909d82c9240a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo twig_spaceless($___internal_3dd3acf2fda914eae46dac3af26d2b147c940d537c1b1f23fb92909d82c9240a_);
    }

    // line 44
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 45))) {
            // line 46
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 46));
            // line 47
            echo "
        ";
            // line 48
            $this->displayBlock('search_action', $context, $blocks);
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if (($context["_has_filters"] ?? null)) {
            // line 83
            echo "        ";
            $context["_applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", false, false, false, 83), false)) : (false));
            // line 84
            echo "        ";
            $this->displayBlock('filters_action', $context, $blocks);
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 98))) {
            // line 99
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 99));
            // line 100
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 108
            echo "    ";
        }
    }

    // line 48
    public function block_search_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 51
        $this->displayBlock('search_form', $context, $blocks);
        // line 77
        echo "                </form>
            </div>
        ";
    }

    // line 51
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "entity", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                        ";
        // line 60
        echo "                        ";
        if (twig_in_filter("sortField", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "uri", [], "any", false, false, false, 60))) {
            // line 61
            echo "                            <input type=\"hidden\" name=\"sortField\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                        ";
        }
        // line 63
        echo "                        ";
        if (twig_in_filter("sortDirection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63))) {
            // line 64
            echo "                            <input type=\"hidden\" name=\"sortDirection\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                        ";
        }
        // line 66
        echo "                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "menuIndex", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "submenuIndex", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getFormHiddenParams(twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "filters", [], "any", false, false, false, 68), "filters"));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 69
            echo "                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 73), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null)), "html", null, true);
        // line 73
        echo "\">
                            </div>
                        </div>
                    ";
    }

    // line 84
    public function block_filters_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "            <div class=\"btn-group action-filters\">
                <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["action" => "filters", "referer_action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "get", [0 => "action"], "method", false, false, false, 86)])), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
        echo ((($context["_applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-modal=\"#modal-filters\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        if (($context["_applied_filters"] ?? null)) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["_applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 88
        echo "                </a>
                ";
        // line 89
        if (($context["_applied_filters"] ?? null)) {
            // line 90
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["filters" => null])), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                        <i class=\"fa fa-close\"></i>
                    </a>
                ";
        }
        // line 94
        echo "            </div>
        ";
    }

    // line 100
    public function block_new_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 102
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 102), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["action" => twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "name", [], "any", false, false, false, 102)])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "target", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", [], "any", false, false, false, 103)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", [], "any", false, false, false, 103), "html", null, true);
            echo "\"></i>";
        }
        // line 104
        echo "                    ";
        (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 104) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 104)))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 104), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null)), "html", null, true))) : (print ("")));
        // line 104
        echo "
                </a>
            </div>
        ";
    }

    // line 111
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "    ";
        if (($context["_has_batch_actions"] ?? null)) {
            // line 113
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 114
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["batch_form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
            // line 115
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["batch_form"] ?? null), 'form');
            echo "
        </div>
    ";
        }
    }

    // line 120
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 122
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
    ";
        // line 123
        if (($context["_has_filters"] ?? null)) {
            // line 124
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_filters_modal.html.twig");
            echo "
    ";
        }
    }

    // line 128
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "    ";
        $context["_fields_visible_by_user"] = twig_array_filter(($context["fields"] ?? null), function ($__metadata__, $__field__) use ($context, $macros) { $context["metadata"] = $__metadata__; $context["field"] = $__field__; return $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "permission", [], "any", false, false, false, 129)); });
        // line 130
        echo "    ";
        $context["_number_of_hidden_results"] = 0;
        // line 131
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 131));
        // line 132
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 135
        $this->displayBlock('table_head', $context, $blocks);
        // line 165
        echo "        </thead>

        <tbody>
        ";
        // line 168
        $this->displayBlock('table_body', $context, $blocks);
        // line 227
        echo "        </tbody>
    </table>

    ";
        // line 230
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 135
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "            <tr>
                ";
        // line 137
        if (($context["_has_batch_actions"] ?? null)) {
            // line 138
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 140
        echo "
                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_fields_visible_by_user"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 142
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 142) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 142), "get", [0 => "sortField"], "method", false, false, false, 142)) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [], "any", false, false, false, 142)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 142), "get", [0 => "sortField"], "method", false, false, false, 142)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 142) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 143
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "get", [0 => "sortDirection"], "method", false, false, false, 143) == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 144
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 144), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null));
            // line 145
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 146
            echo "
                    <th class=\"";
            // line 147
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [], "any", false, false, false, 147)) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 147)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 147), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [], "any", false, false, false, 148)) {
                // line 149
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 149), "sortDirection" => ($context["nextSortDirection"] ?? null)])), "html", null, true);
                echo "\">
                                ";
                // line 150
                echo ($context["_column_label"] ?? null);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 153
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 155
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
                ";
        // line 158
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 159
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 159), "collapse_actions", [], "any", false, false, false, 159)) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 163
        echo "            </tr>
        ";
    }

    // line 168
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", [], "any", false, false, false, 169));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 170
            echo "                ";
            if ( !$this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 170), "item_permission", [], "any", false, false, false, 170), $context["item"])) {
                // line 171
                echo "                    ";
                $context["_number_of_hidden_results"] = (($context["_number_of_hidden_results"] ?? null) + 1);
                // line 172
                echo "                ";
            } else {
                // line 173
                echo "                    ";
                // line 174
                echo "                    ";
                $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [], "any", false, false, false, 174), [], "any", false, false, false, 174));
                // line 175
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 176
                if (($context["_has_batch_actions"] ?? null)) {
                    // line 177
                    echo "                            <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
                    echo "\"></td>
                        ";
                }
                // line 179
                echo "
                        ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["_fields_visible_by_user"] ?? null));
                foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                    // line 181
                    echo "                            ";
                    $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 181) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 181), "get", [0 => "sortField"], "method", false, false, false, 181));
                    // line 182
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 182)) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 182)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                     // line 2
($context["__internal_21e71f2a752d293ae1225433f64c0de8ad7730088319e187a95fb5f3fcb9b8aa"] ?? null));
                    // line 183
                    echo "
                            <td class=\"";
                    // line 184
                    echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 184)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 184), "html", null, true);
                    echo "\" ";
                    echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                    echo ">
                                ";
                    // line 185
                    echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 185), $context["item"], $context["metadata"]);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "
                        ";
                // line 189
                if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                    // line 190
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                    // line 191
                    echo "                            <td class=\"actions\">
                                ";
                    // line 192
                    $this->displayBlock('item_actions', $context, $blocks);
                    // line 207
                    echo "                            </td>
                        ";
                }
                // line 209
                echo "                    </tr>
                ";
            }
            // line 211
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 212
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 213
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["_fields_visible_by_user"] ?? null)) + 1), "html", null, true);
            echo "\">
                        ";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "
            ";
        // line 219
        if ((($context["_number_of_hidden_results"] ?? null) > 0)) {
            // line 220
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 221
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["_fields_visible_by_user"] ?? null)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.list.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 226
        echo "        ";
    }

    // line 192
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "                                    ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 193), "collapse_actions", [], "any", false, false, false, 193)) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 197
        echo "                                    ";
        echo twig_include($this->env, $context, ($context["_actions_template"] ?? null), ["actions" =>         // line 198
($context["_list_item_actions"] ?? null), "entity_config" =>         // line 199
($context["_entity_config"] ?? null), "request_parameters" =>         // line 200
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 201
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 201), "trans_parameters" =>         // line 202
($context["_trans_parameters"] ?? null), "item_id" =>         // line 203
($context["_item_id"] ?? null), "item" =>         // line 204
($context["item"] ?? null)], false);
        // line 205
        echo "
                                ";
    }

    // line 230
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 231) == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbPages", [], "any", false, false, false, 231)) && (1 != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 231))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", [], "any", false, false, false, 231))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 232
($context["app"] ?? null), "request", [], "any", false, false, false, 232), "query", [], "any", false, false, false, 232), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 232), "query", [], "any", false, false, false, 232), "get", [0 => "page"], "method", false, false, false, 232) - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 233
($context["app"] ?? null), "request", [], "any", false, false, false, 233), "requestUri", [], "any", false, false, false, 233)));
        // line 235
        echo "
        ";
        // line 236
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" =>         // line 238
($context["referer"] ?? null), "delete_form" =>         // line 239
($context["delete_form_template"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 240
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 240), "_trans_parameters" =>         // line 241
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 242
($context["_entity_config"] ?? null)], false);
        // line 243
        echo "
    ";
    }

    // line 247
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
    }

    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 249), "paginator", [], "any", false, false, false, 249));
        echo "
    ";
    }

    // line 253
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 266
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 266), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 297
        if (($context["_has_filters"] ?? null)) {
            // line 298
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach( oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 328
        echo "
            ";
        // line 329
        if (($context["_has_batch_actions"] ?? null)) {
            // line 330
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            ";
        }
        // line 366
        echo "        });
    </script>

    ";
        // line 369
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 369), "get", [0 => "action"], "method", false, false, false, 369))) {
            // line 370
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 371
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 371), "get", [0 => "query"], "method", true, true, false, 371)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 371), "get", [0 => "query"], "method", false, false, false, 371), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  902 => 371,  899 => 370,  897 => 369,  892 => 366,  854 => 330,  852 => 329,  849 => 328,  817 => 298,  815 => 297,  781 => 266,  765 => 254,  761 => 253,  754 => 249,  746 => 248,  742 => 247,  737 => 243,  735 => 242,  734 => 241,  733 => 240,  732 => 239,  731 => 238,  730 => 236,  727 => 235,  725 => 233,  724 => 232,  722 => 231,  718 => 230,  713 => 205,  711 => 204,  710 => 203,  709 => 202,  708 => 201,  707 => 200,  706 => 199,  705 => 198,  703 => 197,  700 => 193,  696 => 192,  692 => 226,  685 => 222,  681 => 221,  678 => 220,  676 => 219,  673 => 218,  663 => 214,  659 => 213,  656 => 212,  643 => 211,  639 => 209,  635 => 207,  633 => 192,  630 => 191,  627 => 190,  625 => 189,  622 => 188,  613 => 185,  603 => 184,  600 => 183,  598 => 2,  596 => 182,  593 => 181,  589 => 180,  586 => 179,  580 => 177,  578 => 176,  573 => 175,  570 => 174,  568 => 173,  565 => 172,  562 => 171,  559 => 170,  540 => 169,  536 => 168,  531 => 163,  525 => 160,  516 => 159,  514 => 158,  511 => 157,  504 => 155,  498 => 153,  490 => 150,  485 => 149,  483 => 148,  471 => 147,  468 => 146,  465 => 145,  463 => 2,  461 => 144,  458 => 143,  455 => 142,  451 => 141,  448 => 140,  444 => 138,  442 => 137,  439 => 136,  435 => 135,  431 => 230,  426 => 227,  424 => 168,  419 => 165,  417 => 135,  412 => 132,  409 => 131,  406 => 130,  403 => 129,  399 => 128,  391 => 124,  389 => 123,  385 => 122,  380 => 121,  376 => 120,  367 => 115,  365 => 114,  362 => 113,  359 => 112,  355 => 111,  348 => 104,  346 => 2,  344 => 104,  338 => 103,  330 => 102,  327 => 101,  323 => 100,  318 => 94,  310 => 90,  308 => 89,  305 => 88,  298 => 87,  292 => 86,  289 => 85,  285 => 84,  278 => 73,  276 => 2,  273 => 73,  269 => 71,  258 => 69,  254 => 68,  250 => 67,  245 => 66,  239 => 64,  236 => 63,  230 => 61,  227 => 60,  223 => 53,  220 => 52,  216 => 51,  210 => 77,  208 => 51,  204 => 50,  199 => 49,  195 => 48,  190 => 108,  187 => 100,  184 => 99,  182 => 98,  179 => 97,  176 => 96,  173 => 84,  170 => 83,  168 => 82,  165 => 81,  162 => 80,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  147 => 44,  143 => 33,  140 => 41,  135 => 39,  134 => 2,  132 => 39,  129 => 38,  124 => 36,  123 => 2,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  108 => 32,  101 => 30,  94 => 29,  90 => 5,  88 => 27,  86 => 26,  84 => 25,  81 => 21,  80 => 20,  78 => 19,  76 => 15,  75 => 14,  74 => 13,  73 => 12,  72 => 11,  71 => 10,  70 => 9,  69 => 8,  68 => 7,  66 => 2,  65 => 3,  64 => 2,  63 => 3,  61 => 2,  59 => 1,  52 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/list.html.twig", "C:\\Users\\rmer1\\Desktop\\pull\\OWL-Eyewear\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\default\\list.html.twig");
    }
}
