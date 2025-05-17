<?php

/**
 * Display the resource accross the site.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

namespace Batipeint;

if (!defined('ABSPATH')) exit;

require_once get_template_directory() . '/inc/resource.php';

use Batipeint\Resource;

class Utils
{
    public static function batipeint_is_open(): bool
    {
        $opening_time = [
            'Monday'    => [Resource::getResource('footer.opening_hours.monday.open'), Resource::getResource('footer.opening_hours.monday.close')],
            'Tuesday'   => [Resource::getResource('footer.opening_hours.week.open'), Resource::getResource('footer.opening_hours.week.close')],
            'Wednesday' => [Resource::getResource('footer.opening_hours.week.open'), Resource::getResource('footer.opening_hours.week.close')],
            'Thursday'  => [Resource::getResource('footer.opening_hours.week.open'), Resource::getResource('footer.opening_hours.week.close')],
            'Friday'    => [Resource::getResource('footer.opening_hours.week.open'), Resource::getResource('footer.opening_hours.week.close')],
            'Saturday'  => [Resource::getResource('footer.opening_hours.saturday.open'), Resource::getResource('footer.opening_hours.saturday.close')],
            'Sunday'    => null,
        ];

        date_default_timezone_set('Europe/Paris');
        $now = new \DateTime();
        $now_day = $now->format('l');
        $now_hours = $now->format('H:i');

        if (empty($opening_time[$now_day]) || !is_array($opening_time[$now_day])) return false;
        
        list($begin, $end) = $opening_time[$now_day];

        if (!$begin || !$end) return false;

        return ($now_hours >= $begin && $now_hours <= $end);
    }
}