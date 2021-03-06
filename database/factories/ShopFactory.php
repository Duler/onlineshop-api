<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Shop;
use App\Manager;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->word(10),
        'image_url' => 'http://wonderphotoshop.fujifilm.com/images/service_japan_main.png',
        'manager_id' => $faker->unique()->randomElement(Manager::pluck('id', 'id')->toArray()),
    ];
});
