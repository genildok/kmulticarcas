<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
                'name'  => 'Edison Kaeller',
                'email'  => 'kaellermultimarcas@gmail.com',
                'password' => bcrypt('123456')
               ]);
    }
}
