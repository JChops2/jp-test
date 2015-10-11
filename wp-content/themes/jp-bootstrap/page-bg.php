<?php
/*
Template Name: Full Page Background
*/
?>
<?php get_header(); ?>
<main role="main">
    
     <div class="row top-margin">
     
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12" style="margin-top: 30px;">
  
                <article>
                   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                 
                 		<div class="single-content about">
						<?php the_content(); ?>
                    	</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </article>
  
         </div><!-- end col-lg-12 --> 
      </div><!-- end row -->
      
 
</main>    
<?php get_footer(); ?>