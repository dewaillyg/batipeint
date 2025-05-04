<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Resource {
    public static array $resource = [
        // navbar
        'navbar' => [
            'home' => 'Accueil',
            'work' => 'Réalisations',
            'about' => 'À propos',
            'contact' => 'Contacter',
        ],
        // customizer
        'customizer' => [
            'colors' => [
                'title' => 'Couleurs du site',
                'description' => 'Personnalisez les couleurs de votre site',
                'primary' => 'Couleur primaire',
                'secondary' => 'Couleur secondaire',
                'background' => 'Couleur d\'arrière-plan',
                'text' => 'Couleur du texte',
            ]
        ]
    ];

    public static function getResource(string $key): mixed {
        $parts = explode('.', $key);
        $value = self::$resource;
        foreach ($parts as $part)
            if (!isset($value[$part])) return null;
            else $value = $value[$part];
        return pll__($value);
    }
}