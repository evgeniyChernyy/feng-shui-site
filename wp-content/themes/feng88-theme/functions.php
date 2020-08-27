<?php

add_action('wp_enqueue_scripts','theme_styles');
add_action('wp_footer','theme_scripts');
add_action('after_setup_theme', 'get_menu');
add_action('widgets_init', 'create_sidebar');
add_action('init', 'new_post_types');
add_action('init', 'register_taxonomies');

//  стили
function theme_styles(){

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.css');
    wp_enqueue_style('owl', get_template_directory_uri().'/assets/css/owl.css');
    wp_enqueue_style('template', get_template_directory_uri().'/assets/css/templatemo-sixteen.css');
    wp_enqueue_style('fonts', get_template_directory_uri().'/assets/css/fonts.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

//  скрипты
function theme_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array());
//    wp_enqueue_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('accordion', get_template_directory_uri().'/assets/js/accordion.js');
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.js');
    wp_enqueue_script('owl', get_template_directory_uri().'/assets/js/owl.js');
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick.js');
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js');

}

//  нав-е меню
function get_menu(){
    register_nav_menu('top', 'Главное меню');
    add_theme_support('post-tumbnails', array('post', 'course'));
    add_theme_support( 'title-tag' );
}

//  сайдбар
function create_sidebar(){
    register_sidebar( array(
        'name'          => 'Сайдбар-обучение',
        'id'            => "sidebar-learn",
        'description'   => 'Сайдбар на странице "Обучение"',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ) );
    register_sidebar( array(
        'name'          => 'Сайдбар-консультации',
        'id'            => "sidebar-consult",
        'description'   => 'Сайдбар на странице "Консультации"',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ) );
    register_sidebar( array(
        'name'          => 'Сайдбар-статьи',
        'id'            => "sidebar-stati",
        'description'   => 'Сайдбар на странице "Статьи"',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ) );
}

//  типы записей
function new_post_types(){

    register_post_type('course', array(
        'labels'             => array(
            'name'               => 'Курсы', // Основное название типа записи
            'singular_name'      => 'Курс', // отдельное название записи типа Book
            'add_new'            => 'Добавить курс',
            'add_new_item'       => 'Добавить новый курс',
            'edit_item'          => 'Редактировать курс',
            'new_item'           => 'Новый курс',
            'view_item'          => 'Посмотреть курс',
            'search_items'       => 'Найти курс',
            'not_found'          =>  'Курсов не найдено',
            'not_found_in_trash' => 'В корзине курсов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Все курсы'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_admin_bar'       => true,
        'show_in_nav_menus'       => true,
        'menu_icon'          => 'dashicons-welcome-view-site',
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments', 'custom-fields'),
        'taxonomies'         => array('category')
    ) );
}

