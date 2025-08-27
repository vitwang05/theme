        <!-- Footer-->
        <footer class="py-5 bg-dark text-white">
            <div class="container">
                <!-- Main Footer Content -->
                <div class="row g-4 mb-4">
                    <!-- Company Info -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5 class="fw-bold mb-3 text-warning">VSNEAKER</h5>
                            <p class="text-muted mb-3">Chuyên cung cấp các sản phẩm giày sneaker chất lượng cao, thiết kế độc đáo và phong cách thời trang hiện đại.</p>
                            <div class="contact-info">
                                <p class="mb-2"><i class="fas fa-phone me-2 text-warning"></i>+84 123 456 789</p>
                                <p class="mb-2"><i class="fas fa-envelope me-2 text-warning"></i>info@vsneaker.com</p>
                                <p class="mb-0"><i class="fas fa-map-marker-alt me-2 text-warning"></i>256 Ngọc Lâm, Long Biên, Hà Nội</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5 class="fw-bold mb-3">Liên Kết Nhanh</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="/" class="text-muted text-decoration-none">Trang Chủ</a></li>
                                <li class="mb-2"><a href="/cua-hang" class="text-muted text-decoration-none">Cửa Hàng</a></li>
                                <li class="mb-2"><a href="/gioi-thieu" class="text-muted text-decoration-none">Giới Thiệu</a></li>
                                <li class="mb-2"><a href="/lien-he" class="text-muted text-decoration-none">Liên Hệ</a></li>
                                <li class="mb-2"><a href="/tin-tuc" class="text-muted text-decoration-none">Tin Tức</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Customer Service -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5 class="fw-bold mb-3">Hỗ Trợ Khách Hàng</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="/huong-dan-mua-hang" class="text-muted text-decoration-none">Hướng Dẫn Mua Hàng</a></li>
                                <li class="mb-2"><a href="/chinh-sach-doi-tra" class="text-muted text-decoration-none">Chính Sách Đổi Trả</a></li>
                                <li class="mb-2"><a href="/van-chuyen" class="text-muted text-decoration-none">Vận Chuyển & Giao Hàng</a></li>
                                <li class="mb-2"><a href="/bao-hanh" class="text-muted text-decoration-none">Bảo Hành</a></li>
                                <li class="mb-2"><a href="/faq" class="text-muted text-decoration-none">Câu Hỏi Thường Gặp</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social Media & Newsletter -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5 class="fw-bold mb-3">Kết Nối & Nhận Tin</h5>
                            <div class="social-icons mb-3">
                                <a href="<?php echo get_theme_mod("set_facebook") ?>" class="social-icon me-2" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="<?php echo get_theme_mod("set_instagram") ?>" class="social-icon me-2" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?php echo get_theme_mod("set_tiktok") ?>" class="social-icon me-2" title="TikTok">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </div>
                            
                            <!-- Newsletter Subscription -->
                            <div class="newsletter-section">
                                <p class="text-muted mb-2">Đăng ký nhận tin khuyến mãi</p>
                                <form class="newsletter-form">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email của bạn" required>
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-4 border-secondary">

                <!-- Bottom Footer -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0 text-muted"><?php echo get_theme_mod("set_copyright") ?></p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="payment-methods">
                            <span class="text-muted me-2">Chấp nhận thanh toán:</span>
                            <i class="fab fa-cc-visa text-primary me-2"></i>
                            <i class="fab fa-cc-mastercard text-warning me-2"></i>
                            <i class="fab fa-cc-paypal text-info me-2"></i>
                            <i class="fas fa-money-bill-wave text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <?php wp_footer(); ?>
    </body>
</html>