<?php

namespace Database\Factories;

use App\Models\Bundle;
use Illuminate\Database\Eloquent\Factories\Factory;

class BundleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bundle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'trained_at' => now()
        ];
    }
}
