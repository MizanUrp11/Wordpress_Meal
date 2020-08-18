<?php
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id, 'meal_page_section_type_services', true );
    $meal_section             = get_post( $meal_section_id );
    $meal_section_title       = $meal_section->post_title;
    $meal_section_description = $meal_section->post_content;
?>


<div class="section bg-white services-section" data-aos="fade-up" id="<?php echo esc_attr($meal_section->post_name); ?>">
        <div class="container">
            <div class="row section-heading justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading mb-3">
                        <?php
                        echo esc_html($meal_section_title);
                        ?>
                    </h2>
                    <p class="sub-heading mb-5">
                        <?php
                        echo apply_filters('the_content',$meal_section_description);
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <?php
                $meal_section_services = $meal_section_meta['services'];
                foreach($meal_section_services as $meal_section_service){
                    ?>
                    <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
                        <div class="media feature-icon d-block text-center">
                            <div class="icon">
                                <span class="<?php echo esc_html($meal_section_service['icon']);?>"></span>
                            </div>
                            <div class="media-body">
                                <h3>
                                    <?php 
                                        echo esc_html($meal_section_service['title']); 
                                    ?>
                                </h3>
                                <p>
                                    <?php
                                        echo esc_html($meal_section_service['description']);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                

            </div>
        </div>
    </div> <!-- .section -->