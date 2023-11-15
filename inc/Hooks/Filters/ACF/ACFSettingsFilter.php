<?php

declare(strict_types=1);

namespace Inc\Hooks\Filters\ACF;

class ACFSettingsFilter
{
	public function __construct()
	{
		if (!defined('ACF_JSON_DIRECTORY')) {
			define('ACF_JSON_DIRECTORY', get_template_directory() . DIRECTORY_SEPARATOR . 'acf-json');
		}
	}
}
