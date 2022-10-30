<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php $greenigma_box_layout = absint(get_theme_mod('box_layout', '1')) ; if ( $greenigma_box_layout == '2') {
    body_class('boxed');
} else body_class(); ?>>
    <?php   
    if ( function_exists( 'wp_body_open' ) )
    wp_body_open();
    ?>
    <div>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'greenigma' ); ?></a>
    <!-- Header Section -->
    <div class="header_section hd_cover">
        <div class="container">
            <!-- Logo & Contact Info -->
            <div class="row">
                <?php 
                $greenigma_title_position = get_theme_mod('title_position');
                if ( $greenigma_title_position == 1 ) { ?>
                    <div class="col-md-6 col-sm-12 wl_rtl">
                        <div claSS="logo logocenter">
                            <?php
                            if (has_custom_logo()) { 
                                the_custom_logo(); 
                            } 
                            if (display_header_text() == true) {
                                ?>
                                <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" rel="home">
                                <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
                                </a>
                            <?php } ?>
                            
                            <?php if (display_header_text() == true) { ?>
                                <p><?php bloginfo('description'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-6 col-sm-12 wl_rtl">
                        <div claSS="logo">
                            <?php
                            if (has_custom_logo()) { 
                                the_custom_logo(); 
                            } 
                            if (display_header_text() == true) {
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display')); ?>" rel="home">
                                <h1><?php echo esc_html(get_bloginfo('name')); ?></h1></a>
                            <?php } ?>
                            
                            <?php if (display_header_text() == true) { ?>
                                <p><?php bloginfo('description'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php }
                if ( enigma_theme_is_companion_active() ) {
                    $greenigma_header_social_media_in_enabled = absint(get_theme_mod('header_social_media_in_enabled', 1));
                    if ($greenigma_header_social_media_in_enabled == 1) {  ?>
                        <div class="col-md-6 col-sm-12">
                            <?php   
                            $greenigma_email_id = get_theme_mod('email_id');
                            $greenigma_phone_no = get_theme_mod('phone_no');
                            if (!empty ($greenigma_email_id) || !empty ($greenigma_phone_no)) { ?>
                                <ul class="head-contact-info">
                                    <?php if (!empty ($greenigma_email_id)) { ?>
                                        <li><i class="fa fa-envelope"></i><a
                                        href="mailto:<?php echo esc_attr( $greenigma_email_id ); ?>"><?php echo esc_html( $greenigma_email_id ); ?></a>
                                        </li>
                                    <?php } ?>
                                    <?php if (!empty ( $greenigma_phone_no ) ) { ?>
                                        <li><i class="fa fa-phone"></i>
                                            <a href="tel:<?php echo esc_attr( $greenigma_phone_no ); ?>"><?php echo esc_html( $greenigma_phone_no ); ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>   
                            <?php } ?>
                            <?php
                            $greenigma_social_tab = absint(get_theme_mod( 'social_tab', 1 ));
                            if ( $greenigma_social_tab == 1) {
                                $class = 'target="_blank"';
                            } else {
                                $class = '';
                            }
                            ?>
                            <ul class="social">
                                <?php 
                                $greenigma_fb_link = get_theme_mod('fb_link');
                                if (!empty ($greenigma_fb_link)) { ?>
                                <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Facebook",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('fb_link')); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php }
                                $greenigma_twitter_link = get_theme_mod('twitter_link');
                                if (!empty ($greenigma_twitter_link)) { ?>
                                <li class="twitter" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Twitter",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php }
                                $greenigma_linkedin_link = get_theme_mod('linkedin_link');
                                if (!empty ($greenigma_linkedin_link)) { ?>
                                <li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Linkedin",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('linkedin_link')); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php }
                                $greenigma_youtube_link = get_theme_mod('youtube_link');
                                if (!empty ($greenigma_youtube_link)) { ?>
                                    <li class="youtube" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("Youtube",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>"><i class="fab fa-youtube"></i></a></li>
                                <?php }
                                $greenigma_instagram = get_theme_mod('instagram');
                                if (!empty ($greenigma_instagram)) { ?>
                                    <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("instagram",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('instagram')); ?>"><i class="fab fa-instagram"></i></a></li>
                                <?php }
                                $greenigma_vk_link = get_theme_mod('vk_link');
                                if (!empty ($greenigma_vk_link)) { ?>
                                    <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("vk",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('vk_link')); ?>"><i class="fab fa-vk"></i></a></li>
                                <?php }
                                $greenigma_qq_link = get_theme_mod('qq_link');
                                if (!empty ($greenigma_qq_link)) { ?>
                                    <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php esc_attr_e("qq",'greenigma') ?>"><a <?php echo esc_attr($class); ?> href="<?php echo esc_url(get_theme_mod('qq_link')); ?>"><i class="fab fa-qq"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } 
                } ?>
            </div>
            <!-- /Logo & Contact Info -->
        </div>
    </div>
    <!-- /Header Section -->
    <!-- Navigation  menus -->
    <div class="navigation_menu" data-spy="affix" data-offset-top="95" id="enigma_nav_top" >
        <span id="header_shadow"></span>
        <div class="container navbar-container">
            <nav id="site-navigation" class="main-navigation navbar" role="navigation">
                <div class="navbar-header">
                    <button id="nav-tog" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="#menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','greenigma')?>">
                        <span class="sr-only"><?php echo esc_html_e('Toggle navigation', 'greenigma'); ?></span>
                        <span class="fas fa-bars"></span>
                    </button>
                </div>
                <div id="menu" class="collapse navbar-collapse ">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => 'enigma_fallback_page_menu',
                        'walker'         => new enigma_nav_walker(),
                    ) );
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <div id="content" class="site-content">