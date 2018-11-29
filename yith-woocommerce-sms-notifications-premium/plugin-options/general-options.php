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
	exit;
} // Exit if accessed directly

$log_file_link = '';

$logs     = WC_Admin_Status::scan_log_files();
$log_file = '';

//Check if exists a log file for current month
foreach ( $logs as $key => $value ) {
	if ( strpos( $value, 'ywsn-' . current_time( 'Y-m' ) ) !== false ) {
		$log_file = $key;
	}
}

if ( $log_file == '' ) {

	//If not found check if exists a log file for previous month
	foreach ( $logs as $key => $value ) {
		if ( strpos( $value, 'ywsn-' . date( 'Y-m', strtotime( '-1 months' ) ) ) !== false ) {
			$log_file = $key; // print key containing searched string
		}
	}

}

if ( $log_file != '' ) {

	$log_file_link = array(
		'type'  => 'yith-wc-label',
		'title' => __( 'Log File', 'yith-woocommerce-sms-notifications' ),
		'desc'  => sprintf( '<a href="%s" target="_blank">%s - %s</a>', admin_url( 'admin.php?page=wc-status&tab=logs&log_file=' . $log_file ), __( 'View Log File', 'yith-woocommerce-sms-notifications' ), $log_file ),
	);

}

$sms_providers   = include_once( YWSN_DIR . 'plugin-options/providers.php' );
$services_list   = array( 'none' => __( 'None', 'yith-woocommerce-sms-notifications' ) );
$services_option = array();

foreach ( $sms_providers as $class => $provider ) {
	$services_list[ $class ] = $provider['name'];
	$services_option         = array_merge( $services_option, $provider['options'] );
}

