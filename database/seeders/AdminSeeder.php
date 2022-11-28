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

    
       $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('Admin.01'),
            ],

            [
               'name'=>'Jo',
               'email'=>'jo@gmail.com',
               'type'=>0,
               'password'=> bcrypt('jo01'),
            ],

            [
               'name'=>'Joban',
               'email'=>'joban@gmail.com',
               'type'=>0,
               'password'=> bcrypt('joban01'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        

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

            [
               'Title'=>'Acer Monitor',
               'Price'=> 149,
               'Description'=>'This Monitor has high refresh rate',
               'Quantity'=> 9,
               'Image'=>'images/acer.jpg',
            ],

            [
               'Title'=>'Airpods Pro',
               'Price'=> 249,
               'Description'=>'These Airpods are Waterproof',
               'Quantity'=> 23,
               'Image'=>'images/airpods.jfif',
            ],

            [
               'Title'=>'iPad Pro',
               'Price'=> 899,
               'Description'=>'This iPad is Outstanding',
               'Quantity'=> 47,
               'Image'=>'images/ipad.jfif',
            ],

            [
               'Title'=>'MacBook Pro',
               'Price'=> 1899,
               'Description'=>'This MacBook is Powerful',
               'Quantity'=> 11,
               'Image'=>'images/mac-book.jpg',
            ],

            [
               'Title'=>'Apple Watch Series 3',
               'Price'=> 799,
               'Description'=>'This Watch has GPS',
               'Quantity'=> 31,
               'Image'=>'images/apple-watch.jfif',
            ],

            [
               'Title'=>'Samsung Galaxy Z Flip 3',
               'Price'=> 849,
               'Description'=>'This Phone can Fold',
               'Quantity'=> 4,
               'Image'=>'samsung-flip.jpg',
            ],

            [
               'Title'=>'Xbox Series X',
               'Price'=> 449,
               'Description'=>'This Xbox is Fast',
               'Quantity'=> 8,
               'Image'=>'x-box.jpg',
            ],

            [
               'Title'=>'Nintendo Switch',
               'Price'=> 259,
               'Description'=>'This Console is Great',
               'Quantity'=> 56,
               'Image'=>'nintendo-switch.jpg',
            ],
        ];
    
        foreach ($products as $key => $product) {
            Products::create($product);
        }

    }
}
