<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Todo;

class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Todo::class;

    public function definition()
    {

            $title = $this->faker->sentence(3,7);
        return [
            'gorev' => $title,
        ];
    }
}
