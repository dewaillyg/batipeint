<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Utils {
    public static function getColor(string $key, string $fallback = ''): string {
        $mod_key = $key;
        return get_theme_mod($mod_key, $fallback);
    }
}