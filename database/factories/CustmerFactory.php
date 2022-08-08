<?php

namespace Database\Factories;

use App\Models\Custmer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Custmer::class;

    public function definition()
    {
        return [
        'name' => $this->faker->name(),
        'Father_name' => $this->faker->name(),
        'CNIC' =>$this->faker->numberBetween(12, 1200),
        'phone'=> $this->faker->numerify('+9230###'),
        'address' => $this->faker->address,
        'email'=> $this->faker->unique()->safeEmail(),
        'deleted_at'=>$this->faker->date(),
        ];
    }
}
