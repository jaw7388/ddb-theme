<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head(); ?>

</head>
<body>
	
<header>
	<?php 
		wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
			)
			);
	?>
</header>
