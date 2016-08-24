<?php
use Timber\Timber;

$templates = [ 'header.twig' ];

$context = Timber::get_context();

Timber::render( $templates, $context );