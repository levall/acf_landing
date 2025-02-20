(function ($) {
    $(document).ready(function () {
        "use strict";

        // Swiper
        let a = $('.swiper .swiper-slide').eq(0);
        a.addClass('active');
        const swiper = new Swiper(".swiper", {
            slidesPerView: 'auto',
            speed: 1000,
            initialSlide: 0,
            freeMode:true,
            allowTouchMove: true,

        });
        $('.swiper-slide').on('mouseenter', function() {
            swiper.update();
            const slideIndex = $(this).closest('.swiper-slide').index();
            $('.swiper-slide').removeClass('swiper-slide-active swiper-slide-next swiper-slide-prev');
            $(this).closest('.swiper-slide').addClass('swiper-slide-active');
            $(this).closest('.swiper-slide').next().addClass('swiper-slide-next');
            $(this).closest('.swiper-slide').prev().addClass('swiper-slide-prev');
        })
        $('.swiper-slide').on('click', '.arrow', function(event) {
            swiper.update();
            const slideIndex = $(this).closest('.swiper-slide').index();
            $('.swiper-slide').removeClass('active swiper-slide-active swiper-slide-next swiper-slide-prev');
            $(this).closest('.swiper-slide').addClass('active swiper-slide-active');
            $(this).closest('.swiper-slide').next().addClass('swiper-slide-next');
            $(this).closest('.swiper-slide').prev().addClass('swiper-slide-prev');
        });
    });
}(jQuery));