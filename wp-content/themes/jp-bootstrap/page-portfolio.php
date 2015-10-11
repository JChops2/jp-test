<?php
/*
Template Name: Porftfolio
*/
?>
<?php get_header(); ?>
  
   <div class="row top-margin">
  	<article>
 
  <?php 
  global $query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
		'post_type' => 'post',
		'category_name' => 'print',
		'posts_per_page'   => '999',
		'paged' => $paged
	);
	$query = new WP_Query( $args ); 
	?>
       <h1 class="portfolio-header">Print</h1>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			  $url = $thumb['0'];  ?>
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 portfolio-th">
			<div class="thumbnail">
              <a href="<?php echo the_permalink(); ?>">
              	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              	 <span class="glyphicon glyphicon-zoom-in"></span>
              </a>
       		 </div>
             </div>
            <?php endwhile; ?>
  
    </article>
    
    <?php else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query(); ?>
 </div>
 
  <div class="row top-margin">
  	<article>
 
  <?php 
  global $query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
		'post_type' => 'post',
		'category_name' => 'web',
		'posts_per_page'   => '999',
		'paged' => $paged
	);
	$query = new WP_Query( $args ); 
	?>
       <h1 class="portfolio-header">Web</h1>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			  $url = $thumb['0'];  ?>
           <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 portfolio-th">
			<div class="thumbnail">
              <a href="<?php echo the_permalink(); ?>">
              	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              	 <span class="glyphicon glyphicon-zoom-in"></span>
              </a>
       		 </div>
             </div>
            <?php endwhile; ?>
  
    </article>
    
    <?php else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query(); ?>
 </div>
 
   <div class="row top-margin">
  	<article>
 
  <?php 
  global $query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
		'post_type' => 'post',
		'category_name' => '3d-motion-graphics',
		'posts_per_page'   => '999',
		'paged' => $paged
	);
	$query = new WP_Query( $args ); 
	?>
       <h1 class="portfolio-header">3D/Motion Graphics</h1>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			  $url = $thumb['0'];  ?>
           <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 portfolio-th">
			<div class="thumbnail">
              <a href="<?php echo the_permalink(); ?>">
              	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              	 <span class="glyphicon glyphicon-zoom-in"></span>
              </a>
       		 </div>
             </div>
            <?php endwhile; ?>
  
    </article>
    
    <?php else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php wp_reset_query(); ?>
 </div>
 
 <div class="row top-margin">
  	<article>
 
  <?php 
  global $query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
		'post_type' => 'post',
		'category_name' => 'coloring',
		'posts_per_page'   => '999',
		'paged' => $paged
	);
	$query = new WP_Query( $args ); 
	?>
       <h1 class="portfolio-header">Coloring</h1>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			  $url = $thumb['0'];  ?>
             <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 portfolio-th">
			<div class="thumbnail">
              <a href="<?php echo the_permalink(); ?>">
              	<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
              	 <span class="glyphicon glyphicon-zoom-in"></span>
              </a>
       		 </div>
             </div>
            <?php endwhile; ?>
  
    </article>
    
    <?php else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>

 </div>
 
<?php get_footer(); ?>