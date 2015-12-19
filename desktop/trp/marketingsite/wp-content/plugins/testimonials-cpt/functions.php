<?php 

/*
Plugin Name: Testimonials Custom Post Type
Description: Testimonials Custom Post Type
Version: 1.0
Author: Scalablepath
Author URI: https://www.scalablepath.com/
*/

// Define CPT
function testimonial_custom_post_types() {
	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				'add_new_item' => __( 'Add Testimonial' ),
				'edit_item' => __( 'Edit Testimonial' ),
				'new_item' => __( 'New Testimonial' ),
				'view_item' => __( 'View Testimonial' ),
				'items_archive' => __( 'Testimonial Archive' ),
				'search_items' => __( 'Search Testimonial' ),
				'not_found' => __( 'No Testimonial found' ),
				'not_found_in_trash' => __( 'No Testimonial found in trash' )
			),
			'description' => 'Testimonial',
			'supports' => array('title', 'page-attributes'),
			'public' => true,
			'publicly_queryable'  => false,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-status'
		)
	);
}
add_action( 'init', 'testimonial_custom_post_types' );

// Add metabox for CPT
function create_testimonial_meta_boxes() {
	add_meta_box(
		'testimonial-details',
		'Testimonial Details',
		'testimonial_meta_box',
		'testimonial'
	);
}
add_action( 'admin_menu', 'create_testimonial_meta_boxes');

// Print metabox fields
function testimonial_meta_box($post, $box) {
	$trp_testimonial = get_post_meta( $post->ID, 'trp-testimonial', true );
	$trp_testimonial_name = get_post_meta( $post->ID, 'trp-testimonial-name', true );
	$trp_testimonial_hospital = get_post_meta( $post->ID, 'trp-testimonial-hospital', true );
	?>

	<table id="rvnt-user-info" class="form-table">
		<tbody>
			<tr>
				<td colspan="2">
					<strong>
						Fill in the testimonials information.
					</strong>
				</td>
			</tr>
			<tr>
				<th><label for="trp-testimonial">Testimonial:</label></th>
				<td>
					<input id="trp-testimonial" name="trp-testimonial" type="text"
						class="regular-text" value="<?php esc_attr_e( $trp_testimonial ); ?>" />
				</td>
			</tr>
			<tr>
				<th><label for="trp-testimonial-name">Name:</label></th>
				<td>
					<input id="trp-testimonial-name" name="trp-testimonial-name" type="text"
						class="regular-text" value="<?php esc_attr_e( $trp_testimonial_name ); ?>" />
				</td>
			</tr>
			<tr>
				<th><label for="trp-testimonial-hospital">Hospital:</label></th>
				<td>
					<input id="trp-testimonial-hospital" name="trp-testimonial-hospital" type="text"
						class="regular-text" value="<?php esc_attr_e( $trp_testimonial_hospital ); ?>" />
				</td>
			</tr>
		</tbody>
	</table>

	<?php 
}

function saveTestimonialData( $postID, $revision ) {
	if($revision->post_type == 'testimonial') {
		$fields = array (
			'trp-testimonial',
			'trp-testimonial-name',
			'trp-testimonial-hospital'
		);
		savePostFields($postID, $fields);
	}
}
add_action( 'save_post', 'saveTestimonialData', 10, 2 );