   <!-- Sidebar -->
    <aside class="large-3 columns"> 
      <div class="panel text-center">
      <h5><?php _e('Random Post', 'noborders');?></h5>
		<p>
		<?php
			query_posts(array(
				'showposts' => 1,
				'orderby' => 'rand',
			));
		while (have_posts()) : the_post(); ?>

			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('thumbnail');
			} 
			?>
			<h4><?php the_title(); ?></h4>
			<hr>
			<div class="text-left">
			<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>
	    </p>
		
      </div>
    </aside>
    <!-- End Sidebar -->
