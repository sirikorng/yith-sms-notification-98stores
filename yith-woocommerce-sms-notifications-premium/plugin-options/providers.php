<?php
return array(
	'YWSN_Agile_Telecom'   => array(
		'name'    => __( 'Agile Telecom', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_agile_title' => array(
				'name' => __( 'Agile Telecom settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_agile_desc'  => array(
				'label_id' => 'ywsn_agile_telecom_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Agile Telecom account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.agiletelecom.com">http://www.agiletelecom.com</a>' ),
			),
			'ywsn_agile_user'  => array(
				'name'              => __( 'Agile Telecom Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_agile_user',
				'custom_attributes' => 'required'
			),
			'ywsn_agile_pwd'   => array(
				'name'              => __( 'Agile Telecom Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_agile_pwd',
				'custom_attributes' => 'required'
			),
			'ywsn_agile_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Bulk_SMS'        => array(
		'name'    => __( 'Bulk SMS', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_bulk_sms_title' => array(
				'name' => __( 'Bulk SMS settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_bulk_sms_desc'  => array(
				'label_id' => 'ywsn_bulk_sms_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Bulk SMS account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.bulksms.com">https://www.bulksms.com</a>' ),
			),
			'ywsn_bulk_sms_user'  => array(
				'name'              => __( 'Bulk SMS Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_bulk_sms_user',
				'custom_attributes' => 'required'
			),
			'ywsn_bulk_sms_pass'  => array(
				'name'              => __( 'Bulk SMS Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_bulk_sms_pass',
				'custom_attributes' => 'required'
			),
			'ywsn_bulk_sms_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Bulk_SMS_SA'     => array(
		'name'    => __( 'Bulk SMS (Saudi Arabia)', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_bulk_sms_sa_title'  => array(
				'name' => __( 'Bulk SMS (Saudi Arabia) settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_bulk_sms_sa_desc'   => array(
				'label_id' => 'ywsn_bulk_sms_sa_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Bulk SMS (Saudi Arabia) account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.bulksms-sa.info">http://www.bulksms-sa.info</a>' ),
			),
			'ywsn_bulk_sms_sa_user'   => array(
				'name'              => __( 'Bulk SMS (Saudi Arabia) Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_bulk_sms_sa_user',
				'custom_attributes' => 'required'
			),
			'ywsn_bulk_sms_sa_pass'   => array(
				'name'              => __( 'Bulk SMS (Saudi Arabia) Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_bulk_sms_sa_pass',
				'custom_attributes' => 'required'
			),
			'ywsn_bulk_sms_sa_sender' => array(
				'name'              => __( 'Bulk SMS (Saudi Arabia) Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_bulk_sms_sa_sender',
				'custom_attributes' => 'required'
			),
			'ywsn_bulk_sms_sa_end'    => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_ClickSend'       => array(
		'name'    => __( 'ClickSend', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_clicksend_title'    => array(
				'name' => __( 'ClickSend settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_clicksend_desc'     => array(
				'label_id' => 'ywsn_clicksend_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your ClickSend account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.clicksend.com/">https://www.clicksend.com/</a>' ),
			),
			'ywsn_clicksend_username' => array(
				'name'              => __( 'ClickSend Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_clicksend_username',
				'custom_attributes' => 'required'
			),
			'ywsn_clicksend_api_key'  => array(
				'name'              => __( 'ClickSend API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_clicksend_api_key',
				'custom_attributes' => 'required'
			),
			'ywsn_clicksend_end'      => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Clockwork'       => array(
		'name'    => __( 'Clockwork', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_clockwork_title'   => array(
				'name' => __( 'Clockwork settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_clockwork_desc'    => array(
				'label_id' => 'ywsn_clockwork_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Clockwork account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.clockworksms.com/">https://www.clockworksms.com/</a>' ),
			),
			'ywsn_clockwork_api_key' => array(
				'name'              => __( 'Clockwork API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_clockwork_api_key',
				'custom_attributes' => 'required'
			),
			'ywsn_clockwork_end'     => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Crystalwebtechs' => array(
		'name'    => __( 'Crystalwebtechs', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_crystalwebtechs_title'               => array(
				'name' => __( 'Crystalwebtechs settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_crystalwebtechs_desc'                => array(
				'label_id' => 'ywsn_crystalwebtechs_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Crystalwebtechs account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.crystalwebtechs.com">http://www.crystalwebtechs.com</a>' ),
			),
			'ywsn_crystalwebtechs_user'                => array(
				'name'              => __( 'Crystalwebtechs Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_crystalwebtechs_username',
				'custom_attributes' => 'required'
			),
			'ywsn_crystalwebtechs_pass'                => array(
				'name'              => __( 'Crystalwebtechs Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_crystalwebtechs_pass',
				'custom_attributes' => 'required'
			),
			'ywsn_crystalwebtechs_sender'              => array(
				'name'              => __( 'Crystalwebtechs Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_crystalwebtechs_sender',
				'custom_attributes' => 'required'
			),
			'ywsn_crystalwebtechs_sender_channel_type' => array(
				'name'      => __( 'Crystalwebtechs Sender Channel Type', 'yith-woocommerce-sms-notifications' ),
				'type'      => 'yith-field',
				'yith-type' => 'select',
				'id'        => 'ywsn_crystalwebtechs_sender_channel_type',
				'default'   => 'Trans',
				'options'   => array(
					'Trans' => __( 'Transactional', 'yith-woocommerce-sms-notifications' ),
					'Promo' => __( 'Promotional', 'yith-woocommerce-sms-notifications' )
				)
			),
			'ywsn_crystalwebtechs_route_id'            => array(
				'name'              => __( 'Crystalwebtechs Route ID', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_crystalwebtechs_route_id',
				'custom_attributes' => 'required'
			),
			'ywsn_crystalwebtechs_end'                 => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Green_Text'      => array(
		'name'    => __( 'Green Text', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_green_text_title' => array(
				'name' => __( 'Green Text settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_green_text_desc'  => array(
				'label_id' => 'ywsn_green_text_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Green Text account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.gntext.com/">http://www.gntext.com/</a>' ),
			),
			'ywsn_green_text_user'  => array(
				'name'              => __( 'Green Text Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_green_text_user',
				'custom_attributes' => 'required'
			),
			'ywsn_green_text_pass'  => array(
				'name'              => __( 'Green Text Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_green_text_pass',
				'css'               => 'width: 50%',
				'custom_attributes' => 'required'
			),
			'ywsn_green_text_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Jazz'            => array(
		'name'    => __( 'Jazz (Mobilink)', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_jazz_title' => array(
				'name' => __( 'Jazz settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_jazz_desc'  => array(
				'label_id' => 'ywsn_jazz_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Jazz account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.jazz.com.pk/business/">https://www.jazz.com.pk/business/</a>' ),
			),
			'ywsn_jazz_user'  => array(
				'name'              => __( 'Jazz CMS Portal Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_jazz_username',
				'custom_attributes' => 'required'
			),
			'ywsn_jazz_pwd'   => array(
				'name'              => __( 'Jazz CMS Portal Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_jazz_password',
				'custom_attributes' => 'required'
			),
			'ywsn_jazz_mask'  => array(
				'name'              => __( 'Jazz CMS Portal Mask', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_jazz_mask',
				'custom_attributes' => 'required'
			),
			'ywsn_jazz_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_MessageBird'     => array(
		'name'    => __( 'MessageBird', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_messagebird_title'   => array(
				'name' => __( 'MessageBird settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_messagebird_desc'    => array(
				'label_id' => 'ywsn_messagebird_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your MessageBird account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.messagebird.com/">https://www.messagebird.com/</a>' ),
			),
			'ywsn_messagebird_api_key' => array(
				'name'              => __( 'MessageBird API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_messagebird_api_key',
				'custom_attributes' => 'required'
			),
			'ywsn_messagebird_end'     => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Mobily_WS'       => array(
		'name'    => __( 'Mobily.ws', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_mobily_ws_title'  => array(
				'name' => __( 'Mobily.ws settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_mobily_ws_desc'   => array(
				'label_id' => 'ywsn_mobily_ws_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Mobily.ws account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.mobily.ws">https://www.mobily.ws</a>' ),
			),
			'ywsn_mobily_ws_mobile' => array(
				'name'              => __( 'Mobily.ws Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_mobily_ws_mobile',
				'custom_attributes' => 'required'
			),
			'ywsn_mobily_ws_pass'   => array(
				'name'              => __( 'Mobily.ws Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_mobily_ws_pass',
				'custom_attributes' => 'required'
			),
			'ywsn_mobily_ws_sender' => array(
				'name'              => __( 'Mobily.ws Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_mobily_ws_sender',
				'custom_attributes' => 'required'
			),
			'ywsn_mobily_ws_end'    => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Msg91'           => array(
		'name'    => __( 'Msg91', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_msg91_title' => array(
				'name' => __( 'Msg91 settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_msg91_desc'  => array(
				'label_id' => 'ywsn_msg91_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Msg91 account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://msg91.com/">https://msg91.com/</a>' ),
			),
			'ywsn_msg91_key'   => array(
				'name'              => __( 'Msg91 API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_msg91_key',
				'custom_attributes' => 'required',
			),
			'ywsn_msg91_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Nexmo'           => array(
		'name'    => __( 'Nexmo', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_nexmo_title'      => array(
				'name' => __( 'Nexmo settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_nexmo_desc'       => array(
				'label_id' => 'ywsn_nexmo_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Nexmo account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.nexmo.com/">https://www.nexmo.com/</a>' ),
			),
			'ywsn_nexmo_api_key'    => array(
				'name'              => __( 'Nexmo API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_nexmo_api_key',
				'custom_attributes' => 'required',
			),
			'ywsn_nexmo_api_secret' => array(
				'name'              => __( 'Nexmo API Secret', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_nexmo_api_secret',
				'custom_attributes' => 'required',
			),
			'ywsn_nexmo_end'        => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Twilio'          => array(
		'name'    => __( 'Twilio', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_twilio_title'      => array(
				'name' => __( 'Twilio settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_twilio_desc'       => array(
				'label_id' => 'ywsn_twilio_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create a Twilio account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.twilio.com">https://www.twilio.com</a>' ),
			),
			'ywsn_twilio_sid'        => array(
				'name'              => __( 'Twilio Account SID', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_twilio_sid',
				'custom_attributes' => 'required',
			),
			'ywsn_twilio_auth_token' => array(
				'name'              => __( 'Twilio Auth Token', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_twilio_auth_token',
				'custom_attributes' => 'required',
			),
			'ywsn_twilio_end'        => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_SmsBroadcast'    => array(
		'name'    => __( 'SMS Broadcast', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_smsbroadcast_title' => array(
				'name' => __( 'SMS Broadcast settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_smsbroadcast_desc'  => array(
				'label_id' => 'ywsn_smsbroadcast_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your SMS Broadcast account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.smsbroadcast.com.au/">https://www.smsbroadcast.com.au/</a>' ),
			),
			'ywsn_smsbroadcast_user'  => array(
				'name'              => __( 'SMS Broadcast Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_smsbroadcast_user',
				'custom_attributes' => 'required',
			),
			'ywsn_smsbroadcast_pass'  => array(
				'name'              => __( 'SMS Broadcast Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_smsbroadcast_pass',
				'custom_attributes' => 'required',
			),
			'ywsn_smsbroadcast_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_SMS_Country'     => array(
		'name'    => __( 'SMS Country', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_sms_country_title' => array(
				'name' => __( 'SMS Country settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_sms_country_desc'  => array(
				'label_id' => 'ywsn_sms_country_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your SMS Country account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.smscountry.com">http://www.smscountry.com</a>' ),
			),
			'ywsn_sms_country_user'  => array(
				'name'              => __( 'SMS Country Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_sms_country_user',
				'custom_attributes' => 'required',
			),
			'ywsn_sms_country_pwd'   => array(
				'name'              => __( 'SMS Country Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_sms_country_pwd',
				'custom_attributes' => 'required',
			),
			'ywsn_sms_country_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_SMS_Gateway_Hub' => array(
		'name'    => __( 'SMS Gateway Hub', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_sms_gateway_hub_title'        => array(
				'name' => __( 'SMS Gateway settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_sms_gateway_hub_desc'         => array(
				'label_id' => 'ywsn_sms_gateway_hub_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your SMS Gateway Hub account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.smsgatewayhub.com">http://www.smsgatewayhub.com</a>' ),
			),
			'ywsn_sms_gateway_hub_api_key'      => array(
				'name'              => __( 'SMS Gateway Hub API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_sms_gateway_hub_api_key',
				'custom_attributes' => 'required',
			),
			'ywsn_sms_gateway_hub_sender'       => array(
				'name'              => __( 'SMS Gateway Hub Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_sms_gateway_hub_sender',
				'custom_attributes' => implode( ' ', array(
					'required',
					'maxlength="6"'
				) )
			),
			'ywsn_sms_gateway_hub_channel_type' => array(
				'name'      => __( 'SMS Gateway Hub Channel Type', 'yith-woocommerce-sms-notifications' ),
				'type'      => 'yith-field',
				'yith-type' => 'select',
				'id'        => 'ywsn_sms_gateway_hub_channel_type',
				'default'   => '2',
				'options'   => array(
					'1' => __( 'Promotional', 'yith-woocommerce-sms-notifications' ),
					'2' => __( 'Transactional', 'yith-woocommerce-sms-notifications' ),
				)
			),
			'ywsn_sms_gateway_hub_end'          => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_SMS_Office'      => array(
		'name'    => __( 'SMS Office', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_sms_office_title' => array(
				'name' => __( 'SMS Office settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_sms_office_desc'  => array(
				'label_id' => 'ywsn_sms_office_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your SMS Office account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="hhttp://smsoffice.ge/">http://smsoffice.ge/</a>' ),
			),
			'ywsn_sms_office_key'   => array(
				'name'              => __( 'SMS Office API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_sms_office_key',
				'custom_attributes' => 'required',
			),
			'ywsn_sms_office_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_SmsCyber'        => array(
		'name'    => __( 'SmsCyber', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_smscyber_title' => array(
				'name' => __( 'SmsCyber settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_smscyber_desc'  => array(
				'label_id' => 'ywsn_smscyber_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your SmsCyber account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://bulk.smscyber.com">http://bulk.smscyber.com</a>' ),
			),
			'ywsn_smscyber_user'  => array(
				'name'              => __( 'SmsCyber Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_smscyber_user',
				'custom_attributes' => 'required',
			),
			'ywsn_smscyber_api'   => array(
				'name'              => __( 'SmsCyber API Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_smscyber_api',
				'custom_attributes' => 'required',
			),
			'ywsn_smscyber_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_ThaiBulkSMS'     => array(
		'name'    => __( 'ThaiBulkSMS', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_thaibulksms_title'    => array(
				'name' => __( 'ThaiBulkSMS settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_thaibulksms_desc'     => array(
				'label_id' => 'ywsn_thaibulksms_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your ThaiBulkSMS account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.thaibulksms.com/">https://www.thaibulksms.com/</a>' ),
			),
			'ywsn_thaibulksms_user'     => array(
				'name'              => __( 'ThaiBulkSMS Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_thaibulksms_user',
				'custom_attributes' => 'required',
			),
			'ywsn_thaibulksms_pass'     => array(
				'name'              => __( 'ThaiBulkSMS Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_thaibulksms_pass',
				'custom_attributes' => 'required',
			),
			'ywsn_thaibulksms_sender'   => array(
				'name'              => __( 'ThaiBulkSMS Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_thaibulksms_sender',
				'custom_attributes' => implode( ' ', array(
					'required',
					'maxlength="10"'
				) )
			),
			'ywsn_thaibulksms_sms_type' => array(
				'name'      => __( 'ThaiBulkSMS SMS Type', 'yith-woocommerce-sms-notifications' ),
				'type'      => 'yith-field',
				'yith-type' => 'select',
				'id'        => 'ywsn_thaibulksms_sms_type',
				'default'   => 'standard',
				'options'   => array(
					'standard' => __( 'Standard', 'yith-woocommerce-sms-notifications' ),
					'premium'  => __( 'Premium', 'yith-woocommerce-sms-notifications' )
				)
			),
			'ywsn_thaibulksms_end'      => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Trend_Mens'      => array(
		'name'    => __( 'Trend MENS', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_trend_mens_title' => array(
				'name' => __( 'Trend MENS settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_trend_mens_desc'  => array(
				'label_id' => 'ywsn_trend_mens_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your Trend MENS account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="https://www.trendmens.com.br/">https://www.trendmens.com.br/</a>' ),
			),
			'ywsn_trend_mens_key'   => array(
				'name'              => __( 'Trend MENS API Key', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_trend_mens_key',
				'custom_attributes' => 'required',
			),
			'ywsn_trend_mens_end'   => array(
				'type' => 'sectionend',
			),
		),
	),
	'YWSN_Uaedes'          => array(
		'name'    => __( 'UAEDes', 'yith-woocommerce-sms-notifications' ),
		'options' => array(
			'ywsn_uaedes_title'  => array(
				'name' => __( 'UAEDes settings', 'yith-woocommerce-sms-notifications' ),
				'type' => 'title',
			),
			'ywsn_uaedes_desc'   => array(
				'label_id' => 'ywsn_uaedes_desc',
				'type'     => 'yith-wc-label',
				'desc'     => sprintf( __( 'Create your UAEDes account on %s', 'yith-woocommerce-sms-notifications' ), '<a href="http://www.uaedes.ae">http://www.uaedes.ae</a>' ),
			),
			'ywsn_uaedes_user'   => array(
				'name'              => __( 'UAEDes Username', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_uaedes_user',
				'custom_attributes' => 'required',
			),
			'ywsn_uaedes_pass'   => array(
				'name'              => __( 'UAEDes Password', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_uaedes_pass',
				'custom_attributes' => 'required',
			),
			'ywsn_uaedes_sender' => array(
				'name'              => __( 'UAEDes Sender', 'yith-woocommerce-sms-notifications' ),
				'type'              => 'yith-field',
				'yith-type'         => 'text',
				'id'                => 'ywsn_uaedes_sender',
				'custom_attributes' => 'required',
			),
			'ywsn_uaedes_end'    => array(
				'type' => 'sectionend',
			),
		),
	),
);