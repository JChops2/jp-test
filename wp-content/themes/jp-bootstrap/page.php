<?php get_header(); ?>

      <div class="row">
 <div class="col-xs-12 col-md-3">
          <div class="sidebar-module sidebar-module-inset">
         <?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>

            <form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
                <label for="s" class="sr-only">Search</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div> <!-- .input-group -->
            </form>
          </div>
        </div><!-- /.blog-sidebar -->
        <div class="col-xs-12 col-lg-8">

          <div class="blog-post">

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
		   
           <header class="article-header">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
           </header>
           
		   <?php 
			$tags = get_tags();
			$html = '<div class="post_tags">';
			
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
						
				$html .= "<a href='#{$tag->name}' title='{$tag->name} Tag' class='{$tag->slug}'>";
				$html .= "{$tag->name}</a>, ";
			}
			$html .= '</div>';
			echo rtrim($html, ",");
			
			?>
           <br />
			<?php 
            $tags = get_tags();
            foreach ( $tags as $tag ) {
            
            echo '<header><a name="'.$tag->name.'"></a><h4>' .$tag->name. '</h4></header>';
            $tag_query = new WP_Query( array( 
                              'tag_id' => $tag->term_id,
                              'no_found_rows' => true,
                               ) );
            while ( $tag_query->have_posts() ) : $tag_query->the_post();
            
		   ?>
                        
                        <section class="entry-content clearfix" itemprop="articleBody">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" > <?php the_title(); ?></a>
                        </section>
		   
		   <?
            endwhile; wp_reset_query();
            }
            ?>
		
        </article>
        
        </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        </div><!-- end row -->
        
<?php get_footer(); ?>