<?php 

if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/add_action.php';
require_once get_template_directory() . '/inc/add_filter.php';

new \Batipeint\addAction();
new \Batipeint\addFilter();