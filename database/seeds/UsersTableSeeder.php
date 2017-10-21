<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('111111'),
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('111111'),
        ]);
    }
}
