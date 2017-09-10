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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
        'turn_id' => 1,
        'campus_id' => 1,
        'year' => $faker->numberBetween(2011, 2017),
        'comission' => strtoupper($faker->randomLetter),
        'validated' => true,
    ];
});

$factory->define(\App\News::class, function (Faker\Generator $faker) {
    return [
        'user_id' => null,
        'category_id' => \App\Category::first()->id,
        'title' => $faker->sentence,
        'sub_title' => $faker->sentence,
        'summary' => $faker->paragraph,
        'sub_summary' => $faker->paragraph,
        'image_url' => $faker->imageUrl(),
        'image_comment' => $faker->word,
        'link_1' => $faker->url,
        'link_2' => $faker->url,
        'link_3' => $faker->url,
        'date' => $faker->dateTime(),
    ];
});
