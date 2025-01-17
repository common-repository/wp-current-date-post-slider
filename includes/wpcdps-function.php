<?php
/**
 * Plugin generic functions file
 *
 * @package WP Current Date Post Slider
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Function to get plugin image sizes array
 * 
 * @package WP Current Date Post Slider
 * @since 1.2.2
 */
function wpcdps_get_unique() {
  static $unique = 0;
  $unique++;

  return $unique;
}
/**
 * Function to get post featured image
 * 
 * @package WP Current Date Post Slider
 * @since 1.2.5
 */
function wpcdps_get_post_featured_image( $post_id = '', $size = 'full') {
    $size   = !empty($size) ? $size : 'full';
    $image  = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );

    if( !empty($image) ) {
        $image = isset($image[0]) ? $image[0] : '';
    }
    return $image;
}


/**
 * Function to get Taxonomies list 
 * 
 * @package WP Current Date Post Slider Pro
 * @since 1.3.3
 */
function wpcdps_get_category_list( $post_id = 0, $taxonomy = '' ) {
    $output = '';
    $terms  = get_the_terms( $post_id, $taxonomy );

    if( $terms && !is_wp_error($terms) && !empty($taxonomy) ) {
        $output .= '<ul class="post-categories wpcdps-post-categories">';
        foreach ( $terms as $term ) {
             $output .= '<li><a href="'.get_term_link($term).'" rel="'.$taxonomy.'"> '.$term->name.' </a></li>';
        }
        $output .= '</ul>';
    }
    return $output;
}


/**
 * Function to get shortcode designs
 * 
 * @package WP Current Date Post Slider
 * @since 1.2.5
 */
function wpcdps_slider_designs() {
    $design_arr = array(
        'design-1'  	=> __('Design 1', 'wp-current-date-post-slider'),
        'design-2'  	=> __('Design 2', 'wp-current-date-post-slider'),
        'design-3'  	=> __('Design 3', 'wp-current-date-post-slider'),
        'design-4' 		=> __('Design 4', 'wp-current-date-post-slider'),              
	);
	return apply_filters('wpcdps_slider_designs', $design_arr );
}


/**
 * Function to add array after specific key
 * 
 * @package wp-current-date-post-slider
 * @since 1.2.5
 */
function wpcdps_add_array(&$array, $value, $index, $from_last = false) {
    
    if( is_array($array) && is_array($value) ) {

        if( $from_last ) {
            $total_count    = count($array);
            $index          = (!empty($total_count) && ($total_count > $index)) ? ($total_count-$index): $index;
        }
        
        $split_arr  = array_splice($array, max(0, $index));
        $array      = array_merge( $array, $value, $split_arr);
    }
    
    return $array;
}


// Manage Category Shortcode Columns

add_filter("manage_category_custom_column", 'wpcdps_category_columns' , 10, 3);
add_filter("manage_edit-category_columns", 'wpcdps_category_manage_columns'); 
function wpcdps_category_manage_columns($columns) {
   $new_columns['wpos_shortcode'] = __( 'Category ID', 'wp-current-date-post-slider' );
		$columns = wpcdps_add_array( $columns, $new_columns, 2 );
		return $columns;
}

function wpcdps_category_columns($ouput, $column_name, $tax_id) {
	if( $column_name == 'wpos_shortcode' ) {
			$ouput .= $tax_id;
			
	    }		
	    return $ouput;

}

// Manage conetnt limit

function wpcdps_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
