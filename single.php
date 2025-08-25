<?php get_header() ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="card-text"><?php the_content(); ?></p>
        </div>
<?php
    }
}
?>

<?php get_footer() ?>