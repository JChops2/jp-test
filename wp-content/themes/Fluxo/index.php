<?php
/*
This is the template for the landing page
*/
?>

<?php get_header(); ?>

 <header>
	<nav>
      <!--
      These are our filter options. The "data-filter" classes are used to identify which
      grid items to show.
      -->
    <ol id="filters">
	  <li data-filter="About"><a href="#">About</a></li>
      <li data-filter="Experience"><a href="#">Experience</a></li>
      <li data-filter="Work"><a href="#">Work</a></li>
      <li data-filter="Print"><a href="#">Print</a></li>
      <li data-filter="Coloring"><a href="#">Coloring</a></li>
      <li data-filter="Interactive"><a href="#">Web/Interactive</a></li>
      <li data-filter="Motion Graphics"><a href="#">3D/Motion Graphics</a></li>
      <li data-filter="Contact"><a href="#">Contact</a></li>
    </ol>
  </nav>
  </header>
    
  <div id="container" style="clear: both;">
  
  <br/>
  <br/>
  
  <div id="main" role="main">
	
    	<div id="links">
      	
        	<ul id="tiles">
        <!--
          These are our grid items. Notice how each one has classes assigned that
          are used for filtering. The classes match the "data-filter" properties above.
          -->

		<?php if (have_posts()) : ?>
    
			<?php remove_filter ('the_content', 'wpautop'); ?> <!-- remove automatically added p tags from the_content -->
    			
		<?php while (have_posts()) : the_post(); ?> 
       <?php
				$orderkey = 'order';
				$order = get_post_meta($post->ID, $orderkey, TRUE);
			?> 
        
	        <?php $tag_list = strip_tags(get_the_tag_list( '"', '","', '"' )); ?> <!-- strip the_tags of it's links and alt attributes and only display the tag name -->
				
             <li <?php if($order != '') { echo 'data-order="'.$order.'" '; } ?>data-filter-class='[<?php echo $tag_list; ?>]'>

    		<?php $poster=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
        	<?php
				$key = 'popup';
				$themeta = get_post_meta($post->ID, $key, TRUE);
			?>
			<?php if (in_category('images')) { ?>
	            
          		<a id="thelinks" href="<?php if($themeta != '') {
				echo bloginfo('siteurl').'/wp-content/uploads/'.$themeta;
				} else { echo $poster; } ?>" title="<?php the_title(); ?>"><img src="<?php echo $poster; ?>" width="200px" alt="<?php the_title(); ?>"></a>
              	<?php the_excerpt(); ?>
      		
			<?php } elseif (in_category('videos')) { ?>
            
                <a href="<?php bloginfo('template_url'); ?>/videos/<?php the_content(); ?>" 
                title="<?php the_title(); ?>" 
                type="video/mp4" 
                data-poster="<?php echo $poster; ?>" 
                data-sources='[{"href": "<?php bloginfo('template_url'); ?>/videos/<?php the_content(); ?>", "type": "video/mp4"}]'><img src="<?php echo $poster; ?>"  width="200px" alt="<?php the_title(); ?>" /></a>
				<?php the_excerpt(); ?>
                 
            <?php } else { ?>
            
            <?php $poster=wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
            
              <a
       			href="<?php bloginfo('template_url'); ?>/<?php the_content(); ?>"
		        title="<?php the_title(); ?>"
        		type="text/html"
		        data-sources='[{"href": "<?php bloginfo('template_url'); ?>/<?php the_content(); ?>", "type": "text/html"}]'><img src="<?php echo $poster; ?>"  width="200px" alt="<?php the_title(); ?>" /></a>
		 		
                
         
         <? } ?>
            
       <p style="font-size: 9px;"><i><b>Filter: </b><?php echo $tag_list; ?></i></p> 
        
        	</li>
       
      <?php endwhile;?>
      </ul>
      
	<?php endif; ?>
       
      
	
    </div>
    </div>
  
  </div>
  
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
     <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
</div>

<?php get_footer(); ?>