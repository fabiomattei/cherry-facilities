<?php

/**
 * This functions check the loaded post, in case a shortcode is present id loads
 * necessary css in order to show the gallery
 */
function RCFA_Cherry_Facilities_ShortCode_Detect() {
    global $wp_query;
    $Posts = $wp_query->posts;
    $Pattern = get_shortcode_regex();
    foreach ($Posts as $Post) {
		if ( strpos($Post->post_content, 'RCFacilitiesThumbnailsHome' ) ) {
			// loading css scripts
			wp_enqueue_style('rcfa-css', RCFA_PLUGIN_URL.'css/rcfacilities.css');

            break;
        } // if
    } // foreach
}
add_action( 'wp', 'RCFA_Cherry_Facilities_ShortCode_Detect' );
