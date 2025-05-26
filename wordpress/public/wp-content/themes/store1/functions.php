<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');

// add_filter('pods_admin_field_show_filter', function( $show, $field, $pod = null ) {
//     // Назва поля, яке фільтруємо
//     if ( $field['name'] === 'background_image' && is_admin() ) {
//         $post_id = $_GET['post'] ?? $_POST['post_ID'] ?? null;

//         if ( $post_id ) {
//             $template = get_page_template_slug($post_id);

//             // Додай лог, щоб перевірити що вертає шаблон
//             error_log("Pods check: post_id=$post_id | template=$template");

//             if ( $template !== 'policy.php' ) {
//                 return false; // не показувати
//             }
//         } else {
//             error_log("Pods check: post_id not found.");
//         }
//     }

//     return $show;
// }, 10, 3);
        function add_styles() {
            wp_enqueue_style('style', get_stylesheet_uri());
        }
        function add_features() {
            add_theme_support('post-thumbnails', array('post'));
            add_theme_support( 'custom-logo', [
                'height'      => 50,
                'width'       => 100,
                'flex-width'  => false,
                'flex-height' => false,
                'header-text' => '',
                'unlink-homepage-logo' => false, // WP 5.5
] );
         }
         function add_menu() {
            register_nav_menu('top', 'Головне меню');
            register_nav_menu('bottom', 'Політика конфіденційності');
         }
         remove_filter('template_redirect', 'redirect_canonical');
?>