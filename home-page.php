<?php
/*
Template Name: Home page
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/home-style.css" />
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Hero Section - Câu chuyện bắt đầu -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-white">
                <h1 class="display-4 fw-bold text-danger">VSneaker - Nơi Phong Cách <br /> Gặp Gỡ Chất Lượng</h1>
                <p class="lead">Khám phá bộ sưu tập giày sneaker độc đáo, nơi mỗi đôi giày kể một câu chuyện riêng về phong cách và cá tính của bạn.</p>
                <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn btn-danger btn-lg me-3">Khám Phá Ngay</a>
                <a href="#story" class="btn btn-outline-light btn-lg">Câu Chuyện Của Chúng Tôi</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://dummyimage.com/500x400/ff4e50/fff.png&text=VSneaker+Collection" alt="VSneaker Hero" class="img-fluid hero-img">
            </div>
        </div>
    </div>
</section>

<!-- Brand Story Section -->
<section id="story" class="brand-story py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="story-content">
                    <h2 class="section-title">Câu Chuyện VSneaker</h2>
                    <p class="lead">Từ một ước mơ nhỏ về những đôi giày hoàn hảo...</p>
                    <p>VSneaker được sinh ra từ niềm đam mê với sneaker và khát khao mang đến cho người Việt những sản phẩm chất lượng cao với thiết kế độc đáo. Mỗi đôi giày của chúng tôi không chỉ là một sản phẩm, mà là một tác phẩm nghệ thuật thể hiện cá tính và phong cách riêng của bạn.</p>
                    <div class="story-stats">
                        <div class="row text-center">
                            <div class="col-4">
                                <h3 class="text-danger">8+</h3>
                                <p>Năm kinh nghiệm</p>
                            </div>
                            <div class="col-4">
                                <h3 class="text-danger">50K+</h3>
                                <p>Khách hàng hài lòng</p>
                            </div>
                            <div class="col-4">
                                <h3 class="text-danger">1000+</h3>
                                <p>Sản phẩm độc đáo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="story-image">
                    <img src="https://dummyimage.com/500x400/4ecdc4/fff.png&text=Our+Story" alt="VSneaker Story" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Tại Sao Chọn VSneaker?</h2>
                <p class="lead">Những lý do khiến chúng tôi trở thành lựa chọn hàng đầu của bạn</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5>Chất Lượng Cao</h5>
                    <p>Sử dụng nguyên liệu cao cấp, quy trình sản xuất nghiêm ngặt</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h5>Thiết Kế Độc Đáo</h5>
                    <p>Phong cách hiện đại, phù hợp với xu hướng thời trang mới nhất</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5>Giao Hàng Nhanh</h5>
                    <p>Dịch vụ giao hàng nhanh chóng, đảm bảo thời gian</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h5>Hỗ Trợ 24/7</h5>
                    <p>Đội ngũ hỗ trợ khách hàng chuyên nghiệp, sẵn sàng phục vụ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Products - Sản phẩm được yêu thích -->
<section class="products-section py-5">
    <div class="container">
        <h2 class="section-title text-center">Sản Phẩm <span>Được Yêu Thích</span></h2>
        <p class="text-center mb-5">Những đôi giày được khách hàng tin tưởng và lựa chọn nhiều nhất</p>
        <div class="row g-4 product-grid">
            <?php
            $popular_products = wc_get_products(array(
                'status' => 'publish',
                'limit' => 8,
                'orderby' => 'popularity'
            ));
            foreach ($popular_products as $product) : ?>
                <div class="col product-col">
                    <div class="product-card">
                        <div class="product-img">
                            <a href="<?php echo get_permalink($product->get_id()); ?>">
                                <?php echo $product->get_image('medium'); ?>
                            </a>
                            <div class="overlay">
                                <a href="<?php echo get_permalink($product->get_id()); ?>" class="btn btn-light btn-sm me-2">Xem Chi Tiết</a>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                                    class="btn btn-danger btn-sm"
                                    data-product_id="<?php echo $product->get_id(); ?>">
                                    Thêm Vào Giỏ
                                </a>
                            </div>
                        </div>
                        <h6 class="product-title mt-3"><?php echo $product->get_name(); ?></h6>
                        <p class="product-price fw-bold text-danger"><?php echo $product->get_price_html(); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn btn-outline-danger btn-lg">Xem Tất Cả Sản Phẩm</a>
        </div>
    </div>
</section>
                
<!-- slider section -->
<div class="container-fluid p-0">
  <div class="row g-0" style="height:600px;"> <!-- chiều cao tổng -->
    
    <!-- Slider bên trái -->
    <div class="col-md-8 h-100">
      <div class="swiper main-slider h-100">
        <div class="swiper-wrapper h-100">
          <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-white" style="background:#ff6b6b;">
            <a href="/category/1" class="text-white text-decoration-none">
              <h2>Category 1</h2>
              <p>Description for category 1</p>
            </a>
          </div>
          <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-white" style="background:#4ecdc4;">
            <a href="/category/2" class="text-white text-decoration-none">
              <h2>Category 2</h2>
              <p>Description for category 2</p>
            </a>
          </div>
          <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-white" style="background:#1a535c;">
            <a href="/category/3" class="text-white text-decoration-none">
              <h2>Category 3</h2>
              <p>Description for category 3</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 2 ô nhỏ bên phải -->
    <div class="col-md-4 h-100 d-flex flex-column">
      <div class="flex-fill d-flex align-items-center justify-content-center text-center text-dark" style="background:#f7f7f7;">
        <div>
          <h3>About Us</h3>
          <p>Chúng tôi là doanh nghiệp chuyên ...</p>
        </div>
      </div>
      <div class="flex-fill d-flex align-items-center justify-content-center text-center text-dark" style="background:#ddd;">
        <div>
          <h3>Khuyến mại</h3>
          <p>Giảm giá 30% tuần này!</p>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- Latest Arrivals - Sản phẩm mới nhất -->
<section class="products-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Sản Phẩm <span>Mới Nhất</span></h2>
        <p class="text-center mb-5">Khám phá những thiết kế mới nhất, mang đến phong cách hiện đại cho bạn</p>
        <div class="swiper latest-swiper">
            <div class="swiper-wrapper">
                <?php
                $latest_products = wc_get_products(array(
                    'status' => 'publish',
                    'limit' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                // Kiểm tra số lượng sản phẩm và nhân bản nếu cần
                $product_count = count($latest_products);
                $min_products_needed = 8; // Số lượng tối thiểu để loop mượt mà
                
                if ($product_count < $min_products_needed && $product_count > 0) {
                    // Nhân bản sản phẩm để đủ số lượng
                    $duplicate_times = ceil($min_products_needed / $product_count);
                    $duplicated_products = array();
                    
                    for ($i = 0; $i < $duplicate_times; $i++) {
                        $duplicated_products = array_merge($duplicated_products, $latest_products);
                    }
                    
                    $latest_products = $duplicated_products;
                }
                
                foreach ($latest_products as $product) : ?>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="<?php echo get_permalink($product->get_id()); ?>">
                                    <?php echo $product->get_image('woocommerce_thumbnail'); ?>
                                </a>
                                <div class="overlay">
                                    <a href="<?php echo get_permalink($product->get_id()); ?>" class="btn btn-light btn-sm">Xem Chi Tiết</a>
                                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                                        class="btn btn-danger btn-sm"
                                        data-product_id="<?php echo $product->get_id(); ?>">
                                        Thêm Vào Giỏ
                                    </a>
                                </div>
                            </div>
                            <h6 class="product-title"><?php echo $product->get_name(); ?></h6>
                            <p class="product-price"><?php echo $product->get_price_html(); ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Customer Testimonials -->
<section class="testimonials py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Khách Hàng Nói Gì Về Chúng Tôi</h2>
                <p class="lead">Những chia sẻ chân thực từ khách hàng đã tin tưởng VSneaker</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <div class="testimonial-content">
                        <p>"Chất lượng giày tuyệt vời! Thiết kế đẹp và bền. Tôi đã mua nhiều đôi và rất hài lòng."</p>
                    </div>
                    <div class="testimonial-author">
                        <h6>Nguyễn Văn A</h6>
                        <span>Khách hàng thân thiết</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <div class="testimonial-content">
                        <p>"Dịch vụ khách hàng rất tốt, giao hàng nhanh. Sẽ tiếp tục ủng hộ VSneaker!"</p>
                    </div>
                    <div class="testimonial-author">
                        <h6>Trần Thị B</h6>
                        <span>Khách hàng mới</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <div class="testimonial-content">
                        <p>"Giá cả hợp lý, chất lượng cao. Đúng là thương hiệu Việt Nam đáng tin cậy!"</p>
                    </div>
                    <div class="testimonial-author">
                        <h6>Lê Văn C</h6>
                        <span>Khách hàng VIP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action - Kết thúc câu chuyện -->
<section class="cta-section py-5 bg-danger text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Sẵn Sàng Bắt Đầu Hành Trình Phong Cách?</h2>
                <p class="lead mb-4">Hãy để VSneaker đồng hành cùng bạn trong mọi bước đi. Khám phá bộ sưu tập ngay hôm nay và tìm cho mình đôi giày hoàn hảo!</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn btn-light btn-lg">
                        <i class="bi bi-shop me-2"></i>
                        Mua Sắm Ngay
                    </a>
                    <a href="<?php echo home_url('/lien-he'); ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-chat me-2"></i>
                        Liên Hệ Tư Vấn
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<?php get_footer(); ?>