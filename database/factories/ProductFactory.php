<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Generator as Faker;

$factory->define(
    Products::class,
    function (Faker $faker) {
        ProviderCollectionHelper::addAllProvidersTo($faker);
        return [
            'name' => $faker->productName,
            'code' => $faker->randomNumber(5, true),
            'description' => $faker->paragraph(4, true),
            'width' => $faker->numberBetween(1, 5000),
            'height' => $faker->numberBetween(1, 5000)
        ];
    }
);
