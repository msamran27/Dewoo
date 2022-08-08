<?php

namespace Database\Factories;

use App\Models\Complaint;
use App\Models\ServicesComplaint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Complaint::class;

    public function definition()
    {
        return[
        'complaint_id' => ServicesComplaint::all()->random()->id,
        'GenralComplaint'=>$this->faker->realText(10),
        'deleted_at'=>$this->faker->date(),
        ];
    }
}

