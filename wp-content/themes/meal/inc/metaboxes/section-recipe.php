<?php

function meal_recipe_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'meal_section_recipe',
        'title'     => __( 'select Recipe', 'meal' ),
        'post_type' => 'recipe',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_section_type_section_one',
                'fields' => array(
                    array(
                        'id'      => 'price',
                        'type'    => 'text',
                        'title'   => __( 'Input Price', 'meal' ),
                        'default' => '0.00'
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'meal_recipe_metabox' );
