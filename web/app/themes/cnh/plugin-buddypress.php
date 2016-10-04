<?php
use Timber\Timber;

$context = Timber::get_context();
global $wp_query;
$wp_query->in_the_loop = true; // Strange Hack due to Timber... see Buddypress - bp_do_theme_compat()
$context['post']       = new TimberPost();
$templates = [ 'plugin-buddypress.twig' ];
Timber::render( 'page.twig', $context );
