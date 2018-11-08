<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tapchi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/vendor/owl-slider.css"/> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/vendor/settings.css"/>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/vendor/settings.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/vendor/custombox.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css-1.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css.css"/>
<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/images/favicon.png" />
	
	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
   <div class="awe-page-loading">
         <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
               <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="images">
            </div>
            <div class="progress">
               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
      </div>
          <div id="box-user" style="display:none;">
        <iframe width="980" src="#"></iframe>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Search Here</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" placeholder="Type & hit enter...">
                          <span class="input-group-btn">
                            <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="icons icon-magnifier dropdown-toggle"></i></button>
                          </span>
                    </div><!-- /input-group -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
      <div class="menu-table">
                            <a href="javascript:void(0)" class="closebtn">×</a>
                    <div class="logo"><a href="#" title="logo"><img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="Logo"></a></div>
                    
                    <div class="contac">
                        <p class="padding-10">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <div class="social">
                            <a href="#" title="title"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="title"><i class="fa fa-vimeo"></i></a>
                            <a href="#" title="title"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" title="title"><i class="fa fa-vk"></i></a>
                            <a href="#" title="title"><i class="fa fa-youtube"></i></a>

                        </div>
                            <div class="cotac-header">
                              <p>Address: <span> Grant Programs 1145 17th Street N.W. </span></p>
                            <p>Phone: <span>888-557-4450</span> </p>
                            <p>Email: <span>Jimydo@gmail.com</span> </p>
                            <p>Support:<span><a target="_blank" href="https://themeforest.net/user/engotheme/portfolio"> EngoTheme</a> </span> </p> 
                            </div>
                            
                            <div class="copy ">
                                <p> Copyright © 2018 Engo - Creative All Rights Reserved</p>
                            </div>
                             
                        </div>
                        
                        
                    <!-- End widget -->
                        </div>
        <header id="header" class="header-v1">
            
            <div id="topbar">
                <div class="container">
                    <div class="float-left">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <div class="navbar-header">
                              <a class="navbar-brand" href="#">Wednesday,July 18</a>
                            </div>
                            <ul class="nav navbar-nav">
                              <li><a href="#">Sign in/join</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Forums</a></li>
                              <li><a href="#">Contact</a></li>
                            </ul>
                          </div>
                        </nav>
                    </div>
                    <div class="float-right">
                        <div class="social">
                            <a href="#" title="title"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="title"><i class="fa fa-vimeo"></i></a>
                            <a href="#" title="title"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" title="title"><i class="fa fa-vk"></i></a>
                            <a href="#" title="title"><i class="fa fa-youtube"></i></a>

                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
