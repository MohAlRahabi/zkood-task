<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create()->each(function ($user){
//            if($user->id == 1){
//                $user->image()->create([
//                    'o_id' => $user->id ,
//                    'o_type' => User::class ,
//                    'path' => 'bilal.jpg',
//                    'description' => 'bilal image'
//                ]);
//            }
//        });
//        Unit::factory(20)->create();
//        Product::factory(20)->create()->each(function ($product){
//            if($product->id == 1){
//                $product->image()->create([
//                    'o_id' => $product->id ,
//                    'o_type' => Product::class ,
//                    'path' => 'apple.jpg',
//                    'description' => 'image of an apple'
//                ]);
//            }
//        });
//        Inventory::factory(20)->create();
    }
}
