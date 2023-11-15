<?php

declare(strict_types=1);

namespace Inc\Enqueues;

class Enqueue
{
	public string $path;

	public function getModifiedFile(): string
	{
		return date('YmdHi', filemtime(get_template_directory() . $this->path));
	}
}
