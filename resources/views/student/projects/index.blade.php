@extends('student.layouts.app')
@section('css')
    <style>
.pagination{
    margin: 0 !important;

}
    </style>
@endsection
@section('content')
<div class="body-section">
<section class="ourProject">
    <div class="info-title" id="#ourProject">
        <h1>Our Project</h1>
    </div>
    <div class="row">
        @if (isset($projects))
            @foreach ($projects as $project)
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="{{ asset('img/students ('.$project->user->id.').jpg') }}" alt="" title="">
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
            @foreach ($projects as $project)
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="{{ asset('img/students ('.$project->user->id.').jpg') }}" alt="" title="">
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
            @foreach ($projects as $project)
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="{{ asset('img/students ('.$project->user->id.').jpg') }}" alt="" title="">
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
            @foreach ($projects as $project)
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="{{ asset('img/students ('.$project->user->id.').jpg') }}" alt="" title="">
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
            @foreach ($projects as $project)
                <div class="col-md-4 wow animate__animated animate__bounceInLeft mb-4">
                    <div class="card rounded-lg overflow-hidden project-card">
                        <img src="{{ asset('img/students ('.$project->user->id.').jpg') }}" alt="" title="">
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
            <div class="py-2 mb-4 bg-light">
                {{ $projects->links() }}
            </div>
        @else
            <div class="col-md-8 offset-md-2">
                <div class="bg-success text-light h1 p-5 text-center rounded shadow-lg">
                    There is no Project
                </div>
            </div>
        @endif
    </div>
</section>
</div>
@endsection

@section('script')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!} --}}
@endsection
