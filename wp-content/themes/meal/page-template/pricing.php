<?php

$meal_pricing_meta      = get_post_meta( get_the_ID(), 'meal_pricing_meta', true );
$meal_pricing_items     = explode( "\n", $meal_pricing_meta['items'] );
$meal_pricing_one_items = explode( "\n", $meal_pricing_meta['plan-one-items'] );
$meal_pricing_two_items = explode( "\n", $meal_pricing_meta['plan-two-items'] );

/**
 * Template Name: Pricing Page
 */
get_header();
$meal_section_id = 30;
get_template_part( 'section-templates/banar' );
the_post();
?>


<div class="section-home" id="main-wrap">
    <div <?php post_class( 'single-post' );?>>
        <div class="container">
            <div class="row post-body">
                <div class="col-md-12">
                    <h1 class="heading mb-3">
                        <?php the_title();?>
                    </h1>
                    <?php
the_content();
?>
                </div>
                <div class="col-md-12">
                    <section class="section-gap">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-10">
                                    <div class="table-responsive">
                                        <table class="table table-bordered pricing-plan">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo esc_html( $meal_pricing_meta['plan-one-title'] ); ?>
                                                    </td>
                                                    <td><?php echo esc_html( $meal_pricing_meta['plan-two-title'] ); ?>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$meal_counter = 0;
foreach ( $meal_pricing_items as $meal_pricing_item ): 
$meal_plan_one_data = apply_filters('meal_pricing_item',$meal_pricing_one_items[$meal_counter]);
$meal_plan_two_data = apply_filters('meal_pricing_item',$meal_pricing_two_items[$meal_counter]);
?>
                                                <tr>
                                                    <td><strong><?php echo esc_html( $meal_pricing_item ); ?></strong>
                                                    </td>
                                                    <td><?php echo wp_kses_post( $meal_plan_one_data ); ?>
                                                    </td>
                                                    <td><?php echo wp_kses_post( $meal_plan_two_data ); ?>
                                                    </td>
                                                </tr>
                                                <?php
$meal_counter++;
endforeach;
?>

                                                <tr>
                                                    <td><strong>More Item</strong></td>
                                                    <td>
                                                        <i class="fa fa-check plan-active-color fa-2x"></i>
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-check plan-active-color fa-2x"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><strong>More Item</strong></td>
                                                    <td>
                                                        <i class="fa fa-check plan-active-color fa-2x"></i>
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-check plan-active-color fa-2x"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><strong>More Item</strong></td>
                                                    <td>
                                                        <i class="fa fa-ellipsis-h plan-inactive-color fa-2x"></i>
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-check plan-active-color fa-2x"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><strong><?php _e( 'Action', 'meal' );?></strong></td>
                                                    <td>
                                                        <a href="<?php echo esc_attr( $meal_pricing_meta['plan-one-action'] ); ?>" class="btn btn-danger"><?php _e('Get This Plan','meal'); ?></a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo esc_attr( $meal_pricing_meta['plan-two-action'] ); ?>" class="btn btn-danger"><?php _e('Get This Plan','meal'); ?></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

?>