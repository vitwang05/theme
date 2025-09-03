document.addEventListener("DOMContentLoaded", function() {
    // Main Slider - Category Slider
    var mainSwiper = new Swiper(".main-slider", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        effect: "slide"
    });

    // Latest Arrivals Swiper
    const swiper = new Swiper(".latest-swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        loopAdditionalSlides: 2,
        loopedSlides: 4,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 10,
                centeredSlides: true,
                loopAdditionalSlides: 2,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
                centeredSlides: true,
                loopAdditionalSlides: 2,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
                centeredSlides: true,
                loopAdditionalSlides: 2,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 20,
                centeredSlides: true,
                loopAdditionalSlides: 2,
            }
        },
        // Performance optimizations
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        preloadImages: false,
        lazy: {
            loadPrevNext: true,
        },
        // Smooth transitions
        speed: 600,
        effect: 'slide',
        // Center scale effect with centeredSlides
        on: {
            setTranslate: function() {
                const slides = this.slides;
                for (let i = 0; i < slides.length; i++) {
                    const slide = slides[i];
                    const slideProgress = slide.progress;
                    const absProgress = Math.abs(slideProgress);
                    
                    // Scale effect - center slide is larger
                    let scale = 1 - absProgress * 0.15;
                    scale = Math.max(0.85, scale);
                    
                    slide.style.transform = `scale(${scale})`;
                    slide.style.opacity = 1 - absProgress * 0.2;
                    slide.style.zIndex = absProgress < 0.3 ? 2 : 1;
                }
            },
            setTransition: function(duration) {
                const slides = this.slides;
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.transition = `${duration}ms`;
                }
            }
        }
    });
});