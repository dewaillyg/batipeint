<?php
require_once get_template_directory() . '/inc/constant.php';
require_once get_template_directory() . '/inc/resource.php';
require_once get_template_directory() . '/inc/utils.php';
require_once get_template_directory() . '/inc/polylang.php';

use Batipeint\Constant;
use Batipeint\Resource;
use Batipeint\Polylang;
use Batipeint\Utils;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="color: <?= esc_attr(Utils::getColor('text_color', Constant::getConstant('colors')['text_color'])) ?>;">
    <header>
        <div class="container-fluid"></div>
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: <?= esc_attr(Utils::getColor('primary_color', Constant::getConstant('colors')['primary_color'])) ?>;">
            <div class="container-fluid">
                <a class="navbar-brand me-5 d-flex align-items-center gap-3" href="#">
                    <img
                        <?php $logoID =  Constant::getConstant('ID_main_logo'); ?>
                        src="<?= wp_get_attachment_image_url($logoID, 'full', false) ?>"
                        title="<?= get_the_title($logoID) ?>"
                        alt="<?= get_post_meta($logoID, '_wp_attachment_image_alt', true) ?>"
                        class="img-thumbnail"
                        style="max-width: 90px; height: auto;">
                    <p class="m-0 batipeint-title batipeint-header-title fs-2"><?= get_bloginfo('name') ?></p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mt-2 mt-md-0 align-items-center">
                        <li class="nav-item w-md-auto w-100 batipeint-link-parent">
                            <a class="nav-link active batipeint-link batipeint-link--metis py-1 text-center text-md-start" aria-current="page" href="#"><?= Resource::getResource('navbar.home') ?></a>
                        </li>
                        <li class="nav-item w-md-auto w-100 batipeint-link-parent">
                            <a class="nav-link batipeint-link batipeint-link--metis py-1 text-center text-md-start" href="#"><?= Resource::getResource('navbar.work') ?></a>
                        </li>
                        <li class="nav-item w-md-auto w-100 batipeint-link-parent">
                            <a href="#" class="nav-link batipeint-link batipeint-link--metis py-1 text-center text-md-start"><?= Resource::getResource('navbar.about') ?></a>
                        </li>
                        <li class="nav-item w-md-auto w-100 batipeint-link-parent">
                            <a href="#" class="nav-link batipeint-link batipeint-link--metis py-1 text-center text-md-start"><?= Resource::getResource('navbar.contact') ?></a>
                        </li>
                    </ul>
                    <div class="ms-0 ms-md-3 mt-3 mt-md-0">
                        <?= Polylang::render(); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>