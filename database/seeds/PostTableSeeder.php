<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'idUser'=>'1',
            'title'=>'Tập Gym có giúp tăng cân không? Tập cho người gầy thế nào?',
            'preview'=>'preview 1',
            'body'=>'body 1',
            'photo'=>'',
            'likes'=>0,
        ]);
    }
}
