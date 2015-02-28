<?php get_header(); ?> 

							<header class="page-header">
								<h1 class="page-title"><?php _e('Not Found.', 'noborders'); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								
							<div class="row">
							  <div class="large-12 columns">
							    <div id="masonryContainer">

									<div class="masonry-brick panel">
								
									<p><?php _e('Reality is appearance, mistakes are always in wait.'); ?><br/>
									   <?php _e('This page doesn\'t exist, now, one day it might.');?><br/>
									   <a href="/"><?php _e('Come back to a safer harbour.', 'noborders');?></a></p>
									</div>
									
									<div class="masonry-brick panel">

								<!--search form-->
								<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
									<div class="form-group">
										<div class="col-xs-10">
											<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'noborders'); ?>" title="<?php echo esc_attr_x('Search &hellip;', 'label', 'noborders'); ?>" class="form-control" />
										</div>
										<div class="col-xs-2">
											<button type="submit" class="btn btn-default"><?php _e('Search', 'noborders'); ?></button>
										</div>
									</div>
								</form>
							</div>


							<div class="masonry-brick panel">
								<?php the_widget('WP_Widget_Recent_Posts'); ?> 
							</div>

							<div class="masonry-brick panel">
											<h2 class="widgettitle"><?php _e('Popular Topics', 'noborders'); ?></h2>
											<ul>
												<?php
												wp_list_categories(array(
													'orderby' => 'count',
													'order' => 'DESC',
													'show_count' => 1,
													'title_li' => '',
													'number' => 10,
												));
												?> 
											</ul>
							</div>
							
							<div class="masonry-brick panel">
										<?php
										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'noborders'), convert_smilies(':)')) . '</p>';
										the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
										?> 
							</div>
							
							<div class="masonry-brick panel">
										<?php the_widget('WP_Widget_Tag_Cloud'); ?> 
							</div>
							</div>
							</div>
							</div>

							</div><!-- .page-content -->
							
							<script type="text/javascript">
							jQuery(window).load(function(){
							  jQuery('#masonryContainer').masonry({  
							    itemSelector: '.masonry-brick',
							    columnWidth: 240
							  });  
							});
							</script>
							

<?php get_footer(); ?> 