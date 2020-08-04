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


$parent_only = isset( $option['parent_only'] ) ? ' data-parent_only="true"' : '';

// Block width
$block_class = array();
if ( isset( $options['width'] ) && ! empty( $options['width'] ) ) {
	$block_class[] = 'description-' . $options['width'];
} else {
	$block_class[] = 'description-wide';
}

$block_class[] = 'bf-field-' . $options['id'];

// Block Classes
if ( isset( $options['class'] ) && ! empty( $options['class'] ) ) {
	$block_class[] = $options['class'];
}

$block_class = apply_filters( 'better-framework/menu/fields-class', $block_class );

?>
<div
		class="bf-menu-custom-field better-custom-field-<?php echo esc_attr( $options['type'] ); ?> description <?php echo esc_attr( implode( ' ', $block_class ) ); ?>" <?php echo $parent_only; // escaped before
echo bf_show_on_attributes( $options ); ?> >
	<label for="<?php echo esc_attr( $options['input_name'] ); ?>">
		<div class="bf-section-container bf-menus bf-clearfix"><label><?php echo $input; // escaped before ?> <span
						class="better-custom-field-label"><?php echo esc_html( $options['name'] ); ?></span></label>
		</div>
	</label>
</div>