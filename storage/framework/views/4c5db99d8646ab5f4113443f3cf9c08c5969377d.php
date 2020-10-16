<header>
    <div class="cover-menu"></div>
    <nav class="siteNav">
        <div class="navBar">
            <div class="menu-button">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="navList">
                <li class="navItem logo">
                    <a href="<?php echo e(route('MainUrl')); ?>">
                        SiOne
                    </a>
                </li>
                <li class="navItem">
                    <a href="<?php echo e(route('MainUrl')); ?>" class="
                        <?php if(\Request::route()->getName() == "MainUrl"): ?> <?php echo e('active-nav'); ?> <?php endif; ?> ">
                            <i class=" far fa-home"></i>
                        خانه
                    </a>
                </li>
                <li class="navItem">
                    <a href="<?php echo e(route('AllMovies')); ?>" class="
                    <?php if(\Request::route()->getName() == "AllMovies"): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="far fa-camera-movie"></i>
                        فیلم
                    </a>
                </li>
                <li class="navItem">
                    <a href="<?php echo e(route('AllSeries')); ?>" class="
                    <?php if(\Request::route()->getName() == "AllSeries"): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="fa fa-tv"></i>
                        سریال
                    </a>
                </li>
                 <li class="navItem">
                    <a href="<?php echo e(route('AllDocumentaries')); ?>" class="
                    <?php if(\Request::route()->getName() == "AllDocumentaries"): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="fa fa-tv"></i>
                        مستند
                    </a>
                </li>
                <li class="navItem">
                    <a href="<?php echo e(route('Categories')); ?>" class="
                    <?php if(\Request::route()->getName() == "Categories"): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="fa fa-cloud"></i>
                        دسته بندی
                    </a>
                </li>
                  <li class="navItem">
                    <a href="<?php echo e(route('S.ShowMore')); ?>?c=collections&type=all" class="
                    <?php if(request()->has('c') && request()->c == 'collections'): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="fa fa-cloud"></i>
                        کالکشن
                    </a>
                </li>

               
                <li class="navItem">
                    <a href="<?php echo e(route('CommingSoon')); ?>" class="
                    <?php if(\Request::route()->getName() == "CommingSoon"): ?> <?php echo e('active-nav'); ?> <?php endif; ?>">
                        <i class="fa fa-child"></i>
                        به زودی
                    </a>
                </li>

                
            </ul>
            <div class="menu-item-left_nav">
                <!--                <div class="login-register">-->
                <!--                    <a href="login_register.html">-->
                <!--                        ورود / ثبت نام-->
                <!--                    </a>-->
                <!--                </div>-->
                <div class="user-login-show">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="profile-dropdown-box hidden">
                    <ul>
                        <li>
                            <a href="<?php echo e(route('S.Account')); ?>">
                                <i class="fa fa-user-circle"></i>
                                <span>
                                    <?php if(isset($user)): ?>
                                    <?php echo e($user->name()); ?>

                                    <?php endif; ?>
                                </span>
                            </a>
                        </li>
                        
                        <li>
                        <a href="<?php echo e(route('S.MyFavorite')); ?>">
                                <i class="fa fa-list"></i>
                                <span>
                                    لیست من
                                </span>
                            </a>
                        </li>

                         <li>
                        <a href="<?php echo e(route('MovieRequest')); ?>">
                                <i class="fa fa-film"></i>
                                <span>
                                    درخواست فیلم
                                </span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="<?php echo e(route('logout-user')); ?>">
                                <i class="fa fa-power-off"></i>
                                <span>
                                    خروج
                                </span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
              
                <div id="search-box">
                    <i class="far fa-search"></i>
                </div>
                <?php echo $__env->make('Includes.Front.Search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </nav>
</header><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Includes/Front/Header.blade.php ENDPATH**/ ?>