<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_transaksi = [
            ['id_detail_transaksi' => 'AP01', 'no_transaksi' => 10, 'no_kamar' => 11],
            ['id_detail_transaksi' => 'AP03', 'no_transaksi' => 12, 'no_kamar' => 01],
            ['id_detail_transaksi' => 'AP05', 'no_transaksi' => 14, 'no_kamar' => 13],
            ['id_detail_transaksi' => 'AP06', 'no_transaksi' => 15, 'no_kamar' => 14],
            ['id_detail_transaksi' => 'AP07', 'no_transaksi' => 16, 'no_kamar' => 15],
        ];

        DB::table('detail_transaksis')->insert($detail_transaksi);

    }
}
