@extends('layouts.app')
@section('title', 'Student Dashboard')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="text-center">
            <h1 class="m-5 bg-info rounded shadow p-4 text-light">Student</h1>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection
