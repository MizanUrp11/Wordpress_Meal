<?php
require_once get_theme_file_path( '/lib/csf/cs-framework.php' );
require_once get_theme_file_path( '/inc/metaboxes/section.php' );
require_once get_theme_file_path( '/inc/metaboxes/page.php' );
require_once get_theme_file_path( '/inc/metaboxes/pricing.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-banar.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-featured.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-gallery.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-chef.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-services.php' );
require_once get_theme_file_path( '/inc/metaboxes/taxonomy-featured.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-recipe.php' );

define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true
define( 'CS_ACTIVE_LIGHT_THEME', true ); // default false

function meal_theme_supports() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

}
register_nav_menu( 'primary', __( 'Main Menu', 'meal' ) );
add_action( 'after_setup_theme', 'meal_theme_supports' );

function meal_enque_scripts() {
    wp_enqueue_style( 'meal-font', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700', null, '1.0.0' );
    wp_enqueue_style( 'meal-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-animate', get_template_directory_uri() . '/assets/css/animate.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-aos', get_template_directory_uri() . '/assets/css/aos.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-ionicons', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-portfolio', get_template_directory_uri() . '/assets/css/portfolio.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-style', get_template_directory_uri() . '/assets/css/style.css', null, '1.0.0' );
    wp_enqueue_style( 'meal-style', get_stylesheet_uri(), null, time() );

    wp_enqueue_script( 'meal-jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', null, '1.0.0', true );
    wp_enqueue_script( 'meal-jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-magnific-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-datepicker-js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-timepicker-js', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-stellar-js', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array( 'meal-jquery-js' ), time(), true );
    wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'meal-jquery-js' ), time(), true );
    wp_enqueue_script( 'meal-loadmore-js', get_template_directory_uri() . '/assets/js/laodmore.js', array( 'meal-jquery-js' ), time(), true );

    if ( is_page_template( 'page-template/landing.php' ) ) {
        wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'meal-jquery-js' ), time(), true );
        wp_enqueue_script( 'meal-contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'meal-jquery-js' ), time(), true );
        $ajaxurl = admin_url( 'admin-ajax.php' );
        wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
        wp_localize_script( 'meal-contact-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
        wp_localize_script( 'meal-portfolio-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
    }

    if ( is_page_template( 'page-template/mailchimp.php' ) ) {
        wp_enqueue_style( 'mailchimp-style-css', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css', null, '1.0.0' );
        $style = <<<EOD
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
EOD;
        wp_add_inline_style( 'mailchimp-style-css', $style );

        wp_enqueue_script( 'mailchimp-script-js', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array( 'meal-jquery-js' ), '1.0.0', true );
        $script = <<<EOD
        (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
EOD;
        wp_add_inline_script( 'mailchimp-script-js', $script );
    }
}
add_action( 'wp_enqueue_scripts', 'meal_enque_scripts' );

function meal_codestar_init() {
    CSFramework_Metabox::instance(array());
    CSFramework_Taxonomy::instance(array());

    $settings = array(
        'menu_title'      => __('Meal Options', 'meal'),
        'menu_type'       => 'submenu',
        'menu_parent'     => 'themes.php',
        'menu_slug'       => 'meal_options_panel',
        'framework_title' => __('Activate', 'meal'),
        'menu_icon'       => 'dashicons-dashboard',
        'menu_position'   => 20,
        'ajax_save'       => false,
        'show_reset_all'  => true,
    );
    new CSFramework($settings, meal_get_theme_options());
}
add_action( 'init', 'meal_codestar_init' );

function meal_get_theme_options() {
    $options   = array();
    $options[] = array(
        'name'   => 'meal_theme_activation',
        'title'  => __('Theme Activation', 'meal'),
        'icon'   => 'fa fa-heart',
        'fields' => array(
            array(
                'id'    => 'meal_username',
                'type'  => 'text',
                'title' => __('Username', 'meal'),
            ),
            array(
                'id'    => 'meal_purchase_code',
                'type'  => 'text',
                'title' => __('Purchase Code', 'meal'),
            ),
        ),
    );
    return $options;
}

function get_recipe_category( $recipe_ID ) {
    $terms = wp_get_post_terms( $recipe_ID, 'category' );
    if ( $terms ) {
        $first_term = array_shift( $terms );
        return $first_term->name;
    }
    return "Food";
}

function meal_reservation_ajax() {
    if ( check_ajax_referer( 'reservation', 'rn' ) ) {
        $name    = sanitize_text_field( $_POST['name'] );
        $email   = sanitize_text_field( $_POST['email'] );
        $phone   = sanitize_text_field( $_POST['phone'] );
        $persons = sanitize_text_field( $_POST['persons'] );
        $date    = sanitize_text_field( $_POST['date'] );
        $time    = sanitize_text_field( $_POST['time'] );

        $data = array(
            'name'    => $name,
            'email'   => $email,
            'phone'   => $phone,
            'persons' => $persons,
            'date'    => $date,
            'time'    => $time
        );
        //print_r( $data );

        $reservation_arguments = array(
            'post_type'   => 'reservation',
            'post_author' => 1,
            'post_date'   => date( 'Y-m-d H:i:s' ),
            'post_title'  => sprintf( '%s - Reservation for %s persons on %s - %s', $name, $persons, $date . " : " . $time, $email ),
            'post_status' => 'publish',
            'meta_input'  => $data
        );

        $reservations = new WP_Query( array(
            'post_type'   => 'reservation',
            'post_status' => 'publish',
            'meta_query'  => array(
                'relation'    => 'AND',
                'email_check' => array(
                    'key'   => 'email',
                    'value' => $email
                ),
                'date_check'  => array(
                    'key'   => 'date',
                    'value' => $date
                ),
                'time_check'  => array(
                    'key'   => 'time',
                    'value' => $time
                )
            )
        ) );
        if ( $reservations->found_posts > 0 ) {
            echo 'duplicate';
        } else {
            $wp_error = '';

            $reservation_id = wp_insert_post( $reservation_arguments, $wp_error );

            //Transient Check
            $reservation_count = get_transient( 'res-count' ) ? get_transient( 'res-count' ) : 0;
            //Transient Check end

            if ( !$wp_error ) {
                $reservation_count++;
                set_transient( 'res-count', $reservation_count, 0 );
                $_name      = explode( ' ', $name );
                $order_data = array(
                    'first_name' => $_name[0],
                    'last_name'  => isset( $_name[1] ) ? $_name[1] : '',
                    'email'      => $email,
                    'phone'      => $phone
                );
                $order = wc_create_order();
                $order->set_address( $order_data );
                $order->add_product( wc_get_product( 72 ), 1 );
                $order->set_customer_note( $reservation_id );
                $order->calculate_totals();

                add_post_meta( $reservation_id, 'order_id', $order->get_id() );

                echo $order->get_checkout_payment_url();
            }
        }
    }
    //Next start from 12:00 min of 25.18 tutorial LWHH
    die();
}
add_action( 'wp_ajax_reservation', 'meal_reservation_ajax' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_reservation_ajax' );

function meal_checkout_fields( $fields ) {
    //remove billing fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );
    unset( $fields['billing']['billing_country'] );
    unset( $fields['billing']['billing_state'] );

    //remove shipping fields
    unset( $fields['shipping']['shipping_first_name'] );
    unset( $fields['shipping']['shipping_last_name'] );
    unset( $fields['shipping']['shipping_company'] );
    unset( $fields['shipping']['shipping_address_1'] );
    unset( $fields['shipping']['shipping_address_2'] );
    unset( $fields['shipping']['shipping_city'] );
    unset( $fields['shipping']['shipping_postcode'] );
    unset( $fields['shipping']['shipping_country'] );
    unset( $fields['shipping']['shipping_state'] );

    //remove order comments fields
    unset( $fields['order']['order_comments'] );
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'meal_checkout_fields' );

function meal_order_status_processing( $order_id ) {
    $order          = wc_get_order( $order_id );
    $reservation_id = $order->get_customer_note();
    if ( $reservation_id ) {
        $reservation = get_post( $reservation_id );
        wp_update_post( array(
            'ID'         => $reservation_id,
            'post_title' => '[Paid] - ' . $reservation->post_title
        ) );
        add_post_meta( $reservation_id, 'paid', 1 );
    }
}
add_filter( 'woocommerce_order_status_processing', 'meal_order_status_processing' );

function meal_change_menu( $menu ) {
    $reservation_count = get_transient( 'res-count' ) ? get_transient( 'res-count' ) : 0;
    if ( $reservation_count > 0 ) {
        $menu[5][0] = "Reservation<span class='awaiting-mod'>$reservation_count</span>";
    }
    return $menu;
}
add_filter( 'add_menu_classes', 'meal_change_menu' );

function meal_delete_transient( $screen ) {
    $_screen = get_current_screen();
    if ( 'edit.php' == $screen && 'reservation' == $_screen->post_type ) {
        delete_transient( 'res-count' );
    }
}
add_action( 'admin_enqueue_scripts', 'meal_delete_transient' );

function meal_contact_email() {
    $name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
    $email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
    $phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
    $message = isset( $_POST['message'] ) ? $_POST['message'] : '';

    $_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
    $admin_email = get_option( 'admin_email' );

    wp_mail( 'mrn1105009@gmail.com', $_message, "From: noyon.mdmizan@gmail.com\r\n" );
    die( 'successfull' );
}
add_action( 'wp_ajax_contact', 'meal_contact_email' );
add_action( 'wp_ajax_nopriv_contact', 'meal_contact_email' );

function meal_change_nav_menu( $menus ) {
    $string_to_replace = home_url( '/' ) . 'index.php/' . 'section/';
    if ( is_front_page() ) {
        foreach ( $menus as $menu ) {
            $new_url = str_replace( $string_to_replace, "#", $menu->url );
            if ( $string_to_replace != $new_url ) {
                $new_url = rtrim( $new_url, "/" );
            }
            $menu->url = $new_url;
        }
    }
    return $menus;
}
add_filter( 'wp_nav_menu_objects', 'meal_change_nav_menu' );

function meal_comment_form_fieds( $fields ) {
    // echo '<pre>';
    // print_r($fields);
    // echo '</pre>';
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    unset( $fields['cookies'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'meal_comment_form_fieds' );

function meal_pricing_table_filter( $item ) {
    if ( trim( $item ) == '1' ) {
        return '<i class="fa fa-check plan-active-color fa-2x">';
    } else if ( trim( $item ) == '0' ) {
        return '<i class="fa fa-ellipsis-h plan-inactive-color fa-2x">';
    }
    return $item;
}
add_filter( 'meal_pricing_item', 'meal_pricing_table_filter' );

function get_max_num_pages() {
    global $wp_query;
    return $wp_query->max_num_pages;
}

function meal_load_portfolio_items() {
    if ( wp_verify_nonce( $_POST['nonce'], 'loadmorep' ) ) {
        
        $meal_section_id     = $_POST['sid'];
        $meal_section_meta   = get_post_meta( $meal_section_id, 'meal_page_section_type_gallery', true );
        $meal_images_to_show = $meal_section_meta['nimage'];
        $meal_start_offset   = $_POST['offset'];
        $meal_end_offset     = $_POST['offset'] + $meal_images_to_show;

        $meal_section             = get_post( $meal_section_id );
        $meal_section_title       = $meal_section->post_title;
        $meal_section_description = $meal_section->post_content;

        $meal_counter       = 0;
        $meal_gallery_items = $meal_section_meta['portfolio'];
        $meal_gallery_items = array_slice($meal_gallery_items,$meal_start_offset);
        echo '<div class="portfolio">';
        foreach ( $meal_gallery_items as $meal_gallery_item ) {
            if ( $meal_counter >= $meal_images_to_show ) {
                break;
            }
            $meal_gallery_item_image_src_medium = wp_get_attachment_image_src( $meal_gallery_item['image'], 'medium' );
            $meal_gallery_item_image_src_large  = wp_get_attachment_image_src( $meal_gallery_item['image'], 'full' );
            $meal_gallery_item_title            = $meal_gallery_item['title'];
            $meal_item_class                    = str_replace( ',', ' ', $meal_gallery_item['categories'] );
            $meal_item_class_array              = explode( ',', $meal_gallery_item['categories'] );
            ?>
                        <div class="portfolio-item <?php echo esc_attr( $meal_item_class ); ?>">
                            <a href="<?php echo esc_attr( $meal_gallery_item_image_src_large[0] ); ?>" class="portfolio-image popup-gallery" title="Bread">
                                <img src="<?php echo esc_url( $meal_gallery_item_image_src_medium[0] ); ?>" alt="" />
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4>
                                            <?php echo esc_html( $meal_gallery_item_title ); ?>
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

        echo "</div>";
    }
    die();
}
add_action( 'wp_ajax_loadmorep', 'meal_load_portfolio_items' );
add_action( 'wp_ajax_nopriv_loadmorep', 'meal_load_portfolio_items' );