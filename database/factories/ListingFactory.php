<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Software Engineer' , 
            'tags' => 'laravel, javascript' , 
            'company' => $this->faker->company(), 
            'location' => $this->faker->country() , 
            'email' => $this->faker->companyEmail(), 
            'website' => $this ->faker ->url(), 
            'description' => 'Anim veniam laborum voluptate dolor dolor 
            id ullamco duis nisi reprehenderit esse. Sint sit consectetur 
            aliqua sit cupidatat cupidatat nisi dolor consectetur irure consectetur. 
            Deserunt proident sunt velit ut laboris adipisicing deserunt pariatur.'
        ];
    }
}
