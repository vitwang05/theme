<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php echo bloginfo("charset") ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo bloginfo("title") ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?php echo home_url('/') ?>">
                <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo bloginfo("title");
                }
                ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    "theme_location" => "sbt_primary_menu_id",
                    "container" => false,
                    "items_wrap" => '<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">%3$s</ul>'
                ));
                ?>
                <?php if (class_exists("woocommerce")) : ?>

                    <?php if (is_user_logged_in()) : ?>
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-primary">My Account</a>
                        <a style="margin-left: 10px;" href="<?php echo wp_login_url(get_permalink(get_option("woocommerce_myaccount_page_id"))); ?>" class="btn btn-danger">Logout</a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-primary">Login/Register</a>

                    <?php endif; ?>
                    <a style="margin-left: 10px;" href="<?php echo wc_get_cart_url(); ?>" class="btn btn-primary">
                        Cart (<span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>