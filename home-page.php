<?php
/*
Template Name: Home page
*/
?>
<?php get_header() ?>
<div class="homepage-poster mb-5">
    <div class="poster-content d-flex align-items-center justify-content-center text-center text-white">
        <div>
            <h1 class="display-4 fw-bold">Chào mừng đến với cửa hàng của chúng tôi</h1>
            <p class="lead">Khám phá sản phẩm mới nhất và ưu đãi hấp dẫn</p>
            <a href="<?php echo esc_url(home_url('/shop/')); ?>" class="btn btn-light btn-lg mt-3">Mua ngay</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <div class="products-new-arrivals mb-4">
                        <h3 class="text-center mb-4">New Arrivals</h3>
                        <?php
                        get_template_part('product-slider', null, array(
                            'orderby' => 'date',
                            'category' => '',
                            'posts_per_page' => 8
                        ));
                        ?>
                    </div>

                    <div class="products-popular mb-4">
                        <h3 class="text-center mb-4">Popular Products</h3>
                        <?php
                        get_template_part('product-slider', null, array(
                            'orderby' => '',
                            'category' => 'Hoodies',
                            'posts_per_page' => 8
                        ));
                        ?>
                    </div>


            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>