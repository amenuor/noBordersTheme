<?php
/*
 * Template Name: Portfolio
 * Description: A Page Template showing a portfolio
 */

get_header();

?>

<div class="row">
  <div class="large-6 columns verticalBar">
	<h1><?php _e('Sections', 'noborders');?></h1>
  	<ul data-orbit>
  		<?php
  		$args = array(
  			'posts_per_page' => 4,
  			'paged' => $paged,
  			'cat' => 5
  		);

  		$latest = new WP_Query( $args );
  		while( $latest->have_posts() ) : $latest->the_post(); ?>
  		<li>
  			<?php 
  			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('original');
  			} 
  			?>
  			<div class="orbit-caption">
<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  			</div>
  		</li>
  		<?php endwhile; ?>		
  	</ul>
  </div>
  <div class="large-6 columns">
	<h1><?php _e('Countries', 'noborders');?></h1>
  	<ul data-orbit>
  		<?php
  		$args = array(
  			'posts_per_page' => 4,
  			'paged' => $paged,
  			'cat' => 6
  		);

  		$latest = new WP_Query( $args );
  		while( $latest->have_posts() ) : $latest->the_post(); ?>
  		<li>
  			<?php 
  			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('original');
  			} 
  			?>
  			<div class="orbit-caption">
  				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  			</div>
  		</li>
  		<?php endwhile; ?>		
  	</ul>
  </div>
</div>

<?php get_footer(); ?> 
