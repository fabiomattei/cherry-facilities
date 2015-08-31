<?php

/**
 * This function handle the short code
 */
function RCFA_facilities_list( $atts, $content ) {
	global $post;
	
	$atts = array( // a few default values
			'posts_per_page' => '6',
			'post_type' => RCFA_SLUG
			);
			
	$posts = new WP_Query( $atts );
	$out = '';
	
    ob_start();
	
	if ($posts->have_posts()) {
		
	    while ($posts->have_posts()) {
	        $posts->the_post();
			
	        $out .= '<div class="facilities_box">'.get_the_post_thumbnail().'</div>';
			
	/* these arguments will be available from inside $content
	    get_permalink()  
	    get_the_content()
	    get_the_category_list(', ')
	    get_the_title()
	    and custom fields
	    get_post_meta($post->ID, 'field_name', true);
	*/
	
		} // end while loop
		
	} else {
		return; // no posts found
	}

	echo $out;
	
    return ob_get_clean();
}
add_shortcode( 'RCFacilitiesListHome', 'RCFA_facilities_list' );


// usage [RCFacilitiesListHome]
