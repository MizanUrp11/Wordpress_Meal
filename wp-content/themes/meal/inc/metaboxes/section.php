<?php

function meal_section_type_metabox($metaboxes) {
    $metaboxes[] = array(
        'id'        => 'meal_section_type',
        'title'     => __('select section type', 'meal'),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'meal_section_type_section_one',
                'fields' => array(
                    array(
                        'id'    => 'section_selector',
                        'title'   => __('Select section type', 'meal'),
                        'type'    => 'select',
                        'options' => array(
                            'banar'        => __('Banar', 'meal'),
                            'featured'     => __('Featured', 'meal'),
                            'gallery'      => __('Gallery', 'meal'),
                            'chef'         => __('Chef', 'meal'),
                            'menu'         => __('menu', 'meal'),
                            'services'     => __('services', 'meal'),
                            'reservation'  => __('reservation', 'meal'),
                            'testimonials' => __('testimonials', 'meal'),
                            'contact'      => __('contact', 'meal'),
                        ),
                    ),
                ),
            ),
        ),
    );
    return $metaboxes;
}
add_filter('cs_metabox_options', 'meal_section_type_metabox');
