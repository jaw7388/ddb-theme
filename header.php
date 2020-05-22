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
	<nav class="navbar navbar-expand-lg navbar-dark bg-light" role="navigation">
	<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand" href="#">
				<img src="https://ddb.com.co/img/logo.png" alt="" class="nav-logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"> 
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse flex-grow-0" id="bs-example-navbar-collapse-1">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'nav',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav text-right',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				));
				?>
		</div>
		</div>
	</nav>

		
</header>
