<?php
    function blog_carrega_estilos_css() {
        wp_enqueue_style( 'bootstrap4', get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all'); 
        wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css'); 
        wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css'); 
        wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css'); 
        wp_enqueue_style( 'single_post', get_template_directory_uri() . '/css/single_post.css'); 
    }
     add_action( 'wp_enqueue_scripts', 'blog_carrega_estilos_css' );

    function blog_recursos_ao_tema()
    {
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('init','blog_recursos_ao_tema');

    function blog_registrando_menu_topo() //Menu Topo
    {
        register_nav_menu( 
            'menu-navegacao-top',
            'Menu de navegação top'
        );
    }
    add_action('init','blog_registrando_menu_topo');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    function blog_registrando_menu_footer()//Menu Footer
    {
        register_nav_menu( 
            'menu-navegacao-footer',
            'Menu de navegação footer'
        );
    }
    add_action('init','blog_registrando_menu_footer');


function blog_widgets() //Barra lateral WIDGET
{
    add_theme_support('post-thumbnails');
    register_sidebar( array(
        'name' => 'Coluna Direita',
        'id'=>'sidebar-right',
        'before_widget' => '<article class = "sidebar-right">',
        'after_widget' => '</article>',
        'before_title' => '<h3 class="widget-right-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Footer widget',
        'id'=>'footer-widget-right',
        'before_widget' => '<article class = "footer-widget-right">',
        'after_widget' => '</article>',
        'before_title' => '<h3 class="footer-widget-right">',
        'after_title' => '</h3>',
    ));
}
add_action('init','blog_widgets');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


