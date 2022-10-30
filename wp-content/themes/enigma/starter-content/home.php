<?php
/**
 * Home starter content.
 *
 * @package enigma\starter_content
 */
return [
    'post_type'    => 'page',
    'post_title'   => _x( 'Home', 'Theme starter content', 'enigma' ),
    'post_content' => '
    <div id="myCarousel" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/slider-1.jpg" class="img-responsive" alt="slide-1"/><div class="container"><div class="carousel-caption"><div class="carousel-text"><h1 class="animated">Welcome To Enigma</h1><ul class="list-unstyled carousel-list"><li class="animated">Lorem ipsum dolor sit amet</li></ul><a class="enigma_blog_read_btn animated bounceInUp" href="#" role="button">View More</a></div></div></div></div><div class="carousel-item"><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/slider-2.jpg" class="img-responsive" alt="slide-2"/><div class="container"><div class="carousel-caption"><div class="carousel-text"><h1 class="animated">Welcome To Enigma Slide 2</h1><ul class="list-unstyled carousel-list"><li class="animated">Lorem ipsum dolor sit amet </li></ul><a class="enigma_blog_read_btn animated bounceInUp" href="#" role="button">View More</a></div></div></div></div></div><ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0"></li><li data-target="#myCarousel" data-slide-to="1"></li></ol><a class="carousel-control-prev" href="#myCarousel" data-slide="prev"><span class="carousel-control-prev-icon"></span></a><a class="carousel-control-next" href="#myCarousel" data-slide="next"><span class="carousel-control-next-icon"></span></a><div class="enigma_slider_shadow"></div></div>
        <!-- /Service section -->
    <div class="enigma_service"><div class="container"><div class="row"><div class="col-sm-12"><div class="enigma_heading_title"><h3>Features</h3></div></div></div></div><div class="container"><div class="row isotope" id="isotope-service-container"><div class=" col-md-4 service"><div class="enigma_service_area appear-animation bounceIn appear-animation-visible"><a href="#"><div class="enigma_service_iocn pull-left"><i class="fas fa-laptop"></i></div></a><div class="enigma_service_detail media-body"><h3 class="head"><a href="#"> Feature 1</a></h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p></div></div></div><div class=" col-md-4 service"><div class="enigma_service_area appear-animation bounceIn appear-animation-visible"><a href="#"><div class="enigma_service_iocn pull-left"><i class="fab fa-wordpress"></i></div></a><div class="enigma_service_detail media-body"><h3 class="head"><a href="#"> Feature 2</a></h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p></div></div></div><div class=" col-md-4 service"><div class="enigma_service_area appear-animation bounceIn appear-animation-visible"><a href="#"><div class="enigma_service_iocn pull-left"><i class="fas fa-cogs"></i></div></a><div class="enigma_service_detail media-body"><h3 class="head"><a href="#"> Feature 3</a></h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p></div></div></div></div></div></div>
    <!-- /Service section -->
    <!-- portfolio section -->
    <div class="enigma_project_section"><div class="container"><div class="row"><div class="col-sm-12"><div class="enigma_heading_title"><h3>Recent Works </h3></div></div></div></div>
    <div class="container"><div class="row"><div id="enigma_portfolio_section" class="enima_photo_gallery"><div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1"><div class="img-wrapper">
    <div class="enigma_home_portfolio_showcase"><img class="enigma_img_responsive" alt="port-1" src="'. trailingslashit( get_template_directory_uri() ).'/starter-content/img/port-1.jpg"/><div class="enigma_home_portfolio_showcase_overlay"><div class="enigma_home_portfolio_showcase_overlay_inner "><div class="enigma_home_portfolio_showcase_icons"><a href="#"> <i class="fa fa-link"></i></a><a class="photobox_a" href="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-1.jpg"><i class="fa fa-search-plus"></i><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-1.jpg"  style="display:none !important;visibility:hidden"></a></div></div></div></div><div class="enigma_home_portfolio_caption"><h3 class="port"><a href="#">Portfolio 1</a></h3></div></div><div class="enigma_portfolio_shadow"></div></div><div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1"><div class="img-wrapper"><div class="enigma_home_portfolio_showcase"><img class="enigma_img_responsive" alt="port-2" src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-2.jpg"><div class="enigma_home_portfolio_showcase_overlay"><div class="enigma_home_portfolio_showcase_overlay_inner "><div class="enigma_home_portfolio_showcase_icons"><a href="#"> <i class="fa fa-link"></i></a><a class="photobox_a" href="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-2.jpg"><i class="fa fa-search-plus"></i><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-2.jpg"  style="display:none !important;visibility:hidden"></a></div></div></div></div><div class="enigma_home_portfolio_caption"><h3 class="port"><a href="#">Portfolio 2</a></h3></div></div><div class="enigma_portfolio_shadow"></div></div><div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1"><div class="img-wrapper"><div class="enigma_home_portfolio_showcase"><img class="enigma_img_responsive" alt="port-3" src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-3.jpg"><div class="enigma_home_portfolio_showcase_overlay"><div class="enigma_home_portfolio_showcase_overlay_inner "><div class="enigma_home_portfolio_showcase_icons"><a href="#"> <i class="fa fa-link"></i></a><a class="photobox_a" href="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-3.jpg"><i class="fa fa-search-plus"></i><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-3.jpg"  style="display:none !important;visibility:hidden"></a></div></div></div></div><div class="enigma_home_portfolio_caption"><h3 class="port"><a href="#">Portfolio 3</a></h3></div></div><div class="enigma_portfolio_shadow"></div></div><div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-right d1"><div class="img-wrapper"><div class="enigma_home_portfolio_showcase"><img class="enigma_img_responsive" alt="port-4" src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-4.jpg"><div class="enigma_home_portfolio_showcase_overlay"><div class="enigma_home_portfolio_showcase_overlay_inner "><div class="enigma_home_portfolio_showcase_icons"><a href="#"> <i class="fa fa-link"></i></a><a class="photobox_a" href="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-4.jpg"><i class="fa fa-search-plus"></i><img src="' . trailingslashit( get_template_directory_uri() ) . '/starter-content/img/port-4.jpg"  style="display:none !important;visibility:hidden"></a></div></div></div></div><div class="enigma_home_portfolio_caption"><h3 class="port"><a href="#">Portfolio 4</a></h3></div></div><div class="enigma_portfolio_shadow"></div></div></div></div></div></div>',
];