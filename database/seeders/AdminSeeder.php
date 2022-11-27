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
        
/**
        $products = [
            [
               'Title'=>'Phone 14',
               'Price'=> 1000,
               'Description'=>'This Iphone is unique',
               'Quantity'=> 20,
               'Image'=>'images/iphone.jpg',
            ],

            [
               'Title'=>'HPST Laptop',
               'Price'=> 1200,
               'Description'=>'This Laptop can run Games',
               'Quantity'=> 8,
               'Image'=>'images/hp.webp',
            ],

            [
               'Title'=>'PSGame5',
               'Price'=> 850,
               'Description'=>'This PSGame5 is Fast',
               'Quantity'=> 0,
               'Image'=>'images/PS5.webp',
            ],

            [
               'Title'=>'Samsun TV',
               'Price'=> 490,
               'Description'=>'This TV is Great',
               'Quantity'=> 12,
               'Image'=>'images/samsung.jpg',
            ],
        ];
    
        foreach ($products as $key => $product) {
            Products::create($product);
        }

        */

    }
}
