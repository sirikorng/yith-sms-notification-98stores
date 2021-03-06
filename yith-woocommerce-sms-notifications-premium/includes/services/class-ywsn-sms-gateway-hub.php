<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'YWSN_SMS_Gateway_Hub' ) ) {

	/**
	 * Implements SMS Gateway Hub API for YWSN plugin
	 *
	 * @class   YWSN_SMS_Gateway_Hub
	 * @package Yithemes
	 * @since   1.1.8
	 * @author  Your Inspiration Themes
	 *
	 */
	class YWSN_SMS_Gateway_Hub extends YWSN_SMS_Gateway {

		/** @var string sms_gateway_hub api key */
		private $_sms_gateway_hub_api_key;

		/** @var string sms_gateway_hub sender */
		private $_sms_gateway_hub_sender;

		/** @var string sms_gateway_hub channel */
		private $_sms_gateway_hub_channel;


		/**
		 * Constructor
		 *
		 * @since   1.1.8
		 * @return  void
		 * @author  Alberto Ruggiero
		 */
		public function __construct() {

			$this->_sms_gateway_hub_api_key = get_option( 'ywsn_sms_gateway_hub_api_key' );
			$this->_sms_gateway_hub_sender  = get_option( 'ywsn_sms_gateway_hub_sender' );
			$this->_sms_gateway_hub_channel = get_option( 'ywsn_sms_gateway_hub_channel_type' );

			parent::__construct();

		}

		/**
		 * Send SMS
		 *
		 * @since   1.1.8
		 *
		 * @param   $to_phone
		 * @param   $message
		 * @param   $country_code
		 *
		 * @return  void
		 * @throws  Exception for sms_gateway_hub Error code
		 * @author  Alberto Ruggiero
		 */
		public function send( $to_phone, $message, $country_code ) {

			$dcs = empty( apply_filters( 'ywsn_additional_charsets', get_option( 'ywsn_active_charsets', array() ) ) ) ? '0' : '8';

			$args = http_build_query( array(
				                          'APIKey'   => $this->_sms_gateway_hub_api_key,
				                          'senderid' => $this->_sms_gateway_hub_sender,
				                          'channel'  => $this->_sms_gateway_hub_channel,
				                          'DCS'      => $dcs,
				                          'flashsms' => 0,
				                          'number'   => $to_phone,
				                          'text'     => rawurlencode( $message ),
				                          'route'    => 'default'
			                          )
			);

			$endpoint = 'https://www.smsgatewayhub.com/api/mt/SendSMS?';

			// perform HTTP request with endpoint / args

			$ch = curl_init( $endpoint . $args );
			curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
			curl_setopt( $ch, CURLOPT_POST, 1 );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, "" );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 2 );
			$response = curl_exec( $ch );

			// WP HTTP API error like network timeout, etc
			if ( is_wp_error( $response ) ) {

				throw new Exception( $response->get_error_message() );

			}

			$this->_log[] = $response;

			// Check for proper body
			if ( $response == '' ) {

				throw new Exception( __( 'No answer', 'yith-woocommerce-sms-notifications' ) );

			}

			$result = json_decode( $response, true );

			if ( $result['ErrorCode'] != '000' ) {

				throw new Exception( sprintf( __( 'An error has occurred: %s', 'yith-woocommerce-sms-notifications' ), $result['ErrorMessage'] ) );

			}

			return;

		}

	}

}

