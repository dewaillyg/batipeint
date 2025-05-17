<?php

/**
 * Template part for displaying the section subtitle.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

if (!defined('ABSPATH') || !isset($args['sectionSubtitle'])) exit;

$sectionSubtitle = $args['sectionSubtitle'];

?>

<div class="container mt-2">
    <h2 class="fs-2 batipeint-title"><?= $sectionSubtitle ?></h2>
</div>