<?php
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id, 'meal_page_section_type_services', true );
    $meal_section             = get_post( $meal_section_id );
    $meal_section_title       = $meal_section->post_title;
    $meal_section_description = $meal_section->post_content;
?>

<div class="section bg-light" id="<?php echo esc_attr($meal_section->post_name); ?>" data-aos="fade-up">
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
                            echo apply_filters( 'the_content', $meal_section_description ); 
                        ?>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="nav site-tab-nav" id="pills-tab" role="tablist">
                        <?php
                        $meal_counter = 0;
                        $meal_featured_categories = get_terms(array(
                            'hide_empty'=>false,
                            'meta_query'=>array(
                                array(
                                    'key'=>'meal_tax_featured',
                                    'value'=>'a:1:{s:8:"featured";b:1;}',
                                ),
                            ),
                                'taxonomy'=>'category',
                        ));
                        if($meal_featured_categories):
                            foreach($meal_featured_categories as $meal_featured_category):
                                $meal_counter++
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($meal_counter == 1) echo 'active'; ?>" id="pills-<?php echo esc_attr($meal_featured_category->name); ?>-tab" data-toggle="pill"
                                        href="#pills-<?php echo esc_attr($meal_featured_category->name); ?>" role="tab" aria-controls="pills-<?php echo esc_attr($meal_featured_category->name); ?>"
                                        aria-selected="true"><?php echo esc_html($meal_featured_category->name); ?></a>
                                    </li>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php
                        $meal_counter = 0;
                        foreach($meal_featured_categories as $meal_featured_category):
                            $meal_counter++;
                            ?>
                        <div class="tab-pane fade show <?php if($meal_counter == 1) echo 'active'; ?>" id="pills-<?php echo esc_attr($meal_featured_category->name); ?>" role="tabpanel"
                            aria-labelledby="pills-<?php echo esc_attr($meal_featured_category->name); ?>-tab">
                            <?php
                                $meal_arguments = array(
                                    'post_type'=>'recipe',
                                    'posts_per_page' => -1,
                                    'tax_query'=>array(
                                        array(
                                            'taxonomy'=>'category',
                                            'field'=>'slug',
                                            'terms'=> $meal_featured_category->name
                                        ),
                                    ),
                                );
                                $meal_featured_recipes = new WP_Query($meal_arguments);
                                while($meal_featured_recipes->have_posts()):
                                    $meal_featured_recipes->the_post();
                             ?>
                            <div class="d-block d-md-flex menu-food-item">

                                <div class="text order-1 mb-3">
                                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(  ), 'medium' ); ?>">
                                    <h3><a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a></h3>
                                    <?php the_content( ); ?>
                                </div>
                                <div class="price order-2">
                                    <strong>
                                        <?php
                                            $meal_recipe_meta = get_post_meta( get_the_ID(  ), 'meal_section_recipe', true );
                                            $meal_recipe_price = $meal_recipe_meta['price'];
                                            echo '$'.esc_html($meal_recipe_price);
                                        ?>
                                    </strong>
                                </div>
                            </div> <!-- .menu-food-item -->

                            <?php endwhile; ?>
                            <?php wp_reset_query(  ); ?>
                            
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div> <!-- .section -->