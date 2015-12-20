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

	$out = '<div class="facilitiescontainer">
				<div class="facilitiestitlewrapper">
					<h5 class="facilitiestitle">Facilities</h5>
				</div>
				<div class="facilitiesbox">';

	if ($posts->have_posts()) {

	    while ($posts->have_posts()) {
	        $posts->the_post();
			$thumbnail =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' ); //wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        $out .= '<div class="singlefacilitythumbbox">
				<a href="'.get_permalink().'" title="' . get_the_title() . '">
				'.get_the_post_thumbnail( $post_id, 'post-thumbnail', array( 'class' => 'list-thumb-img' ) ).'
				<h5 class="thumb-list-title">'.get_the_title() .'</h5></a>
				</div>';
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


// usage [RCFacilitiesThumbnailsHome]
