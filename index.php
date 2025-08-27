<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
    
                    <div id="products-new-arrivals">
                        <h3>New Arrivals</h3>
                        <?php
                        $new_arrival_limit = get_theme_mod("set_new_arrival_limit");
                        $new_arrival_columns = get_theme_mod("set_new_arrival_column");
                        ?>
                        <?php echo do_shortcode('[products limit="' . $new_arrival_limit . '" columns="' . $new_arrival_columns . '" orderby="date" class="new-arrival-custom-class"]'); ?>
                    </div>

                    <div id="products-popularity">
                        <h3>Popularity</h3>
                        <?php
                        $popularity_limit = get_theme_mod("set_popular_limit");
                        $popularity_columns = get_theme_mod("set_popular_columns");
                        ?>
                        <?php echo do_shortcode('[products limit="' . $popularity_limit . '" columns="' . $popularity_columns . '" orderby="popularity"]'); ?>
                    </div>
        </div>
    </div>
</div>
<?php
                }
            }
?>

<?php get_footer() ?>