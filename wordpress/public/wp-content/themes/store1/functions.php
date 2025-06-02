<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');
    add_action( 'init', 'register_post_types' );
    
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

function register_post_types(){

 register_post_type( 'post_type_name', [
  'label'  => null,
  'labels' => [
   'name'               => 'Товари', // основное название для типа записи
   'singular_name'      => 'Товар', // название для одной записи этого типа
   'add_new'            => 'Додати товар', // для добавления новой записи
   'add_new_item'       => 'Додавання товарыв', // заголовка у вновь создаваемой записи в админ-панели.
   'edit_item'          => 'Редагувати товар', // для редактирования типа записи
   'new_item'           => 'Новое ____', // текст новой записи
   'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
   'search_items'       => 'Искать ____', // для поиска по этим типам записи
   'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
   'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
   'parent_item_colon'  => '', // для родителей (у древовидных типов)
   'menu_name'          => 'Товари', // название меню
  ],
  'description'            => '',
  'public'                 => true,
  // 'publicly_queryable'  => null, // зависит от public
  // 'exclude_from_search' => null, // зависит от public
  // 'show_ui'             => null, // зависит от public
  // 'show_in_nav_menus'   => null, // зависит от public
  'show_in_menu'           => null, // показывать ли в меню админки
  // 'show_in_admin_bar'   => null, // зависит от show_in_menu
  'show_in_rest'        => true, // добавить в REST API. C WP 4.7
  'rest_base'           => null, // $post_type. C WP 4.7
  'menu_position'       => 5,
  'menu_icon'           => 'dashicons-portfolio',
  'capability_type'   => 'page',
  //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
  //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
  'hierarchical'        => true,
  'supports'            => [ 'title', 'editor', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  'taxonomies'          => ['category'],
  'has_archive'         => true,
  'rewrite'             => true,
  'query_var'           => true,
 ] );

}



?>

