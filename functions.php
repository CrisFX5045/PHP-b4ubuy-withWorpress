<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//require_once('wp-bootstrap-navwalker.php');

    function load_assets(){

        //Permite cargar el BS CSS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
        
        //Cargar BS JS

        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

        //permite cargar el csss del tema
        wp_enqueue_style('style', get_stylesheet_uri() );

    }

    add_action('wp_enqueue_scripts', 'load_assets');

    //Soporte para imagenes destacadas en paginas

    add_theme_support('post-thumbnails');
    
    
    register_nav_menus(array(
        'primary'=> __('Primary Menu')
    ));

?>