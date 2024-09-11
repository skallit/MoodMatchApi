<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Review;
use App\Models\TypeEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "place" => $this->faker->name(),
            "date" => $this->faker->date(),
            "peopleLimit" => $this->faker->numberBetween(0,500),
            "ageRequired" => $this->faker->numberBetween(13,21),
            "price" => $this->faker->randomFloat("",0,1000000),
            "typeEvent_id" => TypeEvent::inRandomOrder()->first()->id,
            "categorie_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
