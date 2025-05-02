<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Resource {
    public static array $resource = [
        'test' => 'mon petit titre',
    ];

    public static function getResource(string $key): mixed {
        $txt = self::$resource[$key] ?? null;
        return __($txt, 'batipeint');
    }
}