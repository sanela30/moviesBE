<?php

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

$factory->define(App\Movie::class, function (Faker $faker) {

    $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);

    return [
        'name' => $faker->text(50),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl(),
        'duration'=> $faker->numberBetween(60, 200),
        'releaseDate'=> $faker->date(),
        'genres' => $values->random(3)
    ];
});
