<?php

use Illuminate\Support\Facades\Route;
use App\Models\Antrian;

Route::get('/', function () {
    return view('landing');
});

Route::get('/apotek', function () {
    return view('apotek');
});

Route::get('/antrian', function () {
    $current = Antrian::where('status', 'sedang_berlangsung')->first();
    $riwayat = Antrian::orderBy('created_at', 'desc')->take(10)->get();
    
    // GANTI BACKSLASH MENJADI TITIK
    return view('antrian.cek', [
        'current' => $current,
        'riwayat' => $riwayat
    ]);
});

// Route untuk handle form antrian
Route::post('/antrian', function () {
    // Logic untuk menyimpan antrian baru
    return redirect()->back()->with('success', 'Antrian berhasil diambil');
})->name('antrian.store');

// Route untuk cek antrian
Route::get('/antrian/cek', function () {
    // Logic untuk cek status antrian
    return view('cek');
})->name('antrian.cek');
