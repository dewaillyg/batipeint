<?php

/**
 * Template part for displaying the breadcrumb.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

if (!defined('ABSPATH')) exit;

is_home() || is_front_page() ? $is_home = true : $is_home = false;

?>

<nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2216%22 height=%2216%22 fill=%22%23003366%22 class=%22bi bi-caret-right-fill%22 viewBox=%220 0 16 16%22%3E%3Cpath d=%22m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z%22/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb container-fluid align-items-center justify-content-center my-2">
        <li class="breadcrumb-item <?= $is_home ? 'active" aria-current="page"' : ''; ?>">
            <?php if (!$is_home) : ?>
                <a href="<?= home_url() ?>" style="color: var(--color-text_color)"><?= get_bloginfo('name') ?></a>
            <?php else : ?>
                <?= get_bloginfo('name') ?>
            <?php endif; ?>
        </li>
        <?php if (is_page() && $is_home === false) : ?>
            <li class="breadcrumb-item active" aria-current="page">
                <?= the_title() ?>
            </li>
        <?php endif; ?>
    </ol>
</nav>