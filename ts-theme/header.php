<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!--[if IE 7]>
	<script type="text/javascript" src="js/ie/ie7-squish.js"></script>
	<script type="text/javascript" src="js/ie/IE7.js"></script>
	<![endif]-->
	<!--[if IE 8]>
	<script type="text/javascript" src="js/ie/IE8.js"></script>
	<![endif]-->
	<!--[if IE 9]>
	<script type="text/javascript" src="js/ie/IE9.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>

	<!-- telespor-header -->
    <header class="telespor-header">

        <div class="telespor-header-wrap">
            <h1 class="telespor-header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

            <a href="#" class="telespor-mobile-hamburger"></a>

            <nav class="telespor-header-main-nav">
                <div class="telespor-mobile-nav-header">
                    <!--<a href="#" class="telespor-close-nav"></a>-->
                    <i class="fa fa-times telespor-close-nav" aria-hidden="true"></i>
                </div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

            </nav>

        </div>

    </header>
	<!-- /telespor-header -->

	<!-- telespor-container -->
    <section class="telespor-container">
