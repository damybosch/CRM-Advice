<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Prospect;

$factory->define(Prospect::class, function (Faker $faker) {
    return [
        'created_by' => 1,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'phone_2' => $faker->tollFreePhoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'province' => $faker->state,
        'country' => $faker->country,
        'note' => $faker->text($maxNbChars = 250),
        'isClient' => false,
        'isClaimable' => true,
        'assigned' => 1,
        'date_assigned' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
