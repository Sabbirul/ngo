<?php get_header(); ?>
    <?php get_template_part('slider'); ?>
<!-- about -->
<div class="about">
   <div class="container">
      <div class="col-md-12 row">
         <div class="col-md-9">
           <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="aboutheading">
                  <h2>About <strong class="black">Us</strong></h2>
                  <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
               </div>
            </div>
         </div>
         <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
               <div class="about-box">
                  <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  <a href="#">Read More</a>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
               <div class="about-box">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="img" /></figure>
               </div>
            </div>
         </div>

      </div>

      <div class="col-md-3">
         <?php get_template_part('sidebar'); ?>
      </div>

   </div>

</div>
</div>

   <!-- Posts Section Start Here -->
         <div class="row border">
            <div class="col-md-12">
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                  <p> <?php the_content(); ?></p>
                  <a href="<?php the_permalink();?>"><?php the_excerpt(); ?>See More</a>
                  <ul>
                     <li><?php the_author();?></li>
                     <li><?php the_time('D,M,Y');?></li>
                     <li><?php the_time('g:i a');?></li>
                     <li><?php comments_popup_link('No Comments >>','1 Comment','% Comments >>') ;?></li>
                  </ul>
               <?php  
                  endwhile; else : ?>
                  <p>
                  <?php 
                  esc_html_e('Sorry,No Posts match your criteria !!!'); ?>                     
                  </p>
                   <?php
                  endif;                   
               ?>
            </div>
         </div>
   <!-- Posts Section End Here -->

<!-- end about -->
<!-- Library -->
<div class="Library">
   <div class="container">
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="titlepage">
               <h2>Our <strong class="black">Library </strong></h2>
               <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> 
            </div>
         </div>
      </div>
   </div>
   <div class="bg">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="Library-box">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Library-.jpg" alt="#"/></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="read-more">
               <a href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end Library -->
<!--Books -->
<div class="Books">
   <div class="container">
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="titlepage">
               <h2>Our <strong class="black">Books </strong></h2>
               <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> 
            </div>
         </div>
      </div>
      <div class="row box">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="book-box">
               <figure><img src="<?php echo get_template_directory_uri(); ?>/images/book-1.jpg" alt="img"/></figure>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="book-box">
               <figure><img src="<?php echo get_template_directory_uri(); ?>/images/book-2.jpg" alt="img"/></figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="book-box">
               <figure><img src="<?php echo get_template_directory_uri(); ?>/images/book-1.jpg" alt="img"/></figure>
            </div>
         </div>
         <div class="col-md-6 offset-md-3">
            <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="read-more">
                  <a href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end Books -->

<?php get_footer(); ?>