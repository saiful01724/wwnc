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


$object = Better_Framework::html()->add( 'textarea' );

if ( $options['value'] !== false ) {
	if ( ! empty( $options['special-chars'] ) && $options['special-chars'] == true ) {
		$object->val( htmlspecialchars_decode( $options['value'] ) );
	} else {
		$object->val( $options['value'] );
	}
}

if ( isset( $options['rtl'] ) && $options['rtl'] !== false ) {
	$object->class( 'rtl' );
}

if ( isset( $options['ltr'] ) && $options['ltr'] !== false ) {
	$object->class( 'ltr' );
}

if ( isset( $options['placeholder'] ) && $options['placeholder'] !== '' ) {
	$object->attr( 'placeholder', $options['placeholder'] );
}

if ( isset( $options['input_class'] ) ) {
	$object->class( $options['input_class'] );
}

$object->name( $options['input_name'] );

$output = '';

$output .= $object->display();

echo $output;  // escaped before
echo $this->get_filed_input_desc( $options );  // escaped before