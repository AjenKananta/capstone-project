<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $current = Antrian::latest()->first();
        $riwayat = Antrian::latest()->take(5)->get();
        return view('antrian.index', compact('current', 'riwayat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'poli' => 'required'
        ]);

        $last = Antrian::orderBy('id', 'desc')->first();
        $next = $last ? intval(substr($last->kode_antrian, 2)) + 1 : 1;
        $kode = 'A-' . str_pad($next, 3, '0', STR_PAD_LEFT);

        Antrian::create([
            'kode_antrian' => $kode,
            'nama_pasien' => $request->nama_pasien,
            'poli' => $request->poli,
            'tanggal' => date('Y-m-d')
        ]);

        return redirect()->route('antrian.index')->with('success', 'Antrian berhasil diambil');
    }

    public function cek(Request $request)
    {
        $kode = $request->kode;
        $data = Antrian::where('kode_antrian', $kode)->first();
        return view('antrian.cek', compact('data', 'kode'));
    }
}
