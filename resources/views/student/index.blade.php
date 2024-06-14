@extends('student.layouts.app')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./img/students (1).jpg" alt="image 1">
            </div>
            <div class="swiper-slide">
                <img src="./img/students (2).jpg" alt="image 1">
            </div>
            <div class="swiper-slide">
                <img src="./img/students (3).jpg" alt="image 1">
            </div>
            <div class="swiper-slide">
                <img src="./img/students (4).jpg" alt="image 1">
            </div>
            <div class="swiper-slide">
                <img src="./img/students (5).jpg" alt="image 1">
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
                        <p class="card-info">Content Managemnet System ကို အခြေခံ၍ ဆန်းသစ်သော template များ ၊
                            ဆွဲဆောင်မှုရှိသော theme များဖြင့် website အား ဖန်တီးပေးခြင်း</p>
                        <button class="btn btn-theme mt-3" title="More Info" style="float: inline-end">More Info</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><i class="fa-regular fa-circle-check"></i></div>
                        <h1 class="card-title">စွမ်းဆောင်နိုင်မှု</h1>
                        <p class="card-info">Google Map နှင့် Facebook ပေါ်တွင် မိမိတို့၏လုပ်ငန်း တည်နေရာနှင့်
                            အချက်အလက်များကို ထည့်သွင်းပေးခြင်း</p>
                        <button class="btn btn-theme mt-3" title="More Info" style="float: inline-end">More Info</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><i class="fa-solid fa-desktop"></i></div>
                        <h1 class="card-title">RESPONSIVE အထောက်ပံ့</h1>
                        <p class="card-info">မည်သည့် device တွင်မဆို ၊ မည်သည့် screen အမျိုးအစားတွင်မဆို ကြည့်ရှု၍
                            အဆင်ပြေနိုင်အောင် ရေးဆွဲပေးခြင်း</p>
                        <button class="btn btn-theme mt-3" title="More Info" style="float: inline-end">More Info</button>
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
                @if (isset($projects))
                    @foreach ($projects as $project)
                        <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                            <div class="card rounded-lg overflow-hidden project-card">
                                <img src="./img/students ({{ $project->user->id }}).jpg" alt="" title="">
                                <div class="project_info">
                                    <div class="project_title">
                                        {{ $project->name }}
                                    </div>
                                    <div>
                                        <a href="{{ route('projectDetails', $project->user->id) }}" title="Project Details"
                                            class="btn btn-sm btn-theme"><i class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-8 offset-md-2">
                        <div class="bg-success text-light h1 p-5 text-center rounded shadow-lg">
                            There is no Project
                        </div>
                    </div>
                @endif
                {{-- <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="./img/students (1).jpg" alt="" title="">
                        <div class="project_info">
                            <div class="project_title">
                                Project name is here
                            </div>
                            <div>
                                <a href="{{ route('projectDetails', Auth::user()->id) }}" title="Project Details"
                                    class="btn btn-sm btn-theme"><i class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="./img/students (2).jpg" alt="" title="">
                        <div class="project_info">
                            <div class="project_title">
                                Project name is here
                            </div>
                            <div>
                                <a href="" title="Project Details" class="btn btn-sm btn-theme"><i
                                        class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="./img/students (3).jpg" alt="" title="">
                        <div class="project_info">
                            <div class="project_title">
                                Project name is here
                            </div>
                            <div>
                                <a href="" title="Project Details" class="btn btn-sm btn-theme"><i
                                        class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="./img/students (4).jpg" alt="" title="">
                        <div class="project_info">
                            <div class="project_title">
                                Project name is here
                            </div>
                            <div>
                                <a href="" title="Project Details" class="btn btn-sm btn-theme"><i
                                        class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="./img/students (5).jpg" alt="" title="">
                        <div class="project_info">
                            <div class="project_title">
                                Project name is here
                            </div>
                            <div>
                                <a href="" title="Project Details" class="btn btn-sm btn-theme"><i
                                        class="fa-solid fa-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        <!-- Our Project End -->
    </div>
@endsection

@section('script')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!} --}}
@endsection
