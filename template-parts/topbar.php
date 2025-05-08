<?php
if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/resource.php';

use Batipeint\Resource;
?>

<div class="bg-light text-dark py-2s d-md-none" style="background-color: var(--color-bg_color)!important;">
    <div class="container d-flex justify-content-center align-items-center">
        <div>
            <i class="bi bi-telephone-fill me-2" style="color: var(--color-text_color)!important;"></i>
            <a href="<?= Resource::getResource('topbar.phone_link') ?>" class="text-dark text-decoration-none" style="color: var(--color-text_color)!important;"><?= Resource::getResource('topbar.phone') ?></a>
        </div>
    </div>
</div>