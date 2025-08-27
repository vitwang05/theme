<?php

/**
 * Custom WooCommerce Sidebar
 */
if (! defined('ABSPATH')) {
    exit; // bảo mật
}
?>

<aside id="woocommerce-sidebar" class="site-sidebar bg-light border rounded p-3 shadow-sm">
    
    <!-- Tìm kiếm sản phẩm -->
    <div class="widget widget_search mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-search me-2"></i>
                    Tìm kiếm sản phẩm
                </h5>
            </div>
            <div class="card-body">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/cua-hang')); ?>">
                    <div class="input-group">
                        <label for="woocommerce-product-search" class="screen-reader-text">
                            <?php echo _x('Search for:', 'label', 'yourtheme'); ?>
                        </label>
                        <input type="search" 
                               id="woocommerce-product-search" 
                               class="form-control border-end-0"
                               placeholder="Nhập tên sản phẩm..." 
                               value="<?php echo get_search_query(); ?>" 
                               name="s" />
                        <button type="submit" class="btn btn-primary border-start-0">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <input type="hidden" name="post_type" value="product" />
                </form>
            </div>
        </div>
    </div>

    <!-- Danh mục sản phẩm -->
    <div class="widget widget_product_categories mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-grid-3x3-gap me-2"></i>
                    Chọn danh mục
                </h5>
            </div>
            <div class="card-body">
                <div class="categories-grid">
                    <?php
                    $categories = get_terms(array(
                        'taxonomy'     => 'product_cat',
                        'hide_empty'   => true,
                    ));
                    
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_count = $category->count;
                            $category_link = get_term_link($category);
                            ?>
                            <a href="<?php echo esc_url($category_link); ?>" 
                               class="category-item d-block text-decoration-none mb-2 p-3 rounded border bg-light text-dark position-relative">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="category-name fw-medium"><?php echo esc_html($category->name); ?></span>
                                    <span class="category-count badge bg-success rounded-pill"><?php echo $category_count; ?></span>
                                </div>
                                <div class="category-hover-effect"></div>
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
                
                <div class="mt-3 d-grid gap-2">
                    <a href="<?php echo esc_url(home_url('/cua-hang')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-x-circle me-1"></i>
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bộ lọc giá -->
    <div class="widget price-filter-widget">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="card-title mb-0">
                    <i class="bi bi-funnel me-2"></i>
                    Lọc theo giá
                </h5>
            </div>
            <div class="card-body">
                <form method="get" class="price-filter-form" action="<?php echo esc_url(home_url('/cua-hang')); ?>">
                    <!-- Khoảng giá từ -->
                    <div class="mb-3">
                        <label for="min_price" class="form-label fw-bold">Giá từ:</label>
                        <div class="input-group">
                            <span class="input-group-text">đ</span>
                            <input type="number" 
                                   id="min_price" 
                                   name="min_price" 
                                   class="form-control"
                                   min="0" 
                                   max="2000000" 
                                   step="100000"
                                   placeholder="0"
                                   value="<?php echo isset($_GET['min_price']) ? intval($_GET['min_price']) : ''; ?>">
                        </div>
                    </div>
                    
                    <!-- Khoảng giá đến -->
                    <div class="mb-3">
                        <label for="max_price" class="form-label fw-bold">Giá đến:</label>
                        <div class="input-group">
                            <span class="input-group-text">đ</span>
                            <input type="number" 
                                   id="max_price" 
                                   name="max_price" 
                                   class="form-control"
                                   min="0" 
                                   max="2000000" 
                                   step="100000"
                                   placeholder="2000000"
                                   value="<?php echo isset($_GET['max_price']) ? intval($_GET['max_price']) : ''; ?>">
                        </div>
                    </div>
                    
                    <!-- Khoảng giá nhanh -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Khoảng giá nhanh:</label>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary btn-sm quick-price" data-min="0" data-max="500000">
                                Dưới 500K
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm quick-price" data-min="500000" data-max="1000000">
                                500K - 1M
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm quick-price" data-min="1000000" data-max="2000000">
                                1M - 2M
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm quick-price" data-min="2000000" data-max="">
                                Trên 2M
                            </button>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning btn-lg">
                            <i class="bi bi-check-circle me-2"></i>
                            Áp dụng bộ lọc
                        </button>
                        <a href="<?php echo esc_url(home_url('/cua-hang')); ?>" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-clockwise me-2"></i>
                            Làm mới
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    // Xử lý khoảng giá nhanh
    document.addEventListener('DOMContentLoaded', function() {
        const quickPriceButtons = document.querySelectorAll('.quick-price');
        
        quickPriceButtons.forEach(button => {
            button.addEventListener('click', function() {
                const minPrice = this.dataset.min;
                const maxPrice = this.dataset.max;
                
                // Cập nhật giá trị input
                if (minPrice) {
                    document.getElementById('min_price').value = minPrice;
                }
                if (maxPrice) {
                    document.getElementById('max_price').value = maxPrice;
                }
            });
        });
    });
    </script>
</aside>