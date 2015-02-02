<?php
/**
* Template for displaying pages
* 
* @package noborders
*/

get_header();

?> 

<!-- First Band (Slider) -->
        
<div class="row show-for-small-only">
	<div class="small-12 columns">
		<ul data-orbit>
			<?php
			$args = array(
				'posts_per_page' => 4,
				'paged' => $paged,
				'cat' => 3
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
					<?php the_content(); ?>
				</div>
			</li>
		<?php endwhile; ?>		
	</ul>
	<hr />
</div>
</div>

<div class="row show-for-medium-up">	
<div class="large-12 columns">
	<ul data-orbit>
		<li>
			<!-- Map! -->
			<div id="map" style="width:1000px; height: 400px;"></div>
			<div class="orbit-caption">
				The Railroad diaries - Map
			</div>
		</li>
		<?php
		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'cat' => 3
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
				<?php the_content(); ?>
			</div>
		</li>
	<?php endwhile; ?>		
</ul>    
<hr />
</div>
</div>
  
<!-- Latest Blog Posts Blocks -->

<div class="row">
<h4 class="text-center">Latest Blog Posts</h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 9
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); ?>
<div class="large-4 columns">
<div class="clearfix text-center">
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail('medium');
	} 
	?>
	<h4><?php the_title(); ?></h4>
	<h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
	<hr>
	<div class="text-justify">
		<?php the_excerpt(); ?>
	</div>
</div>
</div>
<?php endwhile; ?>
	
</div>
    
<!-- Call to Action Panel -->
<div class="row">
<div class="large-12 columns">
    
<div class="panel">
<h4>Get in touch!</h4>
            
<div class="row">
	<div class="large-9 columns">
		<p>We'd love to hear from you, you attractive person you.</p>
	</div>
	<div class="large-3 columns">
		<a href="/contacts" class="radius button right">Contact Us</a>
	</div>
</div>
</div>
      
</div>
</div>
  


<!-- Latest articles from our projects Blocks -->

<div class="row">
<h4 class="text-center">Latest articles from our projects</h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 7
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); ?>
<div class="large-4 columns">
<div class="clearfix text-center">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail('medium');
} 
?>
<h4><?php the_title(); ?></h4>
<h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
<hr>
				
<div class="text-justify">
<?php the_excerpt(); ?>
</div>
</div>
</div>
<?php endwhile; ?>
	
</div>
	
<!-- Profile Stories -->
<div class="row">
<?php
$args = array(
'posts_per_page' => 1,
'paged' => $paged,
'cat' => 14
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); ?>
<div class="large-12 columns text-center">
<div class="clearfix text-center">
<h4><?php the_title(); ?></h4>
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('original');
} 
?>
<hr>
				
<div class="text-justify">
	<?php the_excerpt(); ?>
</div>
</div>
</div>
<?php endwhile; ?>
								
</div>

<!-- Curiosities Blocks -->

<div class="row">
<h4 class="text-center">Curiosities</h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 13
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); ?>
<div class="large-4 columns">
<div class="clearfix text-center">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail('medium');
} 
?>
<h4><?php the_title(); ?></h4>
<h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
<hr>
				
<div class="text-justify">
<?php the_excerpt(); ?>
</div>
</div>
</div>
<?php endwhile; ?>
	
</div>

<?php get_footer(); ?> 