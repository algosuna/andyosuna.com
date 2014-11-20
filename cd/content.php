<?php

// this file detects the browser language
// and changes the content accordingly
// if the user changes the language manually
// then a cookie is set to remember for a month

if (isset($_GET['lang'])):
	$lang = $_GET['lang'];
	setcookie('lang', $lang, strtotime('+30 days'));
elseif (!isset($_COOKIE['lang'])):
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
else:
	$lang = $_COOKIE['lang'];
endif;

switch ($lang):
	case 'en':
		include 'en.php';
		break;

	case 'es':
		include 'es.php';
		break;
	
	default:
		include 'en.php';
		break;
endswitch;

//
// stuff below is not language dependant
//

// about content
$skill = array(
	'HTML5' => '98',
	'SASS' => '94',
	'GitHub' => '91',
	'Bootstrap' => '90',
	'CSS3' => '85',
	'Git' => '83',
	'JavaScript' => '80',
	'PHP5' => '75',
	'jQuery' => '70'
);
$futSkill = array(
	'Wordpress' => '43',
	'Laravel' => '28',
	'Python' => '20',
	'Django' => '10',
	'CoffeeScript' => '8',
	'Handlebars' => '6',
	'Node.js' => '0',
	'Ember.js' => '0',
	'Socket.IO' => '0',
	'AngularJS' => '0'
);

// error handling
if (isset($errorPages[$pageCurrent])):
	$errorTitle = $errorPages[$pageCurrent]['errorTitle'];
	$error = $errorPages[$pageCurrent]['error'];
endif;