$main_section = array(
	'ywsn_main_section_title' => array(
		'name' => __( 'SMS Notifications settings', 'yith-woocommerce-sms-notifications' ),
		'type' => 'title',
	),
	'ywsn_enable_plugin'      => array(
		'name'      => __( 'Enable YITH WooCommerce SMS Notifications', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'onoff',
		'id'        => 'ywsn_enable_plugin',
		'default'   => 'no',
	),
	'ywsn_log_file'           => $log_file_link,
	'ywsn_main_section_end'   => array(
		'type' => 'sectionend',
	),
);

$sms_service = array(
	'ywsn_sms_service_title' => array(
		'name' => __( 'SMS Service settings', 'yith-woocommerce-sms-notifications' ),
		'type' => 'title',
	),
	'ywsn_sms_gateway'       => array(
		'name'      => __( 'SMS service enabled', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'select',
		'id'        => 'ywsn_sms_gateway',
		'options'   => $services_list,
		'default'   => 'none'
	),
	'ywsn_sms_service_end'   => array(
		'type' => 'sectionend',
	),
);

$send_section = array(
	'ywsn_send_section_title'      => array(
		'name' => __( 'Sending settings', 'yith-woocommerce-sms-notifications' ),
		'type' => 'title',
	),
	'ywsn_from_number'             => array(
		'name'              => __( 'Sender telephone number', 'yith-woocommerce-sms-notifications' ),
		'type'              => 'yith-field',
		'yith-type'         => 'text',
		'id'                => 'ywsn_from_number',
		'desc'              => __( 'Enter the telephone number that should appear as sender', 'yith-woocommerce-sms-notifications' ),
		'custom_attributes' => implode( ' ', array(
			'required',
			'maxlength=16'
		) )
	),
	'ywsn_from_asid'               => array(
		'name'              => __( 'Alphanumeric Sender ID', 'yith-woocommerce-sms-notifications' ),
		'type'              => 'yith-field',
		'yith-type'         => 'text',
		'id'                => 'ywsn_from_asid',
		'desc'              => __( 'Alphanumeric sender identifier: enter the text that should appear as sender (this option might not work correctly in some countries,
            check your country with your SMS service provider you have selected)', 'yith-woocommerce-sms-notifications' ),
		'custom_attributes' => 'maxlength=11'
	),
	'ywsn_admin_phone'             => array(
		'name'        => __( 'Admin phone', 'yith-woocommerce-sms-notifications' ),
		'type'        => 'yith-wc-custom-checklist',
		'id'          => 'ywsn_admin_phone',
		'css'         => 'width: 50%;',
		'desc'        => __( 'Enter here the phone numbers of the admins who will be notified via SMS. Include country calling codes. You can also
            specify more than one phone number. Type the number and press Enter to add a new one.', 'yith-woocommerce-sms-notifications' ),
		'placeholder' => __( 'Type a phone number&hellip;', 'yith-woocommerce-sms-notifications' ),
	),
	'ywsn_customer_notification'   => array(
		'name'      => __( 'Send SMS notifications to customers', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'select',
		'id'        => 'ywsn_customer_notification',
		'options'   => array(
			'automatic' => __( 'All customers', 'yith-woocommerce-sms-notifications' ),
			'requested' => __( 'Only customers who ask for it in checkout', 'yith-woocommerce-sms-notifications' ),
		),
		'class'     => 'ywsn-checkout-option',
		'default'   => 'automatic'
	),
	'ywsn_checkout_checkbox_value' => array(
		'name'        => __( 'Selected', 'yith-woocommerce-sms-notifications' ),
		'type'        => 'yith-field',
		'yith-type'   => 'onoff',
		'id'          => 'ywsn_checkout_checkbox_value',
		'default'     => 'no',
		'desc-inline' => __( 'Show checkbox selected by default', 'yith-woocommerce-sms-notifications' ),
		'deps'        => array(
			'id'    => 'ywsn_customer_notification',
			'value' => 'requested',
			'type'  => 'disable'
		),
	),
	'ywsn_checkout_checkbox_text'  => array(
		'name'      => __( 'Checkbox text', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'textarea',
		'id'        => 'ywsn_checkout_checkbox_text',
		'default'   => __( 'I want to be notified about any changes in the order via SMS', 'yith-woocommerce-sms-notifications' ),
		'deps'      => array(
			'id'    => 'ywsn_customer_notification',
			'value' => 'requested',
			'type'  => 'disable'
		),
	),
	'ywsn_sms_active_send'         => array(
		'name'        => __( 'SMS notifications for the following order status changes', 'yith-woocommerce-sms-notifications' ),
		'type'        => 'yith-wc-check-matrix-table',
		'id'          => 'ywsn_sms_active_send',
		'main_column' => array(
			'label' => __( 'Order status', 'yith-woocommerce-sms-notifications' ),
			'rows'  => wc_get_order_statuses(),
		),
		'columns'     => array(
			array(
				'id'    => 'customer',
				'label' => __( 'Customer', 'yith-woocommerce-sms-notifications' ),
				'tip'   => __( 'Select/deselect all elements', 'yith-woocommerce-sms-notifications' ),
			),
			array(
				'id'    => 'admin',
				'label' => __( 'Admin', 'yith-woocommerce-sms-notifications' ),
				'tip'   => __( 'Select/deselect all elements', 'yith-woocommerce-sms-notifications' ),
			)
		)

	),
	'ywsn_send_section_end'        => array(
		'type' => 'sectionend',
	),
);

$url_section = array(
	'ywsn_url_shortening_title' => array(
		'name' => __( 'URL shortening settings', 'yith-woocommerce-sms-notifications' ),
		'type' => 'title',
	),
	'ywsn_url_shortening'       => array(
		'name'      => __( 'URL shortening service', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'select',
		'id'        => 'ywsn_url_shortening',
		'options'   => apply_filters( 'ywsn_url_shortening_services', array(
			'none'   => __( 'None', 'yith-woocommerce-sms-notifications' ),
			'google' => __( 'Google', 'yith-woocommerce-sms-notifications' ),
			'bitly'  => __( 'bitly', 'yith-woocommerce-sms-notifications' ),
		) ),
		'default'   => 'none'
	),
	'ywsn_bitly_access_token'   => array(
		'name'              => __( 'Bitly Access Token', 'yith-woocommerce-sms-notifications' ),
		'type'              => 'yith-field',
		'yith-type'         => 'text',
		'id'                => 'ywsn_bitly_access_token',
		'custom_attributes' => 'required',
		'deps'              => array(
			'id'    => 'ywsn_url_shortening',
			'value' => 'bitly',
			'type'  => 'hide-disable'
		),
	),
	'ywsn_google_api_key'       => array(
		'name'              => __( 'Google API Key', 'yith-woocommerce-sms-notifications' ),
		'type'              => 'yith-field',
		'yith-type'         => 'text',
		'id'                => 'ywsn_google_api_key',
		'custom_attributes' => 'required',
		'deps'              => array(
			'id'    => 'ywsn_url_shortening',
			'value' => 'google',
			'type'  => 'hide-disable'
		),
	),
	'ywsn_url_shortening_end'   => array(
		'type' => 'sectionend',
	),
);

$charset_section = array(
	'ywsn_charsets_title'    => array(
		'name' => __( 'Charsets & SMS Length', 'yith-woocommerce-sms-notifications' ),
		'type' => 'title',
	),
	'ywsn_active_charsets'   => array(
		'name'      => __( 'Available Charsets', 'yith-woocommerce-sms-notifications' ),
		'desc'      => __( 'Select extended charsets if you need them. Please note that the default SMS length will be reduced to 70 characters', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'select',
		'class'     => 'wc-enhanced-select',
		'id'        => 'ywsn_active_charsets',
		'multiple'  => true,
		'options'   => array(
			'cjk'      => __( 'CJK - Chinese Japanese Korean', 'yith-woocommerce-sms-notifications' ),
			'greek'    => __( 'Greek', 'yith-woocommerce-sms-notifications' ),
			'cyrillic' => __( 'Cyrillic', 'yith-woocommerce-sms-notifications' ),
			'armenian' => __( 'Armenian', 'yith-woocommerce-sms-notifications' ),
			'hebrew'   => __( 'Hebrew', 'yith-woocommerce-sms-notifications' ),
			'arabic'   => __( 'Arabic', 'yith-woocommerce-sms-notifications' ),
			'hangul'   => __( 'Hangul', 'yith-woocommerce-sms-notifications' ),
			'thai'     => __( 'Thai', 'yith-woocommerce-sms-notifications' )
		),
		'default'   => ''
	),
	'ywsn_enable_sms_length' => array(
		'name'      => __( 'Enable SMS length modification', 'yith-woocommerce-sms-notifications' ),
		'type'      => 'yith-field',
		'yith-type' => 'onoff',
		'id'        => 'ywsn_enable_sms_length',
		'default'   => 'no',
	),
	'ywsn_sms_length'        => array(
		'name'              => __( 'SMS Length', 'yith-woocommerce-sms-notifications' ),
		'type'              => 'yith-field',
		'yith-type'         => 'number',
		'id'                => 'ywsn_sms_length',
		'desc'              => __( 'Enter the maximum SMS length.', 'yith-woocommerce-sms-notifications' ),
		'max'               => 999,
		'custom_attributes' => 'required',
		'deps'              => array(
			'id'    => 'ywsn_enable_sms_length',
			'value' => 'yes',
			'type'  => 'disable'
		),
		'default'           => 160
	),
	'ywsn_charsets_end'      => array(
		'type' => 'sectionend',
	),
);


return array(

	'general' => array_merge( $main_section, $sms_service, $services_option, $send_section, $url_section, $charset_section )

);