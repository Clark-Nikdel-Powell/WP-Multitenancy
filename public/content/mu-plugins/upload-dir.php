<?php
$corrected_upload_path     = untrailingslashit(str_replace('wordpress/'.$wp_version, 'sites/'.$_SERVER['SERVER_NAME'].'/media', ABSPATH));
$corrected_upload_url_path = home_url( 'media' );

$upload_path     = get_option( 'upload_path') ;
$upload_url_path = get_option( 'upload_url_path' );

if ( $upload_path !== $corrected_upload_path ) {
	update_option( 'upload_path', $corrected_upload_path );
}

if ( $upload_url_path !== $corrected_upload_url_path ) {
	update_option( 'upload_url_path', $corrected_upload_url_path );
}
