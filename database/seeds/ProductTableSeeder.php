<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
	
	public function run()
	{

		DB::table('products')->truncate();

		$faker = Faker::create();

		foreach (range(1,25) as $i) {
			Product::create([
				'name' => $faker->word(),
				'description' => $faker->sentence(),
				'value' => $faker->randomFloat(2, 0, 100)
			]);
		}
		

	}

}