<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Products;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    /**
       $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('Admin.01'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        */

        $products = [
            [
               'Title'=>'IPhone 14',
               'Price'=> 1000,
               'Description'=>'This Iphone is unique',
               'Quantity'=> 20,
               'Image'=>'images/iphone.jpg',
            ],

            [
               'Title'=>'HP Laptop',
               'Price'=> 1200,
               'Description'=>'This Laptop can run GTA5',
               'Quantity'=> 8,
               'Image'=>'images/hp.webp',
            ],

            [
               'Title'=>'PS5',
               'Price'=> 850,
               'Description'=>'This PS5 is Fast',
               'Quantity'=> 0,
               'Image'=>'images/PS5.webp',
            ],

            [
               'Title'=>'Samsung TV',
               'Price'=> 490,
               'Description'=>'This TV is Great',
               'Quantity'=> 12,
               'Image'=>'images/samsung.jpg',
            ],
        ];
    
        foreach ($products as $key => $product) {
            Products::create($product);
        }

    }
}
