// WooCommerce Product Slider - Dynamic Width Version (Multi Slider & Responsive)
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.woocommerce-product-slider').forEach(slider => {
        const sliderWrapper = slider.querySelector('.slider-wrapper');
        const prevBtn = slider.querySelector('.slider-nav.prev');
        const nextBtn = slider.querySelector('.slider-nav.next');

        if (!sliderWrapper || !prevBtn || !nextBtn) return;

        let currentPosition = 0;
        let autoPlayInterval;
        let isAutoPlaying = true;
        const gap = 15; // Khoảng cách giữa các item (px)

        // ======= Cấu hình responsive =======
        function getVisibleItems() {
            const w = window.innerWidth;
            if (w >= 1200) return 5; // Desktop lớn
            if (w >= 992) return 4;  // Laptop/tablet lớn
            if (w >= 768) return 3;  // Tablet
            if (w >= 480) return 2;  // Mobile
            return 2;                 // Mobile nhỏ
        }

        let visibleItems = getVisibleItems();

        // Tính width item động
        function getItemWidth() {
            const containerWidth = sliderWrapper.parentElement.offsetWidth;
            return (containerWidth - gap * (visibleItems - 1)) / visibleItems;
        }

        // Tính max position
        function getMaxPosition() {
            const totalItems = sliderWrapper.children.length;
            return Math.max(0, totalItems - visibleItems);
        }

        // Cập nhật slider
        function updateSlider() {
            const itemWidth = getItemWidth();

            // Cập nhật transform
            sliderWrapper.style.transform = `translateX(-${currentPosition * (itemWidth + gap)}px)`;

            // Cập nhật width và margin cho từng item
            Array.from(sliderWrapper.children).forEach((item, index) => {
                item.style.width = `${itemWidth}px`;
                item.style.marginRight = (index < sliderWrapper.children.length - 1) ? `${gap}px` : '0';
                item.style.flexShrink = '0';
            });

            // Update button states
            prevBtn.style.opacity = '1';
            prevBtn.style.pointerEvents = 'auto';
            nextBtn.style.opacity = '1';
            nextBtn.style.pointerEvents = 'auto';
        }

        // Slide next
        function slideNext() {
            const maxPosition = getMaxPosition();
            if (currentPosition < maxPosition) {
                currentPosition++;
            } else {
                currentPosition = 0; // Quay về đầu
            }
            updateSlider();
        }

        // Slide prev
        function slidePrev() {
            const maxPosition = getMaxPosition();
            if (currentPosition > 0) {
                currentPosition--;
            } else {
                currentPosition = maxPosition; // Quay về cuối
            }
            updateSlider();
        }

        // Auto-play
        function startAutoPlay() {
            if (autoPlayInterval) clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(slideNext, 3000);
            isAutoPlaying = true;
        }

        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
                autoPlayInterval = null;
            }
            isAutoPlaying = false;
        }

        // Event listeners
        nextBtn.addEventListener('click', () => { stopAutoPlay(); slideNext(); startAutoPlay(); });
        prevBtn.addEventListener('click', () => { stopAutoPlay(); slidePrev(); startAutoPlay(); });

        sliderWrapper.addEventListener('mouseenter', stopAutoPlay);
        sliderWrapper.addEventListener('mouseleave', startAutoPlay);
        prevBtn.addEventListener('mouseenter', stopAutoPlay);
        nextBtn.addEventListener('mouseenter', stopAutoPlay);
        prevBtn.addEventListener('mouseleave', startAutoPlay);
        nextBtn.addEventListener('mouseleave', startAutoPlay);

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) stopAutoPlay();
            else startAutoPlay();
        });

        // Resize window
        window.addEventListener('resize', () => {
            visibleItems = getVisibleItems();
            const maxPosition = getMaxPosition();
            if (currentPosition > maxPosition) currentPosition = maxPosition;
            updateSlider();
        });

        // Khởi tạo
        updateSlider();
        startAutoPlay();
    });
});
