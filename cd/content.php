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
	'HTML5',
	'CSS3',
	'JavaScript',
	'PHP5',
	'Bootstrap',
	'jQuery',
	'Git',
	'GitHub',
	'SASS'
);
$futSkill = array(
	'Wordpress',
	'Python',
	'Django',
	'CoffeeScript',
	'Node.js',
	'Laravel',
	'Handlebars',
	'Ember.js',
	'Socket.IO',
	'AngularJS'
);

// error handling
if (isset($errorPages[$pageCurrent])):
	$errorTitle = $errorPages[$pageCurrent]['errorTitle'];
	$error = $errorPages[$pageCurrent]['error'];
endif;
