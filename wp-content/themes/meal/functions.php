<?php
require_once get_theme_file_path( '/lib/csf/cs-framework.php' );
require_once get_theme_file_path( '/inc/metaboxes/section.php' );
require_once get_theme_file_path( '/inc/metaboxes/page.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-banar.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-featured.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-gallery.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-chef.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-services.php' );
require_once get_theme_file_path( '/inc/metaboxes/taxonomy-featured.php' );
require_once get_theme_file_path( '/inc/metaboxes/section-recipe.php' );

define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true
define( 'CS_ACTIVE_LIGHT_THEME', true ); // default false

function meal_theme_supports() {
    add_theme_support( 'post-thumbnails' );
}
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
    wp_enqueue_script( 'meal-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array( 'meal-jquery-js' ), '1.0.0', true );
    wp_enqueue_script( 'meal-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'meal-jquery-js' ), '1.0.0', true );

    if ( is_page_template( 'page-template/landing.php' ) ) {
        wp_enqueue_script( 'meal-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array( 'meal-jquery-js' ), time(), true );
        $ajaxurl = admin_url( 'admin-ajax.php' );
        wp_localize_script( 'meal-reservation-js', 'mealurl', array( 'ajaxurl' => $ajaxurl ) );
    }
}
add_action( 'wp_enqueue_scripts', 'meal_enque_scripts' );

function meal_codestar_init() {
    CSFramework_Metabox::instance( array() );
    CSFramework_Taxonomy::instance( array() );
}
add_action( 'init', 'meal_codestar_init' );

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
        if($reservations->found_posts > 0){
            echo 'duplicate';
        }else{
            $wp_error = '';
            wp_insert_post( $reservation_arguments, $wp_error );
            if ( !$wp_error ) {
                echo 'successful';
            }  
        }
    } 
    die();
}
add_action( 'wp_ajax_reservation', 'meal_reservation_ajax' );
add_action( 'wp_ajax_nopriv_reservation', 'meal_reservation_ajax' );