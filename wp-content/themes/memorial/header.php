<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
   <!-- basic -->
   <meta charset="<?php bloginfo('charset');?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title><?php bloginfo('name'); ?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

      <?php wp_head();?>
   </head>
   <!-- body -->
   <body class="main-layout home_page">

      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <?php
                              wp_nav_menu(
                                 array(
                                    'theme_loacation' => 'header_top_menu', 
                                    'container_class' => 'main-menu', 
                                    'item_wrap' => '<ul class="menu-area-main">%3$s</ul>', 
                                 )
                              );
                              ?>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->