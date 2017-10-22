<?php

use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            'f_name' => 'Иван',
            's_name' => 'Петров',
            'email' => 'bladimir.rivan@oou.us',
            'bunch_id' => 1
        ]);
        DB::table('subscribers')->insert([
            'f_name' => 'Вася',
            's_name' => 'Пупкин',
            'email' => 'mr.inceon@gmail.com',
            'bunch_id' => 1
        ]);
        DB::table('subscribers')->insert([
            'f_name' => 'Кирил',
            's_name' => 'Иванов',
            'email' => 'qwerty@123.ru',
            'bunch_id' => 2
        ]);
    }
}
