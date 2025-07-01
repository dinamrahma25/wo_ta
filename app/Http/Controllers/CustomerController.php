<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Paket;

class CustomerController extends Controller
{
    public function create()
    {
        $pakets = Paket::all();
        return view('customer.create', compact('pakets'));
    }

    public function store(Request $request)
    {
        Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'paket_id' => $request->paket_id
        ]);

        return redirect('/')->with('success', 'Customer berhasil ditambahkan!');
    }
}
