<?php

declare(strict_types=1);

namespace Inc\Enqueues;

final class EnqueueJs extends Enqueue
{
	public string $path = '/js/index.js';

	public function __construct()
	{
		wp_enqueue_script(
			'index-js',
			get_template_directory_uri() . $this->path,
			$this->getModifiedFile(),
			wp_get_theme()->get('Version')
		);
		wp_localize_script('index-js', 'wpData', [
			'themeUri' => get_template_directory_uri(),
		]);
		wp_enqueue_script('wp-api');
	}
}
