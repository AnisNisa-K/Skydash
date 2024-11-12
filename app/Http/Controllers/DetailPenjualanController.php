<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\DetailPenjualan;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barcode = $request->input('id_produk');
        $scan = Produk::where('barcode', $barcode)->first();

        if ($scan) {
            $qty = $request->input('qty'); // Ambil qty dari input, default 1 jika tidak ada
            $harga = $scan->harga ?? 0; // Pastikan `harga` tidak null

            for ($i = 0; $i < $qty; $i++) {

            // Simpan detail penjualan dengan jumlah yang benar
            DetailPenjualan::create([
                'nobon' => $request->nobon,
                'id_produk' => $scan->id,
                'harga' => $harga,
                'jumlah' => $qty, // Simpan jumlah yang dibeli
            ]);
            }
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Produk Not Found');
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_produk, $nobon)
    {
        $detail = DetailPenjualan::where('nobon', $nobon)
            ->where('id_produk', $id_produk);

        // Check if the detail exists, then delete it
        if ($detail) {
            $detail->delete();
            return redirect()->back()->with('success', 'Item deleted successfully');
        } else {
            return redirect('/');
        }
    }
}
