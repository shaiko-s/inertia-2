<?php

namespace Database\Seeders;

use App\Models\Finalproduct;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FinalproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $finalproducts = [
            ['name' => 'Vanilla Delight', 'description' => 'A classic vanilla ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Chocolate Heaven', 'description' => 'Rich and creamy chocolate ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Strawberry Bliss', 'description' => 'Fresh strawberry ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Minty Fresh', 'description' => 'Refreshing mint ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Coffee Crunch', 'description' => 'Bold coffee ice cream with crunchy bits.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Caramel Swirl', 'description' => 'Sweet caramel swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cookie Dough', 'description' => 'Ice cream with chunks of cookie dough.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Brownie Bites', 'description' => 'Ice cream with chewy brownie bits.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Peanut Butter Cup', 'description' => 'Creamy peanut butter ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Marshmallow Dream', 'description' => 'Fluffy marshmallow ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Almond Joy', 'description' => 'Ice cream with crunchy almond pieces.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pecan Perfection', 'description' => 'Ice cream with crunchy pecan pieces.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Walnut Wonder', 'description' => 'Ice cream with crunchy walnut pieces.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hazelnut Heaven', 'description' => 'Ice cream with crunchy hazelnut pieces.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Raspberry Ripple', 'description' => 'Tangy raspberry swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Blueberry Bliss', 'description' => 'Sweet blueberry swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mango Madness', 'description' => 'Tropical mango swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pineapple Paradise', 'description' => 'Tropical pineapple swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Coconut Crunch', 'description' => 'Ice cream with crunchy coconut flakes.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Oreo Overload', 'description' => 'Ice cream with crunchy Oreo crumbles.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Graham Cracker Crust', 'description' => 'Ice cream with graham cracker crust.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Fudge Fantasy', 'description' => 'Rich fudge swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Butterscotch Bliss', 'description' => 'Sweet butterscotch swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cherry Choco', 'description' => 'Juicy cherry pieces with chocolate.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Banana Split', 'description' => 'Fresh banana pieces in ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Peach Perfect', 'description' => 'Juicy peach pieces in ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Apple Pie', 'description' => 'Crisp apple pieces in ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cinnamon Swirl', 'description' => 'Spicy cinnamon swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lemon Zest', 'description' => 'Tangy lemon swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Orange Creamsicle', 'description' => 'Creamy orange swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Blackberry Bliss', 'description' => 'Sweet blackberry swirled ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ginger Snap', 'description' => 'Spicy ginger snap ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pumpkin Spice', 'description' => 'Pumpkin spice flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Maple Walnut', 'description' => 'Maple flavored ice cream with walnuts.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Honey Almond', 'description' => 'Honey flavored ice cream with almonds.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lavender Honey', 'description' => 'Lavender and honey flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Matcha Green Tea', 'description' => 'Matcha green tea flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Salted Caramel', 'description' => 'Salted caramel flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Toffee Crunch', 'description' => 'Toffee flavored ice cream with crunch.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rum Raisin', 'description' => 'Rum flavored ice cream with raisins.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pistachio Delight', 'description' => 'Pistachio flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Mochi Magic', 'description' => 'Mochi flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiramisu Twist', 'description' => 'Tiramisu flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Red Velvet', 'description' => 'Red velvet cake flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Birthday Cake', 'description' => 'Birthday cake flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cotton Candy', 'description' => 'Cotton candy flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Bubblegum Bliss', 'description' => 'Bubblegum flavored ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Rocky Road', 'description' => 'Chocolate ice cream with nuts and marshmallows.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Neapolitan', 'description' => 'Vanilla, chocolate, and strawberry ice cream.', 'weigth' => 500, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        Finalproduct::insert($finalproducts);
    }
}
