<?php

namespace Database\Factories;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
          return [
    'title' => $this->faker->title,
     'type'  => $this->faker->text,
    'category' => $this->faker->text,
    'description' => $this->faker->text,
    'email' => $this->faker->email,
    'website' => $this->faker->text 

 ];
        
    }
}
