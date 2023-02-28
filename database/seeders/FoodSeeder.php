<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$foods = [
			[
				'name' => 'Burger',
				'description' => 'Burger description',
				'image' => 'https://via.placeholder.com/150',
				'price' => '10.00',
				'ingredients' => 'Burger ingredients',
			],
			[
				'name' => 'Pizza',
				'description' => 'Pizza description',
				'image' => 'https://via.placeholder.com/150',
				'price' => '10.00',
				'ingredients' => 'Pizza ingredients',
			],
			[
				'name' => 'Hotdog',
				'description' => 'Hotdog description',
				'image' => 'https://via.placeholder.com/150',
				'price' => '10.00',
				'ingredients' => 'Hotdog ingredients',
			],
		];

		foreach ($foods as $food) {
			Food::create($food);
		}
	}
}
