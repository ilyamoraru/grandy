<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grandy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ателье Grandy — индивидуальный пошив мужских костюмов </title>
    <link href="<?php bloginfo('template_directory'); ?>/img/favicon128.png" type="image/x-icon" rel="shortcut icon">
    <link href="<?php bloginfo('template_directory'); ?>/images/favicon128.png" rel="apple-touch-icon" sizes="128x128">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style>
        @media screen and (max-width: 440px) {
            .main-block6 .col-lg-4 {
                background-image: url('<?php echo ot_get_option('main_block5_bg_mob')['background-image'] ?>')
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'grandy' ); ?></a>

	<header id="masthead" class="site-header header container-fluid">
		<div class="row info-cont mobile-hidden">
            <?php if(ot_get_option('sales_on_off') != 'off') { ?>
                <div class="col-12 text-center"><p class="info-top"><?php echo ot_get_option('sales_title'); ?></p></div>
                <div class="close-info"></div>
            <?php } ?>
        </div>
        <div class="container-fluid header-wrap">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4 row m-order-2 justify-content-center">
                    <a href="/">
                        <?php if(ot_get_option('header_logo_desc')) { ?>
                            <img src="<?php echo ot_get_option('header_logo_desc'); ?>" alt="" class="logo mobile-hidden">
                        <?php } ?>
                        <?php if(ot_get_option('header_logo_mob')) { ?>
                            <img src="<?php echo ot_get_option('header_logo_mob'); ?>" alt="" class="log desctop-hidden" style="max-width: 65px;">
                        <?php } ?>
                    </a>
                </div>
                <div class="col-lg-4 col-4 m-order-1">
                    <nav class="">
                        <div class="desctop-hidden burger-menu">
                            <span class="line1"></span>
                            <span class="line2"></span>
                            <span class="line3"></span>
                            <span class="line4"></span>
                        </div>
                        <?php 
            
                            $args = array(
                                'theme_location'  => '',
                                'menu'            => '', 
                                'container'       => '', 
                                'container_class' => '', 
                                'container_id'    => '',
                                'menu_class'      => 'mobile-hidden header-nav', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
                                'walker'          => '',
                            );

                            wp_nav_menu($args);
                        ?>
                    </nav>
                </div>
                <div class="col-lg-4 col-4 m-order-3 row justify-content-center">
                    <?php if(ot_get_option('header-mail')) { ?>
                        <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-mail')) ?>" class="mail mobile-hidden"><?php echo  ot_get_option('header-mail'); ?></a>
                    <?php } ?>
                    <?php if(ot_get_option('header-telephone')) { ?>
                        <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-telephone')) ?>" class="tel mobile-hidden"><?php echo  ot_get_option('header-telephone') ?></a>
                        <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-telephone')) ?>" class="mdi mdi-phone-in-talk desctop-hidden"></a>
                    <?php } ?>
                </div>
                <div class="col-lg-2 mobile-hidden">
                    <button type="button" class="mobile-hidden request-btn btn">Оставить заявку</button>
                </div>
            </div>
        </div>
        <!--моб меню-->
        <div class="container-fluid mobile-menu desctop-hidden">
            <?php 
                $args = array(
                    'theme_location'  => 'mobile-menu-header',
                    'menu'            => '', 
                    'container'       => '', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'row justify-content-center', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
                    'walker'          => '',
                );

                wp_nav_menu($args);
            ?>
            <div class="col-12">
                <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-mail')) ?>" class="mail"><?php echo  ot_get_option('header-mail'); ?></a>
            </div>
        </div>
	</header>

	<main class="main-page container-fluid">
