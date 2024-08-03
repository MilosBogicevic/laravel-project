<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view("blog", ["allPosts" => $allPosts]);
    }

    public static function convert($data)
    {
        return Carbon::parse($data)->format('d/m/Y');
    }
}
