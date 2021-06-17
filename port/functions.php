<?php
        function port_file() {
            wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
            wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);
        }
            add_action('wp_enqueue_scripts', 'port_file');
            add_filter('show_admin_bar', '__return_false');
