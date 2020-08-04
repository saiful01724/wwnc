<?php

$style = publisher_get_global( 'style-page-template' );

$demo_url = 'http://demo.betterstudio.com/publisher/dark-mag/';

$page_templates[ $style . '-homepage-1' ] = array(
	'name'           => __( 'Homepage 1', 'publisher' ),
	'screenshot'     => 'http://cdn.betterstudio.com/publisher/page-templates/' . $style . '/homepage-1.png?v=' . PUBLISHER_THEME_VERSION,
	'preview'        => $demo_url,
	'category'       => array(
		__( '2 Column', 'publisher' ),
	),
	'type'           => array(
		__( 'Homepage', 'publisher' ),
	),
	'post_meta'      => array(
		array(
			'meta_key'   => 'page_layout',
			'meta_value' => '1-col',
		),
		array(
			'meta_key'   => '_hide_title',
			'meta_value' => 1,
		),
		array(
			'meta_key'   => '_bs_imported_template',
			'meta_value' => $style . '-homepage-1',
		),
		array(
			'meta_key'   => 'post_breadcrumb',
			'meta_value' => 'hide',
		),
		array(
			'meta_key'   => 'bam_disable_post_content',
			'meta_value' => 1,
		),
	),
	'prepare_vc_css' => true,
);

$page_templates[ $style . '-3-column-homepage-1' ] = array(
	'name'           => __( 'Homepage 2', 'publisher' ),
	'screenshot'     => 'http://cdn.betterstudio.com/publisher/page-templates/' . $style . '/3-column-homepage-1.png?v=' . PUBLISHER_THEME_VERSION,
	'preview'        => $demo_url . '3-column-homepage-1',
	'category'       => array(
		__( '3 Column', 'publisher' ),
	),
	'type'           => array(
		__( 'Homepage', 'publisher' ),
	),
	'post_meta'      => array(
		array(
			'meta_key'   => 'page_layout',
			'meta_value' => '3-col-0',
		),
		array(
			'meta_key'   => '_hide_title',
			'meta_value' => 1,
		),
		array(
			'meta_key'   => '_bs_imported_template',
			'meta_value' => $style . '-3-column-homepage-1',
		),
		array(
			'meta_key'   => 'bam_disable_post_content',
			'meta_value' => 1,
		),
	),
	'prepare_vc_css' => true,
);

$page_templates[ $style . '-contact-us-1' ] = array(
	'name'           => 'Contact us',
	'screenshot'     => 'http://cdn.betterstudio.com/publisher/page-templates/' . $style . '/contact-us-1.png?v=' . PUBLISHER_THEME_VERSION,
	'preview'        => $demo_url . 'contact-us-1',
	'category'       => array(
		__( 'Contact Form', 'publisher' ),
	),
	'type'           => array(
		__( 'Contact Form', 'publisher' ),
	),
	'post_title'     => 'Contact us',
	'post_meta'      => array(
		array(
			'meta_key'   => 'page_layout',
			'meta_value' => '1-col',
		),
		array(
			'meta_key'   => '_hide_title',
			'meta_value' => 1,
		),
		array(
			'meta_key'   => '_bs_imported_template',
			'meta_value' => $style . '-contact-us-1',
		),
		array(
			'meta_key'   => 'bam_disable_post_content',
			'meta_value' => 1,
		),
	),
	'prepare_vc_css' => true,
);
