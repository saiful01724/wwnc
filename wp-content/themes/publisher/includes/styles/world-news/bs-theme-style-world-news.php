<?php


/**
 * Publisher -> World News
 */
class Publisher_Theme_Style_World_News extends Publisher_Theme_Style {

	/**
	 * Style initializer
	 */
	public function __construct() {

		$this->style_id = 'world-news';

		add_filter( 'better-framework/panel/' . publisher_get_theme_panel_id() . '/std', array(
			$this,
			'panel_std'
		), 20 );

		add_filter( 'better-framework/panel/' . publisher_get_theme_panel_id() . '/css', array(
			$this,
			'panel_css'
		), 20 );

		add_filter( 'better-framework/taxonomy/metabox/better-category-options/css', array(
			$this,
			'customize_category_fields'
		), 20 );

		if ( Publisher_Theme_Styles_Manager::$current_style === $this->style_id ) {
			add_filter( 'publisher-theme-core/page-templates/config', array(
				$this,
				'page_templates_config'
			) );
		}

		parent::__construct();
	}


	/**
	 * Demo panel STD's
	 *
	 * @param $fields
	 *
	 * @return mixed
	 */
	function panel_std( $fields ) {

		include PUBLISHER_THEME_PATH . 'includes/styles/world-news/panel-std.php';

		return $fields;
	}


	/**
	 * Demo panel STD's
	 *
	 * @param $fields
	 *
	 * @return mixed
	 */
	function panel_css( $fields ) {

		include PUBLISHER_THEME_PATH . 'includes/styles/world-news/panel-css.php';

		return $fields;
	}


	function customize_category_fields( $fields ) {

		$term_css = include PUBLISHER_THEME_PATH . 'includes/options/category-css-term_color.php';

		$term_css['bg_color']['selector'][] = '.site-header.site-header .main-menu.menu > li.menu-term-%%id%% > a:after';
		$term_css['bg_color']['selector'][] = '.listing-text-3 .listing-item-text-3.main-term-%%id%%:hover .item-inner:after';

		/**
		 * Categories
		 */
		// Border Color
		$term_css['color']['selector'][] = 'body.category-%%id%% .archive-title .rss-link';

		/**
		 * Single Page
		 */
		// Text Color
		$term_css['color']['selector'][] = 'body.single-prim-cat-%%id%% .archive-title .rss-link';


		$fields['term_color'][ $this->get_css_id() ] = $term_css;
		// Clear memory
		unset( $term_css );

		return $fields;
	}


	/**
	 * Adds custom functions of style
	 */
	function include_functions() {
	}


	/**
	 * Enqueue current style css file
	 */
	function register_assets() {

		bf_enqueue_style(
			'publisher-theme-world-news',
			bf_append_suffix( Publisher_Theme_Styles_Manager::get_uri( 'world-news/style' ), '.css' ),
			array( 'publisher' ),
			bf_append_suffix( Publisher_Theme_Styles_Manager::get_path( 'world-news/style' ), '.css' ),
			Better_Framework()->theme()->get( 'Version' )
		);
	}


	/**
	 * TinyMCE Style
	 */
	public function register_tinymce_assets() {

		bf_enqueue_tinymce_style( 'registered', 'publisher-theme-world-news' );
	}


	/**
	 * Injects Page templates for current style
	 *
	 * @param $page_templates
	 *
	 * @return mixed
	 */
	function page_templates_config( $page_templates ) {

		publisher_set_global( 'style-page-template', $this->style_id );

		include PUBLISHER_THEME_PATH . 'includes/styles/' . $this->style_id . '/page-templates.php';

		publisher_unset_global( 'style-page-template' );

		return $page_templates;
	}

} // Publisher_Theme_Style_World_News
