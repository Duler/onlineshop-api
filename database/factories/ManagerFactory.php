<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Manager;
use Faker\Generator as Faker;

$factory->define(Manager::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => Str::random(7).'@gmail.com',
        'image_url' => 'https://cbsnews1.cbsistatic.com/hub/i/2018/11/06/0c1af1b8-155a-458e-b105-78f1e7344bf4/2018-11-06t054310z-1334124005-rc1be15a8050-rtrmadp-3-people-sexiest-man.jpg',

    ];
});
