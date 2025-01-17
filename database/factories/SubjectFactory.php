<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'subject_code' => $faker->colorName,
        'descriptive_title' => $faker->name,
    ];
});
