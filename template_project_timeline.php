<?php
/*
 * Template Name: Project timeline
 * Description: A Page Template showing a timeline for a project
 */

get_header();

?>

<h4><?php _e("The Railway Diaries");?></h4>
<h5><?php _e("A women’s epic journey along the Silk Road");?></h5>

	<section id="cd-timeline" class="cd-container">
		
		<?php
		$args = array(
		'posts_per_page' => 200,
		'cat' => 8
		);
		
		$img_url = get_template_directory_uri() . '/img/';
		
		$latest = new WP_Query( $args );
		while( $latest->have_posts() ) : $latest->the_post(); ?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<?php $mediaType = get_post_meta($post->ID, 'MediaType', true); 
				if($mediaType == '')
				{
					$mediaType = 'BLOG';
				}
				$mediaType = strtoupper($mediaType);
				switch($mediaType){
					case 'PHOTO':
						$current_img = $img_url . 'photo.png';
						break;
					case 'PEOPLE':
						$current_img = $img_url . 'people.png';
						break;
					case 'AUDIO':
						$current_img = $img_url . 'audio.png';
						break;
					case 'ARTICLE':
						$current_img = $img_url . 'articles.png';
						break;
					case 'VIDEO':
						$current_img = $img_url . 'video.png';
						break;
					default:
						$current_img = $img_url . 'blog.png';
						break;
					
				}
				?>
				<img src="<?php echo $current_img;?>" alt="MediaType"/>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<span class="cd-date"><?php the_time('jS M, Y') ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
				
		<?php endwhile; ?>
		
	</section> <!-- cd-timeline -->

<script type="text/javascript">
	jQuery(document).ready(function($){
		var $timeline_block = $('.cd-timeline-block');

		//hide timeline blocks which are outside the viewport
		$timeline_block.each(function(){
			if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
			}
		});

		//on scolling, show/animate timeline blocks when enter the viewport
		$(window).on('scroll', function(){
			$timeline_block.each(function(){
				if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
					$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
				}
			});
		});
	});
</script>

<?php get_footer(); ?> 
