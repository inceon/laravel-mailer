<?php

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            'name' => 'first',
            'description' => 'My first campaigns',
            'bunch_id' => 1,
            'template_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'second',
            'description' => 'Not my second campaigns',
            'bunch_id' => 1,
            'template_id' => 2,
            'created_by' => 2,
            'updated_by' => 2,
        ]);
        DB::table('campaigns')->insert([
            'name' => 'third',
            'description' => 'My third campaigns',
            'bunch_id' => 2,
            'template_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
