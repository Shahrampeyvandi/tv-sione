<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> sione | ورود</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Add the slick-theme.css if you want default styling -->
    

</head>
<style>
    /*Login register page*/
    .main_login_register {
        box-shadow: 0 10rem 2rem 2rem inset rgba(0, 0, 0, 0.15);
        width: 100%;
        height: 100%;
        padding: 2rem;
        background-size: 100%;
    }

    #loginForm,
    #registerForm {
        background: #222327;
        width: 33%;
        margin: 2rem auto;
        padding: 2rem 3rem;
        text-align: right;
        border-radius: 0.5rem;
        display: block;
    }

    #registerForm {
        display: none;
    }

    #loginForm h1,
    #registerForm h1 {
        color: #ffffff;
        font-size: 1.2rem;
        margin: 2rem 0;
        cursor: default;
    }

    #loginForm h3,
    #registerForm h3 {
        color: #aaaaaa;
        font-size: 0.75rem;
        margin: 2rem 0;
        cursor: default;
    }

    .input-place {
        position: relative;
        margin: 2rem 0;
    }

    .input-place label {
        position: absolute;
        display: block;
        top: -2rem;
        right:0;
        color: white;
    }

    .input-place input {
        display: block;
        margin: 4rem auto;
        color: rgb(255, 255, 255);
        width: 100%;
        border: 1px solid transparent;
        font-size: 16px;
        text-align: right;
        background-color: rgb(55, 56, 62);
        box-shadow: rgb(55, 56, 62) 0 0 0 1000px inset;
        padding: 0.75rem 0.5rem;
        border-radius: 0.5rem;
        direction: ltr;
    }

    .input-place input+label {

        display: block;
        color: #ff9090;
        position: absolute;
        top: 53px;
        
        font-size: 12px;
    }

    .input-place input::placeholder {
        color: #aaaaaa;
    }

    .submit_login {
        display: block;
        margin: 0 auto 1rem auto;
        background: #1993ff;
        width: 100%;
        padding: 0.5rem 0;
        border: none;
        color: #ffffff;
        border-radius: 0.5rem;
    }

    .submit_login .btn--ripple-ink {
        background: #0d4d86;
    }

    .forget-pass {
        font-size: 12px;
        color: #ffffff;
        text-align: center;
        display: block;
        margin: 2rem auto 0 auto;
        width: max-content;
    }

    .changeMood {
        color: #ffffff;
        font-size: 12px;
        display: block;
        width: max-content;
        text-align: center;
        margin: 1rem auto 0 auto;
        cursor: pointer;
    }

    .btn-loader-place {
        width: 30%;
        margin: auto;
        text-align: center;
    }

    .register-form-load,
    .login-form-load {
        padding: 0.5rem 1rem;
        background: transparent;
        color: #ffffff;
        border: 1px solid #ffffff;
        border-radius: 0.5rem;
        display: inline-block;
    }

    .register-form-load .btn--ripple-ink,
    .login-form-load .btn--ripple-ink {
        background-color: #ffffff;
    }

    .submit_register {
        display: block;
        margin: 0 auto 1rem auto;
        background: #aaaaaa;
        width: 100%;
        padding: 0.5rem 0;
        border: none;
        color: #ffffff;
        border-radius: 0.5rem;
    }

    .submit_register .btn--ripple-ink {
        background: #5b5b5b;
    }

    .btn-loader-place h1 a {
        color: #ffffff;
        display: block;
        margin: 1rem auto;
    }

    #fName,
    #lName {
        direction: rtl;
        text-align: right;
    }

    /*category page*/
    .category {
        margin: 5rem auto 0.5rem auto;
        width: 95%;
    }

    .category-box {
        padding: 0.2rem 0.5rem;
        position: relative;
    }

    .category-box h3 {
        position: absolute;
        top: 40%;
        margin-right: 1rem;
        font-size: 1.4rem;
        color: #ffffff;
    }

    .category-box img {
        width: 100%;
        border-radius: 0.5rem;
    }

    .category .container-fluid .row div[class*="col-"] {
        padding: 0;
    }
    label{
        text-align: right;
    }
</style>

<body>
    <div class="row h-100">
        <div class="col-md-12">
            <section class="main_login_register"
                style="background-image:radial-gradient(at bottom, #1993ff, #121212 70%);">
                 <div class="btn-loader-place">
                <h1>
                    <a href="<?php echo e(route('MainUrl')); ?>">
                        <img class="site-logo" src="<?php echo e(asset('assets/images/aa-300x157.png')); ?>" alt="site-logo">
                    </a>
                </h1>
               
            </div>
                <form action="<?php echo e(route('login')); ?>" method="post" id="loginForm" class="loginform">
                    <?php echo csrf_field(); ?>
                    <?php if(count($errors)): ?>
                    <h1>
                        <?php echo e($errors->first()); ?>

                    </h1>
                    <?php endif; ?>
                    <h3>
                        لطفا شماره تلفن خود و رمز عبور را وارد نمایید
                    </h3>
                    <div class="input-place">
                        <label for="Mobile">
                            شماره تلفن همراه
                        </label>
                        <input type="tex" id="mobile" name="mobile" autocomplete="off" dir="rtl" <?php if($phone): ?>
                            value="<?php echo e($phone); ?>" <?php endif; ?> placeholder="+98**********">
                    </div>
                    <div class="input-place">
                        <label for="password">
                            رمز عبور
                        </label>
                        <input type="password" id="password" <?php if($password): ?> value="<?php echo e($password); ?>" <?php endif; ?> name="password"
                            autocomplete="off" dir="rtl">
                    </div>
                    <button class="submit_login btn--ripple" type="submit">
                        ورود
                    </button>
                 
                </form>
            </section>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Front/login.blade.php ENDPATH**/ ?>