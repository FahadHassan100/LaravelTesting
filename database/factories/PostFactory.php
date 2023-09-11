<?php

namespace Database\Factories;

use App\Models\posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{


    //protected $model = \App\Models\posts::class;
    //protected $model = \App\Models\posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'body' => $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
