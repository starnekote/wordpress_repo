<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');
    add_action( 'init', 'register_post_types' );
    add_action('pre_get_posts', 'show_products_in_category_archive');
    
        function add_styles() {
            if(is_page_template('templates/portfolio.php')) {
                wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
                wp_enqueue_script('baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js'); 
            }
             if(is_page_template('templates/contacts.php')) {
                wp_enqueue_script('list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true); 
            }
            if(is_category('catalog')) {
                wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', null, null, true); 
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

function register_post_types(){

 register_post_type( 'product', [
  'label'  => 'Товари',
  'labels' => [
   'name'               => 'Всі товари', // основное название для типа записи
   'singular_name'      => 'Товар', // название для одной записи этого типа
   'add_new'            => 'Додати товар', // для добавления новой записи
   'add_new_item'       => 'Додавання товарів', // заголовка у вновь создаваемой записи в админ-панели.
   'edit_item'          => 'Редагувати товар', // для редактирования типа записи
   'new_item'           => 'Новий товар', // текст новой записи
   'view_item'          => 'Дивитись товар', // для просмотра записи этого типа.
   'search_items'       => 'Шукати товар', // для поиска по этим типам записи
   'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
   'not_found_in_trash' => 'Не найдено в корзині', // если не было найдено в корзине
   'parent_item_colon'  => '', // для родителей (у древовидных типов)
   'menu_name'          => 'Товари', // название меню
  ],
  'description'            => '',
  'public'                 => true,
  'show_in_menu'           => true, // показывать ли в меню админки
  'show_in_rest'        => true, // добавить в REST API. C WP 4.7
  'rest_base'           => 'products', // $post_type. C WP 4.7
  'menu_position'       => 5,
  'menu_icon'           => 'dashicons-cart',
  'capability_type'   => 'post',
  'hierarchical'        => true,
  'supports'            => [ 'title', 'editor', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  'taxonomies'          => ['category'],
  'has_archive'         => true,
  'rewrite' => [ 'slug' => 'products', 'with_front' => false],
  'query_var'           => true,
 ] );

}

function show_products_in_category_archive($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_category()) {
        $query->set('post_type', ['product']);
    }
}

?>

