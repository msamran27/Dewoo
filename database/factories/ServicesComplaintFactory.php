<?php

namespace Database\Factories;


use App\Models\ServicesComplaint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = ServicesComplaint::class;

    public function definition()
    {
        return
        [
            'complaint'=>$this->faker->realText(200),
            'Driver_Complant'=>$this->faker->realText(200),
            'over_speed_complaint'=>$this->faker->realText(200),
            'Staff_Complaint'=>$this->faker->realText(200),
            'deleted_at'=>$this->faker->date(),
        ];
    }
}
