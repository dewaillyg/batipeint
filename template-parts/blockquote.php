<?php

/**
 * Template part for displaying the blockquote.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

if (!defined('ABSPATH') || (!isset($args['text']) || !isset($args['author']))) exit;

$text = $args['text'];
$author = $args['author'];

?>

<div class="container h-100">
    <div class="row d-flex align-items-center h-100">
        <div class="col col-lg-12 mb-lg-0">
            <figure class="p-3 rounded" style="border-left: .25rem solid var(--color-primary_color);">
                <blockquote class="blockquote pb-2 fs-6">
                    <?= $text ?>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 font-italic">
                    <?= $author ?>
                </figcaption>
            </figure>
        </div>
    </div>
</div>