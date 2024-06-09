@extends('layouts.app_plane')
@section('css')
    <style>
        .invalid-message .invalid-feedback {
            margin-top: 37px !important;
        }
    </style>
@endsection
@section('content')
    <div class="card col-md-6 col-12 shadow">
        <div class="card-body">
            <div class="d-flex justify-content-center position-relative">
                <img src="./img/SG.png" class="auth-logo">
            </div>
            <h1 class="text-theme text-center mb-4 auth-title">
                Sign In
            </h1>
            <div class="form">
                <form action="{{ route('userLogin') }}" method="POST" id="login-form">
                    @csrf
                    <div class="form-outline " style="margin-bottom: 2rem">
                        <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" autofocus autocomplete="false"/>
                        <label class="form-label" for="email">Email address</label>
                    </div>
                    <div class="form-outline " style="margin-bottom: 2rem">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="form-outline mb-4" >
                        <button class="btn btn-theme btn-block">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-3 card-footer">
            <a href="{{ route('register') }}" class="mt-4">Sign Up Here</a>
        </div>
    </div>
    <div class="img-card col-md-6 d-flex justify-content-center">
        <img src="./img/employee.svg" style="width: 90%" />
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!}
    <script>
        @if(session('status'))
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Register Successfully! Please Login",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            });
        @endif
        @if (session('error')) 
        Swal.fire({
                position: "top-end",
                icon: "error",
                title: {{$error}},
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            });
        @endif
    </script>
@endsection
