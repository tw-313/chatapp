<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータを生成してPostsとCommentsを作成
        Post::factory(50)->create()->each(function ($post) {
            $comments = Comment::factory(2)->make();
            $post->comments()->saveMany($comments);
        });
    }
}