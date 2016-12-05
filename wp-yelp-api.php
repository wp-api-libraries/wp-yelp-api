<?php
/**
 * WP Yelp API (https://www.yelp.com/developers/documentation/v2/overview)
 *
 * @package WP-Yelp-API
 */

/*
* Plugin Name: WP Yelp API
* Plugin URI: https://github.com/wp-api-libraries/wp-yelp-api
* Description: Perform API requests to Yelp API in WordPress.
* Author: WP API Libraries
* Author URI: https://wp-api-libraries.com
* Version: 1.0.0
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-yelp-api
* GitHub Branch: master
*/

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'YelpAPI' ) ) {

	/**
	 * YelpAPI class.
	 */
	class YelpAPI {

		/**
		 * consumer_key
		 *
		 * (default value: '')
		 *
		 * @var string
		 * @access public
		 * @static
		 */
		static $consumer_key    = '';

		/**
		 * consumer_secret
		 *
		 * (default value: '')
		 *
		 * @var string
		 * @access public
		 * @static
		 */
		static $consumer_secret = '';

		/**
		 * token
		 *
		 * (default value: '')
		 *
		 * @var string
		 * @access public
		 * @static
		 */
		static $token          = '';

		/**
		 * token_secret
		 *
		 * (default value: '')
		 *
		 * @var string
		 * @access public
		 * @static
		 */
		static $token_secret    = '';

		/**
		 * Base URI.
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://api.yelp.com/v2/';

		/**
		 * Construct.
		 *
		 * @access public
		 * @param mixed $api_key API Key.
		 * @param mixed $output Output.
		 * @return void
		 */
		public function __construct( ) {

		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {

			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );

			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'text-domain' ), $code ) );
			}

			$body = wp_remote_retrieve_body( $response );

			return json_decode( $body );

		}


		/**
		 * search function.
		 *
		 * @access public
		 * @param mixed $term
		 * @param mixed $limit
		 * @param mixed $offset
		 * @param mixed $sort
		 * @param mixed $category_filter
		 * @param mixed $radius_filter
		 * @param mixed $deals_filter
		 * @param mixed $location
		 * @param mixed $bounds
		 * @param mixed $latitude
		 * @param mixed $longitude
		 * @param mixed $accuracy
		 * @param mixed $altitude
		 * @param mixed $altitude_accuracy
		 * @param mixed $cc
		 * @param mixed $lang
		 * @param mixed $actionlinks
		 * @return void
		 */
		public function search( $term, $limit, $offset, $sort, $category_filter, $radius_filter, $deals_filter, $location, $bounds, $latitude, $longitude, $accuracy, $altitude, $altitude_accuracy, $cc, $lang, $actionlinks ) {

		}

		/**
		 * get_business function.
		 *
		 * @access public
		 * @param mixed $business_id
		 * @param mixed $cc
		 * @param mixed $lang
		 * @param mixed $lang_filter
		 * @param mixed $actionlinks
		 * @return void
		 */
		function get_business( $business_id, $cc, $lang, $lang_filter, $actionlinks ) {

		}

		/**
		 * phone_search function.
		 *
		 * @access public
		 * @param mixed $phone
		 * @param mixed $cc
		 * @param mixed $category
		 * @return void
		 */
		function phone_search( $phone, $cc, $category ) {

		}

	}
}
