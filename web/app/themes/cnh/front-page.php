<?php
use Timber\Timber;

if ( 'posts' == get_option( 'show_on_front' ) ) {
	$context          = Timber::get_context();
	$context['posts'] = array_merge( Timber::get_posts( [ 'post__in' => get_option( 'sticky_posts' ) ] ),
		Timber::get_posts( [ 'category_name'  => 'news',
		                     'post__not_in'   => get_option( 'sticky_posts' ),
		                     'posts_per_page' => 2
		] ) );
	$templates        = [ 'front-page.twig' ];

	Timber::render( $templates, $context );
} else {
	include( get_page_template() );
}