<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement([
            'Honda',
            'Toyota',
            'Ford',
        ]),
        'Model' => str::random(5),
        'Year' => rand(2010, 2019)
    ];
});
