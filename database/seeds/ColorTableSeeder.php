<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color')->insert(
            [
                'name_color'=>'Xám',
                'status'=>1,
                'description'=>null,
                'created_at'=>date('Y:m:d H:i:s'),
                'updated_at'=>null
            ]



            );
    }
}
