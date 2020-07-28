<?php
function meal_taxonomy_featured( $metaboxes ) {
    $metaboxes[] = array(
        'id'       => 'meal_tax_featured',
        'taxonomy' => 'category',
        'fields'   => array(
            array(
                'id'    => 'featured',
                'type'  => 'switcher',
                'title' => __( 'Featured', 'meal' )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_taxonomy_options', 'meal_taxonomy_featured' );