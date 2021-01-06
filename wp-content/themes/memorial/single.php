<?php get_header(); ?>
    <?php get_template_part('slider'); ?>
     <!-- Posts Section Start Here -->
         <div class="row border">
            <div class="col-md-12">
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                  <p> <?php the_content(); ?></p>
                  <ul>
                     <li><?php the_author();?></li>
                     <li><?php the_time('D,M,Y');?></li>
                     <li><?php the_time('g:i a');?></li>
                     <li><?php comments_popup_link('No Comments >>','1 Comment','% Comments >>'); ?></li>
                  </ul>
               <?php  
                  endwhile;            
                  endif;               
               ?>
            </div>
         </div>
   <!-- Posts Section End Here -->
   <?php get_footer(); ?>