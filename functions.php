<?php

function simple_bootstrap_theme_load_script()
{

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    // Lấy đường dẫn vật lý và URL của CSS
    $css_path = get_template_directory() . "/asset/css/styles.css";
    $css_uri  = get_template_directory_uri() . "/asset/css/styles.css";

    // Enqueue CSS (dùng filemtime để cache-bust)
    if (file_exists($css_path)) {
        wp_enqueue_style(
            "bootstrap-css",
            $css_uri,
            array(),
            filemtime($css_path),
            "all"
        );
    }

    // Style chính của theme
    wp_enqueue_style(
        "theme-style",
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . "/style.css"),
        "all"
    );

    // Enqueue JS
    $js_path = get_template_directory() . "/js/scripts.js";
    $js_uri  = get_template_directory_uri() . "/js/scripts.js";

    if (file_exists($js_path)) {
        wp_enqueue_script(
            "theme-script",
            $js_uri,
            array("jquery"),
            filemtime($js_path),
            true
        );
    }

    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), null, true);
}

add_action("wp_enqueue_scripts", "simple_bootstrap_theme_load_script");


function simple_bootstrap_theme_nav_config()
{

    register_nav_menus(array(
        "sbt_primary_menu_id" => "SBT Primary Menu(Top Menu)",
        "sbt_secondary_menu_id" => "SBT Sidebar"
    ));


    add_theme_support('post-thumbnails');

    add_theme_support('woocommerce', array(
        "thumbnail_image_width" => 150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3
        )
    ));

    add_theme_support("custom-logo", [
        "height" => 90,
        "width" => 90,
        "flex_height" => true,
        "flex_width" => true
    ]);


    //product thumbnail effect support
    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");
}


add_action("after_setup_theme", "simple_bootstrap_theme_nav_config");


function simple_bootstrap_theme_add_li_class($classes, $item, $args)
{
    $classes[] = "nav-item";
    return $classes;
}


add_filter("nav_menu_css_class", "simple_bootstrap_theme_add_li_class", 1, 3);


function simple_bootstrap_theme_add_anchor_links($classes, $item, $args)
{
    $classes['class'] = "nav-link";
    return $classes;
}


add_filter("nav_menu_link_attributes", "simple_bootstrap_theme_add_anchor_links", 1, 3);
if (class_exists('woocommerce')) {
    include_once 'includes/wc-modifications.php';
}


/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment');

function simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
    $fragments['span.items-count'] = ob_get_clean();
    return $fragments;
}


function simple_bootstrap_theme_load_wp_customizer($wp_customize)
{
    // customizer code

    // adding section
    $wp_customize->add_section("sec_copyright", array(
        "title" => "Copyright Section",
        "description" => "This is a copyright section"
    ));

    // adding settings

    $wp_customize->add_setting("set_copyright", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    // add control
    $wp_customize->add_control("set_copyright", array(
        "label" => "Copyright",
        "description" => "Please fill the copyright text",
        "section" => "sec_copyright",
        "type" => "text",
    ));

    // add link social
    $wp_customize->add_section("sec_social", array(
        "title" => "Social Section",
        "description" => "This is a social section"
    ));

    // add setting
    $wp_customize->add_setting("set_facebook", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    // add control
    $wp_customize->add_control("set_facebook", array(
        "label" => "Facebook",
        "description" => "Please fill the facebook link",
        "section" => "sec_social",
        "type" => "text",
    ));

    $wp_customize->add_setting("set_instagram", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    $wp_customize->add_control("set_instagram", array(
        "label" => "Instagram",
        "description" => "Please fill the instagram link",
        "section" => "sec_social",
        "type" => "text",
    ));

    $wp_customize->add_setting("set_tiktok", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));


    $wp_customize->add_control("set_tiktok", array(
        "label" => "Twitter",
        "description" => "Please fill the twitter link",
        "section" => "sec_social",
        "type" => "text",
    ));
}

add_action("customize_register", "simple_bootstrap_theme_load_wp_customizer");
