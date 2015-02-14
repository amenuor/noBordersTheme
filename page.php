<?php
/**
 * Template for displaying pages
 * 
 * @package noborders
 */

get_header();

?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md-content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'page');

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
			    <?php
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
				
				
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 