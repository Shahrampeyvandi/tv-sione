<?php if(count($sliders)): ?>
<style>
    .shadow-bottom-slider {
    background: linear-gradient(to top,rgba(15, 15, 15, 0.726), rgba(255, 255, 255, 0));
}
    .details{
            position: absolute;
                top: 120px;padding-right:20px;z-index:4
            
    }

    .title-detail{
            color: white;
                z-index: 22;
                text-align: right;
               
    }
    .bttn{
   
    background: white;
    border-radius: 4px;
    margin-top: 20px;
    
    padding: 11px;
    }
    .stars-wrapper{
          display: flex;
          margin-top: 25px;
           text-align: right;
    color: white;
    font-size: 12px;
   
    }
    .director-wrapper{
        display: flex;
    margin-top: 7px;
    color: white;
    font-size: 12px;
    }
    .links-wrapper{
        width: 50%;
            margin-top: 11px;
            color: white;
            text-align: right;
    }
  .fadeslick  button.slick-arrow {
          position: absolute;
    top: 70%;
    left: 54px;
    border: none;
    background: transparent;
    color: white;
    font-size: 50px;

}
.fadeslick button.custom-prev.slick-arrow {
    left: 119px;
}
/* .slick-next {
    left: 64px !important;
    right: auto;
}
.slick-prev::before, .slick-next::before {
    font-size: 60px !important;
} */
</style>
<section class="container-fluid px-0 d-none d-md-block">

    <div class="fadeslick">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="">
            <img class="slider-back-img w-100" src="<?php echo e(asset($slider->image)); ?>" alt="<?php echo e($slider->post->title); ?>">
            <div class="shadow-bottom-slider"></div>
            <div class="details" >
               
                <h4 class="title-detail">
                    <?php echo e($slider->post->title); ?>

                </h4>
                <div class="links-wrapper">
                    <?php echo str_limit($slider->post->description,250); ?>

                </div>
               <div class="d-flex">
                    <?php if($slider->post->type == 'movies'): ?>
                <a href="<?php echo e($slider->post->play()); ?>" class="bttn  ml-2">
                    <i class="fa fa-play"></i>
                    پخش فیلم
                </a>
                <?php endif; ?>
                <a href="<?php echo e($slider->post->path()); ?>" class="bttn ">
                    <i class="fa fa-exclamation"></i>
                    جزئیات بیشتر
                </a>
               </div>
               <div class="stars-wrapper">
                    <?php if(count($slider->post->actors)): ?>
                <h6>
                    ستارگان: </h6>
                <?php
                $countactors = count($slider->post->actors);
                ?>
                <h5>
                    <?php $__currentLoopData = $slider->post->actors->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span href="#">
                        <?php echo e($item->name); ?>

                        <?php echo e($key == ($countactors -1)  ? ' ' : ' - '); ?>

                    </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h5>


                <?php endif; ?>
               </div>
                <?php if($slider->post->directors): ?>
                <div class="director-wrapper">
                    کارگران:
                    <?php

                    $countdirectors = count($slider->post->directors);
                    ?>
                    <?php $__currentLoopData = $slider->post->directors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="text-white">

                        <?php echo e($item->name); ?>

                        <?php echo e($countdirectors -1  == $key ? ' ' : ' - '); ?>

                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Includes/Front/DesktopSlider.blade.php ENDPATH**/ ?>