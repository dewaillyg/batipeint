<?php 

require_once get_template_directory() . '/inc/resource.php';

get_header();

echo '<h1>' . \Batipeint\Resource::getResource('test') . '</h1>';

get_footer();