   <!-- Sidebar -->
    <aside class="large-3 columns">
	    <h5><?php _e('Blog Topics', 'noborders');?></h5>
	    <ul class="side-nav">
		  <?php
		  $args = array(
		    'orderby' => 'name',
		    'order' => 'ASC',
		    'parent' => 9
		    );
		  $categories = get_categories($args);
		  foreach($categories as $category) { 
		      echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';  } 		  ?>
	    </ul> 
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
