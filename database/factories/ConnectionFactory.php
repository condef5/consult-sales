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

$factory->define(App\Connection::class, function (Faker $faker) {
    return [
        'ruc' => $faker->numberBetween(10000000000,99999999999),
        'database' => $faker->domainWord,
    ];
});
