<?php
    function blog_carrega_bootstrap() 
    {
        wp_register_style('bootstrap4', get_template_directory_uri() . '/css/bootstrap.min.css', array(),false,'all');
        wp_enqueue_style( 'bootstrap4'); //encubar
    }
     add_action( 'wp_enqueue_scripts', 'blog_carrega_bootstrap' );

     function blog_carrega_csscustom() 
    {
        wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(),false,'all');
        wp_enqueue_style( 'custom'); //encubar
    }
     add_action( 'wp_enqueue_scripts', 'blog_carrega_csscustom' );


     function blog_carrega_js_bootstrap()
    {
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery',false,true);
        wp_enqueue_script('boostrap');
    }
    add_action('wp_enqueue_scripts','blog_carrega_js_bootstrap');


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

    function blog_top_searchMenu()
    {
        $form = '<form role="search" method="get" id="searchform" class="searchform form-inline" action="' . home_url( '/' ) . '" >
              
            <input class="form-control mr-sm-2"  type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Digite.." required/>
            <button class="btn btn-success"  type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />Search</button>
             
            </form>';
        
            return $form;
    }
    add_filter( 'get_search_form', 'blog_top_searchMenu' );

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


