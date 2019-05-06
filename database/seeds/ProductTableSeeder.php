<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('products')->insert([
        'name' => 'product',
        'price' => '32',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/model_1.png',
      ]);

      DB::table('products')->insert([
        'name' => 'product',
        'price' => '67',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/model_2.png',
      ]);

      DB::table('products')->insert([
        'name' => 'product',
        'price' => '101',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/model_3.png',
      ]);

      DB::table('products')->insert([
        'name' => 'product',
        'price' => '122',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/model_4.png',
      ]);

      DB::table('products')->insert([
        'name' => 'product',
        'price' => '355',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/model_5.png',
      ]);

      DB::table('products')->insert([
        'name' => 'product',
        'price' => '122',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'image' => '/images/product_1.png',
      ]);
    }
}
