<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'tittle' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $this->faker->text(1600)
    ];
});
