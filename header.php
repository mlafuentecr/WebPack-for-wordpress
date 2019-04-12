<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper container-fluid">

			<!-- header -->
			<header class="header row center-xs" role="banner">

					<!-- logo -->
					<div class="logo col-md-12  col-lg-3">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="menuWrapper col-xs-12  col-md-12 col-lg-9 center-lg" role="navigation">
					<input type="checkbox" id="menu-toggle" />
					<label for="menu-toggle" class="label-toggle"></label>
					
						<?php blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
