<?php
/*
	Plugin Name: 69 mars
	Plugin URI:
	Plugin Description: Assemblée des propositions
	Plugin Version: 1.0
	Plugin Date: 2016-05-06
	Plugin Author: mex.zktk@gmail.com
	Plugin Author URI: http://www.question2answer.org/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}


qa_register_plugin_module('page', 'qa-69mars.php', 'qa_69mars', '69 mars');
qa_register_plugin_phrases('qa-69mars-lang-*.php', '69mars');
