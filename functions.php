<?php

declare(strict_types=1);

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Poison
 */

use Inc\Hooks\Actions\EnqueueScriptsAction;
use Inc\Hooks\Actions\RestAddThumbnailUrlAction;
use Inc\Hooks\Filters\ACF\ACFSettingsLoadJsonFilter;
use Inc\Hooks\Filters\ACF\ACFSettingsSaveJsonFilter;

require_once __DIR__ . '/vendor/autoload.php';

new EnqueueScriptsAction();
new RestAddThumbnailUrlAction();
new ACFSettingsSaveJsonFilter();
new ACFSettingsLoadJsonFilter();
add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
