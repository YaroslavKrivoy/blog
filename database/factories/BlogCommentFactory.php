<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogComment;
use Faker\Generator as Faker;

$factory->define(BlogComment::class, function (Faker $faker) {

    return [
        'article_id' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
