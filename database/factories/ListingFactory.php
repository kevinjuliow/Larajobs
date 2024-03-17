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
            'description' => 'Consequat dolore nostrud culpa dolore officia laborum irure culpa non proident. Reprehenderit consectetur ad est cillum consequat do eiusmod. Consequat aliquip et eu sunt excepteur aute ex sint tempor ullamco mollit elit. Cillum ullamco ea consequat magna non consequat labore ad id exercitation occaecat excepteur. Dolore excepteur ad fugiat do in ut culpa. Eu irure in deserunt irure aliqua occaecat reprehenderit. Commodo pariatur pariatur reprehenderit culpa ut ex ut excepteur minim.

Nostrud magna cillum deserunt exercitation officia exercitation veniam proident. Lorem laborum tempor consequat excepteur dolore occaecat aliqua nisi. Consectetur aute nisi cupidatat sunt culpa nostrud. Ad Lorem ea ex ut laboris dolor deserunt cupidatat do aliqua. Eu adipisicing non occaecat nostrud sint eu non ipsum veniam.'
        ];
    }
}
