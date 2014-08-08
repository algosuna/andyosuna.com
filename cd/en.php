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
$footerText = 'View my <a href="'.$footerLink.'.pdf">'.$footerItem.'</a> | Ver sitio en <a href="?lang=es">Espa&ntilde;ol</a>';

$notFound = 'I\'m sorry, the page you requested doesn\'t exist or there was an error of some sort, tell me all about it in an <a href="mailto:info@andyosuna.com">email</a>.';
