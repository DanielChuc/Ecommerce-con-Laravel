<?php

namespace Database\Factories;

use App\Models\subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class subcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'image' => 'subcategories/'.$this->faker->image('public/storage/subcategories', 640, 480, null, false),
        ];
    }
}
