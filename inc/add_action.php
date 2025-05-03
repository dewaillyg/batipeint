<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/resource.php';
require_once get_template_directory() . '/inc/constant.php';

use Batipeint\Resource;
use Batipeint\Constant;

class addAction
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'batipeintSetup'], 10, 0);
        add_action('init', [$this, 'registerBatipeintStrings'], 10, 0);
        add_action('wp_enqueue_scripts', [$this, 'bootstrap'], 10, 0);
        add_action('customize_register', [$this, 'registerCustomizer'], 10, 1);
        add_action('wp_head', [$this, 'injectCSSVariables'], 10, 0);
    }

    public function batipeintSetup(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        load_theme_textdomain('batipeint', get_template_directory() . '/languages');
    }

    public function bootstrap(): void
    {
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', false, null);
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    }

    public function registerBatipeintStrings(): void
    {
        if (class_exists('Batipeint\Resource'))
            $this->registerBatipeintStringsFromResource(Resource::$resource);
    }

    public function registerBatipeintStringsFromResource(array $array, string $prefix = ''): void
    {
        foreach ($array as $key => $value) {
            $fullKey = $prefix === ''
                ? $key
                : $prefix . '.' . $key;
            if (is_array($value))
                $this->registerBatipeintStringsFromResource($value, $fullKey);
            elseif (is_string($value))
                \pll_register_string($fullKey, $value, 'batipeint');
        }
    }

    public static function registerCustomizer(\WP_Customize_Manager $wp_customize): void
    {
        $wp_customize->add_section('batipeint_colors', [
            'title' => Resource::getResource('customizer.colors.title'),
            'description' => Resource::getResource('customizer.colors.description'),
            'priority' => 30,
        ]);

        $colors = [
            'primary_color' => ['label' => Resource::getResource('customizer.colors.primary'), 'default' => Constant::getConstant('colors')['primary_color']],
            'secondary_color' => ['label' => Resource::getResource('customizer.colors.secondary'), 'default' => Constant::getConstant('colors')['secondary_color']],
            'background_color' => ['label' => Resource::getResource('customizer.colors.background'), 'default' => Constant::getConstant('colors')['background_color']],
            'text_color' => ['label' => Resource::getResource('customizer.colors.text'), 'default' => Constant::getConstant('colors')['text_color']],
        ];

        foreach ($colors as $ID => $config) {
            $wp_customize->add_setting($ID, [
                'default' => $config['default'],
                'sanitize_callback' => 'sanitize_hex_color',
            ]);

            $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, $ID, [
                'label' => $config['label'],
                'section' => 'batipeint_colors',
                'settings' => $ID,
            ]));
        }
    }

    public function injectCSSVariables(): void
    {
        $vars = [
            'primary_color' => get_theme_mod('primary_color', Constant::getConstant('colors')['primary_color']),
            'secondary_color' => get_theme_mod('secondary_color', Constant::getConstant('colors')['secondary_color']),
            'background_color' => get_theme_mod('background_color', Constant::getConstant('colors')['background_color']),
            'text_color' => get_theme_mod('text_color', Constant::getConstant('colors')['text_color']),
        ];

        echo "<style>:root {\n";
        foreach ($vars as $name => $value)
            echo "--color-{$name}: {$value};\n";
        echo "}</style>\n";
    }
}
