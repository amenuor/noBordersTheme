<?php
/*
 * Template Name: Blog
 * Description: A Page Template showing a blog
 */

get_header();

?>

<div class="row">


   <!-- Ajax container -->
	<div class="large-9 columns" role="content">
		<?php echo do_shortcode('[ajax_load_more category="blog" posts_per_page="2"]'); ?>
	</div>
   
	
   <!-- Sidebar -->
   <?php get_sidebar('blog'); ?> 

    <!-- End Sidebar -->
</div>
  <!-- End Main Content and Sidebar -->
<?php get_footer(); ?> 
