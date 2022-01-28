<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Item::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'quantity' => $this->faker->quantity,
            'type' => $this->faker->type,
            
        ];
    }
}
