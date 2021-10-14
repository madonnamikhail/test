<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => Str::random(10),
        'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
        'price' => rand(200,5000),
    ];
});
