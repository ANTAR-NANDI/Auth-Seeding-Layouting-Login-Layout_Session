<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
         'name' => $faker->name('male'|'female'),
        'email' => $faker->companyEmail,
        'address' => $faker->address,
        'city' => $faker->city,
        'password'=> md5('123456'),
        'country' => $faker->country,
         'role' => $faker->randomElement($array = array ('admin','teacher','student')),
        'salary' => $faker->numberBetween($min = 2000, $max = 3000),
        'credit_card_no' => $faker->creditCardNumber,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
