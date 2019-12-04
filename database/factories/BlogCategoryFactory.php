<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogCategory;
use Faker\Generator as Faker;

$factory->define(BlogCategory::class, function (Faker $faker) {

    return [
        'parent_id' => $faker->randomDigitNotNull,
        'categorie_url' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
