<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/range-slider/css/ion.rangeSlider.min.css')); ?>" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.css')); ?>">
    <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.css" rel="stylesheet">
    <style>
        .show {
            display: block !important;
        }

        .hidden {
            display: none !important;
        }
    </style>

    <?php echo $__env->yieldContent('css'); ?>
    <script>
        var mainUrl = "<?php echo e(route('MainUrl')); ?>";
    </script>

    <meta charset="UTF-8">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> sione | <?php echo $__env->yieldContent('Title'); ?></title>
</head>


<body <?php if(\Request::route()->getName() == "S.SiteSharing" || \Request::route()->getName() == "S.Account" ||
    \Request::route()->getName() == "S.OrderLists" || \Request::route()->getName() == "MovieRequest"): ?>
    class="site-sharing"
    <?php endif; ?>>




    <?php if(\Request::route()->getName() !== "login" && \Request::route()->getName() !== "forgetpass" &&
    \Request::route()->getName() !== "forgetpass.submitCode" && \Request::route()->getName() !==
    "forgetpass.submitNewPass"

    ): ?>
    <?php echo $__env->make('Includes.Front.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php if(\Request::route()->getName() !== "login" && \Request::route()->getName() !== "S.SiteSharing" &&
    \Request::route()->getName() !== "S.OrderLists" && \Request::route()->getName() !== "forgetpass" &&
    \Request::route()->getName() !== "forgetpass.submitCode" && \Request::route()->getName() !==
    "forgetpass.submitNewPass"
    && \Request::route()->getName() !== "S.Account" && \Request::route()->getName() !== "MovieRequest"
    ): ?>
    <?php echo $__env->make('Includes.Front.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <script src="<?php echo e(asset('frontend/assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/jquery-validate/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/all.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.2.0/dist/jBox.all.min.js"></script>
    <script src="<?php echo e(asset('frontend/assets/js/index.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
    <!-- begin::range slider -->
    <script src="<?php echo e(asset('assets/vendors/range-slider/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/examples/range-slider.js')); ?>"></script>
    <!-- end::range slider -->
    <?php echo app('toastr')->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
    <script>
        var el = document.querySelector('.user-login-show')
        var box = document.querySelector('.profile-dropdown-box')
        el.addEventListener('click',function(){
            if(box.classList.contains('hidden'))
            {
                box.classList.remove('hidden')
                                box.classList.add('show')
            }else{
                 box.classList.remove('show')
                                box.classList.add('hidden')
            }
        })
    //      $(".user-login-show").on("click", function() {
    //     let status = $(".profile-dropdown-box").css("display");
    //     if (status === "none") {
    //         $(".profile-dropdown-box").fadeIn(300);
    //     } else {
    //         $(".profile-dropdown-box").hide();
    //     }
    // });
    </script>

</body>

</html><?php /**PATH C:\xampp1\htdocs\sione\resources\views/Layout/Front.blade.php ENDPATH**/ ?>