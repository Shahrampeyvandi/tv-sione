
<section class="head-film-cover">
    <div class="cover-img-movies_movie-Page"></div>
    <img src="<?php echo e(asset(unserialize($post->poster)['banner'])); ?>" alt="<?php echo e($post->title); ?>">
    <div class="movie-details-header">
        <h1>
            <?php echo e($post->title); ?>

        </h1>
        <h2 class="mt-2">
            <?php echo e($post->name); ?>

        </h2>
        <div class="details_details">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <div class="movie-year">
                            <?php echo e($post->year); ?>

                        </div>
                    </div>
                    <?php if($post->imdbRating): ?>
                    <div class="col-4">
                        <div class="IMDb_rank">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <b><strong>IMDb</strong></b>
                                    </div>
                                    <div class="col-6"><?php echo e($post->imdbRating); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-4">
                        <div class="movie-like">
                            <i class="fa fa-heart"></i>
                            93%
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="site-dubbing">
                            <?php if($post->checkDubleFarsi()): ?>
                            <i class="fa fa-microphone"></i>
                            دوبله فارسی
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-description">
            <?php echo html_entity_decode(str_limit($post->description,800), ENT_QUOTES, 'UTF-8'); ?>

        </div>
        <div class="list_like">
            <?php if(\DB::table('user_favorite')->where(['user_id' => $user->id, 'post_id' => $post->id])->first()): ?>
            <a href="#" onclick="addToFavorite(event,'<?php echo e($post->id); ?>','<?php echo e($post->favoritepath()); ?>')"
                class="addMovie_list text-white btn--blue">
                <i class="fa fa-check"></i>
                <?php else: ?>
                <a href="#" onclick="addToFavorite(event,'<?php echo e($post->id); ?>','<?php echo e($post->favoritepath()); ?>')"
                    class="addMovie_list text-white ">
                    <i class="fa fa-plus"></i>
                    افزودن به لیست
                    <?php endif; ?>
                </a>

                <?php if($post->type == 'movies'): ?>
                <a href="<?php echo e($post->play()); ?>" class="addMovie_list text-white ">
                    <i class="fa fa-play"></i>
                    پخش فیلم
                </a>
              
                <?php endif; ?>
              
                
        </div>

        <?php if(count($post->actors)): ?>
        <div class="movie-stars">
            ستارگان:
            <?php $__currentLoopData = $post->actors()->take(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="#">
                <?php echo e($actor->name); ?>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <?php if($post->type == 'series'): ?>
        <div class="publish-date mb-2">
            <?php if($post->first_publish_date): ?>
            <span>تاریخ اولین انتشار: </span><span
                class="ml-1"><?php echo e(\Carbon\Carbon::parse($post->first_publish_date)->format('d-m-Y')); ?></span>

            <?php endif; ?>
            <?php if($post->last_publish_date): ?>
            <span>تاریخ آخرین انتشار:
            </span><span><?php echo e(\Carbon\Carbon::parse($post->last_publish_date)->format('d-m-Y')); ?></span>

            <?php endif; ?>
        </div>
        <?php else: ?>
        <?php if($post->released): ?>
        <div class="publish-date mb-2">
            <span>تاریخ انتشار: </span><span
                class="ml-1"><?php echo e(\Carbon\Carbon::parse($post->released)->format('d-m-Y')); ?></span>

        </div>
        <?php endif; ?>
        <?php endif; ?>

        <div class="movie-age_rank">
            <?php if($post->age_rate): ?>
            <span>
                <?php echo e($post->get_age_rate()); ?>

            </span>
            <?php endif; ?>
            <?php if($post->post_status): ?>
            <span>
                <?php echo e($post->post_status); ?>

            </span>
            <?php endif; ?>

        </div>

    </div>



    <!-- scroll down -->
    <div class="mouse_scroll d-none d-md-block">

        <div class="mouse">
            <div class="wheel"></div>
        </div>
        <div>
            <span class="m_scroll_arrows unu"></span>
            <span class="m_scroll_arrows doi"></span>
            <span class="m_scroll_arrows trei"></span>
        </div>
    </div>
</section><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Includes/Front/TopPoster.blade.php ENDPATH**/ ?>