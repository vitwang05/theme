<?php
/**
 * Template Part: Product Slider
 * 
 * @param array $args Có thể truyền các tham số: 
 *  - 'orderby' => 'date', 'popularity', 'rand', etc.
 *  - 'category' => 'slug-category' (nếu muốn lọc theo category)
 *  - 'posts_per_page' => 8 (số lượng sản phẩm)
 */

$orderby = isset($args['orderby']) ? $args['orderby'] : 'date';
$category = isset($args['category']) ? $args['category'] : '';
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : 8;

// Tạo ID duy nhất cho slider
$slider_id = 'slider-' . uniqid();

// Chuẩn bị args cho WP_Query
$query_args = array(
    'post_type' => 'product',
    'posts_per_page' => $posts_per_page,
    'orderby' => $orderby,
);

if (!empty($category)) {
    $query_args['product_cat'] = $category;
}

$products = new WP_Query($query_args);

if ($products->have_posts()) :
?>
<div class="woocommerce-product-slider" id="<?php echo esc_attr($slider_id); ?>">
    <div class="slider-container">
        <div class="slider-wrapper">
            <?php while ($products->have_posts()) : $products->the_post(); global $product; ?>
                <div class="slider-item">
                    <div class="product-card">
                        <div class="product-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo woocommerce_get_product_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="product-info">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="price"><?php echo $product->get_price_html(); ?></div>
                            <div class="add-to-cart">
                                <?php 
                                $supports_ajax = $product->supports('ajax_add_to_cart');
                                echo apply_filters('woocommerce_loop_add_to_cart_link',
                                    sprintf('<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                        esc_url($product->add_to_cart_url()),
                                        esc_attr(isset($quantity) ? $quantity : 1),
                                        esc_attr(isset($class) ? $class : 'button'),
                                        $supports_ajax ? 'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '"' : '',
                                        esc_html__('Add to cart', 'woocommerce')
                                    ),
                                    $product
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <button class="slider-nav prev" data-target="<?php echo esc_attr($slider_id); ?>">‹</button>
    <button class="slider-nav next" data-target="<?php echo esc_attr($slider_id); ?>">›</button>
</div>
<?php endif; ?>
