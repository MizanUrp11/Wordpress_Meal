<?php
function meal_section_banar_metabox( $metaboxes ) {
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal_section_type', true );
    $section_type = $section_meta['section_selector'];
    if ( $section_type != 'banar' ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal_section_banar',
        'title'     => __( 'Banar section', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_banar_section_one',
                'fields' => array(
                    array(
                        'id'    => 'banar_image',
                        'type'  => 'image',
                        'title' => __( 'Select Banar Image', 'meal' )
                    ),
                    array(
                        'id'    => 'banar_button_text', // this is must be unique
                        'type'  => 'text',
                        'title' => __( 'Button Text', 'meal' )
                    ),
                    array(
                        'id'    => 'banar_button_target', // this is must be unique
                        'type'  => 'text',
                        'title' => __( 'Button Target', 'meal' )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'meal_section_banar_metabox' );