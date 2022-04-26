<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "John Khan",
            'email' => "john@gmail.com",
            'address' => "colombo 01",
            'telephone_no' => "446433446",
            'joined_date' => "2022-10-02",
            'current_route' => "colombo 02",
            'comments' => "hi..."
        ];
    }
}
