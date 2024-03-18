<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //This will create 10 dummy user (from database/factories/UserFactory.php)
        User::factory(5)->create();
        Listing::factory(5)->create();
        
        Listing::create([
            'title' => 'Laravel Senior Developer' , 
            'tags' => ' laravel , javascript , sql' , 
            'company' => 'Acme corp' , 
            'location' => 'United States' , 
            'email' => 'AcmeJobs@gmail.com' , 
            'website' => 'https://www.acme.com' , 
            'description' => 'Anim veniam laborum voluptate dolor dolor 
            id ullamco duis nisi reprehenderit esse. Sint sit consectetur 
            aliqua sit cupidatat cupidatat nisi dolor consectetur irure consectetur. 
            Deserunt proident sunt velit ut laboris adipisicing deserunt pariatur.'
        ]);
        Listing::create([
            'title' => 'Go Senior Developer' , 
            'tags' => ' go , sql' , 
            'company' => 'Google' , 
            'location' => 'Singapore' , 
            'email' => 'google@gmail.com' , 
            'website' => 'https://www.google.com' , 
            'description' => 'Anim veniam laborum voluptate dolor dolor 
            id ullamco duis nisi reprehenderit esse. Sint sit consectetur 
            aliqua sit cupidatat cupidatat nisi dolor consectetur irure consectetur. 
            Deserunt proident sunt velit ut laboris adipisicing deserunt pariatur.'
        ]);
    }
}
