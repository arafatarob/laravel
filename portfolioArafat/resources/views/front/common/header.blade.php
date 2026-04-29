<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designer || Md Arafat</title>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link rel="shortcut icon" href="./img/site-logo/logo.jpg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('/assets/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/portfolio.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

</head>

<body>



    <!-- header area -->

    <header id="top">
        <div class="menu-bar">
            <div class="container">
                <div class="row">
                    <div class="col-5 col-md-2 col-sm-3">
                        <div class="navbar-logo d-flex align-items-center">
                            <a href="{{route('home')}}"><i class="fa-solid fa-crown"></i> arafat</a>
                        </div>
                    </div>
                    <div class="col-7 col-md-10 col-sm-9">
                        <div class="menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="navbar-menu">

                            <ul>
                                <li><a class="active" href="{{route('home')}}">home</a></li>
                                <li><a href="{{ route('home') }}#aboutMe">about me</a></li>
                                <li><a href="{{ route('home') }}#project">projects</a></li>
                                <li><a href="{{ route('home') }}#service">services</a></li>
                                <li><a href="{{ route('portfolio') }}">portfolio</a></li>
                                <li class="signup"><a href="">signup <i class="fa-solid fa-sort-down"></i> </a>
                                    <ul id="dropdown">
                                        <li><a href="{{ route('login') }}">login</a></li>
                                        <li><a href="{{ route('register') }}">register</a></li>
                                    </ul>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>