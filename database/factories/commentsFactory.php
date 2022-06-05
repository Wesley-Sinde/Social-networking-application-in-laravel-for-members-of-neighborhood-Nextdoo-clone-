<?php

namespace Database\Factories;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comments>
 */
class commentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Comments::class;
    public function definition()
    {
        return [
            // 'name' => $this->faker->name,
            // 'description' => $this->faker->text

            'user_id' => 1,
            'post_id' => $this->faker->numberBetween($min = 1, $max = 110),
            'Comment' => $this->faker->text,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
