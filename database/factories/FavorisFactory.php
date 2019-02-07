<?php

use Faker\Generator as Faker;

$factory->define(App\Favoris::class, function (Faker $faker) {
    return [
    	'id' => $faker->increments('id');
        'user_id' => $faker->unsignedInteger('user_id')->references('id')->on('users')->onDelete('cascade'),
        'offre_id' => $faker->unsignedInteger('offer_id')->references('id')->on('offer_emplois')->onDelete('cascade'),
    ];
});
