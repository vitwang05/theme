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
    <!-- Font Awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-warning fw-bold" href="<?php echo home_url('/') ?>">
                <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo bloginfo("title");
                }
                ?></a>
            
            <!-- Mobile/Tablet Icons (visible on small screens) -->
            <?php if (class_exists("woocommerce")) : ?>
                <div class="d-lg-none d-flex align-items-center">
                    <?php if (is_user_logged_in()) : ?>
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-link text-light p-2" title="My Account">
                            <i class="fas fa-user fa-lg"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-link text-light p-2" title="Login/Register">
                            <i class="fas fa-sign-in-alt fa-lg"></i>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo wc_get_cart_url(); ?>" class="btn btn-link text-light p-2 position-relative" title="Cart">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                    </a>
                    <button class="navbar-toggler border-0 text-light p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            <?php endif; ?>
            
                         <!-- Desktop Menu Toggle Button (hidden on small screens) -->
             <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    "theme_location" => "sbt_primary_menu_id",
                    "container" => false,
                    "items_wrap" => '<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">%3$s</ul>'
                ));
                ?>
                
                <!-- Desktop Buttons (hidden on small screens) -->
                <div class="d-none d-lg-flex">
                    <?php if (class_exists("woocommerce")) : ?>
                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-success">
                                <i class="fas fa-user me-2"></i>My Account
                            </a>
                            <a style="margin-left: 10px;" href="<?php echo wp_login_url(get_permalink(get_option("woocommerce_myaccount_page_id"))); ?>" class="btn btn-outline-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                        <?php else: ?>
                            <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login/Register
                            </a>
                        <?php endif; ?>
                        <a style="margin-left: 10px;" href="<?php echo wc_get_cart_url(); ?>" class="btn btn-warning text-dark">
                            <i class="fas fa-shopping-cart me-2"></i>Cart (<span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)
                        </a>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile/Tablet Menu Items (visible in collapsed menu) -->
                <div class="d-lg-none">
                    <?php if (class_exists("woocommerce") && is_user_logged_in()) : ?>
                        <hr class="my-3 text-light">
                        <div class="d-grid gap-2">
                            <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>" class="btn btn-success">
                                <i class="fas fa-user me-2"></i>My Account
                            </a>
                            <a href="<?php echo wp_login_url(get_permalink(get_option("woocommerce_myaccount_page_id"))); ?>" class="btn btn-outline-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>