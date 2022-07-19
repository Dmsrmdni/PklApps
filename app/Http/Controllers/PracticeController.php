<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Kamar;
use App\Models\Karyawan;
use App\Models\Pengunjung;
use App\Models\transaksi;

class PracticeController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $kamar = Kamar::all();
        $transaksi = Transaksi::all();
        $detail_transaksi = DetailTransaksi::all();
        $pengunjung = Pengunjung::all();
        return view('Practice.practice', compact('karyawan', 'kamar', 'transaksi', 'detail_transaksi', 'pengunjung'));
    }
}
