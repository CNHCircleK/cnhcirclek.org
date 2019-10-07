<?php
use Timber\Timber;

$context         = Timber::get_context();
$context['post'] = new TimberPost();
$templates       = [ 'content.twig' ];

Timber::render( $templates, $context );
