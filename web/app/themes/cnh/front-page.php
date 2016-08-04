<?php
use Timber\Timber;

if ( 'posts' == get_option( 'show_on_front' ) ) {
	$context          = Timber::get_context();
	$context['posts'] = Timber::get_posts();
	$templates        = [ 'front-page.twig' ];

	Timber::render( $templates, $context );
} else {
	include( get_page_template() );
}