<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Paket;

class CustomerController extends Controller
{
    // Menampilkan semua customer
    public function index()
    {
        $customers = Customer::with('paket')->get();
        return view('customer.index', compact('customers'));
    }

    // Menampilkan form tambah customer
    public function create()
    {
        $pakets = Paket::all();
        return view('customer.create', compact('pakets'));
    }

    // Menyimpan data customer baru
    public function store(Request $request)
    {
        Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'paket_id' => $request->paket_id
        ]);

        return redirect('/customer')->with('success', 'Customer berhasil ditambahkan!');
    }

    // Menampilkan form edit customer
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $pakets = Paket::all();
        return view('customer.edit', compact('customer', 'pakets'));
    }

    // Menyimpan perubahan data customer
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'paket_id' => $request->paket_id
        ]);

        return redirect('/customer')->with('success', 'Customer berhasil diupdate!');
    }
}
