<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_sendEmail' => [[], ['_controller' => 'App\\Controller\\AdminController::sendEmail'], [], [['text', '/admin/sendEmail']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::home'], [], [['text', '/']], [], []],
    'app_main_faq' => [[], ['_controller' => 'App\\Controller\\MainController::faq'], [], [['text', '/faq']], [], []],
    'app_main_tst' => [[], ['_controller' => 'App\\Controller\\MainController::tst'], [], [['text', '/test']], [], []],
    'newsletter_export' => [[], ['_controller' => 'App\\Controller\\NewsletterController::export'], [], [['text', '/admin/export']], [], []],
    'newsletter_stop_send' => [['id'], ['_controller' => 'App\\Controller\\NewsletterController::newsletterStopSend'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newsletter/stop']], [], []],
    'page' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/page']], [], []],
    'create_page' => [[], ['_controller' => 'App\\Controller\\PageController::create'], [], [['text', '/page/create']], [], []],
    'show_page' => [['id'], ['_controller' => 'App\\Controller\\PageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/page']], [], []],
    'delete_page' => [['id'], ['_controller' => 'App\\Controller\\PageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/page/delete']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'template' => [[], ['_controller' => 'App\\Controller\\TemplateController::index'], [], [['text', '/template']], [], []],
    'create_template' => [[], ['_controller' => 'App\\Controller\\TemplateController::createTemplate'], [], [['text', '/template/create']], [], []],
    'show_template' => [['id'], ['_controller' => 'App\\Controller\\TemplateController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/template']], [], []],
    'select_template' => [[], ['_controller' => 'App\\Controller\\TemplateController::selectTemplate'], [], [['text', '/template/select']], [], []],
    'delete_template' => [['id'], ['_controller' => 'App\\Controller\\TemplateController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/template/delete']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
];
