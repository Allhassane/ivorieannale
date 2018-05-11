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
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\School::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->company,
        'city' => $faker->city,
        'statut' => 1
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Matter::class, function (Faker\Generator $faker) {

    $name = $faker->jobTitle;
    $slug = \Illuminate\Support\Str::slug($name);

    return [
        'title' => $name,
        'slug' => $slug
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Examination::class, function (Faker\Generator $faker) {

    $name = $faker->jobTitle;
    $slug = \Illuminate\Support\Str::slug($name);

    return [
        'title' => $name,
        'document' => $slug.'.pdf',
        'school_id' => $faker->numberBetween(1,20),
        'level_id' => $faker->numberBetween(1,7),
        'matter_id' => $faker->numberBetween(1,20),
        'slug' => $slug,
        'download' => 0
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\CorrectedExamination::class, function (Faker\Generator $faker) {

    $name = $faker->jobTitle;
    $slug = \Illuminate\Support\Str::slug($name);

    return [
        'title' => $name,
        'document' => $slug.'.pdf',
        'examination_id' => $faker->numberBetween(1,54),
        'slug' => $slug,
        'download' => 0
    ];
});
