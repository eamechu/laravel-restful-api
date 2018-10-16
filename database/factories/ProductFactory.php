<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(5000, 180000),
        'stock' => $faker->numberBetween(500, 2000),
        'discount' => $faker->numberBetween(1, 10),
    ];
});
