<?php

use Illuminate\Database\Seeder;
use App\Models\Beer;
use Faker\Generator as Faker;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $beer = new Beer();
        $beer->nome = $faker->words(1, true);
        $beer->marca = $faker->words(1, true);
        $beer->price = $faker->randomDigit();

        $beer->save();
    }
}
