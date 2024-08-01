@extends('main')

@section('title', 'Blog')

@section('main-content')
    <h1>Blog</h1>
    <ul>
        @foreach ($posts as $key=>$value)
            <li><a href="/post/{{ $key }}">{{ $value }}</a></li>
        @endforeach
    </ul>
@endsection

