<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Http\Requests\ProdukRequest;

class ProdukController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan data produk, misalnya:
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function store(ProdukRequest $request)
    {
        // Validasi data dari request
        $validatedData = $request->validated();

        // Simpan produk baru ke database
        $produk = Produk::create($validatedData);

        // Redirect dengan pesan sukses jika berhasil
        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    // Metode lainnya bisa ditambahkan sesuai kebutuhan aplikasi Anda
}
