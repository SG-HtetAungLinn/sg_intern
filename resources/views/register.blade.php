@extends('layouts.app_plane')
@section('css')
    <style>
        .is-invalid .invalid-feedback {
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
                Sign Up
            </h1>
            <div class="form">
                <form action="{{route('userRegister')}}" method="POST" id="register-form">
                    @csrf
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}" autofocus />
                            <label class="form-label" for="name">Name</label>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="email" id="email" class="form-control" name="email" value="{{old('email')}}"/>
                            <label class="form-label" for="email">Email address</label>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="text" id="school" class="form-control" name="school" value="{{old('school')}}"/>
                            <label class="form-label" for="school">School</label>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="text" id="education" class="form-control" name="education" value="{{old('education')}}"/>
                            <label class="form-label" for="education">Education</label>
                        </div>
                    </div>
                    
                    <div style="margin: 2rem 0">
                        <div class="form-group">
                            <select name="gender"  class="form-control">
                                <option value="">Please Choose Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <textarea class="form-control" id="address" name="address" rows="1">{{old('address')}}</textarea>
                            <label class="form-label" for="address">Address</label>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="password" id="password" class="form-control" name="password" />
                            <label class="form-label" for="password">Password</label>
                        </div>
                    </div>
                    <div style="margin: 2rem 0">
                        <div class="form-outline">
                            <input type="password" id="password" class="form-control" name="confirmPassword"/>
                            <label class="form-label" for="password">Confirm Password</label>
                        </div>
                    </div>
                    <div class="my-4">
                        <div class="form-outline">
                            <button class="btn btn-theme btn-block">
                                Register
                            </button>
                        </div>
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

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\RegisterRequest') !!}
@endsection