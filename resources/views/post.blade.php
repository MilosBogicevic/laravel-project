@php
    use \App\Http\Controllers\PostController;
@endphp

@section('title', $post->title)

@extends('layout')

@section('main')
    <div class="flex w-full">
        <div class="flex flex-col ">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <span>{{ $post->author }}</span>
            <span>{{ PostController::convert($post->created_at) }}</span>
        </div>
    </div>
@endsection