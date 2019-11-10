<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')->insert([
            'user_id' => '1',
            'caption' => 'caption caption caption caption',
            'image' => 'logo_telkom.png',
        ]);
        DB::table('posts')->insert([
            'user_id' => '1',
            'caption' => 'Es Jeli Biru yang segar ini jadi solusi membuat minuman dingin untuk berbuka. Tampilan dan rasanya yang menarik benar-benar menggoda kita sebelum bedug.',
            'image' => 'es_biru.jpg',
        ]);

    }
}
