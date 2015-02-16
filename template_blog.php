<?php
/*
 * Template Name: Blog
 * Description: A Page Template showing a blog
 */

get_header();

?>
      <div class="row">
     
         
        <div class="large-9 columns" role="content">
     
          <article>
     
            <h3><a href="#">Blog Post Title</a></h3>
            <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
     
            <div class="row">
              <div class="large-6 columns">
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
                <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
              </div>
              <div class="large-6 columns">
                <img src="http://placehold.it/400x240&text=[img]"/>
              </div>
            </div>
     
            <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
     
            <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
     
          </article>
     
          <hr/>
     
          <article>
     
            <h3><a href="#">Blog Post Title</a></h3>
            <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
     
            <div class="row">
              <div class="large-6 columns">
                <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
                <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
              </div>
              <div class="large-6 columns">
                <img src="http://placehold.it/400x240&text=[img]"/>
              </div>
            </div>
     
            <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
     
            <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
     
          </article>
     
        </div>

   <!-- Sidebar -->
    <aside class="large-3 columns">
      <h5>Blog Topics</h5>
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
        <h5>Random Post</h5>
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
  </div>
  <!-- End Main Content and Sidebar -->
<?php get_footer(); ?> 
