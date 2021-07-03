<?php

namespace Database\Factories;

use App\Models\chatMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

class chatMessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = chatMessage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'chat_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'message' => $this->faker->sentence($nbWords = 16, $variableNbWords = true),
        ];
    }
}
