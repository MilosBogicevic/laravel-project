@extends('main')
@section('title', 'Posts')
@section('main-content')
    <h1>Posts</h1>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach
@endsection

