<?php

// this file contains the values of the variables
// for the spanish version of the site

$metaDescription = 'Soy una Tortuga. Tambien soy desarrolladora web, viajera por el tiempo y aficionada a la fotografia. Tijuana, Baja California, Mexico.';
$metaKeywords = 'Tijuana, Estados Unidos Mexicanos, Diseno Web, Desarrollo Web, Fotografia, San Diego, Area Metropolitana de San Diego, Diseno Web Tijuana, Paginas Web Tijuana, Desarrollo Web Tijuana, Diseno Responsivo';

// defines the title of the current page
// depending on the value of page if exists
if (isset($_GET['page'])):
	$pageCurrent = ucfirst($_GET['page']);
else:
	$pageCurrent = 'Inicio';
endif;
$pageTitle = 'Andy Osuna, Disentilde;adora y Desarrolladora';

$headerTagline = 'dise&ntilde;o & desarrollo';

// nav items
$navItem = array(
	'Inicio',
	'Trabajo',
	'Acerca',
	'Contacto'
);
$navLink = array_map('strtolower', $navItem);

// homepage content
$homeIntro = 'Hola, mi nombre es Andrea Gonzalez Osuna, Andy Osuna en corto. Soy una dise&ntilde;adora y desarrolladora web que radica en  el area metropolitana de San Diego y Tijuana.';
$figCaption = 'Ubic&aacute;ndonos en la ciudad colonial de Zacatecas, Zac.';
$btnText = array(
	'Mi Trabajo',
	'Sobre Mi',
	'Cont&aacute;cteme'
);

// work content

// footer
$footerItem = 'Curriculum';
$footerLink = strtolower($footerItem);

if (!isset($_GET['page'])): // lazy fix
	$footerText = 'Ver mi <a href="'.$footerLink.'.pdf">'.$footerItem.'</a> | View site in <a href="?lang=en">English</a>';
else:
	$footerText = 'Ver mi <a href="'.$footerLink.'.pdf">'.$footerItem.'</a>';
endif;

// error pages
$errorPages = array(
	'404' => array(
		'errorTitle' => '404 - No Encontrado',
		'error' => 'Lo lamento, la p&aacute;gina que ha solicitado no existe o hubo un error. Inf&oacute;rmeme en un correo que incluya el URL que le trajo aqu&iacute;. <a href="mailto:info@andyosuna.com">info@andyosuna.com</a>'
	),
	'403' => array(
		'errorTitle' => '403 - Prohibido',
		'error' => 'Momento! No tienes permiso de andar por ac&aacute;. Si tienes mucha curiosidad de saber que hay en mis directorios anda a husmear en <a href="https://github.com/andyosuna/andyosuna.com" target="_blank">GitHub</a>, ah&iacute; tengo el proyecto completo. Tambi&eacute;n agr&eacute;game en las redes sociales! Me gustar&iacute;a saber lo que piensas del sitio :)'		
	),
	'500' => array(
		'errorTitle' => '500 - Error Interno del Servidor',
		'error' => 'Lo lamento, parezco tener problemas t&eacute;cnicos en este momento. Inf&oacute;rmeme del error en un correo. <a href="mailto:info@andyosuna.com">info@andyosuna.com</a>'		
	)
);
