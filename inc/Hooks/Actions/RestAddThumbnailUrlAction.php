<?php

declare(strict_types=1);

namespace Inc\Hooks\Actions;

final class RestAddThumbnailUrlAction
{
	public function __construct()
	{
		add_action('rest_api_init', function () {
			register_rest_field(
				['flavor'],
				'thumbnail_url',
				[
					'get_callback' => [$this, 'getThumbnailUrl'],
					'update_callback' => null,
					'schema' => null,
				]
			);
		});
	}

	public function getThumbnailUrl($object, $fieldName, $request): ?string
	{
		if ($object['featured_media']) {
			$img = wp_get_attachment_image_src($object['featured_media'], 'app-thumb');
			return $img[0];
		}
		return null;
	}
}
