<?php

$css_id = $this->get_css_id();

/**
 * =>Color & Style
 */
$theme_color = include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php';

// search-handler
unset( $theme_color['color']['selector'][27] );
unset( $theme_color['color']['selector'][28] );
unset( $theme_color['color']['selector'][43] );

// RSS Color
$theme_color['color']['selector'][] = 'body .main-menu.main-menu > .current-menu-item > a';

// Ranking Count
$theme_color['bg_color']['selector'][] = 'body .listing-item .post-count-badge.pcb-t1.pcb-s1';

$fields['theme_color'][ $css_id ] = $theme_color;
unset( $theme_color ); // clean memory

