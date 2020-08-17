<?php
    /**
     * Template Name: Landing Page
     */

    get_header();
?>

<div class="main-wrap " id="section-home">

<?php
    $meal_current_page_id = get_the_ID(  );
    $meal_page_meta = get_post_meta( $meal_current_page_id, 'meal_page_section_type', true );
    foreach($meal_page_meta['sections'] as $meal_page_section):
        $meal_section_id = $meal_page_section['section'];
        $meal_section_meta = get_post_meta( $meal_section_id, 'meal_section_type', true );
        $meal_section_type = $meal_section_meta['section_selector'];
        get_template_part( 'section-templates/'.$meal_section_type );
    endforeach;
?>

    
    <div class="map-wrap" id="map" data-aos="fade"></div>


    <?php get_footer();?>