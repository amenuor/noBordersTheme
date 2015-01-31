<?php
/**
 * Bootstrap Basic theme extras
 * Hook functions that replaced core features.
 * 
 * @package noborders
 */


if (!function_exists('NoBordersCommentReplyLinkClass')) {
	/**
	 * modify comment reply link by adding noborders button class.
	 * 
	 * @todo Change comment link class modification to use WordPress hook action/filter when it's available.
	 * @param string $class
	 * @return string
	 */
	function NoBordersCommentReplyLinkClass($class) 
	{
		$class = str_replace("class='comment-reply-link", "class='comment-reply-link btn btn-default btn-sm", $class);
		$class = str_replace("class=\"comment-reply-login", "class=\"comment-reply-login btn btn-default btn-sm", $class);

		return $class;
	}// NoBordersCommentReplyLinkClass
}
add_filter('comment_reply_link', 'NoBordersCommentReplyLinkClass');


if (!function_exists('NoBordersExcerptMore')) {
	function NoBordersExcerptMore($more) 
	{
		return ' &hellip;';
	}// NoBordersExcerptMore
}
add_filter('excerpt_more', 'NoBordersExcerptMore');


if (!function_exists('NoBordersImageSendToEditor')) {
	/**
	 * remove rel attachment that is not valid html element
	 * @param string $html
	 * @param integer $id
	 * @return string
	 */
	function NoBordersImageSendToEditor($html, $id) 
	{
		if ($id > 0) {
			$html = str_replace('rel="attachment wp-att-'.$id.'"', '', $html);
		}

		return $html;
	}// NoBordersImageSendToEditor
}
add_filter('image_send_to_editor', 'NoBordersImageSendToEditor', 10, 2);


if (!function_exists('NoBordersLinkPagesLink')) {
	/**
	 * replace pagination in posts/pages content to support noborders pagination class.
	 * 
	 * @param string $link
	 * @param integer $i
	 * @return string
	 */
	function NoBordersLinkPagesLink($link, $i) 
	{
		if (strpos($link, '<a') === false) {
			return '<li class="active"><a href="#">' . $link . '</a></li>';
		} else {
			return '<li>' . $link . '</li>';
		}
	}// NoBordersLinkPagesLink
}
add_filter('wp_link_pages_link', 'NoBordersLinkPagesLink', 10, 2);


if (!function_exists('NoBordersNavMenuCssClass')) {
	/**
	 * Add custom class to nav menu
	 * @param array $classes
	 * @param object $menu_item
	 * @return array
	 */
	function NoBordersNavMenuCssClass($classes = array(), $menu_item = false) 
	{
		if (!is_array($menu_item->classes)) {
			return $classes;
		}

		if(in_array('current-menu-item', $menu_item->classes)){
			$classes[] = 'active';
		}

		if (in_array('menu-item-has-children', $menu_item->classes)) {
			$classes[] = 'dropdown';
		}

		if (in_array('sub-menu', $menu_item->classes)) {
			$classes[] = 'dropdown-menu';
		}

		return $classes;
	}// NoBordersNavMenuCssClass
}
add_filter('nav_menu_css_class', 'NoBordersNavMenuCssClass', 10, 2);


if (!function_exists('NoBordersWpTitle')) {
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 * 
	 * copy from underscore theme.
	 */
	function NoBordersWpTitle($title, $sep) 
	{
		global $page, $paged;

		if (is_feed()) {
			return $title;
		}

		// Add the blog name
		$title .= get_bloginfo('name');

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ($paged >= 2 || $page >= 2) {
			$title .= " $sep " . sprintf(__('Page %s', 'noborders'), max($paged, $page));
		}

		return $title;
	}// NoBordersWpTitle
}
add_filter('wp_title', 'NoBordersWpTitle', 10, 2);

