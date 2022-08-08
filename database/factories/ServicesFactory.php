<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Services::class;

    public function definition()
    {
        return
        [
        'feedback'=>$this->faker->sentence(6),
        'water'=>$this->faker->randomElement(['pure Water','coke','Fanta','Sprite']),
        'food_product'=>$this->faker->randomElement(['biscut','Lays','Cake']),
        'deleted_at'=>$this->faker->date('Y-m-d'),
        ];
    }
}
