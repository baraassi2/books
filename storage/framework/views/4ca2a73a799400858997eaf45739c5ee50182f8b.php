<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Google font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo|Oswald&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Reem+Kufi&display=swap">
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />

    <!-- normalize -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">

    <!--  psge Icon -->
    <link rel="icon" href="<?php echo e(asset('img/Home/logo.png')); ?>">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/stylePage.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
</head>

<body>

    <!--Start Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home1')); ?>">الصفحة الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('download_now')); ?>"> حمل الان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">تفصيل الكتب</a>
                    </li>
                    <li class="nav-item">
                    </li>

                </ul>
            </div>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <a class="nav-link" href="<?php echo e(route('login')); ?>">تسجيل دخول</a>
            <?php if(Route::has('register')): ?>
            <a class="nav-link" href="<?php echo e(route('register')); ?>">تسجيل الاشتراك</a>

            <?php endif; ?>
            <a class="navbar-brand" href="<?php echo e(route('home1')); ?>">
                <img src="<?php echo e(asset('img/Home/logo.png')); ?>" width="65px" height="65px" class="d-inline-block " alt="">مكتبتي
            </a>
        </div>
    </nav>
<?php /**PATH C:\xampp\htdocs\laraval\login\resources\views////main/header.blade.php ENDPATH**/ ?>