<?php

/**
 * Template part for displaying the section title.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

if (!defined('ABSPATH') || !isset($args['sectionTitle'])) exit;

$sectionTitle = $args['sectionTitle'];

?>

<div class="container d-flex justify-content-start align-items-center gap-2">
    <i class="bi bi-bookmark-fill" style="color: var(--color-primary_color);"></i>
    <h2 class="text-uppercase fs-6 fw-normal m-0" style="letter-spacing: 1px;"><?= $sectionTitle ?></h2>
</div>