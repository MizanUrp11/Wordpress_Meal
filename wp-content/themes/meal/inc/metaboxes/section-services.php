<?php

function meal_services_section__metbox( $metaboxes ) {

    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal_section_type', true );
    $section_type = $section_meta['section_selector'];
    if ( 'services' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal_page_section_type_services',
        'title'     => __( 'select Images', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_page_section_type_services_details',
                'fields' => array(
                    array(
                        'id'              => 'services',
                        'title'           => __( 'services', 'meal' ),
                        'type'            => 'group',
                        'button_title'    => __( 'Add New services', 'meal' ),
                        'accordion_title' => __( 'Add New services', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'    => 'title', // this is must be unique
                                'type'  => 'text',
                                'title' => __( 'Add Title', 'meal' )
                            ),
                            array(
                                'id'    => 'icon', // this is must be unique
                                'type'  => 'text',
                                'title' => __( 'Add Icon Class', 'meal' )
                            ),
                            array(
                                'id'    => 'description', // this is must be unique
                                'type'  => 'textarea',
                                'title' => __( 'Description', 'meal' )
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'meal_services_section__metbox' );
