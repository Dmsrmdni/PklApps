<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            ['id_karyawan' => 'MP01', 'nama_karyawan' => 'Dimas', 'jk' => 'Laki-laki'],
            ['id_karyawan' => 'MP02', 'nama_karyawan' => 'Ramdani', 'jk' => 'Laki-laki'],
            ['id_karyawan' => 'MP03', 'nama_karyawan' => 'Salsa', 'jk' => 'Perempuan'],
            ['id_karyawan' => 'MP04', 'nama_karyawan' => 'Salma', 'jk' => 'Perempuan'],
            ['id_karyawan' => 'MP05', 'nama_karyawan' => 'Nadya', 'jk' => 'Perempuan'],
        ];

        DB::table('karyawans')->insert($karyawan);
    }
}
