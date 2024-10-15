<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['name' => 'Milk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cream', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sugar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Vanilla Extract', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Egg Yolks', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Salt', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Chocolate Chips', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Strawberries', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bananas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cocoa Powder', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Honey', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mint', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Peanut Butter', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Caramel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Almonds', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pistachios', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Coconut Milk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Matcha Powder', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Blueberries', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mango', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Olive Oil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Garlic', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Onions', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tomatoes', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Basil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Oregano', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thyme', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rosemary', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Parsley', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cilantro', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lemon Juice', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lime Juice', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Soy Sauce', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Worcestershire Sauce', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Balsamic Vinegar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Red Wine Vinegar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'White Wine Vinegar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Apple Cider Vinegar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Maple Syrup', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Brown Sugar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Powdered Sugar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cornstarch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Baking Soda', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Baking Powder', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Yeast', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Gelatin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Agar Agar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Vanilla Beans', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cinnamon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Nutmeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        // DB::table('ingredients')->insert($ingredients);
        Ingredient::insert($ingredients);
    }
}
