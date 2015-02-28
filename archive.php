<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package noborders
 */

get_header(); 

?> 

<style>
.masonry-brick { width: 220px; margin: 10px; float: left;  }
#masonryContainer { width: 0 auto; }              
            
</style>

<!-- Masonry Container -->
<?php if (have_posts()) { ?> 
	
						<header class="page-header">
							<h1 class="page-title">
								<?php
								if (is_category()) :
									single_cat_title();

								elseif (is_tag()) :
									single_tag_title();

								elseif (is_author()) :
									/* Queue the first post, that way we know
									 * what author we're dealing with (if that is the case).
									 */
									the_post();
									printf(__('Author: %s', 'noborders'), '<span class="vcard">' . get_the_author() . '</span>');
									/* Since we called the_post() above, we need to
									 * rewind the loop back to the beginning that way
									 * we can run the loop properly, in full.
									 */
									rewind_posts();

								elseif (is_day()) :
									printf(__('Day: %s', 'noborders'), '<span>' . get_the_date() . '</span>');

								elseif (is_month()) :
									printf(__('Month: %s', 'noborders'), '<span>' . get_the_date('F Y') . '</span>');

								elseif (is_year()) :
									printf(__('Year: %s', 'noborders'), '<span>' . get_the_date('Y') . '</span>');

								elseif (is_tax('post_format', 'post-format-aside')) :
									_e('Asides', 'noborders');

								elseif (is_tax('post_format', 'post-format-image')) :
									_e('Images', 'noborders');

								elseif (is_tax('post_format', 'post-format-video')) :
									_e('Videos', 'noborders');

								elseif (is_tax('post_format', 'post-format-quote')) :
									_e('Quotes', 'noborders');

								elseif (is_tax('post_format', 'post-format-link')) :
									_e('Links', 'noborders');

								else :
									_e('Archives', 'noborders');

								endif;
								?> 
							</h1>							
							<?php
							// Show an optional term description.
							$term_description = term_description();
							if (!empty($term_description)) {
								printf('<div class="taxonomy-description">%s</div>', $term_description);
							} //endif;
							?>
						</header><!-- .page-header -->
						<div class="row">
						  <div class="large-12 columns">
						    <div id="masonryContainer">
						
						<?php 
						/* Start the Loop */
						while (have_posts()): the_post(); 

						$mediumImgUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );

						?>
						
				        <div class="masonry-brick panel">
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $mediumImgUrl['0']; ?>"></a>
							<div class="orbit-caption">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						
				        </div>
						
						<?php
						endwhile; 
						?> 

						    </div>
						  </div>
						</div>

						<?php } //endif; ?> 

<script>
jQuery(window).load(function(){
  jQuery('#masonryContainer').masonry({  
    itemSelector: '.masonry-brick',
    columnWidth: 240
  });  
});
</script>

<?php get_footer(); ?> 