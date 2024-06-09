@extends('layouts.app')
@section('css')
    <style>
        
    </style>
@endsection
@section('content')
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
                <li><a href="#" title="Home">Home</a></li>
                <li><a href="#" title="About">About</a></li>
                <li><a href="#ourProject" title="Our Project">Our Project</a></li>
                <li><a href="#" title="Contact">Contact</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><button class="" title="Logout">Logout</button></li>
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

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="./img/cover_1.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_2.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_3.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_4.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_5.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_6.jpg" alt="image 1">
        </div>
        <div class="swiper-slide">
            <img src="./img/cover_7.jpg" alt="image 1">
        </div>

    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="body-section">
    <div class="row mt-5">
        <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <h1 class="card-title">ဆန်းသစ်သော DESIGN</h1>
                    <p class="card-info">Content Managemnet System ကို အခြေခံ၍ ဆန်းသစ်သော template များ ၊ ဆွဲဆောင်မှုရှိသော theme များဖြင့် website အား ဖန်တီးပေးခြင်း</p>
                    <button class="btn btn-theme" title="More Info">More Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-icon"><i class="fa-regular fa-circle-check"></i></div>
                    <h1 class="card-title">စွမ်းဆောင်နိုင်မှု</h1>
                    <p class="card-info">Google Map နှင့် Facebook ပေါ်တွင် မိမိတို့၏လုပ်ငန်း တည်နေရာနှင့် အချက်အလက်များကို ထည့်သွင်းပေးခြင်း</p>
                    <button class="btn btn-theme" title="More Info">More Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-icon"><i class="fa-solid fa-desktop"></i></div>
                    <h1 class="card-title">RESPONSIVE အထောက်ပံ့</h1>
                    <p class="card-info">မည်သည့် device တွင်မဆို ၊ မည်သည့် screen အမျိုးအစားတွင်မဆို ကြည့်ရှု၍ အဆင်ပြေနိုင်အောင် ရေးဆွဲပေးခြင်း</p>
                    <button class="btn btn-theme" title="More Info">More Info</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project Start -->
    <section class="ourProject">
        <div class="info-title" id="#ourProject">
            <h1>Our Project</h1>
        </div>
        <div class="row">
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_1.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_2.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_3.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_4.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_5.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_6.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card rounded-lg overflow-hidden project-card" >
                    <img src="./img/cover_7.jpg" >
                    <div class="project_info">
                        <div class="project_title">
                            Project name is here
                        </div>
                        <a href="" class="btn btn-sm btn-theme">Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Project End -->
</div>
<footer class="footer">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="footer_logo">
                <h1><span>S</span>o<span>f</span>t<span>g</span>u<span>i</span>d<span>e</span></h1>
                <p class="footer_logo">Software House</p>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title">Information</h3>
            
        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title">Our Services</h3>
            
        </div>
        <div class="col-md-3 mb-3">
            <h3 class="footer_sub-title ">Contact Us</h3>
            <p class="row"><i class="fa-solid fa-phone-volume col-1 text-primary"></i> <span class="col-9">01-229264, 01-382180</span></p>
            <p class="row"><i class="fa-solid fa-envelope col-1 text-primary"></i> <span class="col-9">admin@softguidecomputer.com</span></p>
            <p class="row"><i class="fa-solid fa-location-dot col-1 text-primary"></i> <span class="col-9">Yangon, Kamayut, Hledan,<br> Pyay Road, 575B</span> </p>
        </div>
        
        <div class="col-12 text-center copyright">
            &copy; Copyright 2024 Softguide
        </div>
    </div>
</footer>
@endsection

@section('script')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!} --}}
@endsection
