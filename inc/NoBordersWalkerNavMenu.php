<?php
/**
 * My walker nav menu extends wp walker nav menu
 * 
 * @package noborders
 */


if (!class_exists('NoBordersWalkerNavMenu')) {
	class NoBordersWalkerNavMenu extends Walker_Nav_Menu
	{
		
		function start_lvl(&$output, $depth) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"dropdown\">\n";
		}		
	}
}