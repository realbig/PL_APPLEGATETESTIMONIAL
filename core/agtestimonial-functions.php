<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    ApplegateTestimonial
 * @subpackage ApplegateTestimonial/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return APPLEGATE_Testimonial
 */
function APPLEGATE_Testimonial() {
	return APPLEGATE_Testimonial::getInstance();
}