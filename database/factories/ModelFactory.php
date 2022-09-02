<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_login_at' => $faker->dateTime,
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Platform::class, static function (Faker\Generator $faker) {
    return [
        'enabled' => $faker->boolean(),
        
        'description' => ['en' => $faker->sentence],
        'title' => ['en' => $faker->sentence],
        'link' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Design::class, static function (Faker\Generator $faker) {
    return [
        'enabled' => $faker->boolean(),
        
        'description' => ['en' => $faker->sentence],
        'title' => ['en' => $faker->sentence],
        'link' => ['en' => $faker->sentence],
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pricing::class, static function (Faker\Generator $faker) {
    return [
        'enabled' => $faker->boolean(),
        
        'description' => ['en' => $faker->sentence],
        'title' => ['en' => $faker->sentence],
        'link' => ['en' => $faker->sentence],
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Logo::class, static function (Faker\Generator $faker) {
    return [
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        'title' => ['en' => $faker->sentence],
        'description' => ['en' => $faker->sentence],
        'link' => ['en' => $faker->sentence],
        
    ];
});
