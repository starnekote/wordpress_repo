<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');
    
        function add_styles() {
            if(is_page_template('templates/portfolio.php')) {
                wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
                wp_enqueue_script('baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js'); 
            }
             if(is_page_template('templates/contacts.php')) {
                wp_enqueue_script('list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true); 
            }
            wp_enqueue_style('style', get_stylesheet_uri());
        }
        function add_features() {
            add_theme_support('post-thumbnails', array('post'));
            add_image_size('adv_thumbnail', 100, 100, true);
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