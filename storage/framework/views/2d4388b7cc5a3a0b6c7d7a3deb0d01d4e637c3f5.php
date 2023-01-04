<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> اعلام</title>

    <!-- Google font -->


    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />

    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">

    <!--  psge Icon -->
    <link rel="icon" href="<?php echo e(asset('img/Home/logo.png')); ?>">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/stylePage.css')); ?>" />
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light" >
            <div class="container">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('Books.index')); ?>">جدول الكتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('Writers.index')); ?>"> جدول الكاتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('Publishers.index')); ?>"> جدول الناشر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('genders.index')); ?>">جدول الفئة </a>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    تسجيل خروج
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <a class="navbar-brand" href="<?php echo e(route('home1')); ?>">
                    <img src="<?php echo e(asset('img/Home/logo.png')); ?>" width="65px" height="65px" class="d-inline-block " alt="">مكتبتي
                </a>
            </div>
        </nav>
<br>
<br>
<br>

            <?php echo $__env->yieldContent('content'); ?>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\laraval\login\resources\views////layouts/app.blade.php ENDPATH**/ ?>