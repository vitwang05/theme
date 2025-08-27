<?php
/*
Template Name: Contact page
*/
?>
<?php get_header() ?>

<!-- Hero Section -->
<div class="contact-hero bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">Liên Hệ Với Chúng Tôi</h1>
                <p class="lead mb-4">Chúng tôi luôn sẵn sàng hỗ trợ và giải đáp mọi thắc mắc của bạn. Hãy để lại thông tin, chúng tôi sẽ phản hồi trong thời gian sớm nhất.</p>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-telephone-fill fs-4 me-3"></i>
                    <span class="fs-5">Hotline: 1900-xxxx</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-envelope-fill fs-4 me-3"></i>
                    <span class="fs-5">Email: info@vsneaker.com</span>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <i class="bi bi-chat-dots display-1 text-light opacity-75"></i>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container py-5">
    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-8 mb-5">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0">
                        <i class="bi bi-send me-2"></i>
                        Gửi Tin Nhắn
                    </h3>
                </div>
                <div class="card-body p-4">
                    <form id="contactForm" class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label fw-bold">Họ và tên *</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-bold">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label fw-bold">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label fw-bold">Chủ đề *</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Chọn chủ đề</option>
                                    <option value="general">Thông tin chung</option>
                                    <option value="product">Hỏi về sản phẩm</option>
                                    <option value="order">Đơn hàng & Thanh toán</option>
                                    <option value="shipping">Vận chuyển & Giao hàng</option>
                                    <option value="return">Đổi trả & Bảo hành</option>
                                    <option value="other">Khác</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Nội dung tin nhắn *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Hãy mô tả chi tiết vấn đề của bạn..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    Tôi đồng ý với <a href="#" class="text-decoration-none">điều khoản sử dụng</a> và <a href="#" class="text-decoration-none">chính sách bảo mật</a>
                                </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-send me-2"></i>
                                Gửi Tin Nhắn
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-4">
            <!-- Company Info -->
            <div class="card border-0 shadow-lg mb-4">
                <div class="card-header bg-info text-white">
                    <h4 class="card-title mb-0">
                        <i class="bi bi-building me-2"></i>
                        Thông Tin Công Ty
                    </h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-geo-alt-fill text-danger fs-5 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Địa chỉ:</h6>
                            <p class="mb-0 text-muted">123 Đường ABC, Quận 1, TP.HCM</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-clock-fill text-warning fs-5 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Giờ làm việc:</h6>
                            <p class="mb-0 text-muted">Thứ 2 - Thứ 6: 8:00 - 18:00<br>Thứ 7: 8:00 - 12:00</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-telephone-fill text-success fs-5 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Điện thoại:</h6>
                            <p class="mb-0 text-muted">1900-xxxx<br>+84 28 xxxx xxxx</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <i class="bi bi-envelope-fill text-primary fs-5 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Email:</h6>
                            <p class="mb-0 text-muted">info@vsneaker.com<br>support@vsneaker.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title mb-0">
                        <i class="bi bi-share me-2"></i>
                        Kết Nối Với Chúng Tôi
                    </h4>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="<?php echo get_theme_mod("set_facebook") ?>" class="btn btn-outline-primary">
                            <i class="bi bi-facebook me-2"></i>
                            Facebook
                        </a>
                        <a href="<?php echo get_theme_mod("set_instagram") ?>" class="btn btn-outline-danger">
                            <i class="bi bi-instagram me-2"></i>
                            Instagram
                        </a>
                        <a href="<?php echo get_theme_mod("set_tiktok") ?>" class="btn btn-outline-black border-dark">
                            <i class="fab fa-tiktok me-2"></i>
                            TikTok
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Vị Trí Của Chúng Tôi</h2>
                    <p class="text-muted">Tìm đường đến cửa hàng VSneaker</p>
                </div>
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-0">
                        <div class="ratio ratio-21x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.283740743691!2d105.86407375390625!3d21.047011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab118567f079%3A0xf90ecab5311a1558!2zVnNuZWFrZXJzIE5n4buNYyBMw6Jt!5e0!3m2!1svi!2s!4v1756320564090!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Câu Hỏi Thường Gặp</h2>
                <p class="text-muted">Tìm câu trả lời cho những thắc mắc phổ biến</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                            <i class="bi bi-question-circle me-2 text-primary"></i>
                            Làm thế nào để đặt hàng online?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Bạn có thể đặt hàng online bằng cách chọn sản phẩm, thêm vào giỏ hàng và thanh toán qua các phương thức thanh toán được hỗ trợ như thẻ tín dụng, chuyển khoản ngân hàng hoặc thanh toán khi nhận hàng.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            <i class="bi bi-question-circle me-2 text-primary"></i>
                            Thời gian giao hàng là bao lâu?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Thời gian giao hàng phụ thuộc vào địa điểm giao hàng. Trong nội thành TP.HCM: 1-2 ngày, các tỉnh lân cận: 2-3 ngày, các tỉnh khác: 3-7 ngày làm việc.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                            <i class="bi bi-question-circle me-2 text-primary"></i>
                            Chính sách đổi trả như thế nào?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Chúng tôi chấp nhận đổi trả trong vòng 30 ngày kể từ ngày mua hàng với điều kiện sản phẩm còn nguyên vẹn, chưa sử dụng và còn đầy đủ phụ kiện đi kèm.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission handling
        const contactForm = document.getElementById('contactForm');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Simple validation
            if (!data.firstName || !data.email || !data.subject || !data.message) {
                alert('Vui lòng điền đầy đủ thông tin bắt buộc!');
                return;
            }

            // Show success message (in real implementation, you would send this to server)
            alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
            this.reset();
        });

        // Form field focus effects
        const formInputs = contactForm.querySelectorAll('.form-control, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    });
</script>

<style>
    .contact-hero {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
    }

    .contact-form .form-control:focus,
    .contact-form .form-select:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
    }

    .contact-form .form-label {
        color: #495057;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-2px);
    }

    .accordion-button:not(.collapsed) {
        background-color: #e7f3ff;
        color: #0c63e4;
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .btn {
        transition: all 0.2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-1px);
    }

    .social-links a:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .contact-hero h1 {
            font-size: 2rem;
        }

        .contact-hero .display-1 {
            font-size: 4rem;
        }
    }
</style>

<?php get_footer() ?>