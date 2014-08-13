<?php

// this file contains the values of the variables
// for the english version of the site

$metaDescription = 'I am a Turtle. I am also a Web Developer, Time Traveler and Photography Hobbyist. San Diego, California.';
$metaKeywords = 'San Diego, United States of America, Web Design, Web Development, Photography, San Diego, Web Design San Diego, Web Pages San Diego, Web Development San Diego, Responsive Design';

// defines the title of the current page
// depending on the value of page if exists
if (isset($_GET['page'])):
	$pageCurrent = ucfirst($_GET['page']);
else:
	$pageCurrent = 'Home';
endif;
$pageTitle = 'Andy Osuna, Designer and Developer';

$headerTagline = 'designer & developer';

// nav items
$navItem = array(
	'Home',
	'Work',
	'About',
	'Contact'
);
$navLink = array_map('strtolower', $navItem);

// homepage content
$homeIntro = 'Hey there, my name is Andrea Gonzalez Osuna, Andy Osuna for short. I am a Web Designer and Developer currently residing in the San Diego-Tijuana Metropolitan Region.';
$figCaption = 'Figuring it out in the colonial town of Zacatecas, Zac.';
$btnText = array(
	'My Work',
	'About Me',
	'Contact Me'
);

// footer
$footerItem = 'Resume';
$footerLink = strtolower($footerItem);

if (!isset($_GET['page'])): // lazy fix
	$footerText = 'View my <a href="'.$footerLink.'.pdf">'.$footerItem.'</a> | Ver sitio en <a href="?lang=es">Espa&ntilde;ol</a>';
else:
	$footerText = 'View my <a href="'.$footerLink.'.pdf">'.$footerItem.'</a>';
endif;

// error pages
$errorPages = array(
	'404' => array(
		'errorTitle' => '404 - Not Found',
		'error' => 'I\'m sorry, the page you requested doesn\'t exist or there was an error of some sort, tell me all about it in an email and include the URL that brought you here. <a href="mailto:info@andyosuna.com">info@andyosuna.com</a>'
	),
	'403' => array(
		'errorTitle' => '403 - Forbidden',
		'error' => 'Hold it! You don\'t have permision to be here. If you are dying to know what lies in this directory you can head right up to <a href="https://github.com/andyosuna/andyosuna.com" target="_blank">GitHub</a>, the full project lies there. Also, add me on social media! I\'d like to hear what you think of my site :)'		
	),
	'500' => array(
		'errorTitle' => '500 - Internal Server Error',
		'error' => 'I\'m terribly sorry, I appear to be victim of a server error right know. Let me know in an email please! <a href="mailto:info@andyosuna.com">info@andyosuna.com</a>'		
	),
);

$errorTitle = $errorPages[$pageCurrent]['errorTitle'];
$error = $errorPages[$pageCurrent]['error'];
