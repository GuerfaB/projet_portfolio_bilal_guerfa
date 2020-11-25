<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "photo"=>$this->faker->imageUrl(426, 240),
            "anniversaire"=>$this->faker->date("d-m-Y"),
            "website"=>$this->faker->companyEmail,
            "phone"=>$this->faker->phoneNumber,
            "city"=>$this->faker->city,
            "age"=>$this->faker->numberBetween(1,50),
            "degree"=>$this->faker->word(),
            "email"=>$this->faker->email,
            "freelance"=>$this->faker->word(),
            "text"=>$this->faker->text(50),

            
        ];
    }
}
