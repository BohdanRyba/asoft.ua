<?php

use App\Models\Blog;
use App\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $name = $faker->sentence(rand(4, 10), $variableNbWords = true),
        'slug' => str_slug($name),
        'main_image' => $faker->sentence(1),
        'short_description' => $faker->sentence(rand(15, 20), $variableNbWords = true),
        'description' => $faker->sentence(rand(30, 50), $variableNbWords = true),
        'user_id' => User::where('id', 1)->first()
    ];
});
