<?php
/***
 *  BetterFramework is BetterStudio framework for themes and plugins.
 *
 *  ______      _   _             ______                                           _
 *  | ___ \    | | | |            |  ___|                                         | |
 *  | |_/ / ___| |_| |_ ___ _ __  | |_ _ __ __ _ _ __ ___   _____      _____  _ __| | __
 *  | ___ \/ _ \ __| __/ _ \ '__| |  _| '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
 *  | |_/ /  __/ |_| ||  __/ |    | | | | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
 *  \____/ \___|\__|\__\___|_|    \_| |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
 *
 *  Copyright © 2017 Better Studio
 *
 *
 *  Our portfolio is here: https://betterstudio.com/
 *
 *  \--> BetterStudio, 2018 <--/
 */


// Language  name for smart admin texts
$lang = bf_get_current_lang_raw();
if ( $lang != 'none' ) {
	$lang = bf_get_language_name( $lang );
} else {
	$lang = '';
}


$panels = array(
	'panel-name' => _x( 'BS Speed Booster', 'Panel title', 'publisher' ),
	'panel-desc' => '<p>' . __( 'Speeds up your site with highly compatibility with cache plugins!', 'publisher' ) . '</p>',
	'config'     => array(
		'name'                => __( 'BS Speed Booster', 'publisher' ),
		'parent'              => 'better-studio',
		'slug'                => 'better-studio/booster',
		'page_title'          => __( 'BS Speed Booster', 'publisher' ),
		'menu_title'          => __( 'Booster', 'publisher' ),
		'capability'          => 'manage_options',
		'menu_slug'           => __( 'BS Speed Booster', 'publisher' ),
		'notice-icon'         => BF_URI . 'assets/img/bs-notice-logo.png',
		'icon_url'            => null,
		'position'            => 100.00,
		'exclude_from_export' => false,
		'register_menu'       => apply_filters( 'better-framework/booster/show-menu', true ),
	),
	'texts'      => array(
		'panel-desc-lang'     => '<p>' . __( '%s Language Booster.', 'publisher' ) . '</p>',
		'panel-desc-lang-all' => '<p>' . __( 'All Languages Booster.', 'publisher' ) . '</p>',
		'reset-button'        => ! empty( $lang ) ? sprintf( __( 'Reset %s Booster', 'publisher' ), $lang ) : __( 'Reset Booster', 'publisher' ),
		'reset-button-all'    => __( 'Reset All Languages Booster', 'publisher' ),
		'reset-confirm'       => ! empty( $lang ) ? sprintf( __( 'Are you sure to reset %s Booster?', 'publisher' ), $lang ) : __( 'Are you sure to reset Booster?', 'publisher' ),
		'reset-confirm-all'   => __( 'Are you sure to reset all languages Booster?', 'publisher' ),
		'save-button'         => ! empty( $lang ) ? sprintf( __( 'Save %s Booster', 'publisher' ), $lang ) : __( 'Save Booster', 'publisher' ),
		'save-button-all'     => __( 'Save All Booster', 'publisher' ),
		'save-confirm-all'    => __( 'Are you sure to save all Booster? this will override specified Booster\'s per languages', 'publisher' )
	),
);
