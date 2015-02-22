<?php
/*
 * Template Name: Projects
 * Description: A Page Template showing a list of projects
 */

get_header();

?>

<h4><?php _e("The Railway Diary");?></h4>
<h5><?php _e("A women’s epic journey along the Silk Road");?></h5>

<div class="row show-for-small-only">
	<div class="small-12 columns">
	<ul data-orbit>
		<?php
		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'cat' => 32
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
				<?php _e("Map of The Railroad diaries - Click on the train icon to see more of the project!", "noborders"); ?>
			</div>
		</li>
		<?php
		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'cat' => 32
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

<div class="row">
<div class="large-12 columns">
    
<div class="panel">            
<div class="row">
	<div class="large-6 columns">
		<h4><?php _e("Discover the project!", "noborders"); ?></h4>
		<p><?php _e("Click on the train and get the latest information on this great journey!", "noborders"); ?></p>
	</div>
	<div class="large-6 columns">
		<a href="/the-railway-diary" class="right"><img src="<?php echo get_template_directory_uri();?>/img/train.png"></a>
	</div>
</div>
</div>
      
</div>
</div>


<div class="row">
	<div class="large-12 columns">
	<p>
		<?php
		_e('ullamcorper, rhoncus magna ac, condimentum lacus. Curabitur vel hendrerit leo, quis posuere sapien. Sed et mauris iaculis, iaculis dui et, ultricies arcu. Vivamus non ligula nisl. Pellentesque viverra tortor vitae felis euismod consequat et ac dolor.

Phasellus consectetur dignissim eleifend. Donec augue massa, facilisis quis efficitur et, accumsan at est. Integer in lobortis leo, nec aliquam est. Maecenas ex augue, convallis imperdiet odio quis, tincidunt condimentum diam. Integer mattis, dolor vel facilisis tempus, sem augue accumsan massa, eget rhoncus nulla sapien vulputate magna. Fusce nisl sem, vestibulum sit amet justo et, interdum semper felis. Donec dapibus purus vitae sem scelerisque, sed hendrerit odio vestibulum.

Phasellus velit velit, tristique in suscipit tempor, lobortis quis arcu. Cras ornare ipsum eros, sit amet pharetra risus accumsan non. Praesent sed sapien mauris. Nullam malesuada malesuada mattis. Fusce ut enim congue, blandit arcu malesuada, euismod lectus. In pellentesque, eros vel pretium blandit, augue lectus ornare tortor, ut fringilla ante ligula at mauris. Nunc tincidunt augue nunc, sit amet vestibulum orci suscipit in.

Suspendisse potenti. Aenean cursus justo rutrum nisl interdum aliquet. Proin non enim a diam molestie dapibus quis eu odio. Aenean quis elit nisl. Mauris vel pellentesque dolor, a sollicitudin felis. Integer posuere nibh id elit semper ullamcorper. Maecenas euismod, neque ac iaculis consequat, neq');
		?>
	</p>
	</div>
</div>

<div class="row show-for-medium-up">
<div id="legend" style="visibility: hidden;">
<p class="text-center" style="color: orange">
<?php _e("Legend", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/photo.png" width="24px"/> 
<?php _e("Photo", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/people.png" width="24px" /> 
<?php _e("People", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/blog.png" width="24px" /> 
<?php _e("Blog", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/music.png" width="24px" /> 
<?php _e("Music", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/articles.png" width="24px" /> 
<?php _e("Article", "noborders"); ?>
</p>
<p>
<img src="<?php echo get_template_directory_uri();?>/img/video.png" width="24px" /> 
<?php _e("Video", "noborders"); ?>
</p>
</div>
</div>

<?php get_footer(); ?> 
