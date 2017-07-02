<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$timber = new \Timber\Timber();

$sage_includes = [
  'lib/timber.php',
  'lib/assets.php',
	'lib/setup.php',
];

foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}

	require_once $filepath;
}
