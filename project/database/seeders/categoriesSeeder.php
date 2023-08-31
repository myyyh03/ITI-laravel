<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_id' => '1',
                'category_name' => 'Life Skiils',
            ],
            [
                'category_id' => '2',
                'category_name' => 'Sports',
            ],
            [
                'category_id' => '3',
                'category_name' => 'Programming',
            ]
        ]);
    }
}
