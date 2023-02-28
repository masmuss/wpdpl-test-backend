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
				// unsplash.com
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Burger ingredients',
			],
			[
				'name' => 'Pizza',
				'description' => 'Pizza description',
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Pizza ingredients',
			],
			[
				'name' => 'Hotdog',
				'description' => 'Hotdog description',
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Hotdog ingredients',
			],
			[
				'name' => 'Sandwich',
				'description' => 'Sandwich description',
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Sandwich ingredients',
			],
			[
				'name' => 'Fries',
				'description' => 'Fries description',
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Fries ingredients',
			],
			[
				'name' => 'Salad',
				'description' => 'Salad description',
				'image' => 'https://images.unsplash.com/food',
				'price' => '10.00',
				'ingredients' => 'Salad ingredients',
			]
		];

		foreach ($foods as $food) {
			Food::create($food);
		}
	}
}
