<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            'name' => 'first templ',
            'content' => 'My first template',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        DB::table('templates')->insert([
            'name' => 'second templ',
            'content' => 'My second template',
            'created_by' => 2,
            'updated_by' => 2,
        ]);
        DB::table('templates')->insert([
            'name' => 'third templ',
            'content' => 'My third template',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
