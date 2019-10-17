<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::home'], [], [['text', '/']], [], []],
    'newsletter_export' => [[], ['_controller' => 'App\\Controller\\NewsletterController::export'], [], [['text', '/admin/export']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
];