<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 20.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Rack of Ribs',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 26.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('food_items')->insert([
            'title' => 'Ceaser Salad',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 12.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tres Leche Cupcakes',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greygoose Shot',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hennesy Shot',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/salad-image-8.png',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
