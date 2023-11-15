<?php

declare(strict_types=1);

namespace Inc\Hooks\Filters\ACF;

final class ACFSettingsLoadJsonFilter extends ACFSettingsFilter
{
	public function __construct()
	{
		parent::__construct();
		add_filter('acf/settings/load_json', function (array $paths) {
			unset($paths[0]);
			$paths[] = ACF_JSON_DIRECTORY;
			return $paths;
		});
	}
}
