@extends('layouts.app_plane')
@section('content')
    <div class="card col-md-6 col-12 shadow">
        <div class="card-body">
            <div class="d-flex justify-content-center position-relative">
                <img src="./img/SG.png" class="auth-logo">
            </div>
            <h1 class="text-theme text-center mb-4 auth-title">
                Sign Up
            </h1>
            <div class="form">
                <form action="">
                    <div class="form-outline my-4">
                        <input type="text" id="text" class="form-control" autofocus />
                        <label class="form-label" for="text">Name</label>
                    </div>
                    <div class="form-outline my-4">
                        <input type="email" id="email" class="form-control" autofocus />
                        <label class="form-label" for="email">Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <button class="btn btn-theme btn-block" type="button">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-3 card-footer">
            <a href="{{ route('login') }}" class="mt-4">Sign Up Here</a>
        </div>
    </div>
    <div class="img-card col-md-6 d-flex justify-content-center">
        <img src="./img/employee.svg" style="width: 90%" />
    </div>
@endsection
