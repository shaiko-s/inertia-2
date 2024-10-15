<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semiproduct;

class SemiproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semiproducts = [
            ['name' => 'Vanilla Base', 'description' => 'A rich vanilla base for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chocolate Base', 'description' => 'A creamy chocolate base for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Strawberry Base', 'description' => 'A fresh strawberry base for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mint Base', 'description' => 'A refreshing mint base for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Coffee Base', 'description' => 'A bold coffee base for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Caramel Swirl', 'description' => 'A sweet caramel swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chocolate Chips', 'description' => 'Crunchy chocolate chips for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cookie Dough', 'description' => 'Delicious cookie dough chunks for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brownie Bits', 'description' => 'Chewy brownie bits for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peanut Butter Swirl', 'description' => 'A creamy peanut butter swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marshmallow Swirl', 'description' => 'A fluffy marshmallow swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Almond Pieces', 'description' => 'Crunchy almond pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pecan Pieces', 'description' => 'Crunchy pecan pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Walnut Pieces', 'description' => 'Crunchy walnut pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hazelnut Pieces', 'description' => 'Crunchy hazelnut pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Raspberry Swirl', 'description' => 'A tangy raspberry swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blueberry Swirl', 'description' => 'A sweet blueberry swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mango Swirl', 'description' => 'A tropical mango swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pineapple Swirl', 'description' => 'A tropical pineapple swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Coconut Flakes', 'description' => 'Crunchy coconut flakes for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oreo Crumbles', 'description' => 'Crunchy Oreo crumbles for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Graham Cracker Crust', 'description' => 'Crunchy graham cracker crust for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fudge Swirl', 'description' => 'A rich fudge swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Butterscotch Swirl', 'description' => 'A sweet butterscotch swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cherry Pieces', 'description' => 'Juicy cherry pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banana Pieces', 'description' => 'Fresh banana pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peach Pieces', 'description' => 'Juicy peach pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Pieces', 'description' => 'Crisp apple pieces for ice cream.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cinnamon Swirl', 'description' => 'A spicy cinnamon swirl for ice cream.', 'created_at' => now(), 'updated_at' => now()],
        ];

        Semiproduct::insert($semiproducts);
    }
}
