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

if ( ! class_exists( 'YWSN_Bulk_SMS' ) ) {

	/**
	 * Implements Bulk SMS API for YWSN plugin
	 *
	 * @class   YWSN_Bulk_SMS
	 * @package Yithemes
	 * @since   1.0.0
	 * @author  Your Inspiration Themes
	 *
	 */
	class YWSN_Bulk_SMS extends YWSN_SMS_Gateway {

		/** @var string bulk_sms user */
		private $_bulk_sms_user;

		/** @var string bulk_sms pass */
		private $_bulk_sms_pass;

		/**
		 * Constructor
		 *
		 * @since   1.0.0
		 * @return  void
		 * @author  Alberto Ruggiero
		 */
		public function __construct() {

			$this->_bulk_sms_user = get_option( 'ywsn_bulk_sms_user' );
			$this->_bulk_sms_pass = get_option( 'ywsn_bulk_sms_pass' );

			parent::__construct();

		}

		/**
		 * Send SMS
		 *
		 * @since   1.0.0
		 *
		 * @param   $to_phone
		 * @param   $message
		 * @param   $country_code
		 *
		 * @return  void
		 * @throws  Exception for WP HTTP API error, no response, HTTP status code is not 201 or if HTTP status code not set
		 * @author  Alberto Ruggiero
		 */
		public function send( $to_phone, $message, $country_code ) {

			$charactersetid = empty( apply_filters( 'ywsn_additional_charsets', get_option( 'ywsn_active_charsets', array() ) ) ) ? '7bit' : '16bit';

			$args = http_build_query( array(
				                          'username'                  => $this->_bulk_sms_user,
				                          'password'                  => $this->_bulk_sms_pass,
				                          'message'                   => $this->encode_message( $message, $charactersetid ),
				                          'msisdn'                    => $to_phone,
				                          'allow_concat_text_sms'     => 1,
				                          'dca'                       => $charactersetid,
				                          'concat_text_sms_max_parts' => 3,
			                          ) );


			$wp_remote_http_args = array(
				'method' => 'POST',
				'body'   => $args,
				'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
				            "Content-Length: " . strlen( $args ) . "\r\n"
			);

			$endpoint = 'https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0';

			// perform HTTP request with endpoint / args
			$response = wp_safe_remote_request( esc_url_raw( $endpoint ), $wp_remote_http_args );

			// WP HTTP API error like network timeout, etc
			if ( is_wp_error( $response ) ) {

				throw new Exception( $response->get_error_message() );

			}

			$this->_log[] = $response;

			// Check for proper response / body
			if ( ! isset( $response['body'] ) ) {

				throw new Exception( __( 'No answer', 'yith-woocommerce-sms-notifications' ) );

			}

			$code = explode( '|', $response['body'] );

			if ( $code[0] != 0 && $code[0] != 1 ) {

				throw new Exception( sprintf( __( 'An error has occurred. Error code: %s', 'yith-woocommerce-sms-notifications' ), $code[0] ) );

			}

			return;

		}

		/**
		 * Encode message
		 *
		 * @since   1.0.0
		 *
		 * @param   $message
		 * @param   $type
		 *
		 * @return  string
		 * @author  Alberto Ruggiero
		 */
		public function encode_message( $message, $type ) {

			if ( $type == '7bit' ) {

				$special_chars = array(
					'Δ' => '0xD0',
					'Φ' => '0xDE',
					'Γ' => '0xAC',
					'Λ' => '0xC2',
					'Ω' => '0xDB',
					'Π' => '0xBA',
					'Ψ' => '0xDD',
					'Σ' => '0xCA',
					'Θ' => '0xD4',
					'Ξ' => '0xB1',
					'¡' => '0xA1',
					'£' => '0xA3',
					'¤' => '0xA4',
					'¥' => '0xA5',
					'§' => '0xA7',
					'¿' => '0xBF',
					'Ä' => '0xC4',
					'Å' => '0xC5',
					'Æ' => '0xC6',
					'Ç' => '0xC7',
					'É' => '0xC9',
					'Ñ' => '0xD1',
					'Ö' => '0xD6',
					'Ø' => '0xD8',
					'Ü' => '0xDC',
					'ß' => '0xDF',
					'à' => '0xE0',
					'ä' => '0xE4',
					'å' => '0xE5',
					'æ' => '0xE6',
					'è' => '0xE8',
					'é' => '0xE9',
					'ì' => '0xEC',
					'ñ' => '0xF1',
					'ò' => '0xF2',
					'ö' => '0xF6',
					'ø' => '0xF8',
					'ù' => '0xF9',
					'ü' => '0xFC',
				);

				$encoded_message = '';
				if ( mb_detect_encoding( $message, 'UTF-8' ) != 'UTF-8' ) {
					$message = utf8_encode( $message );
				}

				for ( $i = 0; $i < mb_strlen( $message, 'UTF-8' ); $i ++ ) {
					$char = mb_substr( $message, $i, 1, 'UTF-8' );
					if ( isset( $special_chars[ $char ] ) ) {
						$encoded_message .= chr( $special_chars[ $char ] );
					} else {
						$encoded_message .= $char;
					}
				}

				return $encoded_message;

			} else {

				return bin2hex( mb_convert_encoding( $message, "UTF-16", "UTF-8" ) );

			}

		}

	}

}