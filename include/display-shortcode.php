<?php

/**
 * This function handle the short code
 */
function RCFA_facilities_list_thumb( $atts, $content ) {
	global $post;
	
	$atts = array( // a few default values
		'posts_per_page' => '6',
		'post_type' => RCFA_SLUG
		);
	
	$posts = new WP_Query( $atts );
	
	$out = '<div class="facilitiesboxcontainer">
				<h5>Facilities</h5>
					<div class="facilitiesbox">';
	
	if ($posts->have_posts()) {
	
	    while ($posts->have_posts()) {
	        $posts->the_post();
	        $out .= '<div class="singlefacilitythumbbox">'.get_the_post_thumbnail().'</div>';
		} // end while loop
	
	} else {
		return; // no posts found
	}
	$out .= '</div>'; // ending facilitiesbox
	$out .= '</div>'; // ending facilitiesboxcontainer

	ob_start();
	
	echo $out;
	
    return ob_get_clean();
}
add_shortcode( 'RCFacilitiesThumbnailsHome', 'RCFA_facilities_list_thumb' );


// usage [RCFacilitiesListHome]
