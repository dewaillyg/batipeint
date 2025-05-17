<?php

/**
 * Display the resource accross the site.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Resource
{
    public static array $resource = [
        // topbar
        'topbar' => [
            'phone' => '07 70 29 84 03',
            'phone_link' => 'tel:+33770298403',
        ],
        // navbar
        'navbar' => [
            'home' => 'Accueil',
            'service' => 'Services',
            'work' => 'Réalisations',
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
        ],
        // section
        'section' => [
            'home' => [
                'title' => 'L\'entreprise',
                'subtitle' => 'Peinture intérieure, extérieure, et conseils sur-mesure',
                'description' => 'Peintre en bâtiment, basé en Normandie.;;Je transforme vos murs avec soin, qu\'il s\'agisse de rénovation, ravalement de façade, peinture intérieure/extérieure, enduits ou pose de papier peint.;;Chaque chantier est géré avec précision, transparence et écoute. Le devis est gratuit et adapté à vos besoins.',
                'cta' => 'Découvrez mes services',
            ],
        ],
        // footer
        'footer' => [
            'copyright' => '&copy; 2025 Copyright :',
            'copyright_link' => 'https://github.com/dewaillyg',
            'copyright_author' => 'dewaillyg',
            'opening_hours' => [
                'monday' => [
                    'label' => 'Lundi',
                    'open' => '08:00',
                    'close' => '18:00',
                ],
                'week' => [
                    'label' => 'Mardi - Vendredi',
                    'open' => '08:00',
                    'close' => '18:30',
                ],
                'saturday' => [
                    'label' => 'Samedi',
                    'open' => '08:00',
                    'close' => '17:00',
                ],
                'sunday' => [
                    'label' => 'Dimanche',
                    'open' => 'Fermé',
                ],
            ],
            'hours' => [
                'title' => 'Horaires d\'ouverture',
                'info' => 'Ouvert',
            ],
            'link' => [
                'title' => 'Accès rapide',
                'contact' => 'Nous contacter',
                'sitemap' => 'Plan du site',
                'legal_notices' => 'Mentions légales',
                'privacy_policy' => 'Politique de confidentialité',
            ],
        ],
    ];

    public static function getResource(string $key): mixed
    {
        $parts = explode('.', $key);
        $value = self::$resource;
        foreach ($parts as $part)
            if (!isset($value[$part])) return null;
            else $value = $value[$part];
        return pll__($value);
    }
}
