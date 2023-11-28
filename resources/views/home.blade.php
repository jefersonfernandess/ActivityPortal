@extends('layout.master')

@section('title', 'Home - ActivityControl')

@section('content')
    <h1>Welcome Home</h1>
    <a href="{{ route('teacher.create') }}">Register teacher</a>
@endsection