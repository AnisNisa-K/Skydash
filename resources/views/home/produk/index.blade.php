@extends('layouts.master')
@section('title', 'produk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data Produk</h1>
                    <a href="/produk/tambah" class="btn btn-info"><i class="bi bi-plus"></i> Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nama Produk</td>
                                <td>Barcode</td>
                                <td>Harga</td>
                                <td>Stok</td>
                                <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $produk->NamaProduk }}</td>
                                    <td>{{ $produk->Barcode }}</td>
                                    <td>Rp. {{number_format($produk->Harga, 0, ',', ',') }}</td>
                                    <td>{{ $produk->Stok}}</td>
                                    <td><a href="/produk/{{ $produk->id }}/show" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <a href="/produk/{{ $produk->id}}/delete" class="btn btn-danger" onclick="return confirm ('Yakin akan dihapus?')"><i class="bi bi-trash3"></i> Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
