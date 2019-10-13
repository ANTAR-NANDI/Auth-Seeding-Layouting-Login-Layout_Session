<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'|'female'),
        'email' => $faker->companyEmail,
        'password'=> md5('123456'),
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'role' => $faker->randomElement($array = array ('admin','teacher','student')),
        'salary' => $faker->numberBetween($min = 6000, $max = 9000),
        'credit_card_no' => $faker->creditCardNumber,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
