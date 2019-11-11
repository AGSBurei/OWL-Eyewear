<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/sendEmail' => [[['_route' => 'admin_sendEmail', '_controller' => 'App\\Controller\\AdminController::sendEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/faq' => [[['_route' => 'app_main_faq', '_controller' => 'App\\Controller\\MainController::faq'], null, null, null, false, false, null]],
        '/admin/export' => [[['_route' => 'newsletter_export', '_controller' => 'App\\Controller\\NewsletterController::export'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
