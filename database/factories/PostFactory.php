<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * ポストモデルクラス
     */
    protected $post = Post::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s', 'now'),
            'subject' => $this->faker->realText(16),
            // 16文字のテキスト
            'message' => $this->faker->realText(200),
            // 200文字のテキスト
            'name' => $this->faker->name,
            // 氏名
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}