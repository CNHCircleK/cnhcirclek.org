<?php
use Timber\Timber;

if ( 'posts' == get_option( 'show_on_front' ) ) {
	$context          = Timber::get_context();
	$context['home_right'] = Timber::get_widgets('home_right');
	$context['posts'] = Timber::get_posts(
		array(
			'post_type' => 'post',
			'numberposts' => 2,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'news'
				)
			)
		)
	);
	$templates        = [ 'front-page.twig' ];

	Timber::render( $templates, $context );
} else {
	include( get_page_template() );
}