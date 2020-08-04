<?php
//
// Custom default values for crypto-press Demo
// 


$std_id = $this->get_std_id();


$fields['section_heading_style'][ $std_id ]          = 't4-s4';
$fields['layout-2-col'][ $std_id ]                   = array(
	'width'   => '1230',
	'content' => '73',
	'primary' => '27',
);
$fields['layout-3-col'][ $std_id ]                   = array(
	'width'     => '1000',
	'content'   => '58',
	'primary'   => '25',
	'secondary' => '17',
);
$fields['layout_columns_space'][ $std_id ]           = '30';
$fields['pagination_type'][ $std_id ]                = 'ajax_more_btn';
$fields['sticky_sidebar'][ $std_id ]                 = 'enable';
$fields['post_template'][ $std_id ]                  = 'style-1';
$fields['post_featured_image_cut'][ $std_id ]        = 'full';
$fields['inline_related_posts_status'][ $std_id ]    = 'show';
$fields['cat_listing'][ $std_id ]                    = 'blog-5';
$fields['cat_archive_sub_cats'][ $std_id ]           = 'hide';
$fields['cat_archive_sub_cats_limit'][ $std_id ]     = '3';
$fields['header_layout'][ $std_id ]                  = 'out-full-width';
$fields['header_style'][ $std_id ]                   = 'style-6';
$fields['resp_scheme'][ $std_id ]                    = 'light';
$fields['resp_bg_style'][ $std_id ]                  = 'color';
$fields['off_canvas_position'][ $std_id ]            = 'left';
$fields['social_share_top_style'][ $std_id ]         = 'style-15';
$fields['social_share_bottom_style'][ $std_id ]      = 'style-15';
$fields['footer_widgets'][ $std_id ]                 = '3-column';
$fields['footer_widgets_heading_style'][ $std_id ]   = 't3-s1';
$fields['footer_social'][ $std_id ]                  = 'hide';
$fields['theme_color'][ $std_id ]                    = '#002e67';
$fields['topbar_date_bg'][ $std_id ]                 = 'rgba(0,0,0,0)';
$fields['topbar_date_color'][ $std_id ]              = '#ffffff';
$fields['topbar_text_color'][ $std_id ]              = 'rgba(255,255,255,0.5)';
$fields['topbar_text_hcolor'][ $std_id ]             = '#ffffff';
$fields['topbar_bg_color'][ $std_id ]                = 'rgba(0,0,0,0.3)';
$fields['topbar_border_color'][ $std_id ]            = 'rgba(255,255,255,0)';
$fields['topbar_icon_text_color'][ $std_id ]         = 'rgba(255,255,255,0.5)';
$fields['topbar_icon_text_hcolor'][ $std_id ]        = '#ffffff';
$fields['header_top_border'][ $std_id ]              = '0';
$fields['header_menu_btop_color'][ $std_id ]         = '';
$fields['header_menu_st6_bbottom_color'][ $std_id ]  = '#ffffff';
$fields['header_menu_text_color'][ $std_id ]         = 'rgba(255,255,255,0.6)';
$fields['header_menu_text_h_color'][ $std_id ]       = '#ffffff';
$fields['header_bg_color'][ $std_id ]                = '#002e67';
$fields['footer_link_color'][ $std_id ]              = '#6d6d6d';
$fields['footer_link_hover_color'][ $std_id ]        = '#ffffff';
$fields['footer_copy_bg_color'][ $std_id ]           = '#252526';
$fields['footer_social_bg_color'][ $std_id ]         = '';
$fields['footer_bg_color'][ $std_id ]                = '#404043';
$fields['widgets_heading_style'][ $std_id ]          = 't3-s1';
$fields['section_title_color'][ $std_id ]            = '#000000';
$fields['section_title_bg_color'][ $std_id ]         = '#002e67';
$fields['listings_readmore_color'][ $std_id ]        = '#000000';
$fields['typo_body'][ $std_id ]                      = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'inherit',
	'size'           => '13',
	'letter-spacing' => '',
	'color'          => '#7b7b7b',
);
$fields['typo_meta'][ $std_id ]                      = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'transform'      => 'none',
	'size'           => '12',
	'letter-spacing' => '',
	'color'          => '#828282',
);
$fields['typo_meta_author'][ $std_id ]               = array(
	'family'         => 'Roboto',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'capitalize',
	'size'           => '13',
	'letter-spacing' => '',
);
$fields['typo_badges'][ $std_id ]                    = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '12',
	'letter-spacing' => '',
);
$fields['typo_post_heading'][ $std_id ]              = array(
	'family'         => 'Roboto',
	'variant'        => '700',
	'subset'         => 'latin',
	'transform'      => 'capitalize',
	'letter-spacing' => '',
);
$fields['typo_post_tp1_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp2_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp3_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp4_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp5_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp6_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp7_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp8_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp9_heading'][ $std_id ]          = '38px';
$fields['typo_post_tp10_heading'][ $std_id ]         = '33px';
$fields['typo_post_tp11_heading'][ $std_id ]         = '33px';
$fields['typo_post_tp12_heading'][ $std_id ]         = '33px';
$fields['typo_post_tp13_heading'][ $std_id ]         = '33px';
$fields['typo_entry_content'][ $std_id ]             = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '18',
	'line_height'    => '27',
	'letter-spacing' => '',
	'color'          => '#121212',
);
$fields['typo_post_summary'][ $std_id ]              = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '15',
	'line_height'    => '23',
	'letter-spacing' => '',
	'color'          => '#525252',
);
$fields['typo_post_summary_single'][ $std_id ]       = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'initial',
	'size'           => '16',
	'line_height'    => '22',
	'letter-spacing' => '',
);
$fields['typ_header_logo'][ $std_id ]                = array(
	'enable'         => '0',
	'family'         => 'Helvetica',
	'variant'        => '700',
	'subset'         => 'unknown',
	'align'          => 'inherit',
	'transform'      => 'uppercase',
	'size'           => '30',
	'letter-spacing' => '',
);
$fields['typ_header_menu'][ $std_id ]                = array(
	'family'         => 'Teko',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'uppercase',
	'size'           => '17',
	'letter-spacing' => '',
);
$fields['typ_header_sub_menu'][ $std_id ]            = array(
	'family'         => 'Teko',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'uppercase',
	'size'           => '17',
	'letter-spacing' => '',
);
$fields['typo_topbar_menu'][ $std_id ]               = array(
	'family'         => 'Teko',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '16',
	'letter-spacing' => '',
);
$fields['typo_topbar_sub_menu'][ $std_id ]           = array(
	'family'         => 'Teko',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '16',
	'letter-spacing' => '',
);
$fields['typo_topbar_date'][ $std_id ]               = array(
	'family'         => 'Teko',
	'variant'        => '500',
	'subset'         => 'latin',
	'transform'      => 'uppercase',
	'size'           => '16',
	'letter-spacing' => '',
);
$fields['typo_archive_title_pre'][ $std_id ]         = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '14',
	'letter-spacing' => '',
);
$fields['typo_listing_classic_1_title'][ $std_id ]   = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '20',
	'line_height'    => '25',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_classic_2_title'][ $std_id ]   = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '20',
	'line_height'    => '27',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_classic_3_title'][ $std_id ]   = array(
	'family'         => 'Roboto',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '28',
	'line_height'    => '33',
	'letter-spacing' => '-0.58px',
	'color'          => '#000000',
);
$fields['typo_listing_grid_1_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '19',
	'line_height'    => '23',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_grid_2_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '18',
	'line_height'    => '24',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_tall_1_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '16',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_tall_2_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'capitalize',
	'size'           => '16',
	'line_height'    => '22',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_slider_2_title'][ $std_id ]    = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '20',
	'line_height'    => '30',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_slider_3_title'][ $std_id ]    = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '20',
	'line_height'    => '30',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_blog_1_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '18',
	'line_height'    => '23',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_blog_5_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '700',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'capitalize',
	'size'           => '24',
	'line_height'    => '29',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_thumbnail_1_title'][ $std_id ] = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '14',
	'line_height'    => '18',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_listing_thumbnail_2_title'][ $std_id ] = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'none',
	'size'           => '13',
	'line_height'    => '18',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_text_listing_1_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'center',
	'transform'      => 'capitalize',
	'size'           => '15',
	'line_height'    => '21',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_text_listing_2_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'inherit',
	'size'           => '14',
	'line_height'    => '19',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_text_listing_3_title'][ $std_id ]      = array(
	'family'         => 'Roboto',
	'variant'        => '500',
	'subset'         => 'latin',
	'align'          => 'inherit',
	'transform'      => 'inherit',
	'size'           => '14',
	'line_height'    => '20',
	'letter-spacing' => '',
	'color'          => '#000000',
);
$fields['typo_section_heading'][ $std_id ]           = array(
	'family'         => 'Teko',
	'variant'        => '500',
	'subset'         => 'latin',
	'transform'      => 'capitalize',
	'size'           => '23',
	'line_height'    => '25',
	'letter-spacing' => '',
);
$fields['typo_footer_copy'][ $std_id ]               = array(
	'family'         => 'Roboto',
	'variant'        => 'regular',
	'subset'         => 'latin',
	'size'           => '13',
	'line_height'    => '19',
	'letter-spacing' => '',
);
$fields['listing-modern-grid-1'][ $std_id ]          = array(
	'item-1-title-limit' => '160',
	'item-2-title-limit' => '90',
	'item-3-title-limit' => '70',
	'item-4-title-limit' => '70',
	'subtitle'           => '0',
	'subtitle-limit'     => '0',
	'subtitle-location'  => 'before-meta',
	'format-icon'        => '1',
	'term-badge'         => '1',
	'term-badge-count'   => '1',
	'term-badge-tax'     => 'category',
	'meta'               =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-2'][ $std_id ]          = array(
	'item-1-title-limit' => '160',
	'item-2-title-limit' => '70',
	'item-3-title-limit' => '70',
	'item-4-title-limit' => '70',
	'item-5-title-limit' => '70',
	'subtitle'           => '0',
	'subtitle-limit'     => '0',
	'subtitle-location'  => 'before-meta',
	'format-icon'        => '1',
	'term-badge'         => '1',
	'term-badge-count'   => '1',
	'term-badge-tax'     => 'category',
	'meta'               =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-3'][ $std_id ]          = array(
	'title-limit'      => '60',
	'format-icon'      => '1',
	'term-badge'       => '1',
	'term-badge-count' => '1',
	'term-badge-tax'   => 'category',
	'meta'             =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-4'][ $std_id ]          = array(
	'title-limit'       => '80',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'format-icon'       => '1',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-5'][ $std_id ]          = array(
	'big-title-limit'   => '120',
	'small-title-limit' => '50',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'format-icon'       => '1',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-6'][ $std_id ]          = array(
	'title-limit'       => '140',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'format-icon'       => '1',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-7'][ $std_id ]          = array(
	'big-title-limit'         => '140',
	'big-subtitle'            => '0',
	'big-subtitle-limit'      => '0',
	'big-subtitle-location'   => 'before-meta',
	'big-format-icon'         => '1',
	'big-term-badge'          => '1',
	'big-term-badge-count'    => '2',
	'big-term-badge-tax'      => 'category',
	'big-meta'                =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
	'small-title-limit'       => '100',
	'small-subtitle'          => '0',
	'small-subtitle-limit'    => '0',
	'small-subtitle-location' => 'before-meta',
	'small-format-icon'       => '1',
	'small-term-badge'        => '1',
	'small-term-badge-count'  => '1',
	'small-term-badge-tax'    => 'category',
	'small-meta'              =>
		array(
			'show'        => '0',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-8'][ $std_id ]          = array(
	'item-1-title-limit' => '160',
	'item-2-title-limit' => '90',
	'item-3-title-limit' => '55',
	'item-4-title-limit' => '55',
	'item-5-title-limit' => '90',
	'subtitle'           => '0',
	'subtitle-limit'     => '0',
	'subtitle-location'  => 'before-meta',
	'format-icon'        => '1',
	'term-badge'         => '1',
	'term-badge-count'   => '2',
	'term-badge-tax'     => 'category',
	'meta'               =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-modern-grid-9'][ $std_id ]          = array(
	'item-1-title-limit' => '160',
	'item-2-title-limit' => '70',
	'item-3-title-limit' => '70',
	'item-4-title-limit' => '70',
	'item-5-title-limit' => '70',
	'item-6-title-limit' => '70',
	'item-7-title-limit' => '70',
	'subtitle'           => '0',
	'subtitle-limit'     => '0',
	'subtitle-location'  => 'before-meta',
	'format-icon'        => '1',
	'term-badge'         => '1',
	'term-badge-count'   => '1',
	'term-badge-tax'     => 'category',
	'meta'               =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-mix-1-2'][ $std_id ]                = array(
	'big-title-limit'         => '82',
	'big-excerpt'             => '1',
	'big-excerpt-limit'       => '115',
	'big-subtitle'            => '0',
	'big-subtitle-limit'      => '0',
	'big-subtitle-location'   => 'before-meta',
	'big-format-icon'         => '1',
	'big-term-badge'          => '1',
	'big-term-badge-count'    => '1',
	'big-term-badge-tax'      => 'category',
	'big-meta'                =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
	'small-thumbnail-type'    => 'featured-image',
	'small-title-limit'       => '60',
	'small-excerpt'           => '0',
	'small-excerpt-limit'     => '110',
	'small-subtitle'          => '0',
	'small-subtitle-limit'    => '0',
	'small-subtitle-location' => 'after-title',
	'small-format-icon'       => '1',
	'small-term-badge'        => '1',
	'small-term-badge-count'  => '1',
	'small-term-badge-tax'    => 'category',
	'small-meta'              =>
		array(
			'show'        => '0',
			'author'      => '0',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-mix-3-1'][ $std_id ]                = array(
	'big-title-limit'         => '82',
	'big-excerpt'             => '0',
	'big-excerpt-limit'       => '115',
	'big-subtitle'            => '0',
	'big-subtitle-limit'      => '0',
	'big-subtitle-location'   => 'before-meta',
	'big-format-icon'         => '1',
	'big-term-badge'          => '1',
	'big-term-badge-count'    => '1',
	'big-term-badge-tax'      => 'category',
	'big-meta'                =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
	'small-thumbnail-type'    => 'featured-image',
	'small-title-limit'       => '70',
	'small-subtitle'          => '0',
	'small-subtitle-limit'    => '0',
	'small-subtitle-location' => 'before-meta',
	'small-meta'              =>
		array(
			'show'        => '1',
			'author'      => '0',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-mix-3-3'][ $std_id ]                = array(
	'big-title-limit'         => '65',
	'big-excerpt'             => '0',
	'big-excerpt-limit'       => '115',
	'big-subtitle'            => '0',
	'big-subtitle-limit'      => '0',
	'big-subtitle-location'   => 'before-meta',
	'big-format-icon'         => '1',
	'big-term-badge'          => '0',
	'big-term-badge-count'    => '1',
	'big-term-badge-tax'      => 'category',
	'big-meta'                =>
		array(
			'show'        => '0',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
	'small-title-limit'       => '60',
	'small-subtitle'          => '0',
	'small-subtitle-limit'    => '0',
	'small-subtitle-location' => 'before-meta',
	'small-meta'              =>
		array(
			'show'        => '0',
			'author'      => '0',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
);
$fields['listing-mix-4-5'][ $std_id ]                = array(
	'big-title-limit'         => '0',
	'big-excerpt-limit'       => '350',
	'big-subtitle'            => '0',
	'big-subtitle-limit'      => '0',
	'big-subtitle-location'   => 'before-meta',
	'big-format-icon'         => '1',
	'big-term-badge'          => '1',
	'big-term-badge-count'    => '1',
	'big-term-badge-tax'      => 'category',
	'big-meta'                =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
	'big-read-more'           => '1',
	'small-title-limit'       => '60',
	'small-excerpt-limit'     => '160',
	'small-subtitle'          => '0',
	'small-subtitle-limit'    => '0',
	'small-subtitle-location' => 'before-meta',
	'small-format-icon'       => '1',
	'small-term-badge'        => '1',
	'small-term-badge-count'  => '1',
	'small-term-badge-tax'    => 'category',
	'small-meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
	'small-read-more'         => '1',
);
$fields['listing-grid-1'][ $std_id ]                 = array(
	'title-limit'       => '72',
	'excerpt-limit'     => '115',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'format-icon'       => '1',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'meta'              =>
		array(
			'show'        => '0',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
);
$fields['listing-blog-5'][ $std_id ]                 = array(
	'title-limit'       => '100',
	'excerpt-limit'     => '240',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'format-icon'       => '1',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '1',
		),
	'read-more'         => '0',
);
$fields['listing-thumbnail-2'][ $std_id ]            = array(
	'thumbnail-type'    => 'featured-image',
	'title-limit'       => '44',
	'excerpt'           => '0',
	'excerpt-limit'     => '115',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'after-title',
	'format-icon'       => '1',
	'term-badge'        => '0',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'show-ranking'      => '',
	'meta'              =>
		array(
			'show'        => '0',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '0',
		),
);
$fields['listing-text-1'][ $std_id ]                 = array(
	'title-limit'       => '56',
	'subtitle'          => '0',
	'subtitle-limit'    => '0',
	'subtitle-location' => 'before-meta',
	'term-badge'        => '1',
	'term-badge-count'  => '1',
	'term-badge-tax'    => 'category',
	'show-ranking'      => '',
	'meta'              =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'readable',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '1',
			'review'      => '1',
		),
);
$fields['listing-classic-3'][ $std_id ]              = array(
	'title-limit'        => '75',
	'excerpt-limit'      => '300',
	'excerpt-limit-2col' => '150',
	'excerpt-limit-3col' => '100',
	'subtitle'           => '0',
	'subtitle-limit'     => '0',
	'subtitle-location'  => 'before-meta',
	'format-icon'        => '1',
	'term-badge'         => '0',
	'term-badge-count'   => '1',
	'term-badge-tax'     => 'category',
	'meta'               =>
		array(
			'show'        => '1',
			'author'      => '1',
			'date'        => '1',
			'date-format' => 'standard',
			'view'        => '0',
			'share'       => '0',
			'comment'     => '0',
			'review'      => '0',
		),
	'read-more'          => '0',
);
