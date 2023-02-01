<?php

    function customTheme_register_style(){
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('bootstrap'), '1.0', 'all');
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    };
    add_action('wp_enqueue_style','customTheme_register_style');

    function customTheme_register_script(){
        wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(),'5.3.0',true);
    }
    add_action('wp_enqueue_script','customTheme_register_script');
    
?>