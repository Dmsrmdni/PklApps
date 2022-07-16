<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel =[ 
            ['title' => 'Tips Cepat Nikah', 'content' => 'assalaam studio'],
            ['title' => 'Haruskah Menunda Nikah', 'content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'assalaam studio'],
        ];

        DB::table('posts')->insert($sampel);
    }
}
