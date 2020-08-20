<?php
global $meal_section_id;
$meal_section_meta = get_post_meta( $meal_section_id, 'meal_page_section_type_gallery', true );

$meal_section       = get_post( $meal_section_id );
$meal_section_title = $meal_section->post_title;
$meal_section_description
= $meal_section->post_content;?>

<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up" id="<?php echo esc_attr( $meal_section->post_name ); ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5">
                    <?php
echo esc_html( $meal_section_title );
?>
                </h2>
                <p>
                    <?php
echo apply_filters( 'the_content', $meal_section_description );
?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- .section -->

<?php
$meal_gallery_items   = $meal_section_meta['portfolio'];
$meal_item_categories = [];
$meal_counter         = 0;
$meal_images_to_show  = $meal_section_meta['nimage'];

foreach ( $meal_gallery_items as $meal_gallery_item ) {
    if ( $meal_counter >= $meal_images_to_show ) {
        break;
    }
    $meal_gallery_item_categories = explode( ',', $meal_gallery_item['categories'] );
    foreach ( $meal_gallery_item_categories as $meal_gallery_item_category ) {
        $meal_gallery_item_category = trim( $meal_gallery_item_category );
        if (
            !in_array( $meal_gallery_item_category, $meal_item_categories )
        ) {
            array_push(
                $meal_item_categories,
                $meal_gallery_item_category
            );
        }
    }
    $meal_counter++;
}?>

<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="portfolio-filter text-center">
                        <li class="active">
                            <a href="#" data-filter="*">
                                <?php
_e( 'All', 'meal' );
?>
                            </a>
                        </li>
                        <?php
foreach ( $meal_item_categories as $meal_item_category ) {
    ?>
                            <li>
                                <a href="#" data-filter=".<?php echo esc_attr( $meal_item_category ); ?>"><?php echo esc_html( $meal_item_category ); ?></a>
                            </li>
                        <?php
}
?>
                    </ul>
                </div>

                <div class="portfolio-grid portfolio-gallery grid-4 gutter" data-images="<?php echo esc_attr($meal_images_to_show); ?>">
                    <?php
$meal_counter        = 0;
$meal_images_to_show = $meal_section_meta['nimage'];
foreach ( $meal_gallery_items as $meal_gallery_item ) {
    if ( $meal_counter >= $meal_images_to_show ) {
        break;
    }
    $meal_gallery_item_image_src_medium = wp_get_attachment_image_src(
        $meal_gallery_item['image'],
        'medium'
    );
    $meal_gallery_item_image_src_large = wp_get_attachment_image_src(
        $meal_gallery_item['image'],
        'full'
    );
    $meal_gallery_item_title =
        $meal_gallery_item['title'];
    $meal_item_class = str_replace(
        ',',
        ' ',
        $meal_gallery_item['categories']
    );
    $meal_item_class_array = explode(
        ',',
        $meal_gallery_item['categories']
    );?>
                        <div class="portfolio-item <?php echo esc_attr( $meal_item_class ); ?>">
                            <a href="<?php echo esc_attr( $meal_gallery_item_image_src_large[0] ); ?>" class="portfolio-image popup-gallery" title="Bread">
                                <img src="<?php echo esc_url( $meal_gallery_item_image_src_medium[0] ); ?>" alt="" />
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4>
                                            <?php
echo esc_html( $meal_gallery_item_title );
    ?>
                                        </h4>
                                        <div class="portfolio-category">
                                            <?php
foreach ( $meal_item_class_array as $meal_item_class ) {
        ?>
                                                <span><?php echo esc_html( $meal_item_class ); ?></span>
                                            <?php
}
    ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
$meal_counter++;
}
?>
                </div>
                <a name="loadmorep" id="loadmorep" class="btn btn-primary" href="#" role="button"><?php _e('Load More','meal'); ?></a>
            </div>
        </div>
    </div>
</div>
<!-- .section -->