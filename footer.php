<?php

if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/resource.php';
require_once get_template_directory() . '/inc/constant.php';
require_once get_template_directory() . '/inc/utils.php';

use Batipeint\Resource;
use Batipeint\Constant;
use Batipeint\Utils;

?>

<footer class="container-fluid mt-3 px-0" style="background-color: var(--color-secondary_color); color: var(--color-bg_color);">
    <div class="container p-3 pb-0">
        <div class="row">
            <!-- Opening Hours -->
            <div class="col-md-6 mb-1 mb-md-0 d-md-flex flex-md-column justify-content-md-between">
                <div class="row">
                    <h5><?= Resource::getResource('footer.hours.title') ?></h5>
                    <?php if (Utils::batipeint_is_open()) : ?>
                        <p class="mb-2 d-flex align-items-center gap-3">
                            <?= Resource::getResource('footer.hours.info') ?> <span class="dot" style="background-color: <?= Constant::getConstant('colors_more')['open'] ?>;"></span>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="table-responsive">
                    <table class="table" style="color: var(--color-bg_color);">
                        <tbody>
                            <tr>
                                <th><?= Resource::getResource('footer.opening_hours.monday.label') ?></th>
                                <td><?= Resource::getResource('footer.opening_hours.monday.open') ?> - <?= Resource::getResource('footer.opening_hours.monday.close') ?></td>
                            </tr>
                            <tr>
                                <th><?= Resource::getResource('footer.opening_hours.week.label') ?></th>
                                <td><?= Resource::getResource('footer.opening_hours.week.open') ?> - <?= Resource::getResource('footer.opening_hours.week.close') ?></td>
                            </tr>
                            <tr>
                                <th><?= Resource::getResource('footer.opening_hours.saturday.label') ?></th>
                                <td><?= Resource::getResource('footer.opening_hours.saturday.open') ?> - <?= Resource::getResource('footer.opening_hours.saturday.close') ?></td>
                            </tr>
                            <tr>
                                <th><?= Resource::getResource('footer.opening_hours.sunday.label') ?></th>
                                <td><?= Resource::getResource('footer.opening_hours.sunday.open') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Pages -->
            <div class="col-md-6 d-md-flex flex-md-column justify-content-md-between">
                <h5><?= Resource::getResource('footer.link.title') ?></h5>
                <div class="text-center px-3 fs-6">
                    <ul class="nav justify-content-center border-bottom flex-column pb-3 mb-3">
                        <li class="nav-item">
                            <a href="#" class="nav-link px-2 text-body-secondary text-decoration-underline" style="color: var(--color-bg_color);"><?= Resource::getResource('footer.link.contact') ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-2 text-body-secondary text-decoration-underline" style="color: var(--color-bg_color);"><?= Resource::getResource('footer.link.sitemap') ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-2 text-body-secondary text-decoration-underline" style="color: var(--color-bg_color);"><?= Resource::getResource('footer.link.legal_notices') ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-2 text-body-secondary text-decoration-underline" style="color: var(--color-bg_color);"><?= Resource::getResource('footer.link.privacy_policy') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="container text-center pb-3">
            <?= Resource::getResource('footer.copyright') ?>
            <a class="fw-bold" style="color: var(--color-bg_color);" href="<?= Resource::getResource('footer.copyright_link') ?>"><?= Resource::getResource('footer.copyright_author') ?></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>