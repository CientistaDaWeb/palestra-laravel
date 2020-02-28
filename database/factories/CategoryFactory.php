<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categories;
use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Generator as Faker;

$factory->define(
    Categories::class,
    function (Faker $faker) {
        ProviderCollectionHelper::addAllProvidersTo($faker);
        return [
            'name' => $faker->department
        ];
    }
);
