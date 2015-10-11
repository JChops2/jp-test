<?php
/*
Template Name: Pages
*/
?>

<html>
<head>
</head>
<body>

		<?php if (have_posts()) : ?>
    
		<?php while (have_posts()) : the_post(); ?> 
        
        <?php

			$image = get_field('slide' );
			
			?>
			<p>The url is: <?php echo $image['url' ]; ?>, the title is <?php echo $image['title' ]; ?> and the alt is: <?php echo $image['alt' ]; ?></p>
        
        
        
	   <?php the_content(); ?>
        
      <?php endwhile;?>
      
	<?php endif; ?>


</body>
</html>