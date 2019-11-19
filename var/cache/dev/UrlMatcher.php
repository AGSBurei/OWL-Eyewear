<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/sendEmail' => [[['_route' => 'admin_sendEmail', '_controller' => 'App\\Controller\\AdminController::sendEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/faq' => [[['_route' => 'app_main_faq', '_controller' => 'App\\Controller\\MainController::faq'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_main_tst', '_controller' => 'App\\Controller\\MainController::tst'], null, null, null, false, false, null]],
        '/admin/export' => [[['_route' => 'newsletter_export', '_controller' => 'App\\Controller\\NewsletterController::export'], null, ['GET' => 0], null, false, false, null]],
        '/page' => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/page/create' => [[['_route' => 'create_page', '_controller' => 'App\\Controller\\PageController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/template' => [[['_route' => 'template', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/template/create' => [[['_route' => 'create_template', '_controller' => 'App\\Controller\\TemplateController::createTemplate'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/newsletter/stop/([^/]++)(*:194)'
                .'|/page/(?'
                    .'|([^/]++)(*:219)'
                    .'|delete/([^/]++)(*:242)'
                .')'
                .'|/template/(?'
                    .'|([^/]++)(*:272)'
                    .'|select(*:286)'
                    .'|delete/([^/]++)(*:309)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'newsletter_stop_send', '_controller' => 'App\\Controller\\NewsletterController::newsletterStopSend'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'show_page', '_controller' => 'App\\Controller\\PageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'delete_page', '_controller' => 'App\\Controller\\PageController::delete'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'show_template', '_controller' => 'App\\Controller\\TemplateController::show'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'select_template', '_controller' => 'App\\Controller\\TemplateController::selectTemplate'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [
            [['_route' => 'delete_template', '_controller' => 'App\\Controller\\TemplateController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
