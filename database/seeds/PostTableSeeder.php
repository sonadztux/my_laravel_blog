<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id = 2;
        $post->title = "First Testing Post";
        $post->body = "This is a first post for testing and learn laravel to create a blog cms";
        $post->save();
    }
}
