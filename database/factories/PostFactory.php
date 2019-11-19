<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$user_id = User::pluck('id')->toArray();
	$category_id = Category::pluck('id')->toArray();

    return [
        'title' => $faker->text(20),
        'content' => $faker->text(1000),
        'category_id' => $faker->randomElement($category_id),
        'user_id' => $faker->randomElement($user_id),
    ];
});
