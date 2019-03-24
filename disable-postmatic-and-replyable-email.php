<?php
/*
Plugin Name: Disable Postmatic and Replyable Email
Plugin URI: https://gopostmatic.com/
Description: Disable Postmatic and Replyable emails.
Author: Postmatic
Version: 1.0.0
Requires at least: 3.5
Author URI: https://gopostmatic.com/
Contributors: ronalfy
*/
if ( ! defined( 'PROMPT_NO_OUTBOUND_EMAIL' ) ) {
	define( 'PROMPT_NO_OUTBOUND_EMAIL', true );
}