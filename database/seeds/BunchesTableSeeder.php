<?php

use Illuminate\Database\Seeder;

class BunchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bunches')->insert([
            'name' => 'first bunch',
            'description' => 'My first bunch',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        DB::table('bunches')->insert([
            'name' => 'second bunch',
            'description' => 'Not my second bunch',
            'created_by' => 2,
            'updated_by' => 2,
        ]);
        DB::table('bunches')->insert([
            'name' => 'third bunch',
            'description' => 'My third bunch',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
