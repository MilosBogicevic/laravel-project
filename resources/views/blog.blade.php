@php
    use \App\Http\Controllers\PostController;
@endphp

@section('title', 'Blog')

@extends('layout')

@section('main')
    <h1>Blog</h1>
    <div class="flex justify-center gap-x-8">
        @foreach ($allPosts as $post)
            <a href="/blog/{{ $post->id }}" class="bg-gray-100 p-4 w-1/3">
                <div class="flex flex-col ">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <span>{{ $post->author }}</span>
                    <span>{{ PostController::convert($post->created_at) }}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection

