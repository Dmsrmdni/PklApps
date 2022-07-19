<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
            ['id_pengunjung' => '123', 'nama_pengunjung' => 'Dimas', 'alamat' => 'Cupu', 'jk' => 'Pria', 'no_tlpn' => '098732653', 'no_ktp' => 12321],
            ['id_pengunjung' => '343', 'nama_pengunjung' => 'Hafsha', 'alamat' => 'Kopo', 'jk' => 'Perempuan', 'no_tlpn' => '0987263729', 'no_ktp' => 32490],
            ['id_pengunjung' => '231', 'nama_pengunjung' => 'Putri', 'alamat' => 'Cangkuang', 'jk' => 'Perempuan', 'no_tlpn' => '2908716238', 'no_ktp' => 34892],
            ['id_pengunjung' => '223', 'nama_pengunjung' => 'Ramdani', 'alamat' => 'Bandung', 'jk' => 'Laki-laki', 'no_tlpn' => '43240987236', 'no_ktp' => 89892],
            ['id_pengunjung' => '421', 'nama_pengunjung' => 'Aceng', 'alamat' => 'Cicaheum', 'jk' => 'Laki-laki', 'no_tlpn' => '9087326347', 'no_ktp' => 34982],
        ];

        DB::table('pengunjungs')->insert($pengunjung);

    }
}
