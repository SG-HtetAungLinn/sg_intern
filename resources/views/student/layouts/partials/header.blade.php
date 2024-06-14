<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Swipper -->
    <link rel="stylesheet" href="{{ asset('./css/swipper.min.css') }}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('./css/animate.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}" />
    @yield('css')
</head>

<body style="background-color: #eff7ff;">
    <header>
        <div class="topnav"></div>
        <nav class="navbar">
            <div class="">
                <div class="brand-title">Softguide</div>
                <span class="brand-sec-title">Software House</span>
            </div>
            <a href="javascript:void(0);" class="toggle-button" id="toggle-button">
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="{{ url('student') }}" title="Home">Home</a></li>
                    <li><a href="#" title="About">About</a></li>
                    <li><a href="#ourProject" title="Our Project">Our Project</a></li>
                    <li><a href="#" title="Contact">Contact</a></li>
                    <li><a href="#" title="Logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </nav>
    </header>

    <div class="overlay" id="overlay"></div>
    <div class="drawer" id="drawer">
        <a href="javascript:void(0);" class="close-button" id="close-button">
            <i class="fa-solid fa-times"></i>
        </a>
        <ul>
            <li><a href="#" class="btn btn-outline-secondary" title="Home">Home</a></li>
            <li><a href="#" class="btn btn-outline-secondary" title="About">About</a></li>
            <li><a href="#ourProject" class="btn btn-outline-secondary" title="Our Project">Our Project</a></li>
            <li><a href="#" class="btn btn-outline-secondary" title="Contact">Contact</a></li>
            <form action="">
                <li><a href="{{ route('logout') }}" class="btn btn-outline-secondary" title="Logout">Logout</a></li>
            </form>
        </ul>
    </div>
