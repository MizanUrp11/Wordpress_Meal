<?php
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id, 'meal_page_section_type_chef', true );

    $meal_section             = get_post( $meal_section_id );
    $meal_section_title       = $meal_section->post_title;
    $meal_section_description = $meal_section->post_content;
?>

<div class="section bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="heading mb-5"><?php echo esc_html($meal_section_title); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php
                $meal_section_chefs = $meal_section_meta['chef'];
                foreach($meal_section_chefs as $meal_section_chef){
                    $meal_section_chef_image_uri = wp_get_attachment_image_src( $meal_section_chef['image'], 'medium' );
                    $meal_section_chef_title = $meal_section_chef['title'];
                    $meal_section_chef_designation = $meal_section_chef['designation'];
                    $meal_section_chef_description = $meal_section_chef['description'];
                    $meal_section_chef_facebook = $meal_section_chef['fieldset_1']['facebook'];
                    $meal_section_chef_twitter = $meal_section_chef['fieldset_1']['twitter'];
                    $meal_section_chef_pinterest = $meal_section_chef['fieldset_1']['pinterest'];
                    ?>
                <div class="col-md-6 pr-md-5 text-center mb-5">
                    <div class="ftco-38">
                        <div class="ftco-38-img">
                            <div class="ftco-38-header">
                                <img src="<?php echo esc_attr($meal_section_chef_image_uri[0]); ?>"
                                     alt="Free Website Template for Restaurants by Free-Template.co">
                                <h3 class="ftco-38-heading">
                                    <?php
                                    echo esc_html($meal_section_chef_title);
                                    ?>
                                </h3>
                                <p class="ftco-38-subheading">
                                <?php
                                    echo esc_html($meal_section_chef_designation);
                                    ?>
                                </p>
                            </div>
                            <div class="ftco-38-body">
                                <?php
                                echo apply_filters('the_content',$meal_section_chef_description);
                                ?>
                                <p>
                                    <a href="<?php echo esc_url($meal_section_chef_facebook); ?>" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a href="<?php echo esc_url($meal_section_chef_twitter); ?>" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a href="<?php echo esc_url($meal_section_chef_pinterest); ?>" class="p-2"><span class="fa fa-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
                    

            </div>
        </div>
    </div> <!-- .section -->