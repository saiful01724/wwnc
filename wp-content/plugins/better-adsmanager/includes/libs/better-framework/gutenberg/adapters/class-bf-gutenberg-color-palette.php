<?php


class BF_Gutenberg_Color_Palette extends BF_Gutenberg_Field_Transformer {

	/**
	 * @param int $iteration
	 *
	 * @return mixed
	 */
	public function transform_field( $iteration ) {

		$label = isset( $this->field['name'] ) ? $this->field['name'] : '';

		return compact( 'label' );
	}


	/**
	 * The component name.
	 *
	 * @return string
	 */
	public function component() {

		return 'ColorPalette';
	}


	/**
	 * Return value data type.
	 *
	 * @since 3.9.0
	 * @return string
	 */
	public static function data_type() {

		return 'string';
	}
}
