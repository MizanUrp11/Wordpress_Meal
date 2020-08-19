<?php

function meal_section_pricing_metabox( $metaboxes ) {

    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( !in_array( $current_page_template, array( 'page-template/pricing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal_pricing_meta',
        'title'     => __( 'Pricing', 'meal' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'meal_pricing_sections',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'=>'plan-one-title',
                        'type'=>'text',
                        'title'=>__( 'Plan One Title', 'meal' )
                    ),
                    array(
                        'id'=>'plan-two-title',
                        'type'=>'text',
                        'title'=>__( 'Plan Two Title', 'meal' )
                    ),
                    array(
                        'id'=>'plan-one-action',
                        'type'=>'text',
                        'title'=>__( 'Plan One url', 'meal' )
                    ),
                    array(
                        'id'=>'plan-two-action',
                        'type'=>'text',
                        'title'=>__( 'Plan Two url', 'meal' )
                    ),
                    array(
                        'id'=>'items',
                        'type'=>'textarea',
                        'title'=>__( 'Items', 'meal' )
                    ),
                    array(
                        'id'=>'plan-one-items',
                        'type'=>'textarea',
                        'title'=>__( 'Plan One Items', 'meal' )
                    ),
                    array(
                        'id'=>'plan-two-items',
                        'type'=>'textarea',
                        'title'=>__( 'Plan Two Items', 'meal' )
                    ),
                )
            )
        )
    );
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'meal_section_pricing_metabox' );
