<?php
/**
 * Plugin Name: EmpireOfLight's Page Preview
 * Plugin URI: https://github.com/field2/Page-Preview.git
 * Description: A plugin to show page previews
 * Version: 0.1
 * Author: Ben Dunkle (@empireoflight)
 * Author URI: http://bendunkle.com
 * License: GPL2
 */
 
function page_preview($atts,$pageid = null) {
extract(shortcode_atts(array(
		"pageid" => '0'
	), $atts));
return '<div class="page-preview">' . '<h3>' . get_the_title( $pageid) . '</h3>' . get_the_post_thumbnail( $pageid, 'preview' ) . get_post_field('post_content', $pageid) . '</div>';
//return 'heya';
}
add_shortcode( 'pagepreview', 'page_preview' );
?>