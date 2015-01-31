<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package noborders
 */

get_header();

?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md content-area" id="main-column">
					<main id="main" class="site-main" role="main">
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
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 