@extends('layouts.main')

@section('container')

    <h1>About Page</h1>
    <h3>All About Me</h3>
    <p>A student from SMKN 1 Denpasar</p>
    <p>i like all about technology</p>
    <img src="img/{{ $image }}" alt="{{ $image }}">

@endsection
