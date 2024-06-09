@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="">
            <div class="text-center mb-4">
                <form action="{{route('logout')}}" method="POST">
                    <a href="" class="btn btn-info text-center text-capitalize">Contact to Adminz</a>
                    @csrf
                    <button class="btn btn-danger text-capitalize">Logout</button>
                </form>
            </div>
            <h1 class="bg-danger text-light p-5 rounded">Please Wait Admin Accept Student.</h1>
        </div>
    </div>
@endsection