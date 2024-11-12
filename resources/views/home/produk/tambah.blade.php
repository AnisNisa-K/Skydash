@extends('layouts.master')
@section('title', 'tambah produk')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Tambah Data Produk</h1>
                    <a href="/produk" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                    <div class="table-responsive">
                        <br>
                        {{-- Form diawali dari sini --}}
                        <form action="/produk/simpan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="NamaProduk" class="form-label">Nama Produk</label>
                                <input type="text"
                                class="form-control"
                                id="NamaProduk"
                                name="NamaProduk"
                                placeholder="Masukkan Nama Produk"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="Barcode" class="form-label">Barcode</label>
                                <input type="text"
                                class="form-control"
                                id="Barcode"
                                name="Barcode"
                                placeholder="Masukkan Barcode"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="Harga" class="form-label">Harga</label>
                                <input type="number"
                                class="form-control"
                                id="Harga"
                                name="Harga"
                                placeholder="Masukkan Harga"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="Stok" class="form-label">Stok</label>
                                <input type="number"
                                class="form-control"
                                id="Stok"
                                name="Stok"
                                placeholder="Masukkan Stok"
                                />
                            </div>
                            <button class="btn btn-info"><i class="bi bi-save"></i> Simpan</button>
                            <button class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i> Bersihkan</button>
                        </form>
                        {{-- Form tutup disini --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
