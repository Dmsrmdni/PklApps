<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta =[ 
            ['no_siswa' => '2001','kode_mp' => 'MP01'],
            ['no_siswa' => '2001','kode_mp' => 'MP02'],
            ['no_siswa' => '2003','kode_mp' => 'MP01'],
            ['no_siswa' => '2003','kode_mp' => 'MP02'],
            ['no_siswa' => '2004','kode_mp' => 'MP01'],
            ['no_siswa' => '2004','kode_mp' => 'MP03'],
        ];

        DB::table('pesertas')->insert($peserta);
    }
}
