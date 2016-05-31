<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(LoveLaravel\Shoplaravel\Shops\Models\Shop::class, function (Faker\Generator $faker) {
    return [
        'company_short' => $faker->name,
        'company' => $faker->company,
        'address' => $faker->address,
        'zip_code' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'tax' => $faker->vat,
        'nb_registry_number' => $faker->companyNumber, // national business registry number
    ];
});
