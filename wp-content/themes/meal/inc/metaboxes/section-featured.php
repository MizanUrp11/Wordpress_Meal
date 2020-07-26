<?php

function meal_featured_section__metabox( $metaboxes ) {

    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal_section_type', true );
    $section_type = $section_meta['section_selector'];
    if ( 'featured' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal_page_section_type_featured',
        'title'     => __( 'select featured section', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_page_section_type_featured',
                'fields' => array(
                    array(
                        'id'              => 'recipes',
                        'title'           => __( 'Select Recipes', 'meal' ),
                        'type'            => 'group',
                        'button_title'    => __( 'Add New Recipes', 'meal' ),
                        'accordion_title' => __( 'Add New Recipes', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'         => 'recipe',
                                'type'       => 'select',
                                'title'      => __( 'Select Recipe', 'meal' ),
                                'options'    => 'post',
                                'query_args' => array(
                                    'post_type'      => 'recipe',
                                    'posts_per_page' => -1
                                )
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'meal_featured_section__metabox' );
