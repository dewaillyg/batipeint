<?php

require_once get_template_directory() . '/inc/resource.php';
require_once get_template_directory() . '/inc/constant.php';

use Batipeint\Resource;
use Batipeint\Constant;

get_header();

get_template_part('template-parts/section-title', null, [
    'sectionTitle' => Resource::getResource('section.home.title'),
]);

get_template_part('template-parts/section-subtitle', null, [
    'sectionSubtitle' => Resource::getResource('section.home.subtitle'),
]);

$imgHomeGalleryLeft = Constant::getConstant('ID_home_gallery_left');
$imgHomeGalleryRight = Constant::getConstant('ID_home_gallery_right');
$homeDescription = explode(';;', Resource::getResource('section.home.description'));
$homeDescription = array_map(function ($p) {
    return '<p>' . $p . '</p>';
}, $homeDescription);
$homeDescription = implode('', $homeDescription);
$homeBtn = Resource::getResource('section.home.cta');
?>

<!-- Section Home -->
<section class="container mt-2">
    <!-- Home Gallery -->
    <div class="row batipeint-home-gallery mt-1 mb-2">
        <div class="w-50 h-auto pe-0">
            <div class="w-100">
                <img
                    src="<?= wp_get_attachment_image_url($imgHomeGalleryLeft, 'full', false) ?>"
                    title="<?= get_the_title($imgHomeGalleryLeft) ?>"
                    alt="<?= get_post_meta($imgHomeGalleryLeft, '_wp_attachment_image_alt', true) ?>"
                    class="w-100 h-100 img-thumbnail">
            </div>
            <div class="separator w-100"></div>
        </div>
        <div class="w-50 h-auto ps-0">
            <div class="separator w-100"></div>
            <div class="w-100">
                <img
                    src="<?= wp_get_attachment_image_url($imgHomeGalleryRight, 'full', false) ?>"
                    title="<?= get_the_title($imgHomeGalleryRight) ?>"
                    alt="<?= get_post_meta($imgHomeGalleryRight, '_wp_attachment_image_alt', true) ?>"
                    class="w-100 h-100 img-thumbnail">
            </div>
        </div>
    </div>
    <div class="mt-3">
        <?php
        get_template_part('template-parts/blockquote', null, [
            'text' => $homeDescription,
            'author' => get_bloginfo('name'),
        ]);
        get_template_part('template-parts/batipeint-btn', null, [
            'text' => $homeBtn,
        ]);
        ?>
    </div>
</section>

<?php

get_footer();
