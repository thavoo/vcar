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

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;
//
//     return [
//         'name' => 'Gustavo Herrera',
//         'email' => 'gustavoh.2312@gmail.com',
//         'password' => bcrypt('123456'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cedula' => $faker->randomNumber($nbDigits = null, $strict = false),
        'address' => $faker->address,
        'state' => $faker->state,
        'city' => $faker->city,
        'created_at' => $faker->dateTimeThisDecade,
    ];
});


$factory->define(App\Transport::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Camion'.' '.random_int(1, 5),
        'brand' => 'Volvo',
        'model' => 'VNR'. ' '. random_int(1, 500),
        'created_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\Driver::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'licence' => '',
        'medical_certificate' => '',
        'observation' => $faker->realText(random_int(20, 200)),
    ];
});

$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->unique()->ean8,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at' => $faker->dateTimeThisDecade,
        'created_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\DeliveryReport::class, function (Faker\Generator $faker) {
    return [
        'departure_date' => $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
        'delivery_date' => $faker->dateTimeBetween('now', '+1 day'),
        'destination_state' => $faker->state,
        'destination_city' => $faker->city,
        'destination_address'  => $faker->address,
        'lat' => $faker->latitude($min = 8, $max = 9),
        'lng' => $faker->longitude($min = -67, $max = -68),
        'load_type' => $faker->
            randomElement($array = array('General', 'Granel', 'Peligrosa', 'Perecedera', 'Frágil')),
        'condition' => $faker->randomElement($array = array('Condicion 1', 'Condicion 2')),
        'incident' => $faker->text($maxNbChars = 200),
        'transport_id' => random_int(1, 5),
        'driver_id' => random_int(1, 10),
        'client_id' => random_int(1, 20),
    ];
});

$factory->define(App\Maintenance::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->
            randomElement($array = array('Cambio de Parte', 'Cambio de Aceite', 'Cambio de Llantas')),
        'last_check' => $faker->date($format = 'Y-m-d', $startDate = '-1 month', $endDate = 'now'),
        'last_km' => $faker->randomNumber($nbDigits = 5, $strict = false),
        'next_check' => $faker->date($format = 'Y-m-d', $startDate = '+1 day', $endDate = '+5 month'),
        'next_km' => $faker->randomNumber($nbDigits = 6, $strict = false),
        'observation' => $faker->realText(random_int(20, 200)),
        'transport_id' => random_int(1, 5),
    ];
});
