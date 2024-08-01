<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public $posts = [
        "1" => "First post",
        "2" => "Second post",
        "3" => "Third post"
    ];

    public function index()
    {
        return view('posts', ["posts" => $this->posts]);
    }

    public function show($id)
    {
        if (key_exists($id, $this->posts)) {
            $post = $this->posts[$id];

            return view("post", ["post" => $post, "title" => $post]);
        } else {
            abort(404, "Post not found");
        }
    }
}
