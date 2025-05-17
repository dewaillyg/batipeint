<?php

/**
 * This file is used to display polylang flags.
 * 
 * @package Batipeint
 * @since 1.0.0
 * @version 1.0.0
 * @author Dewailly G.
 * @link https://github.com/dewaillyg
 */

namespace Batipeint;

if (!defined('ABSPATH')) exit;

class Polylang
{
    public static function render(): void
    {
        if (!function_exists('pll_the_languages')) return;

        $languages = pll_the_languages([
            'dropdown' => 0,
            'show_flags' => 1,
            'show_names' => 0,
            'hide_if_no_translation' => 1,
            'echo' => 0
        ]);

        if ($languages) {
            self::renderHTML($languages);
            self::renderJS();
            self::renderCSS();
        }
    }

    private static function renderHTML(string $languages): void
    {
        echo <<<HTML
            <div id="language-switcher-container" class="language-switcher-ux d-flex flex-column align-items-center gap-2">
                <div id="language-data" style="display: none;">
                    {$languages}
                </div>
                <div id="language-buttons" class="language-buttons-modern d-flex flex-row flex-md-column flex-wrap justify-content-center gap-2"></div>
            </div>
        HTML;
    }

    private static function renderJS(): void
    {
        echo <<<JS
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const rawLangHTML = document.getElementById("language-data");
                const targetContainer = document.getElementById("language-buttons");

                if (rawLangHTML && targetContainer) {
                    const tempDiv = document.createElement("div");
                    tempDiv.innerHTML = rawLangHTML.innerHTML;
                    const buttons = tempDiv.querySelectorAll("a, button");

                    buttons.forEach(btn => {
                        btn.classList.add("modern-lang-btn");
                        targetContainer.appendChild(btn);
                    });

                    rawLangHTML.remove();
                }
            });
        </script>
        JS;
    }

    private static function renderCSS(): void
    {
        echo <<<CSS
        <style>
            .modern-lang-btn {
                padding: 8px 16px;
                border-radius: 6px;
                background-color: #f4f4f4;
                color: #333;
                border: 1px solid #ddd;
                text-decoration: none;
                font-size: 14px;
                font-weight: 400;
                transition: background-color 0.2s, border-color 0.2s, color 0.2s;
                display: inline-flex;
                align-items: center;
                gap: 6px;
            }

            .modern-lang-btn img {
                width: 20px;
                height: auto;
            }

            .modern-lang-btn:hover {
                background-color: #eaeaea;
                border-color: #ccc;
                color: #111;
            }
        </style>
        CSS;
    }
}
