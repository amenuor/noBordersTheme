<?php
/**
 * Template Name: Carousels
 * Description: used for pages with different sections and carousels on them
 * 
 * @package noborders
 */

get_header();

?>

<div class="row">
<div class="large-9 columns text-center">

<?php
$args = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'parent' => 6 
  );
$categories = get_categories($args);
foreach($categories as $category):
?>

<a id="<?php echo $category->category_nicename; ?>"><h1><?php echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';; ?></h1></a>
				<div class="gallery">
					<ul id="carousel_<?php echo $category->category_nicename; ?>" class="elastislide-list">
						
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
									<li data-title="<?php the_title(); ?>" data-preview="<?php echo $urlOrig;?>"><a href="<?php the_permalink(); ?>"><img width="100px" src="<?php echo $urlThumb;?>" /></a></li>
								
									</li>
								<?php endif;?>
							<?php endwhile; ?>
					</ul>					
				</div>
				
		<script type="text/javascript">
			jQuery('#carousel_<?php echo $category->category_nicename; ?>').elastislide();
		</script>

<?php endforeach; ?>

			</div>
			<!-- Sidebar -->
		    <?php get_sidebar('carousel'); ?> 

		</div>		

<?php get_footer(); ?> 
