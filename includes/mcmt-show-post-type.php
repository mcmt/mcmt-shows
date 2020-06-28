<?php
/**
 *
 */

add_action( 'init', 'mcmt_show_post_type' );

function mcmt_show_post_type() {
	$labels = array(
		'name'               => __( 'Shows', 'mcmt' ),
		'singular_name'      => __( 'Show', 'mcmt' ),
		'add_new'            => __( 'New Show', 'mcmt' ),
		'add_new_item'       => __( 'Add New Show', 'mcmt' ),
		'edit_item'          => __( 'Edit Show', 'mcmt' ),
		'new_item'           => __( 'New Show', 'mcmt' ),
		'view_item'          => __( 'View Shows', 'mcmt' ),
		'search_items'       => __( 'Search Shows', 'mcmt' ),
		'not_found'          => __( 'No Shows Found', 'mcmt' ),
		'not_found_in_trash' => __( 'No Shows found in Trash', 'mcmt' )
	);

	$args = array(
		'labels'       => $labels,
		'has_archive'  => true,
		'public'       => true,
		'hierarchical' => false,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'taxonomies'   => 'category',
		'rewrite'      => array( 'slug' => 'show' ),
		'show_in_rest' => true
	);
	register_post_type( 'mcmt_show', $args );
}

add_action( 'cmb2_admin_init', 'mcmt_register_roles' );

function mcmt_register_roles() {
	$roles = new_cmb2_box( array(
		'id'           => 'mcmt_roles',
		'title'        => esc_html__( 'Roles', 'mcmt' ),
		'object_types' => array( 'mcmt_show' ),
	) );

	$role_id = $roles->add_field( array(
		'id'          => 'mcmt_role',
		'type'        => 'group',
		'description' => esc_html__( 'Role', 'mcmt' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Role {#}', 'mcmt' ),
			'add_button'     => esc_html__( 'Add role', 'mcmt' ),
			'remove_button'  => esc_html__( 'Remove role', 'mcmt' ),
			'sortable'       => true,
			'remove_confirm' => esc_html__( 'Are you sure you want to remove this role?', 'mcmt' )
		)
	) );

	$roles->add_group_field( $role_id, array(
		'name' => esc_html__( 'Character', 'mcmt' ),
		'id'   => 'character',
		'type' => 'text'
	) );

	$roles->add_group_field( $role_id, array(
		'name' => esc_html__( 'Vocal range', 'mcmt' ),
		'id'   => 'vocal_range',
		'type' => 'text'
	) );
}