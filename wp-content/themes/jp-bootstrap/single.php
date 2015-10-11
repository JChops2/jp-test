<?php get_header(); ?>

    <div class="row top-margin-single">

        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12">

          <div class="blog-post">

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if (in_category('3d-motion-graphics')) { ?>
             <header class="article-header">
              <div class='embed-container'>
               <iframe src='<?php the_field('add_video'); ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
               </div>
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
           </header>

            <section class="entry-content clearfix" itemprop="articleBody">
                <div class="single-content">
						<?php the_content(); ?>
                	</div>
            </section>
			<?php 	} elseif (in_category('web')) { ?>
           
             <header class="article-header">
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
           </header>

            <section class="entry-content clearfix" itemprop="articleBody">
                <div class="single-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12"  style="margin-bottom: 20px;">
                    	<img src="<?php the_field('add_1st_image'); ?>" alt="<?php the_field('image_1_alt_tag'); ?>" title="<?php the_field('image_1_alt_tag'); ?>" class="img-responsive" style="border:1px #000 solid;" />
                    </div>
                     <div class="col-lg-6 col-md-6 col-xs-12"  style="margin-bottom: 20px;">
                    	<img src="<?php the_field('add_2nd_image'); ?>" alt="<?php the_field('image_2_alt_tag'); ?>" title="<?php the_field('image_2_alt_tag'); ?>" class="img-responsive" style="border:1px #000 solid;" />
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    </div>
            </section>
			<?php 	} else { ?>
            <header class="article-header">
            
                <?php 
					//get the url of the feature img
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
		  			$url = $thumb['0']; 
    			?>
                <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="100%" />
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
           </header>

            <section class="entry-content clearfix" itemprop="articleBody">
                <div class="single-content">
						<?php the_content(); ?>
                	</div>
            </section>

        
       
            <?php } ?>
                <footer class="article-footer">
                <nav>
                    <ul class="pager">
                        <li class="previous"> <?php next_post_link( '%link', '<span class="glyphicon glyphicon-chevron-left"></span> Previous', TRUE ); ?></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li class="next"><?php previous_post_link( '%link', 'Next <span class="glyphicon glyphicon-chevron-right"></span>', TRUE ); ?></li>
                    </ul>
                </nav>
            </footer>

        </article>
      <?php  endwhile; ?>
            <?php endif; ?> 
           
            
            
         

        </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <!-- <div class="col-xs-12 col-md-3">
          <div class="sidebar-module sidebar-module-inset">
         <?php // wp_list_categories(); ?> 
          </div>
        </div><!-- /.blog-sidebar -->
        </div><!-- end row -->
        
<?php get_footer(); ?>