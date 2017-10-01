<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body>
	<?php
/*
	$clave = get_the_ID();
	echo $clave;*/

		if(is_page('5')){
			get_template_part( 'template/portada','header');
		}

	?>
	<?php //  ?>
	<?php // get_template_part( 'template/portada','headerExtra'); ?>
	<?php // include (TEMPLATEPATH . '/libs/menuviejo.php');  ?>
	<?php get_template_part( 'template/header', 'menu') ?>
