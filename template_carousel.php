<?php
/**
 * Template Name: Carousels
 * Description: used for pages with different sections and carousels on them
 * 
 * @package noborders
 */

$catId = $_GET["c"];
if($catId != 6 && $catId != 5)
{
	wp_redirect( home_url());
	exit();
}

get_header();

$args = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'parent' => htmlspecialchars($_GET["c"]) 
  );
$categories = get_categories($args);
foreach($categories as $category):
?>
<div class="row">
<div class="large-12 columns text-center panel">
<a id="<?php echo $category->category_nicename; ?>"><h1><?php echo $category->name; ?></h1></a>
				<div class="gallery">
					<ul id="carousel_<?php echo $category->name; ?>" class="elastislide-list">
						
						<?php
							$argsPosts = array(
								'cat' => $category->term_id
							);
							$allPostInCat = new WP_Query( $argsPosts );
							while( $allPostInCat->have_posts() ) : $allPostInCat->the_post(); 
								if(has_post_thumbnail()):
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
									$urlThumb = $thumb['0'];
									$orig = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original' );
									$urlOrig = $orig['0'];
									?>
									<li data-permalink="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" data-preview="<?php echo $urlOrig;?>"><a href="#_"><img width="100px" src="<?php echo $urlThumb;?>" /></a></li>
								
									</li>
								<?php endif;?>
							<?php endwhile; ?>
					</ul>
					
					<div class="image-preview">
						<img id="preview_<?php echo $category->name; ?>" src="" />
						<div id="caption_<?php echo $category->name; ?>" class="es_caption">
							TEST
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<script type="text/javascript">
		jQuery(document).ready(function(){
			initCarousel('<?php echo $category->name; ?>');
		});
		</script>

<?php endforeach; ?>

		<script type="text/javascript">
			function initCarousel(postId)
			{
				var current = 0,
					$preview = jQuery( '#preview_' + postId ),
					$carouselEl = jQuery( '#carousel_' + postId ),
					$thisCaption = jQuery( '#caption_' + postId ),
					$carouselItems = $carouselEl.children(),
					carousel = $carouselEl.elastislide( {
						current : current,
						minItems : 4,
						onClick : function( el, pos, evt ) {

							changeImage( el, pos );
							evt.preventDefault();

						},
						onReady : function() {

							changeImage( $carouselItems.eq( current ), current );
						
						}
					} );

				function changeImage( el, pos ) {

					$preview.attr( 'src', el.data( 'preview' ) );
					$carouselItems.removeClass( 'current-img' );
					el.addClass( 'current-img' );
					$thisCaption.html('<a href="'+ el.data( 'permalink' ) +'" rel="bookmark">'+el.data( 'title' )+'</a>');
				}
			}
			
		</script>
<?php get_footer(); ?> 
