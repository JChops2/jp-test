<?php
/*
Template Name: Full Page
*/
?>
<?php get_header(); ?>
<main role="main">
    
     <div class="row top-margin">
     
        <div class="col-lg-12" style="margin-top: 30px;">
  
                <article>
                   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                 
						<?php the_content(); ?>
                    
                    <?php endwhile; ?>
                    <?php endif; ?>
                </article>
  
         </div><!-- end col-lg-12 --> 
      </div><!-- end row -->
      
 
</main>    
<?php get_footer(); ?>