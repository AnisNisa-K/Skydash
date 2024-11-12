@extends('layouts.master')
@section('title', 'edit produk')
@section('content')

<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Edit Data Produk</h1>
                    <a href="/produk" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                    <br> <br>
                    {{-- Form dimulai dari sini --}}
                    <form action="/produk/{{ $produk->id }}/update" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="NamaProduk" class="form-label">Nama Produk</label>
                            <input type="text"
                            class="form-control"
                            id="NamaProduk"
                            name="NamaProduk"
                            value="{{ $produk->NamaProduk }}"
                            placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="Barcode" class="form-label">Barcode</label>
                            <input type="text"
                            class="form-control"
                            id="Barcode"
                            name="Barcode"
                            value="{{ $produk->Barcode }}"
                            placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <input type="number"
                            class="form-control"
                            id="Harga"
                            name="Harga"
                            value="{{ $produk->Harga }}"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="Stok" class="form-label"></label>
                            <input type="number"
                            class="form-control"
                            id="Stok"
                            name="Stok"
                            value="{{ $produk->Stok }}"
                            placeholder=""
                            />
                        </div>
                        <button class="btn btn-info"><i class="bi bi-save"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


