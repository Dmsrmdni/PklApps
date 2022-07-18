<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel =[ 
            ['kode_mp' => 'MP01', 'nama_mp' => 'ALGORITMA', 'sks' => '2' ,'semester' => '1'],
            ['kode_mp' => 'MP02', 'nama_mp' => 'BASISDATA', 'sks' => '3' ,'semester' => '1'],
            ['kode_mp' => 'MP03', 'nama_mp' => 'ASSEMBLY', 'sks' => '2' ,'semester' => '2'],
        ];

        DB::table('mapels')->insert($mapel);

    }
}
