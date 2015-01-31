<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php NoBordersPostOn(); ?> 
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use noborders pagination style.
		 * The other part of this pager is in inc/template-tags.php function name NoBordersLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'noborders') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?> 
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list(__(', ', 'noborders'));

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list('', __(', ', 'noborders'));
			
			echo NoBordersCategoriesList($category_list);
			if ($tag_list) {
				echo ' ';
				echo NoBordersTagsList($tag_list);
			}
			echo ' ';
			printf(__('<span class="glyphicon glyphicon-link"></span> <a href="%1$s" title="Permalink to %2$s" rel="bookmark">permalink</a>.', 'noborders'), get_permalink(), the_title_attribute('echo=0'));
		?> 

		<?php NoBordersEditPostLink(); ?> 
	</footer><!-- .entry-meta -->
</article><!-- #post -->