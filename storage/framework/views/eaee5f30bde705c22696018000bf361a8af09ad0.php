<a href="<?php echo e($model->path()); ?>"  >
    <div class="movie-sections-box">
        <div class="img-box-movies">
            <img src="<?php echo e(asset(unserialize($model->poster)['resize'])); ?>" alt="<?php echo e($model->name); ?>">
            <div class="cover-img-movies-details">
                <span>
                    <?php echo e($model->name); ?> -
                    <?php if($model->type == 'series' || $model->type == 'documentary'): ?>
                    <?php echo e(\Carbon\Carbon::parse($model->first_publish_date)->format('Y')); ?>

                    <?php else: ?>
                    <?php echo e(\Carbon\Carbon::parse($model->released)->format('Y')); ?>

                    <?php endif; ?>
                </span>
                <span>
                    <i class="fa fa-heart"></i>
                    89%
                </span>
                <?php if($model->imdbRating): ?>
                <span dir="ltr">
                    <?php echo e($model->imdbRating); ?> IMDB
                </span>
                <?php endif; ?>
            </div>
        </div>
        <h5>
            <?php echo e($model->title); ?>


        </h5>
        <?php if(isset($updated)): ?>
        <h6 class="show-updated">
            <?php echo e($model->last_updated()); ?>

        </h6>
        <?php endif; ?>
        <?php if(isset($doble)): ?>
        <h6 class="show-updated">
            <i class="fa fa-microphone"></i>
            دوبله سیوان
        </h6>
        <?php endif; ?>
    </div>
</a><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/components/article.blade.php ENDPATH**/ ?>