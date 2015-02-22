<?php
/**
 * Template for displaying pages
 * 
 * @package noborders
 */

get_header();

?> 
			<div class="row">
				<div class="large-12 columns">
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
				</div>
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
					wp_list_comments( array(
					        'walker' => new NoBordersWalkerComment,
					        'style' => 'ul',
					        'callback' => null,
					        'end-callback' => null,
					        'type' => 'all',
					        'page' => null,
					        'avatar_size' => 32
					    ) );
					comment_form();
				}
				
				?> 
				
				
<?php get_footer(); ?> 