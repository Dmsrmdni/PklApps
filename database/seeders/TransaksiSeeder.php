<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['no_transaksi' => '232', 'id_pengunjung' => 'Dani', 'id_karyawan' => 'MW01', 'jumlah_kamar' => '2', 'tanggal_masuk' => '2004-06-11', 'tanggal_keluar' => '2004-06-12', 'lama_nginap' => 3, 'total_harga' => 1000000],
            ['no_transaksi' => '890', 'id_pengunjung' => 'Deni', 'id_karyawan' => 'MW02', 'jumlah_kamar' => '3', 'tanggal_masuk' => '2005-06-11', 'tanggal_keluar' => '2014-06-13', 'lama_nginap' => 4, 'total_harga' => 2000000],
            ['no_transaksi' => '324', 'id_pengunjung' => 'Danu', 'id_karyawan' => 'MW03', 'jumlah_kamar' => '5', 'tanggal_masuk' => '2006-06-15', 'tanggal_keluar' => '2024-06-16', 'lama_nginap' => 5, 'total_harga' => 2500000],
            ['no_transaksi' => '111', 'id_pengunjung' => 'Rana', 'id_karyawan' => 'MW04', 'jumlah_kamar' => '1', 'tanggal_masuk' => '2006-06-13', 'tanggal_keluar' => '2024-06-17', 'lama_nginap' => 5, 'total_harga' => 3342300],
            ['no_transaksi' => '343', 'id_pengunjung' => 'Ranti', 'id_karyawan' => 'MW05', 'jumlah_kamar' => '4', 'tanggal_masuk' => '2006-06-12', 'tanggal_keluar' => '2024-06-12', 'lama_nginap' => 5, 'total_harga' => 7502300],
        ];

        DB::table('transaksis')->insert($transaksi);

    }
}
