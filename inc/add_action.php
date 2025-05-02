<?php

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class addAction {
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'batipeintSetup'], 10, 0);
        add_action('wp_enqueue_scripts', [$this, 'bootstrap'], 10, 0);
    }

    public function batipeintSetup(): void {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        load_theme_textdomain('batipeint', get_template_directory() . '/languages');
    }

    public function bootstrap(): void {
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', false, null);
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    }
}