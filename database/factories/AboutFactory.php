<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\About;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =  About::class;
    public function definition()
    {
        return [
            'body' => '
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam vitae sed officiis pariatur nihil laborum necessitatibus
                ex expedita nisi labore, quas minus! Doloribus, libero omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam vitae sed officiis pariatur nihil laborum necessitatibus
                ex expedita nisi labore, quas minus! Doloribus, libero omnis.
            '
        ];
    }
}

