<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogArticle;
use Faker\Generator as Faker;

$factory->define(BlogArticle::class, function (Faker $faker) {

    return [
        'category_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'tag_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'short_description' => $faker->text,
        'article_url' => $faker->word,
        'is_published' => $faker->word,
        'published_at' => $faker->date('Y-m-d H:i:s')
    ];
});
