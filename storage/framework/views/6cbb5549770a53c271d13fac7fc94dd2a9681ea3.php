<section class="slider d-block d-md-none">
    <div class="swiper-container mobile-slider d-block d-md-none">
        <div class="swiper-wrapper">
           
            <div class="swiper-slide" style="background-image:url('<?php echo e(asset($slider->image)); ?>');
                background-size: cover;height:300px;position:relative;margin-bottom: 45px;
                ">
                <div class="slider-box slider-flex">
                    <!-- <img class="slider-back-img" src="assets/images/slider/p1.jpg" alt=""> -->
                    <a href="<?php echo e($slider->post->play()); ?>" class="page-movie-play btn--ripple" style="    
                     font-size: 12px;">
                        <i class="fa fa-play"></i>
                        پخش فیلم
                    </a>
                </div>
            </div>
     
           

        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
    </div>
</section><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Includes/Front/MobileSlider.blade.php ENDPATH**/ ?>