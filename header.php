<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dream
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/flaticon.css">
    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/fontawesome/css/all.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<header class="main_menu home_menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo"> </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_html_e('Toggle navigation', 'dream')?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php if ( has_nav_menu('menu-1')) {
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container_class' => 'collapse navbar-collapse main-menu-item',
                            'container_id' => 'navbarNav',
                            'menu_class' => 'navbar-nav',
                            'walker' => new Dream_Walker_Nav_Menu,
                        ) );
                    }?>
                </nav>
            </div>
        </div>
    </div>
</header>






