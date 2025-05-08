<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Constant {
    public static array $constant = [
        // Images
        'ID_main_logo' => 26,
        // Colors
        'colors' => [
            'primary_color' => '#007bff',
            'secondary_color' => '#6c757d',
            'text_color' => '#212529',
            'bg_color' => '#f8f9fa',
        ]
    ];

    public static function getConstant(string $key): mixed {
        $txt = self::$constant[$key] ?? null;
        return $txt;
    }
}