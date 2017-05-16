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

use JansenFelipe\FakerBR\FakerBR;

$fakerBR = Faker\Factory::create();
$fakerBR->addProvider(new FakerBR($fakerBR));

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Textil\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Textil\Carde::class, function (Faker\Generator $faker){
    return [
      'value'  => $faker->numberBetween(0,30),
      'color'  => $faker->hexColor
    ];
});

$factory->define(\Textil\Entities\Calendars::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'pessoa_id' => $faker->numberBetween(1,2),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'cellphone' => $faker->phoneNumber,
        'date' => $faker->dateTime,
        'horario_id' => $faker->numberBetween(1,4),
        'servicos' => 'camisas, ecommerce, serviços e terceirização',
        'message' => $faker->text(200),
    ];
});