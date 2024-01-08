<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    //
	    $faker = Faker::create();

	    $user = User::First();

	for ($i = 0; $i < 100; $i++) {
        $user->products()->create([
		'name' => $faker->word,
		'image' => $faker->word,
		'description' => $faker->sentence,
		'user_id' => $user->id,
                'price' => $faker->randomFloat(2, 10, 1000),
                // Other fields...
        ]);
        }

    }
}
