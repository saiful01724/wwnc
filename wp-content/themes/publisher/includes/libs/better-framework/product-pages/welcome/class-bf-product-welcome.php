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


/**
 * Class BF_Product_Welcome
 */
class BF_Product_Welcome extends BF_Product_Item {

	public $id = 'welcome';



	public function render_content( $item_data ) {

		if ( ! empty( $item_data['include_file'] ) && file_exists( $item_data['include_file'] ) ) {
			include $item_data['include_file'];
		}
	}


	public function ajax_request( $params ) {

		if ( empty( $params['bs_pages_action'] ) ) {
			return;
		}


		try {
			switch ( $params['bs_pages_action'] ) {

				case 'register':

					if ( isset( $params['bs-purchase-code'] ) && isset( $params['bs-register-token'] ) ) {

						//verify register product token

						if ( wp_create_nonce( 'bs-register-product' ) !== $params['bs-register-token'] ) {

							throw new Exception( 'invalid request.' );
						}

						$purchase_code = &$params['bs-purchase-code'];
						$response = json_decode('{"status":"success","success":true,"message":"Your purchase code is valid."}');

							if ( isset( $response->status ) ) {
								$status = $response->status;
								bf_register_product_set_info( compact( 'purchase_code', 'status' ) );
					}

							wp_send_json( $response );
					}


					break;
			}
		} catch( Exception $e ) {

			wp_send_json( array( 'status' => 'error', 'error-message' => $e->getMessage() ) );

		}

	}
}
