<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <base href="{{asset('')}}">
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet"/>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Trang
                        Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Lịch Sử Giao Dịch</a></li>
                {{--                <li class="nav-item dropdown">--}}
                {{--                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"--}}
                {{--                       data-bs-toggle="dropdown" aria-expanded="false">Danh Mục</a>--}}
                {{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--                        <li><a class="dropdown-item" href="#!">Lịch Sử giao dịch</a></li>--}}
                {{--                        <li>--}}
                {{--                            <hr class="dropdown-divider"/>--}}
                {{--                        </li>--}}
                {{--                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>--}}
                {{--                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
            {{--            <form class="d-flex">--}}
            {{--                <button class="btn btn-outline-dark" type="submit">--}}
            {{--                    <i class="bi-cart-fill me-1"></i>--}}
            {{--                    Cart--}}
            {{--                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>--}}
            {{--                </button>--}}
            {{--            </form>--}}
            {{--            <a class="btn btn-primary" href="#" role="button">Link</a>--}}
            {{--            <a href="{{ url('/dashboard') }}" lass="btn btn-outline-dark">Login</a>--}}
            @if (Route::has('login'))
                @auth
                    {{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
                    {{Auth::user()->name}}
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn btn-outline-primary">Đăng Ký</a>
                    @endif
                @endauth

            @endif
            {{--            <a class="navbar-brand btn btn-outline-primary" href="#!">Đăng Nhập</a>--}}
            {{--            <button type="button" class="btn btn-light">Light</button>--}}
            {{--            @if (Route::has('login'))--}}
            {{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
            {{--                    @auth--}}
            {{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
            {{--                    @else--}}
            {{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

            {{--                        @if (Route::has('register'))--}}
            {{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
            {{--                        @endif--}}
            {{--                    @endauth--}}
            {{--                </div>--}}
            {{--            @endif--}}

        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
@yield('content')
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="assets/js/scripts.js"></script>
</body>
</html>
