<?php

use Illuminate\Support\Facades\Route;

// Rute untuk Halaman Utama / Dashboard POS
Route::get('/', function () {
    // Mengirim data ke view menggunakan array asosiatif
    return view('dashboard_pos', [
        'nama_pegawai' => 'Budi Santoso',
        'shift' => 'Pagi (08:00 - 15:00)'
    ]);
});

// Rute dengan Parameter Wajib (Melihat detail produk berdasarkan ID)
Route::get('/produk/{id}', function ($id) {
    return 'Menampilkan data produk dengan ID: ' . $id;
});

// Rute dengan Parameter Opsional (Mencari produk berdasarkan nama)
Route::get('/produk/cari/{nama?}', function ($nama = null) {
    if ($nama) {
        return 'Hasil pencarian produk: ' . $nama;
    }
    return 'Silakan masukkan kata kunci pencarian pada URL 
    (contoh: /produk/cari/sabun)';
});

Route::prefix('admin')->group(function () {
    Route::get('/produk', function () {
        return 'Halaman Kelola Produk (Hanya Admin)';
    })->name('admin.produk');

    Route::get('/kategori', function () {
        return 'Halaman Kelola Kategori Produk (Hanya Admin)';
    })->name('admin.kategori');
});

Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return 'Halaman Input Transaksi Penjualan (Kasir)';
    })->name('kasir.transaksi');
});

Route::get('/produk-toko', function () {
    $produk = [
        [
            'nama' => 'Beras',
            'sku' => 'BR001',
            'harga' => 15000,
            'stok' => 20,
            'gambar' => '/images/beras.avif'
        ],
        [
            'nama' => 'Minyak Goreng',
            'sku' => 'MG001',
            'harga' => 18000,
            'stok' => 15,
            'gambar' => '/images/minyak.jpg'
        ],
        [
            'nama' => 'Gula',
            'sku' => 'GL001',
            'harga' => 16000,
            'stok' => 25,
            'gambar' => '/images/gula.jpg'
        ],
        [
            'nama' => 'Telur',
            'sku' => 'TL001',
            'harga' => 20000,
            'stok' => 30,
            'gambar' => '/images/telur.jpg'
        ],
        [
            'nama' => 'Susu',
            'sku' => 'SS001',
            'harga' => 15000,
            'stok' => 10,
            'gambar' => '/images/susu.jpg'
        ]
    ];

    return view('daftar_produk', [
        'produk' => $produk
    ]);
});
Route::get('/greeting', function () {
    return view('greeting', ['name' => 'John']);
});

