<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div id="top-nav" class="<?php if(is_user_logged_in()) echo ' top-margin'; ?>" >

			<nav id="main-menu" class="navbar navbar-fixed-top">
					<div class="container">
							<div class="think-trees-info clearfix">
									<?php
											wp_nav_menu( array(
													'theme_location'    => 'top-left-menu',
													'menu_class' => 'nav nav-pills navbar-left'
													)
											);
									?>
									<ul class="nav navbar-nav navbar-right">
											<li><a href="#">Online Store</a></li>
											<li><a href="#">0 Itesm(s) - $0.00</a></li>
											<li><a href="<?php echo wp_login_url(); ?>" title="Login" class="login">Login</a></li>
									</ul>

							</div>
							<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-area">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>

									<?php
									 if( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
										 thinktrees_the_custom_logo();
									 }else{ ?>
										 <a class="navbar-brand" href="<?= get_home_url()?>"><?php  bloginfo('name'); ?></a>
									 <?php } ?>

							</div>
							<!-- <div id="navbararea" class="navbar-collapse collapse"> -->
									<?php
											bootstrap_nav();
										?>
							<!-- </div> -->
							<!--/.nav-collapse -->
					</div>
			</nav>
	</div>
