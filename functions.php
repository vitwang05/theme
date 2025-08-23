<?php

function simple_bootstrap_theme_load_script() {

    //css file
    wp_enqueue_style("bootstrap",get_template_directory_uri()."/asset/css/styles.css", array(), "1.0", "all");
    wp_enqueue_style("style",get_template_directory_uri(), array(), "1.0", "all");
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/script.js", array("jquery"), "1.0", true);
}

add_action("wp_enqueue_scripts","simple_bootstrap_theme_load_script");