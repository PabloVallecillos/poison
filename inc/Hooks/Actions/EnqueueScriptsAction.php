<?php

declare(strict_types=1);

namespace Inc\Hooks\Actions;

use Inc\Enqueues\EnqueueCss;
use Inc\Enqueues\EnqueueJs;

final class EnqueueScriptsAction
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', function () {
			new EnqueueCss();
			new EnqueueJs();
		});
	}
}
