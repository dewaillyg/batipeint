<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Resource {
    public static array $resource = [
        'navbar' => [
            'home' => 'Accueil',
            'work' => 'Réalisation',
            'about' => 'À propos',
            'contact' => 'Contacter',
        ],
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