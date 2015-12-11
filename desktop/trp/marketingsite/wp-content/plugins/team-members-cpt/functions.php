<?php 

/*
Plugin Name: Team members Custom Post Type
Description: Team members Custom Post Type
Version: 1.0
Author: Scalablepath
Author URI: https://www.scalablepath.com/
*/

// Define CPT
function create_post_types() {
	register_post_type( 'team_member',
		array(
			'labels' => array(
				'name' => __( 'Team members' ),
				'singular_name' => __( 'Team Member' ),
				'add_new_item' => __( 'Add Team Member' ),
				'edit_item' => __( 'Edit Team Member' ),
				'new_item' => __( 'New Team Member' ),
				'view_item' => __( 'View Team Member' ),
				'items_archive' => __( 'Team Archive' ),
				'search_items' => __( 'Search Team' ),
				'not_found' => __( 'No Team found' ),
				'not_found_in_trash' => __( 'No Team found in trash' )
			),
			'description' => 'Team member',
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'public' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-businessman'
		)
	);
}
add_action( 'init', 'create_post_types' );

// Add metabox for CPT
function create_meta_boxes() {
	add_meta_box(
		'team_member-details',
		'Team Member Details',
		'team_member_meta_box',
		'team_member'
	);
}
add_action( 'admin_menu', 'create_meta_boxes');

// Print metabox fields
function team_member_meta_box($post, $box) {
	$trp_team_member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true );
	$trp_team_member_title = get_post_meta( $post->ID, 'trp-team-member-title', true );
	?>

	<table id="rvnt-user-info" class="form-table">
		<tbody>
			<tr>
				<td colspan="2">
					<strong>
						Fill in the member's title and biography.
					</strong>
				</td>
			</tr>
			<tr>
				<th><label for="trp-team-member-title">Title:</label></th>
				<td>
					<textarea name="trp-team-member-title" id="trp-team-member-title" class="widefat" cols="50" rows="5"><?php esc_attr_e( $trp_team_member_title ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th><label for="trp-team-member-bio">Biography:</label></th>
				<td>
					<input id="trp-team-member-bio" name="trp-team-member-bio" type="text"
						class="regular-text" value="<?php esc_attr_e( $trp_team_member_bio ); ?>" />
				</td>
			</tr>
		</tbody>
	</table>

	<?php 
}

// Save custom fields
function savePostFields($postID, $fields) {
	global $post;

	if (!isset($post) || !isset($post->post_status))
		return;

	if( did_action( 'save_post' ) !== 1 )
		return;

	if( isset( $_GET[ 'action' ] ) && ( $_GET[ 'action' ] == 'trash' || $_GET[ 'action' ] == 'untrash' ) )
		return;

	if (!isset($_POST) || !count($_POST))
		return;

	if(is_object($post) && ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || $post->post_status == 'auto-draft' )
		return;

	foreach ($fields as $field) {
		if (isset($_POST[$field])) {
			update_post_meta( $postID, $field, $_POST[$field] );
		}
	}
}

function saveTeamMemberData( $postID, $revision ) {
	if($revision->post_type == 'team_member') {
		$fields = array (
			'trp-team-member-bio',
			'trp-team-member-title'
		);
		savePostFields($postID, $fields);
	}
}
add_action( 'save_post', 'saveTeamMemberData', 10, 2 );