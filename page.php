<?php get_header() ?>
<div class="container">
    <div class="row">

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article class="col">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </article>

    </div>
</div>
<?php
            }
        }
?>

<?php get_footer() ?>