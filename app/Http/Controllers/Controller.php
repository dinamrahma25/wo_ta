<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    // Tampilkan form tambah paket
    public function create()
    {
        return view('paket.create'); // Akan memanggil file: resources/views/paket/create.blade.php
    }

    // Simpan data paket ke database
    public function store(Request $request)
    {
        Paket::create([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'tipe_adat' => $request->tipe_adat,
            'total_pemesanan' => 0 // default awal
        ]);

        return redirect('/')->with('success', 'Paket berhasil ditambahkan!');
    }
}
