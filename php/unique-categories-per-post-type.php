<?php 


function unique_categories() {

  $args = array(
       'public'   => true,
       '_builtin' => false,
    );


    $post_types = get_post_types( $args, 'names', 'and' );

    foreach ( $post_types  as $post_type ) {

      // create a new taxonomy
      $labels = array(
    		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
    		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
    		'search_items'      => __( 'Search Categories', 'textdomain' ),
    		'all_items'         => __( 'All Categories', 'textdomain' ),
    		'parent_item'       => __( 'Parent Category', 'textdomain' ),
    		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
    		'edit_item'         => __( 'Edit Categories', 'textdomain' ),
    		'update_item'       => __( 'Update Category', 'textdomain' ),
    		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
    		'new_item_name'     => __( 'New Category', 'textdomain' ),
    		'menu_name'         => __( 'Categories', 'textdomain' ),
    	);
      $post_type_base_name = preg_replace( '/_post_type/','',$post_type );
      register_taxonomy(
        $post_type_base_name.'_category',
        $post_type,
        array(
          'labels'             => $labels,
          'publicly_queryable' => true,
          'rewrite'            => array( 'slug' => $post_type_base_name .'-category' ),
          'hierarchical'      =>  true,
        )
      );
    }

}
add_action( 'init', 'unique_categories' );

?>
