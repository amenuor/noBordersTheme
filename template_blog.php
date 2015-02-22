<?php
/*
 * Template Name: Blog
 * Description: A Page Template showing a blog
 */

get_header();

?>

<div class="row">
	<div class="large-9 columns" role="content">
		
<?php
$args = array(
'posts_per_page' => 2,
'paged' => $paged,
'cat' => 9
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); ?>
		<article class="clearfix">
			<h3><?php the_title(); ?></h3>
			<h6 class="left subheader">Written by <?php the_author(); ?> on <?php the_time('jS M, Y') ?></h6>
			<hr>	
			
			<div class="blogpostcontent text-justify">
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('medium');
				} 
				?>
				<?php the_content(); ?>
			</div>
		</article>
<?php endwhile; 

/* Blog Navigation */
$big = 999999999;
			echo paginate_links( array(
			    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			    'format' => '?paged=%#%',
			    'current' => max( 1, get_query_var('paged') ),
			    'total' => $latest->max_num_pages
			) );
?>
	</div>
	
   <!-- Sidebar -->
   <?php get_sidebar('right'); ?> 

    <!-- End Sidebar -->
  </div>
  <!-- End Main Content and Sidebar -->
<?php get_footer(); ?> 
