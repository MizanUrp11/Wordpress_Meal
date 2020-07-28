<?php

function meal_chef_section__metbox( $metaboxes ) {

    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal_section_type', true );
    $section_type = $section_meta['section_selector'];
    if ( 'chef' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal_page_section_type_chef',
        'title'     => __( 'select Images', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_page_section_type_chef_details',
                'fields' => array(
                    array(
                        'id'              => 'chef',
                        'title'           => __( 'Chef', 'meal' ),
                        'type'            => 'group',
                        'button_title'    => __( 'Add New Chef', 'meal' ),
                        'accordion_title' => __( 'Add New Chef', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'    => 'image', // this is must be unique
                                'type'  => 'image',
                                'title' => __( 'Add Image', 'meal' )
                            ),
                            array(
                                'id'    => 'title', // this is must be unique
                                'type'  => 'text',
                                'title' => __( 'Add Title', 'meal' )
                            ),
                            array(
                                'id'    => 'designation', // this is must be unique
                                'type'  => 'text',
                                'title' => __( 'Add Designation', 'meal' )
                            ),
                            array(
                                'id'    => 'description', // this is must be unique
                                'type'  => 'textarea',
                                'title' => __( 'Description', 'meal' )
                            ),
                            array(
                                'id'     => 'fieldset_1',
                                'type'   => 'fieldset',
                                'title'  => 'Fieldset Field',
                                'fields' => array(
                                    array(
                                        'id'    => 'facebook', // this is must be unique
                                        'type'  => 'text',
                                        'title' => __( 'Facebook', 'meal' )
                                    ),
                                    array(
                                        'id'    => 'twitter', // this is must be unique
                                        'type'  => 'text',
                                        'title' => __( 'Twitter', 'meal' )
                                    ),
                                    array(
                                        'id'    => 'pinterest', // this is must be unique
                                        'type'  => 'text',
                                        'title' => __( 'Pinterest', 'meal' )
                                    ),
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
add_filter( 'cs_metabox_options', 'meal_chef_section__metbox' );
