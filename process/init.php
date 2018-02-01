<?php


function wp_book_init(){
    
      
    $labels                     = array(
		'name'                  =>  __( 'Book', 'book' ),
		'singular_name'         =>  __( 'Book', 'book' ),
		'menu_name'             =>  __( 'Book', 'book' ),
		'name_admin_bar'        =>  __( 'Book', 'book' ),
		'add_new'               =>  __( 'Add New Book', 'book' ),
		'add_new_item'          =>  __( 'Add New Book', 'book' ),
		'new_item'              =>  __( 'New Book', 'book' ),
		'edit_item'             =>  __( 'Edit Book', 'book' ),
		'view_item'             =>  __( 'View Book', 'book' ),
		'all_items'             =>  __( 'All Books', 'book' ),
		'search_items'          =>  __( 'Search Book', 'book' ),
		'parent_item_colon'     =>  __( 'Parent Book:', 'book' ),
		'not_found'             =>  __( 'No Book found.', 'book' ),
		'not_found_in_trash'    =>  __( 'No Book found in Trash.', 'book' )
	);

	$args                       =   array(
		'labels'                =>  $labels,
		'description'           =>  __( 'A custom post type for Books.', 'book' ),
		'public'                =>  true,
		'publicly_queryable'    =>  true,
		'show_ui'               =>  true,
		'show_in_menu'          =>  true,
		'query_var'             =>  true,
		'rewrite'               =>  array( 'slug' => 'book' ),
		'capability_type'       =>  'post',
		'has_archive'           =>  true,
		'hierarchical'          =>  false,
		'menu_position'         =>  10,
		'supports'              =>  array( 'title', 'editor', 'author', 'thumbnail','comments' ),
		'taxonomies'            =>  array( 'category' )
	);

	register_post_type( 'book', $args );
    
}