<?php
/**
 * For store widget hook action/filter.
 * 
 * @package noborders
 */


if (!function_exists('NoBordersWidgetHooksGetCalendar')) {
	/**
	 * change WordPress calendar widget table to add noborders class into it.
	 * 
	 * @todo change code in this function when WordPress allowed to hook into that widget.
	 * @param string $calendar
	 * @return string
	 */
	function NoBordersWidgetHooksGetCalendar($calendar) 
	{
		$new_calendar = preg_replace('#(<table*\s)(id="wp-calendar")#i', '$1 id="wp-calendar" class="table"', $calendar);

		return $new_calendar;
	}// NoBordersWidgetHooksGetCalendar
}
add_filter('get_calendar', 'NoBordersWidgetHooksGetCalendar', 10, 1);

