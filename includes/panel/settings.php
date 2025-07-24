<?php

return [
	'title' => 'Settings',
	'type'  => 'options',
	'sections' => [
		'general' => [
			'title' => 'Favorite Books',
			'options' => [
				'favorite_book' => [
					'name'    => 'Add Your Favorite Book',
					'type'    => 'text',
					'default' => '',
					'desc'    => 'Enter a title and hit Save',
					'field_name'  => 'ajay_bm_favorite_book',
					'sanitize_cb'  => 'sanitize_text_field',
				],
			],
		],
	],
];
