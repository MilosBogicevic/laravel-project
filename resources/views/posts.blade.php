@extends('main')

@section('title', 'Posts')

@section('main-content')
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $key=>$value)
            <li><a href="/post/{{ $key }}">{{ $value }}</a></li>
        @endforeach
    </ul>
@endsection

