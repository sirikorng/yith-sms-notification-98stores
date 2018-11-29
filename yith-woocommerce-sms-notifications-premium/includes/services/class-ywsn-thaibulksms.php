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

if ( ! class_exists( 'YWSN_ThaiBulkSMS' ) ) {

	/**
	 * Implements ThaiBulkSMS API for YWSN plugin
	 *
	 * @class   YWSN_ThaiBulkSMS
	 * @package Yithemes
	 * @since   1.1.8
	 * @author  Your Inspiration Themes
	 *
	 */
	class YWSN_ThaiBulkSMS extends YWSN_SMS_Gateway {

		/** @var string thaibulksms mobile */
		private $_thaibulksms_user;

		/** @var string thaibulksms password */
		private $_thaibulksms_pass;

		/** @var string thaibulksms sender */
		private $_thaibulksms_sender;

		/** @var string thaibulksms sms type */
		private $_thaibulksms_sms_type;

		/**
		 * Constructor
		 *
		 * @since   1.1.8
		 * @return  void
		 * @author  Alberto Ruggiero
		 */
		public function __construct() {

			$this->_thaibulksms_user     = get_option( 'ywsn_thaibulksms_user' );
			$this->_thaibulksms_pass     = get_option( 'ywsn_thaibulksms_pass' );
			$this->_thaibulksms_sender   = get_option( 'ywsn_thaibulksms_sender' );
			$this->_thaibulksms_sms_type = get_option( 'ywsn_thaibulksms_sms_type' );

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
		 * @throws  Exception for WP HTTP API error, no response, HTTP status code is not 201 or if HTTP status code not set
		 * @author  Alberto Ruggiero
		 */
		public function send( $to_phone, $message, $country_code ) {

			$args = array(
				'username' => $this->_thaibulksms_user,
				'password' => $this->_thaibulksms_pass,
				'sender'   => $this->_thaibulksms_sender,
				'msisdn'   => $to_phone,
				'message'  => $message,
				'force'    => $this->_thaibulksms_sms_type
			);

			$endpoint = 'http://thaibulksms.com/sms_api.php';

			// perform HTTP request with endpoint / args
			$response = wp_remote_get( add_query_arg( $args, $endpoint ) );

			// WP HTTP API error like network timeout, etc
			if ( is_wp_error( $response ) ) {

				throw new Exception( $response->get_error_message() );

			}

			$this->_log[] = $response;

			// Check for proper response / body
			if ( ! isset( $response['body'] ) ) {

				throw new Exception( __( 'No answer', 'yith-woocommerce-sms-notifications' ) );

			}

			$response_body = simplexml_load_string( $response['body'] );

			if ( ! isset( $response_body->QUEUE->Status ) ) {

				throw new Exception( sprintf( __( 'An error has occurred. Error code: %s - %s', 'yith-woocommerce-sms-notifications' ), $response_body->Status, $response_body->Detail ) );

			}

			return;

		}

	}

}
