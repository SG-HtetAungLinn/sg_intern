@extends('student.layouts.app')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    @if (isset($project))
        {{ $project->name }}
    @endif
    <h1>Details Page</h1>
@endsection

@section('script')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\LoginRequest') !!} --}}
@endsection
