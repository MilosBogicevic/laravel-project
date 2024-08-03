<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = new Post();
        $post1->title = "First post";
        $post1->content = "First random text";
        $post1->author = "Milos";
        $post1->save();

        $post2 = new Post();
        $post2->title = "Second post";
        $post2->content = "Second random text";
        $post2->author = "Milos";
        $post2->save();
    }
}
