<?php

use Illuminate\Database\Seeder;

class SizeNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numbersize')->insert([
            'name_sizeNumber' => 33,
            'description'=>null,
            'created_at'=>date('Y:m:d H:i:s'),
            'updated_at'=>null
        ]);
    }
}
