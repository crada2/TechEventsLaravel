<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            'title' => $this->faker-> company(),
            'img' => $this->faker-> imageUrl(),
            'text' => $this->faker-> realtext(),
            'date_time' => $this->faker-> dateTime(),
            'users_max' => $this->faker-> numberBetween(10,20),
        ];
    }
}
