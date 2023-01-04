<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> اعلام</title>

    <!-- Google font -->


    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">

    <!--  psge Icon -->
    <link rel="icon" href="{{ asset('img/Home/logo.png')}}">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('css/stylePage.css')}}" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light" >
            <div class="container">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Books.index')}}">جدول الكتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Writers.index')}}"> جدول الكاتب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Publishers.index')}}"> جدول الناشر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('genders.index')}}">جدول الفئة </a>
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
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    تسجيل خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <a class="navbar-brand" href="{{ route('home1')}}">
                    <img src="{{ asset('img/Home/logo.png')}}" width="65px" height="65px" class="d-inline-block " alt="">مكتبتي
                </a>
            </div>
        </nav>
<br>
<br>
<br>

            @yield('content')


</body>

</html>
