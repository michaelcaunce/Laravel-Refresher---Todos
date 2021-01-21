<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [

        // Generate fake information for the name, description and completed columns in the database
        'name'        => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        
    ];
});
