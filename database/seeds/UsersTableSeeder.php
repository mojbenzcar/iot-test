<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        //delete users table records
        \DB::table('users')->delete();
        //insert some dummy records
        \DB::table('users')->insert(
            [
                ['name' => 'john', 'email' => 'john@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'mark', 'email' => 'mark@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'Karl', 'email' => 'karl@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'marl', 'email' => 'marl@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'mary', 'email' => 'mary@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'sels', 'email' => 'sels@gmail.com', 'password' => bcrypt('123456')],
                ['name' => 'taylor', 'email' => 'taylor@gmail.com', 'password' => bcrypt('123456')],

            ]
        );
    }

}