<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2,
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_no' => rand(1111111, 9999999),
            'message' => $this->faker->text(100),
        ];
    }
}
