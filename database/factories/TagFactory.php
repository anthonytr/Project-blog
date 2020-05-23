<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'title' => $title, //Uno Dos
        'slug'  => Str::slug($title), //uno-dos
    ];
});
