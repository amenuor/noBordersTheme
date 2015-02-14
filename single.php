<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package noborders
 */

get_header();

?> 
<?php get_sidebar('left'); ?> 
				<div class="large-12 columns">
					<?php 
					while (have_posts()) {
						the_post();

						get_template_part('content', get_post_format());

						echo "\n\n";
						
						NoBordersPagination();

						echo "\n\n";
						
						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || '0' != get_comments_number()) {
							comments_template();
						}

						echo "\n\n";

					} //endwhile;
					?> 
				</div>
			    <?php
				
				/*get_sidebar('right');*/
			    
				if ( function_exists( 'sharing_display' ) ) {
			        sharing_display( '', true );
			    }
 
			    if ( class_exists( 'Jetpack_Likes' ) ) {
			        $custom_likes = new Jetpack_Likes;
			        echo $custom_likes->post_likes( '' );
			    }
			    
			    if ( function_exists( 'comment_form' ) ) {
					comment_form();
				}
				
				?> 
				
<?php get_footer(); ?> 