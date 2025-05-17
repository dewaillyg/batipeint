<?php

/**
 * Template part for displaying the button.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

if (!defined('ABSPATH') || !isset($args['text'])) exit;

$text = $args['text'];

?>

<div class="d-flex justify-content-center mt-2">
    <button type="button" class="btn" style="background-color: var(--color-secondary_color); color: var(--color-bg_color)">
        <?= $text ?>
    </button>
</div>