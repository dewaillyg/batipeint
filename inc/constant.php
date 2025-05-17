<?php

/**
 * This file is used for global configuration.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Constant {
    public static array $constant = [
        // Images
        'ID_main_logo' => 26,
        'ID_home_gallery_left' => 39,
        'ID_home_gallery_right' => 40,
        // Globals Colors
        'colors' => [
            'primary_color' => '#007bff',
            'secondary_color' => '#6c757d',
            'text_color' => '#212529',
            'bg_color' => '#f8f9fa',
        ],
        // Colors (only accessible in template's file)
        'colors_more' => [
            'open' => '#90EE90',
        ],
    ];

    public static function getConstant(string $key): mixed {
        $txt = self::$constant[$key] ?? null;
        return $txt;
    }
}