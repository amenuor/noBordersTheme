<?php
/*
 * Template Name: About
 * Description: A Page Template showing an about page
 */

get_header();

?>
 <div class="row">
 
    <div class="large-12 columns">
		<?php 
		while (have_posts()) {
			the_post();

			get_template_part('content', 'page');

		} //endwhile;
		?> 
    </div>
  </div>
  
  <div class="row show-for-small-only">
  
  
  <?php
  	$eleDesc = '';
  	$costanzaDesc = '';
  	$giuDesc = '';
  	$tanDesc = '';
	
	$args = array(
	'posts_per_page' => 4,
	'paged' => $paged,
	'cat' => 133
	);	
	
	$latest = new WP_Query( $args );
	while( $latest->have_posts() ) : $latest->the_post(); ?>

	  <div class="medium-3 columns">
		  <div class="panel text-center">
		  	<?php the_title(); ?><br/>
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('small');
			} 
			?>
		    <p class="text-justify"><?php the_content(); ?></p>
		  </div>
	  </div>
	  
<?php endwhile; 
	$latest->rewind_posts(); ?>

  </div>

  <div class="row show-for-medium-up">
	  <div class="large-12 columns">
			<ul class="tabs" data-tab>
			
			<?php
				$i = 1;
				while( $latest->have_posts() ) : $latest->the_post();
			?>
			
			  <li class="tab-title <?php echo $i == 1 ? 'active' : '';?>"><a href="#panel<?php echo $i;?>">		  
			  <div class="panel text-center"><?php $i += 1; the_title();?><br/>
				<?php 
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>
				<img style="height:100px" src="<?php echo $url;?>">
			  </div>
		  	  </a></li>

<?php endwhile; 
	$latest->rewind_posts(); ?>


			</ul>
			<div class="tabs-content">

			<?php
				$i = 1;
				while( $latest->have_posts() ) : $latest->the_post();
			?>

			  <div class="content <?php echo $i == 1 ? 'active' : '';?>" id="panel<?php echo $i;?>">
			    <p><?php the_content(); $i += 1; ?></p>
			  </div>

<?php endwhile; ?>
			  
			</div>
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
 
 
  </div>
 
  <!-- End Grid Section -->
  <?php get_footer(); ?> 
  