<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Constant {
    public static array $constant = [
        // Images
        'ID_main_logo' => 6,
    ];

    public static function getConstant(string $key): mixed {
        $txt = self::$constant[$key] ?? null;
        return __($txt, 'batipeint');
    }
}