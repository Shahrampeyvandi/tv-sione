<?php $__env->startSection('Title',$title); ?>


<?php $__env->startSection('content'); ?>


<?php echo $__env->make('Includes.Front.TopSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(isset($posts)): ?>
<section class="movie-sections mt-8">
    <h3>
        <?php echo e($category_name); ?>


    </h3>
    <div class="swiper-container">
        <div class="row">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-2">
                <?php $__env->startComponent('components.article',['model'=>$post]); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php $__env->startComponent('components.showDetail'); ?>
    <?php echo $__env->renderComponent(); ?>

</section>
<?php endif; ?>


<?php echo e($posts->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Front/showCategory.blade.php ENDPATH**/ ?>