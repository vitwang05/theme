<?php
/*
Template Name: About page
*/
?>
<?php get_header() ?>

<!-- Hero Section -->
<div class="about-hero bg-gradient text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4">Về VSneaker</h1>
                <p class="lead mb-4">Chúng tôi là thương hiệu giày sneaker hàng đầu Việt Nam, mang đến những sản phẩm chất lượng cao với thiết kế độc đáo và phong cách hiện đại.</p>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-award-fill fs-4 me-3 text-warning"></i>
                    <span class="fs-5">Thương hiệu giày số 1 Việt Nam</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-heart-fill fs-4 me-3 text-danger"></i>
                    <span class="fs-5">Được yêu thích bởi hàng triệu khách hàng</span>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <i class="bi bi-shoe-1 display-1 text-light opacity-75"></i>
            </div>
        </div>
    </div>
</div>

<!-- Company Story Section -->
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <div class="story-content">
                <h2 class="fw-bold mb-4 text-primary">Câu Chuyện Của Chúng Tôi</h2>
                <p class="lead mb-4">VSneaker được thành lập vào năm 2015 với khát khao mang đến những đôi giày chất lượng cao cho người Việt Nam.</p>
                <p class="mb-4">Từ một cửa hàng nhỏ tại Hà Nội, chúng tôi đã phát triển thành một thương hiệu được yêu thích trên toàn quốc. Mỗi đôi giày đều được thiết kế với sự tâm huyết, chú ý đến từng chi tiết nhỏ nhất.</p>
                <div class="row text-center">
                    <div class="col-4">
                        <div class="achievement-item">
                            <h3 class="text-primary fw-bold">8+</h3>
                            <p class="text-muted">Năm kinh nghiệm</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="achievement-item">
                            <h3 class="text-success fw-bold">50+</h3>
                            <p class="text-muted">Cửa hàng</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="achievement-item">
                            <h3 class="text-warning fw-bold">100K+</h3>
                            <p class="text-muted">Khách hàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="story-image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-story.jpg" alt="VSneaker Story" class="img-fluid rounded shadow-lg" onerror="this.style.display='none'">
                <div class="placeholder-image bg-light rounded shadow-lg d-flex align-items-center justify-content-center" style="height: 400px;">
                    <i class="bi bi-image text-muted display-4"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Values Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">Sứ Mệnh & Giá Trị Cốt Lõi</h2>
                <p class="text-muted">Những điều chúng tôi tin tưởng và theo đuổi</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-bullseye fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Sứ Mệnh</h4>
                        <p class="text-muted">Mang đến những đôi giày chất lượng cao, thiết kế độc đáo và phong cách hiện đại cho mọi người Việt Nam, giúp họ tự tin thể hiện cá tính và phong cách riêng.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-eye fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Tầm Nhìn</h4>
                        <p class="text-muted">Trở thành thương hiệu giày sneaker hàng đầu Đông Nam Á, được công nhận về chất lượng, thiết kế sáng tạo và dịch vụ khách hàng xuất sắc.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-warning text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-heart fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Giá Trị Cốt Lõi</h4>
                        <p class="text-muted">Chất lượng, sáng tạo, trung thực, tận tâm và không ngừng cải tiến. Chúng tôi cam kết mang đến những sản phẩm tốt nhất cho khách hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold">Tại Sao Chọn VSneaker?</h2>
            <p class="text-muted">Những lý do khiến chúng tôi trở thành lựa chọn hàng đầu</p>
        </div>
    </div>
    
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="feature-card text-center">
                <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <i class="bi bi-shield-check fs-3"></i>
                </div>
                <h5 class="fw-bold mb-2">Chất Lượng Cao</h5>
                <p class="text-muted">Sử dụng nguyên liệu cao cấp, quy trình sản xuất nghiêm ngặt</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
            <div class="feature-card text-center">
                <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <i class="bi bi-palette fs-3"></i>
                </div>
                <h5 class="fw-bold mb-2">Thiết Kế Độc Đáo</h5>
                <p class="text-muted">Phong cách hiện đại, phù hợp với xu hướng thời trang mới nhất</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
            <div class="feature-card text-center">
                <div class="feature-icon bg-warning text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <i class="bi bi-truck fs-3"></i>
                </div>
                <h5 class="fw-bold mb-2">Giao Hàng Nhanh</h5>
                <p class="text-muted">Dịch vụ giao hàng nhanh chóng, đảm bảo thời gian</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3">
            <div class="feature-card text-center">
                <div class="feature-icon bg-info text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <i class="bi bi-headset fs-3"></i>
                </div>
                <h5 class="fw-bold mb-2">Hỗ Trợ 24/7</h5>
                <p class="text-muted">Đội ngũ hỗ trợ khách hàng chuyên nghiệp, sẵn sàng phục vụ</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">Đội Ngũ Của Chúng Tôi</h2>
                <p class="text-muted">Những con người tài năng đứng sau thành công của VSneaker</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="team-card text-center">
                    <div class="team-avatar bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="bi bi-person fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-1">Nguyễn Văn A</h5>
                    <p class="text-primary mb-2">CEO & Founder</p>
                    <p class="text-muted small">Với hơn 10 năm kinh nghiệm trong ngành thời trang, anh là người dẫn dắt VSneaker từ những ngày đầu thành lập.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="team-card text-center">
                    <div class="team-avatar bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="bi bi-person fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-1">Trần Thị B</h5>
                    <p class="text-success mb-2">Creative Director</p>
                    <p class="text-muted small">Chị là người tạo ra những thiết kế độc đáo, mang đến phong cách riêng cho từng sản phẩm VSneaker.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="team-card text-center">
                    <div class="team-avatar bg-warning text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="bi bi-person fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-1">Lê Văn C</h5>
                    <p class="text-warning mb-2">Head of Operations</p>
                    <p class="text-muted small">Anh đảm bảo mọi hoạt động sản xuất và kinh doanh diễn ra trơn tru, hiệu quả.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="team-card text-center">
                    <div class="team-avatar bg-info text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                        <i class="bi bi-person fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-1">Phạm Thị D</h5>
                    <p class="text-info mb-2">Customer Service Manager</p>
                    <p class="text-muted small">Chị và đội ngũ của mình luôn nỗ lực mang đến trải nghiệm khách hàng tốt nhất.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="bg-primary text-white py-5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">Sẵn Sàng Trải Nghiệm VSneaker?</h2>
                <p class="lead mb-4">Khám phá bộ sưu tập giày sneaker mới nhất với thiết kế độc đáo và chất lượng cao</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo home_url('/cua-hang'); ?>" class="btn btn-light btn-lg">
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
</div>

<style>
.about-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.story-image img {
    max-height: 400px;
    object-fit: cover;
}

.placeholder-image {
    background: linear-gradient(45deg, #f8f9fa 25%, transparent 25%), 
                linear-gradient(-45deg, #f8f9fa 25%, transparent 25%), 
                linear-gradient(45deg, transparent 75%, #f8f9fa 75%), 
                linear-gradient(-45deg, transparent 75%, #f8f9fa 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
}

.achievement-item h3 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.feature-card {
    padding: 2rem 1rem;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.team-card {
    padding: 2rem 1rem;
    transition: transform 0.3s ease;
}

.team-card:hover {
    transform: translateY(-5px);
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.175) !important;
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.card:hover .icon-wrapper {
    transform: scale(1.1);
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .about-hero h1 {
        font-size: 2.5rem;
    }
    
    .about-hero .display-3 {
        font-size: 3rem;
    }
    
    .achievement-item h3 {
        font-size: 2rem;
    }
}
</style>

<?php get_footer() ?>