<?php

// this file contains the values of the variables
// for the spanish version of the site

$metaDescription = 'Soy una Tortuga. Tambien soy desarrolladora web, viajera por el tiempo y aficionada a la fotografia. Tijuana, Baja California, Mexico.';
$metaKeywords = 'Tijuana, Estados Unidos Mexicanos, Diseno Web, Desarrollo Web, Fotografia, San Diego, Area Metropolitana de San Diegoo, Diseno Web Tijuana, Paginas Web Tijuana, Desarrollo Web Tijuana, Diseno Responsivo';

// defines the title of the current page
// depending on the value of page if exists
if (isset($_GET['page'])):
	$pageCurrent = ucfirst($_GET['page']);
else:
	$pageCurrent = 'Inicio';
endif;
$pageTitle = 'Andy Osuna, Disenadora y Desarroladora';

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

// footer
$footerItem = 'Curriculum';
$footerLink = strtolower($footerItem);
$footerText = 'Ver mi <a href="'.$footerLink.'.pdf">'.$footerItem.'</a> | View site in <a href="?lang=en">English</a>';

$notFound = 'Lo siento, la pagina que quieres acceder no existe o hubo un error. Cuentame en un correo los detalles del error. <a href="mailto:info@andyosuna.com">info@andyosuna.com</a>';
