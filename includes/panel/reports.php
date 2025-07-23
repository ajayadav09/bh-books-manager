<?php
return [
	'title'       => __( 'Reports', 'books-manager' ),
	'description' => __( 'This section will include reports and analytics.', 'books-manager' ),
	'type'        => 'custom',
	'action'      => 'books_manager/print_reports_tab', // 👈 you already hooked this
];
