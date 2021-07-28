<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dirchelish
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="">

	<?php wp_head(); ?>
</head>

<body <?php body_class('game_info'); ?> data-spy="scroll" data-target=".header">

<?php wp_body_open(); ?>
<div id="preloader">
    <img class="preloader" src="<!-- <?= get_template_directory_uri() ?> -->/assets/images/loading-img.gif" alt="">
</div>
<section id="top">
 <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.html"><img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="#"><i class="fa fa-shopping-cart"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                       <?php
	      				
	      				$args = array(
	      					'theme_location' => 'primary',
	      					'depth'		 => 0,
	      					'container'	 => false,
	      					'menu_class'	 => '',
	      					'walker'	 => new My_Custom_Primary_Nav_Walker()
	      				);
	      
	      				wp_nav_menu($args);
	      			
	      			?>
                   
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
    </header>

</section>
	