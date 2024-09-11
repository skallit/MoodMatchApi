<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "content" => $this->faker->text,
            "user_id" => User::inRandomOrder()->first()->id,
            "event_id" => Event::inRandomOrder()->first()->id,
        ];
    }
}
