<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa =[ 
            ['no_siswa' => '2001', 'nama' => 'Badu', 'jk' => 'L' ,'jurusan' => 'TK'],
            ['no_siswa' => '2002', 'nama' => 'Muliati', 'jk' => 'P' ,'jurusan' => 'TE'],
            ['no_siswa' => '2003', 'nama' => 'Rahmadi', 'jk' => 'L' ,'jurusan' => 'TK'],
            ['no_siswa' => '2004', 'nama' => 'Nasrol', 'jk' => 'L' ,'jurusan' => 'TK'],
        ];

        DB::table('siswas')->insert($siswa);
    }
}
