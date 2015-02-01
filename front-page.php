<?php
/**
 * Template for displaying pages
 * 
 * @package noborders
 */

get_header();

?> 

<!-- First Band (Slider) -->

  <div class="row">
    <div class="large-12 columns">
    <ul data-orbit>
      <li>
		  <img src="http://placehold.it/1000x400&text=[ img 1 ]" />
		  <div class="orbit-caption">
		        Caption One.
	      </div>
	  </li>
      <li>
		  <img src="http://placehold.it/1000x400&text=[ img 2 ]" />
		  <div class="orbit-caption">
		        Caption two.
	      </div>
	  </li>
      <li>
		  <img src="http://placehold.it/1000x400&text=[ img 3 ]" />
		  <div class="orbit-caption">
		        Caption three.
	      </div>
	  </li>
      <li>
		  <img src="http://placehold.it/1000x400&text=[ img 4 ]" />
		  <div class="orbit-caption">
		        Caption four.
	      </div>
	  </li>
    </ul>
    <!-- <div id="slider">
      
    </div> -->
    
    <hr />
    </div>
  </div>
  
  <!-- Curiosities Blocks -->

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
						<div class="panel clearfix text-justify">
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail('medium');
							} 
							?>
						<h4 class="text-center"><?php the_title(); ?></h4>
						    <h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
						<hr>
				
							<?php the_excerpt(); ?>
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
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Three-up Content Blocks -->

  	<div class="row">
		<h4 class="text-center">Latest articles from our projects</h4>
  		<div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
    
      <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
    
      <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
	
	</div>
	
	<!-- Big Session -->
				<div class="row">
					<div class="large-12-columns text-center">
						<h4>Profile story.</h4>
						<p class="text-left">Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
						<img src="http://placehold.it/700x500&text=Biutiful Picture"/>
						<p/>
					</div>
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
						<div class="panel clearfix text-justify">
							<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  the_post_thumbnail('medium');
							} 
							?>
						<h4 class="text-center"><?php the_title(); ?></h4>
						    <h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
						<hr>
				
							<?php the_excerpt(); ?>
						</div>
					</div>
				<?php endwhile; ?>
	
	</div>

<?php get_footer(); ?> 