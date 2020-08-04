<?php

if ( ! class_exists( 'Walker_Category' ) ) {

	require ABSPATH . WPINC . '/class-walker-category.php';
}


class BF_Term_Select extends Walker_Category {

	public $primary_term_id;

	public static $status;


	function __destruct() {

		self::$status = null;
	}


	public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {


		if ( is_null( self::$status ) ) {
			self::$status = array();
			if ( isset( $args['selected_terms'] ) ) {
				$terms_id = explode( ',', $args['selected_terms'] );
				foreach ( $terms_id as $term_id ) {
					if ( $term_id ) {

						if ( $term_id[0] === '-' ) {
							$term_id     = substr( $term_id, 1 );
							$term_status = 'deactivate';
						} elseif ( $term_id[0] === '+' ) {
							$term_id               = substr( $term_id, 1 );
							$term_status           = 'active';
							$this->primary_term_id = $term_id;
						} else {
							$term_status = 'active';
						}

						self::$status[ $term_id ] = $term_status;
					}
				}
			}
		}

		$term_status = isset( self::$status[ $category->term_id ] ) ? self::$status[ $category->term_id ] : '';

		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters(
			'list_cats',
			esc_attr( $category->name ),
			$category
		);

		// Don't generate an element if the category name is empty.
		if ( ! $cat_name ) {
			return;
		}

		$el = '<span class="label" data-status="' . $term_status . '">' . $cat_name;

		if ( ! empty( $args['show_count'] ) ) {
			$el .= ' (' . number_format_i18n( $category->count ) . ')';
		}
		$output      .= "\t<li";
		$css_classes = array(
			'cat-item',
			'cat-item-' . $category->term_id,
		);

		if ( ! empty( $args['current_category'] ) ) {
			// 'current_category' can be an array, so we use `get_terms()`.
			$_current_terms = get_terms( $category->taxonomy, array(
				'include'    => $args['current_category'],
				'hide_empty' => false,
			) );

			foreach ( $_current_terms as $_current_term ) {
				if ( $category->term_id == $_current_term->term_id ) {
					$css_classes[] = 'current-cat';
				} elseif ( $category->term_id == $_current_term->parent ) {
					$css_classes[] = 'current-cat-parent';
				}
				while( $_current_term->parent ) {
					if ( $category->term_id == $_current_term->parent ) {
						$css_classes[] = 'current-cat-ancestor';
						break;
					}
					$_current_term = get_term( $_current_term->parent, $category->taxonomy );
				}
			}
		}

		/**
		 * Filter the list of CSS classes to include with each category in the list.
		 *
		 * @since 4.2.0
		 *
		 * @see   wp_list_categories()
		 *
		 * @param array  $css_classes An array of CSS classes to be applied to each list item.
		 * @param object $category    Category data object.
		 * @param int    $depth       Depth of page, used for padding.
		 * @param array  $args        An array of wp_list_categories() arguments.
		 */
		$css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );

		$output .= ' class="' . $css_classes . '"';
		$output .= ">";
		$output .= $this->checkbox_field( $category, $args['input_name'] );
		$output .= "$el\n";
		if ( $category->term_id == $this->primary_term_id ) {
			$output .= '<em class="bf-make-term-primary bf-is-term-primary">Primary</em>';
		} elseif ( empty( $category->parent ) && $term_status === 'active' ) {
			$output .= '<em class="bf-make-term-primary"><a href="#" data-term-id="' . intval( $category->term_id ) . '">Make Primary</a></em>';
		}
		$output .= '</span>';
	}


	protected function checkbox_field( $term, $input_name ) {

		ob_start();
		$status = 'none';
		if ( isset( self::$status[ $term->term_id ] ) ) {
			$status = self::$status[ $term->term_id ];
		} elseif ( ! empty( $term->parent ) ) {
			if ( isset( self::$status[ $term->parent ] ) ) {
				$_status = self::$status[ $term->parent ];
				if ( $_status === 'active' ) {
					$status = $_status;

					self::$status[ $term->term_id ] = $status;
				}
			}
		}
		$status = esc_attr( $status );
		?>
		<!-- Start checkbox input -->
		<div
				class="bf-checkbox-multi-state <?php echo $term->term_id == $this->primary_term_id ? 'bf-checkbox-primary-term' : '' ?>"
				data-current-state="<?php echo $status ?>"
		>
			<input type="hidden"
			       name="<?php echo esc_attr( $input_name ) ?>[<?php echo intval( $term->term_id ) ?>]"
			       class="bf-checkbox-status"
			       value="<?php echo $status ?>">

			<span data-state="none"></span>
			<span data-state="active" class="bf-checkbox-active">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
			<span data-state="deactivate" class="bf-checkbox-active">
                         <i class="fa fa-times" aria-hidden="true"></i>
                    </span>
		</div>
		<!-- END checkbox input -->
		<?php

		return ob_get_clean();
	}
}
