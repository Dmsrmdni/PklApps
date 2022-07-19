<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            ['no_kamar' => '1', 'jenis_kamar' => 'SWEET ROOM', 'harga' => 200000],
            ['no_kamar' => '2', 'jenis_kamar' => 'DELUXE ROOM', 'harga' => 300000],
            ['no_kamar' => '3', 'jenis_kamar' => 'CLASSIC', 'harga' => 100000],
            ['no_kamar' => '4', 'jenis_kamar' => 'DOUBLE ROOM', 'harga' => 350000],
            ['no_kamar' => '5', 'jenis_kamar' => 'LIKE ROOM', 'harga' => 420000],
        ];

        DB::table('kamars')->insert($kamar);

    }
}
