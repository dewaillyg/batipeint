<?php
require_once get_template_directory() . '/inc/constant.php';
require_once get_template_directory() . '/inc/resource.php';
require_once get_template_directory() . '/inc/polylang.php';

use Batipeint\Constant;
use Batipeint\Resource;
use Batipeint\Polylang;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand me-3 d-flex align-items-center gap-3" href="#">
                    <img
                        <?php $logoID =  Constant::getConstant('ID_main_logo'); ?>
                        src="<?= wp_get_attachment_image_url($logoID, 'full', false) ?>"
                        title="<?= get_the_title($logoID) ?>"
                        alt="<?= get_post_meta($logoID, '_wp_attachment_image_alt', true) ?>"
                        class="img-thumbnail"
                        style="max-width: 100px; height: auto;">
                    <p class="m-0"><?= get_bloginfo('name') ?></p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><?= Resource::getResource('navbar.home') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= Resource::getResource('navbar.work') ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><?= Resource::getResource('navbar.about') ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><?= Resource::getResource('navbar.contact') ?></a>
                        </li>
                    </ul>
                    <div class="ms-3">
                        <?= Polylang::render(); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>