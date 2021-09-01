<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => Company::factory()->create(),
            'approved_user_id' => 1,
            'category_id' => Category::factory()->create(),
            'title' => $this->faker->name(),
            'employment_status' => $this->faker->name(),
            'address' => $this->faker->text(100),
            'salary' => $this->faker->numberBetween(1,9),
            'working_hour' => $this->faker->text(50),
            'requirement' => $this->faker->text(50),
            'contact_information' => $this->faker->text(50),
        ];
    }
}
