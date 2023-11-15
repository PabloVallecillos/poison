<?php

declare(strict_types=1);

namespace Inc\Hooks\Filters\ACF;

final class ACFSettingsSaveJsonFilter extends ACFSettingsFilter
{
	public function __construct()
	{
		parent::__construct();
		add_filter('acf/settings/save_json', fn (string $path) => ACF_JSON_DIRECTORY);
	}
}
