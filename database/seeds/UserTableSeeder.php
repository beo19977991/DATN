<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'beokaka',
            'name'=>'Doan Cong Khanh',
            'email'=>'doancongkhanh123456789@gmail.com',
            'password'=>bcrypt('123456789'),
            'phone'=>'0364277492',
            'address'=>'Quang Nam',
            'photo'=>'',
            'role'=>0,
        ]);
    }
}
