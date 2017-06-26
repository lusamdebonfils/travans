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

//use App\Modules\Event\Event;
//use Carbon\Carbon;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Modules\Event\Event::class, function (Faker\Generator $faker) {

	$start_date = Carbon\Carbon::now()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9]));

    $end_date = $start_date->copy()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9]));

    return [
    	'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence(3),
        'description' => $faker->paragraph(5),
        'address' => $faker->address,
        'lat' =>  $faker->unique()->latitude(27,29),
        'long' => $faker->unique()->longitude(81,88),
        // 'start_date'=> Carbon\Carbon::parse('+1 week'),
        // 'end_date'=> Carbon\Carbon::parse('+2 week'),
        
        'start_date' =>$start_date->format('Y-m-d'),
        'end_date' => $end_date->format('Y-m-d'),
        //'user_id' => factory(User::class)->create()->id,
    
    ];
});
