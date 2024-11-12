@extends('layouts.master')
@section('title', 'Tambah Penjualan')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <form action="/penjualan/scan" method="post">
                                        @csrf
                                        <input type="hidden" name="nobon" value="{{ $nobon->id }}">
                                        <input type="text" onblur="this.focus()" class="form-control"
                                            name="id_produk" id="id_produk" placeholder="Barcode Produk" autofocus />
                                        @if (session('error'))
                                            <p style="color: red"><i>Produk tidak ditemukan</i></p>
                                        @endif
                                </div>
                                <div class="col-1">
                                    <input type="number" class="form-control" name="qty" min="1" id="qty" placeholder="" value="1" required />
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">Check</button>
                                </div>
                                    </form> <!-- Form ditutup di sini -->
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No Bon</td>
                            <td>Nama Produk</td>
                            <td>Harga</td>
                            <td>Qty</td>
                            <td>Sub-Total</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0; // Deklarasi total di awal
                        @endphp
                        @foreach($detailpenjualan as $detail)
                            @php
                                // Hitung sub-total untuk setiap item
                                $subtotal = $detail->produk->Harga * ($produkCounts[$detail->id_produk] ?? 0);
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td>{{ $detail->nobon }}</td>
                                <td>{{ $detail->produk->NamaProduk }}</td>
                                <td>{{ number_format($detail->produk->Harga, 2) }}</td>
                                <td>{{ $produkCounts[$detail->id_produk] ?? 0 }}</td>
                                <td>{{ number_format($subtotal, 2) }}</td>
                                <td>
                                    <a href="/detailpenjualan/hapus/{{ $detail->id_produk }}/{{ $detail->nobon }}" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <footer class="main-footer">
                    Total
                    <h1 style="color: black; font-size: 24px;">
                        Rp. {{ number_format($total) }}
                    </h1>
                    <form action="/penjualan/transaksi/{{$id_penjualan}}/checkout" method="POST">
                        @csrf
                        <input type="hidden" name="nobon" value="{{ $nobon->id }}">
                        <input type="hidden" name="total" value="{{ $total }}">
                        <button type="submit" class="btn btn-primary">Check Out</button>
                    </form>
                </footer>
            </div>
        </div>
    </div>
</div>

@endsection
