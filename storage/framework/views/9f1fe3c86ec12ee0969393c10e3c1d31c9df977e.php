<?php $__env->startSection('Title',$title); ?>


<?php $__env->startSection('content'); ?>


<?php echo $__env->make('Includes.Front.DesktopSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Includes.Front.MobileSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php if(isset($newsione) && count($newsione)): ?>
<section class="movie-sections">
    <h3>
        تازه های سیوان
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=newsione&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $newsione; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$new , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <?php $__env->startComponent('components.showDetail'); ?>
    <?php echo $__env->renderComponent(); ?>
</section>
<?php endif; ?>
<?php if(isset($updated_series) && count($updated_series)): ?>
<section class="movie-sections">
    <h3>
        سریال ها و مستندهای به روز شده
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=updated&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $updated_series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$serie , 'ajax'=>1,'updated'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>

<?php if(isset($latestdoble) && count($latestdoble)): ?>
<section class="movie-sections">
    <h3>
        فیلم های دوبله بدون سانسور
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=doble&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $latestdoble; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$post , 'ajax'=>1,'doble'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($newyear) && count($newyear)): ?>
<section class="movie-sections">
    <h3>
        <?php echo e($year); ?>

        <a href="<?php echo e(route('S.ShowMore')); ?>?c=<?php echo e($year); ?>&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $newyear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$post , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($newseries) && count($newseries)): ?>
<section class="movie-sections">
    <h3>
        سریال
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=new&type=serie">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $newseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$serie , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($animations) && count($animations)): ?>
<section class="movie-sections">
    <h3>
        انیمیشن
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=animation&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $animations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$animation , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>



<?php if(isset($scifis) && count($scifis)): ?>
<section class="movie-sections">
    <h3>
        ابر قهرمانی
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=sci-fi&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $scifis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scifi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$scifi , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($documentaries) && count($documentaries)): ?>
<section class="movie-sections">
    <h3>
        مستند
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=new&type=documentary">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $documentaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$documentary , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>

<?php if(isset($collections) && count($collections)): ?>
<section class="movie-sections">
    <h3>
        مجموعه فیلم ها
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=collections&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>

    <div class="row flex-nowrap">
        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 ">
            <?php $__env->startComponent('components.collection',['collection'=>$collection , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($actions) && count($actions)): ?>
<section class="movie-sections">
    <h3>
        اکشن
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=action&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$action , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>

<?php if(isset($horrors) && count($horrors)): ?>
<section class="movie-sections">
    <h3>
        ترسناک
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=horror&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $horrors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horror): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$horror , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>

<?php if(isset($comedies) && count($comedies)): ?>
<section class="movie-sections">
    <h3>
        کمدی
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=comedy&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $comedies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comedy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$comedy , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</section>
<?php endif; ?>


<?php if(isset($top250) && count($top250)): ?>
<section class="movie-sections">
    <h3>
        برترین فیلم های Imdb
        <a href="<?php echo e(route('S.ShowMore')); ?>?c=top250&type=all">
            مشاهده همه
            <i class="fa fa-angle-left"></i>
        </a>
    </h3>
    <div class="row flex-nowrap">
        <?php $__currentLoopData = $top250; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class=" mx-2 mw-180">
            <?php $__env->startComponent('components.article',['model'=>$post , 'ajax'=>1]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>


</section>
<?php endif; ?>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Front/index.blade.php ENDPATH**/ ?>