<div class="header-top">
                <div class="container">
                    <div class="row">
                    <div class="box float-left">

                        <div class="icon-menu-mobile ">
                                <span class="child1"></span>
                                <span class="child2"></span>
                                <span class="child3"></span>
                        </div>
                        <div class="logo col-md-3 col-sm-3 "><a href="#" title="Uno">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="images">
                        </a></div>
                        <div class="logo-mobile col-sm-3"><a href="#" title="Xanadu"><img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="Xanadu-Logo"></a></div>
                        <div class="box-right social-mobile">
                            <div class="social">
                                 <a href="#" title="title"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="title"><i class="fa fa-vimeo"></i></a>
                            <a href="#" title="title"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" title="title"><i class="fa fa-vk"></i></a>
                            <a href="#" title="title"><i class="fa fa-youtube"></i></a>
                            </div>
                            <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg" style="display:none;">
                                <i class="icon"></i>
                            </div>
                        </div>
                        <div class="banner col-md-9 col-sm-9 ">
                            <a href="#" title="banner">
                                <img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/images/banner-header-v3.jpg" alt="banner">
                            </a>
                            <div class="text-banner">
                                    <h5>The new</h5>
                                    <h2><a class="bannerr" href="" title="title">A ROSY OUTLOOK</a></h2>
                                     <button class="button-banner">SHOP NOW</button>
                                </div>
                        </div>
                        
                    </div>                
                    </div>
                    </div>
                    <!-- End container -->
                </div>
                <!-- End header-top -->
                <div class="container" style="position: relative;">
                  <div class="search">
                <form class="form-search" action="#" method="get" accept-charset="utf-8">
                    <input type="text" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email" placeholder="Search ..."> 
                    <button class="button" title="Subscribe" type="submit"><i class="icon-magnifier icons"></i></button>
                </form>
            </div>
                <nav class="mega-menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <ul class="nav navbar-nav ver1" id="navbar">
                    <li class="level1 active hover-menu no-paddingleft hassub"><a class="active" href="#" title="Home">HOME</a>
                        <ul class="menu-level-1 list-menu">
                           <li class="level2"><a href="home_v1.htm" title="Home 1">Home 1</a></li>
                            <li class="level2"><a href="home_v2.htm" title="Home 2">Home 2</a></li>
                            <li class="level2"><a href="home_v3.htm" title="Home 3">Home 3</a></li>
                            <li class="level2"><a href="home_v4.htm" title="Home 4">Home 4</a></li>
                            <li class="level2"><a href="home_v5.htm" title="Home 5">Home 5</a></li>
                        </ul>
                    </li>
                    <li class="level1 hover-menu images hassub">
                        <a href="#1" title="Page">THỜI TRANG</a>
                        <div class="sub-menu list-menu container container-ver2">
                          <div class="main-sub-menu ">
                            <div class="col-md-2 col-sm-6 col-xs-3 width-568">
                                <div class="bottom-submenu">
                                <h4>Blog pages</h4>
                                <a href="grid_post_full_width.htm" title="Grid full">Grid post full width</a>
                                <a href="grid_layout_sidebar_left.htm" title="Grild left">Grild layout sidebar left</a>
                                <a href="grid_layout_sidebar_right.htm" title="Grild right">Grild layout sidebar right</a>
                                <a href="list_post_sidebar_left.htm" title="List left 1">List post sidebar left 1</a>
                                <a href="list_post_sidebar_left2.htm" title="List left 2">List post sidebar left 2</a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-3 width-568">
                                <div class="bottom-submenu">
                                <h4>Blog detail</h4>
                                <a href="post_sidebar_left.htm" title="Post left">Post sidebar left</a>
                                <a href="post_sidebar_right.htm" title="Post right">Post sidebar right</a>
                                <a href="post_full_width.htm" title="Post full">Post full width</a>
                          </div>
                            </div>
                            <!-- End col-md-2 -->
                            <div class="col-md-8  col-sm-6 col-xs-9 width-568 ">
                                  <div class=" upsell-product  size-18 nav-ver2 nav-white box padding-top">
                <div class="post-item ver3 cat-1 overlay col-md-6 ">
                    <div class="wrap-images">
                        <a class="images" href="#" title="images"><img class='img-responsive' src="<?php bloginfo('template_directory');?>/assets/images/blog/most-v4.jpg" alt="images"></a>
                    </div>
                    <div class="text">
                       
                       <h2><a href="" title="title">Fashion pretty sweet young  woman enjoying  a taste lollipop.</a></h2>
                       <p class="descrip">August 08, 2018</p>
                    </div>
                </div>
                <!-- End item -->
                 <div class="post-item ver3 cat-1 overlay col-md-6 ">
                    <div class="wrap-images">
                        <a class="images" href="#" title="images"><img class='img-responsive' src="<?php bloginfo('template_directory');?>/assets/images/blog/fashion-v14.jpg" alt="images"></a>
                    </div>
                    <div class="text">
                       
                       <h2><a href="" title="title">The top trends we loved from fall 2018 Paris fashion week.</a></h2>
                       <p class="descrip">August 01, 2018</p>
                    </div>
                </div>
            </div>
                            </div>
                            <!-- End col-md-10 -->
                          </div>
                          <!-- End main-submenu -->
                          
                          <!-- End bottom-sub -->
                      </div>
                      <!-- End Sub Menu -->
                    </li>
                    <li class="level1 hover-menu">
                       <a href="about.htm" title="About">GÓC CHỊ EM</a><i class="fa fa-plus"></i>
                    </li>
                    <li class="level1 hover-menu">
                       <a href="contact.htm" title="Contact">CÙNG VÀO BẾP</a><i class="fa fa-plus"></i>
                    </li>
                    <li class="level1 hover-menu">
                        <a href="#" title="Photography">TRANG TRÍ NHÀ CỬA</a><i class="fa fa-plus"></i>
                    </li>
                    <!--<li class="level1 hover-menu">
                        <a href="#" title="Lifestyle">LIFESTYLE</a><i class="fa fa-plus"></i>
                    </li> -->
                   
                   <div class="icon-menu-table pull-right">
                                <span class="child1"></span>
                                <span class="child2"></span>
                                <span class="child3"></span>
                        </div>
                  </ul>
                </nav>
                </div>
                <!-- End megamenu -->
        </header><!-- /header -->

