<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

        <div id="top-nav" <?php if(is_user_logged_in()) echo 'class="top-margin"'; ?>>
            <nav id="main-menu" class="navbar nav-top navbar-fixed-top clearfix nav-back ">
                <div class="container">
                    <div class="think-trees-info">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'top-left-menu',
                                'menu_class' => 'nav nav-pills navbar-right'
                                )
                            );
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Online Store</a></li>
                            <li><a href="#">0 Itesm(s) - $0.00</a></li>
                            <li><a href="<?php echo wp_login_url(); ?>" title="Login">Login</a></li>
                        </ul>

                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <a class="navbar-brand" href="<?= get_home_url()?>"><?php thinktrees_the_custom_logo() ?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php
                            bootstrap_nav();
                          ?>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
