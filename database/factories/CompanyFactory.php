<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'company_type' => $this->faker->name(),
            'phone_no' => $this->faker->numberBetween(11111111,99999999),
            'address' => $this->faker->text(100),
            'no_of_employee' => $this->faker->numberBetween(1,9),
            'history' => $this->faker->text(100),
            'description' => $this->faker->text(100),
            'contact_information' => $this->faker->text(50),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
