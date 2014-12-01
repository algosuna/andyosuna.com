<?php

// this file contains all the variables used in the site
// the variables define the content fed to the views

// this bit detects the browser language
// and changes the content accordingly
// if the user changes the language manually
// then a cookie is set to remember for a month

//date_default_timezone_set('UTC');

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
	'SASS',
	'GitHub',
	'Bootstrap',
	'CSS3',
	'Git',
	'JavaScript',
	'PHP5',
	'jQuery'
);
$futSkill = array(
	'Wordpress',
	'Laravel',
	'Python',
	'Django',
	'CoffeeScript',
	'Handlebars',
	'Node.js',
	'Ember.js',
	'Socket.IO',
	'AngularJS',
	'SVG'
);

// error handling
if (isset($errorPages[$pageCurrent])):
	$errorTitle = $errorPages[$pageCurrent]['errorTitle'];
	$error = $errorPages[$pageCurrent]['error'];
endif;
