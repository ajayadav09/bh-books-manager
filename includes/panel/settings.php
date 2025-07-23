<?php
return [
	'title'    => 'Settings',
	'type'     => 'options',
	'sections' => [
		'general' => [
			'title'   => 'General Settings',
			'options' => [
				'enable_feature' => [
					'name'    => 'Enable Feature',
					'type'    => 'onoff',
					'default' => 'yes',
				],
			],
		],
	],
];
