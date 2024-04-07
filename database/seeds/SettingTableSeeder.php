<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"",
            'short_des'=>"",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"Surat",
            'email'=>"codeastro.com",
            'phone'=>"1234567777",
        );
        DB::table('settings')->insert($data);
    }
}
