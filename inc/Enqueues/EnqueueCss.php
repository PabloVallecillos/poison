<?php

declare(strict_types=1);

namespace Inc\Enqueues;

final class EnqueueCss extends Enqueue
{
	public string $path = '/css/index.css';

	public function __construct()
	{
		wp_enqueue_style(
			'index-css',
			get_template_directory_uri() . $this->path,
			file_exists(get_template_directory() . $this->path) ? $this->getModifiedFile() : 1,
			wp_get_theme()->get('Version')
		);
	}
}
