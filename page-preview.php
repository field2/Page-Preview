<?php
/**
 * Plugin Name: EmpireOfLight's Page Preview
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */
 
function page_preview($atts,$pageid = null) {
extract(shortcode_atts(array(
		"pageid" => '1'
	), $atts));
	
	
return '<div class="page-preview">' . get_the_post_thumbnail( $pageid, 'preview' ).'</div>' . get_the_content( $pageid ) . '</div>';
}
add_shortcode( 'pagepreview', 'page_preview' );


add_shortcode( 'pagepreview', 'page_preview' );

?>