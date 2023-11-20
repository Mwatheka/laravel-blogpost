<?php

namespace Database\Factories;

use App\Models\BlogPost; // Import the BlogPost model
use App\Models\User; // Import the User model
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(30),
            'user_id' => User::factory(), // Create a User and use its ID
        ];
    }
}
