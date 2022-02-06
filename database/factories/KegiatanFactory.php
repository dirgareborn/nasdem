<?php

namespace Database\Factories;

use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KegiatanFactory extends Factory
{
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = 'App\Models\Kegiatan';
 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'image' => $this->faker->image('public/storage/kegiatan',640,480, null, false),
            'slug' => $this->faker->slug,
            'attendants' => $this->faker->name(),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'is_active' => $this->faker->boolean(),
            'location' => $this->faker->address(),
            

        ];
    }
}
