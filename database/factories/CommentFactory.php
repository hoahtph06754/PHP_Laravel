<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	$user_id = User::pluck('id')->toArray();
	$post_id = Post::pluck('id')->toArray();
    return [
        'content' => $faker->text(200),
        'post_id' => $faker->randomElement($post_id),
        'user_id' => $faker->randomElement($user_id),
        'is_active'=>$faker->boolean(),        
    ];
});
