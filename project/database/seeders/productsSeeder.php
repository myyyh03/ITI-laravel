<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'product_name' => 'learning',
                'author' => 'someOne',
                'release_date' => '2001-02-19',
                'img' => 'public\imgs\imgs\books\books-book-pages-read-literature-159866.jpg',
                'price' => '20',
                'category_id' => '1',
            ],
            [
                'product_name' => 'athelete life',
                'author' => 'mo7s',
                'release_date' => '2009-10-01',
                'img' => 'public\imgs\imgs\books\istockphoto-1222550815-612x612.jpg',
                'price' => '90',
                'category_id' => '2',
            ],
            [
                'product_name' => 'Problem solving',
                'author' => 'me',
                'release_date' => '2020-02-19',
                'img' => 'public\imgs\imgs\books\pexels-photo-45717.jpg',
                'price' => '60',
                'category_id' => '3',
            ],
            [
                'product_name' => 'Sports history',
                'author' => 'someOne',
                'release_date' => '2007-09-19',
                'img' => 'public\imgs\imgs\books\pexels-photo-158834.jpeg',
                'price' => '70',
                'category_id' => '2',
            ],
            [
                'product_name' => 'Clean code',
                'author' => 'ITI',
                'release_date' => '2019-06-02',
                'img' => 'public\imgs\imgs\books\pexels-photo-768125.jpg',
                'price' => '30',
                'category_id' => '3',
            ],
            [
                'product_name' => 'soft skills',
                'author' => 'anyOne',
                'release_date' => '2010-04-11',
                'img' => 'public\imgs\imgs\books\pexels-photo-1148399.jpg',
                'price' => '50',
                'category_id' => '1',
            ],
            // Add more data rows as needed
        ]);
    }
}
