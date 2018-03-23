<?php
/**
 * Array of test attachment HTML markup and attributes.
 *
 * @package Beans\Framework\Tests\Integration\API\HTML\Fixtures
 *
 * @since   1.5.0
 */

return array(
	array(
		'id'         => 'beans_post_image_small_item',
		'tag'        => 'source',
		'attributes' => array(
			'media'  => '(max-width: 200px)',
			'srcset' => 'https://example.com/small-image.png',
		),
		'attachment' => (object) array(
			'id'          => 47,
			'src'         => 'https://example.com/small-image.png',
			'width'       => 200,
			'height'      => 200,
			'alt'         => 'Small image',
			'title'       => 'This is a post title.',
			'caption'     => 'This is the caption.',
			'description' => 'This is the description.',
		),
	),
	array(
		'id'         => 'beans_post_image_item',
		'tag'        => 'img',
		'attributes' => array(
			'width'    => 1200,
			'height'   => 600,
			'src'      => 'https://example.com/image.png',
			'alt'      => 'A background image.',
			'itemprop' => 'image',
		),
		'attachment' => (object) array(
			'id'          => 1047,
			'src'         => 'https://example.com/image.png',
			'width'       => 1200,
			'height'      => 600,
			'alt'         => 'A background image.',
			'title'       => 'This is a post title.',
			'caption'     => 'This is the caption.',
			'description' => 'This is the description.',
		),
	),
);