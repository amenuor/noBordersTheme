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
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
				<?php _e("Map of "); ?>  
				<a href="/projects/"><?php _e("The Railway diaries"); ?></a>
				<?php _e(" - Click on the icons to see more of the project!", "noborders"); ?>
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
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		</li>
	<?php endwhile; ?>		
</ul>    
<hr />
</div>
</div>

<div class="row text-center show-for-medium-up">
	<div class="small-12 columns">
		<div id="departureBoard"></div>
	</div>
</div>

<div class="row text-center show-for-small-only">
	<div class="small-12 columns">
		<div id="departureBoardForSmall"></div>
	</div>
</div>

<hr />

<!-- Latest Blog Posts Blocks -->
<?php
	$duplicateControlArr = array();	
?>

<div class="row">
<h4 class="text-center"><?php _e("Latest Blog Posts", "noborders"); ?></h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 9,
'post__not_in' => $duplicateControlArr
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); 
$duplicateControlArr[] = get_the_ID();?>
<div class="large-4 columns">
<div class="clearfix text-center">
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail('medium');
	} 
	?>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
<h4><?php _e("Support us!", "noborders"); ?></h4>
            
<div class="row">
	<div class="large-9 columns">
		<p><?php _e("If you like our work please donate whatever you can to help us move on with our projects!", "noborders"); ?></p>
	</div>
	<div class="large-3 columns">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_donations">
		<input type="hidden" name="business" value="eleonora.vio@gmail.com">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="item_name" value="Nawart Press">
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="currency_code" value="EUR">
		<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
		<input type="submit" name="submit" class="radius button right" value="<?php _e("Support Us", "noborders"); ?>">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>		
	</div>
</div>
</div>
      
</div>
</div>
  


<!-- Latest articles from our projects Blocks -->

<div class="row">
<h4 class="text-center"><?php _e("Latest articles", "noborders"); ?></h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 7,
'post__not_in' => $duplicateControlArr
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post();
$duplicateControlArr[] = get_the_ID();?>
<div class="large-4 columns">
<div class="clearfix text-center">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('medium');
} 
?>
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
'cat' => 14,
'post__not_in' => $duplicateControlArr
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post(); 
$duplicateControlArr[] = get_the_ID();?>
<div class="large-12 columns text-center">
<div class="clearfix text-center">
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
<h4 class="text-center"><?php _e("Curiosities", "noborders"); ?></h4>
		
<?php
$args = array(
'posts_per_page' => 3,
'paged' => $paged,
'cat' => 13,
'post__not_in' => $duplicateControlArr
);
		
$latest = new WP_Query( $args );
while( $latest->have_posts() ) : $latest->the_post();
$duplicateControlArr[] = get_the_ID();?>
<div class="large-4 columns">
<div class="clearfix text-center">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail('medium');
} 
?>
<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<h6 class="left subheader"><?php the_time('jS M, Y') ?></h6>
<hr>
				
<div class="text-justify">
<?php the_excerpt(); ?>
</div>
</div>
</div>
<?php endwhile; ?>
	
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
<img src="<?php echo get_template_directory_uri();?>/img/audio.png" width="24px" /> 
<?php _e("Audio", "noborders"); ?>
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

<script type="text/javascript">

<?php	  
	$blogCategory = get_category_by_slug('blog');
?>

if(jQuery('#departureBoard').is(':visible'))
{
	var board = new DepartureBoard (document.getElementById ('departureBoard'), { rowCount: 4, letterCount: 28 }); 
	
	setInterval(updateBoard, 24000);	
	function updateBoard()
	{
		board.setValue (['    <?php _e('The Railway Diaries', 'noborders') ?>     ', 
		 				 '<?php echo get_option('nawart_theme_display_options')['current_location'] ?>',
		 				 '<?php echo get_option('nawart_theme_display_options')['days_spent'] . __(' days', 'noborders') ?>',
						 '<?php echo get_option('nawart_theme_display_options')['steps_counter'] . __(' steps', 'noborders') ?>']);
		setTimeout(function(){
			board.setValue (['    <?php _e('The Railway Diaries', 'noborders') ?>     ', 
   						  	 '<?php echo get_option('nawart_theme_display_options')['current_location'] ?>',
		 					 '<?php echo wp_count_posts()->publish . __(' articles', 'noborders') ?>                     ',
		 					 '<?php echo $blogCategory->count . __(' blog posts', 'noborders') ?>                    ']);
		}, 12000)
	}
	updateBoard();			
}else
{
	var boardForSmall = new DepartureBoard (document.getElementById ('departureBoardForSmall'), { rowCount: 5, letterCount: 14 }); 
	
	setInterval(updateBoardForSmall, 24000);	
	function updateBoardForSmall()
	{
		boardForSmall.setValue ([' <?php _e('The Railway', 'noborders') ?>  ', 
		 				         '   <?php _e('Diaries', 'noborders') ?>    ',
							     '<?php echo get_option('nawart_theme_display_options')['current_location'] ?>',
		 						 '<?php echo get_option('nawart_theme_display_options')['days_spent'] . __(' days', 'noborders') ?>',
		 						 '<?php echo get_option('nawart_theme_display_options')['steps_counter'] . __(' steps', 'noborders') ?>']);
		setTimeout(function(){
			boardForSmall.setValue ([' <?php _e('The Railway', 'noborders') ?>  ', 
		 				         '   <?php _e('Diaries', 'noborders') ?>    ',
							     '<?php echo get_option('nawart_theme_display_options')['current_location'] ?>',
		 					     '<?php echo wp_count_posts()->publish . __(' articles', 'noborders') ?>   ',
		 					     '<?php $blogCategory->count . __(' blog posts', 'noborders') ?> ']);
		}, 12000)
	}
	updateBoardForSmall();			
}
</script>

<div class="row">
<div class="large-12 columns">
	<a class="twitter-timeline" href="https://twitter.com/search?q=%40nawartpress%20OR%20%23press" width="900" height="400" data-widget-id="573825317447532544">Tweets about @nawartpress OR #press</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
</div>
</div>

<div class="row text-center" style="margin-top: 50px">
<h3><?php _e('We have worked with', 'noborders') ?></h3>
<div class="list_carousel responsive" >
	<ul id="collaborationCarousel">
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/aljazeera.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/area.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/artshub.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/atlantic.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/azione.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/bhe.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/caffe.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/cairopost.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/choisir.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/communityTimes.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/ecoDiBergamo.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/emergency.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/europa.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/fattoQuotidiano.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/FO.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/left.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/lettera22.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/limes.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/mee.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/nena.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/nigrizia.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/pagina99.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/raiNews24.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/regioneTicino.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/repubblica.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/robMorrione.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/smt.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/unita.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/venerdi.png" /></li>			  
	    <li><img src="<?php echo get_template_directory_uri();?>/img/coll/vitaTrentina.png" /></li>			  
	</ul>
	<div class="clearfix"></div>
</div>
</div>

<script>
jQuery('#collaborationCarousel').carouFredSel({
	width: '100%',
	scroll: 2
});
</script>

<?php get_footer(); ?> 