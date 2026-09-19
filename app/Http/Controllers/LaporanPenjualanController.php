<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{

    public function __invoke(Request $request)
    {
         $laporan = [
            'total_transaksi' => 25,
            'total_produk' => 75,
            'total_pendapatan' => 3500000,
            'produk_terlaris' => 'Kopi Susu'
        ];

        return view('laporan', compact('laporan'));
    }
}
