<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class adminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            [
                'name' => 'mo7s',
                'email'=> 'mo7s@gmail.com',
                'password' => '12345678',
                'age' => '36',
            ],
            [
                'name' => 'admin2',
                'email'=> 'admin2@gmail.com',
                'password' => '12345678',
                'age' => '26',
            ],
            [
                'name' => 'admin3',
                'email'=> 'admin3@gmail.com',
                'password' => '12345678',
                'age' => '40',
            ],
        ]);
    }
}
