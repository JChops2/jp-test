<?php get_header(); ?>

	<section>
    <article>
    
     <!-- Start the Loop. -->
   <?php 
    $args = array(
		'posts_per_page'   => '1'
	);
	$query_feature = new WP_Query( $args ); 
	?>
    
	<?php if ( $query_feature->have_posts() ) : ?>
    
    <?php while ( $query_feature->have_posts() ) : $query_feature->the_post(); ?>
    
		<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>
        
        <div class="jumbotron">
        
        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $thumb ?>" /></a>
            <div class="jumbo-overlay">
          		<p><?php echo the_title(); ?><br />
                  <a class="btn btn-lg btn-success" href="<?php the_permalink(); ?>" role="button">View this delicious recipe</a></p>
			</div>
           
          </div>
          
     <?php endwhile; ?>
     <?php endif; ?>
     <?php wp_reset_query(); ?>
    </article>
    </section>
   
   <section>
	<article>
  <?php 
  global $query;
    $args = array(
		'offset' => '1',
		'posts_per_page'   => '6'
	);
	$query = new WP_Query( $args ); 
	$i=0;
	?>
    
     <div class="row marketing">
        <div class="col-lg-12 no-padding">
    		<h1>The Latest and Greatest</h1>
				
				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			  $url = $thumb['0'];  ?>
               
               <div class="col-xs-12 col-md-4 recipes">
                <div class="recipe-container">
             		<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $url ?>" alt="<?php the_title(); ?>" /></a>    		  
                <div class="recipe-overlay">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title ?>"><?php echo the_title(); ?></a>
                </div>
        </div>
      </div><!-- end col-xs-12 col-md-6 -->  
  
        <?php endwhile; ?>
      </div><!-- end col-lg-12 --> 
      </div><!-- end row -->
      
    </article>
    </section>
    
    <?php else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>

<?php get_footer(); ?>