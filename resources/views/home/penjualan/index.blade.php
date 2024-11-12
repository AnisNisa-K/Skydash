@extends('layouts.master')
@section('title', 'penjualan')
@section('content')


<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data Penjualan</h1>
                    <!-- <h4>{{  auth()->user()->id  }}</h4> -->
                    <a href="/penjualan/tambah" class="btn btn-info" onclick="return confirm('Konfirmasi tambah transaksi baru')"><i class="bi bi-plus"></i>Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No Transaksi</td>
                                    <td>Kasir</td>
                                    <td>Total Harga</td>
                                    <td>Tanggal Transaksi</td>
                                    <td>Status</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penjualan as $penjualan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penjualan->user->name}}</td>
                                    <td>Rp. {{number_format($penjualan->total, 0, ',', ',') }}</td>
                                    <td>{{ $penjualan->created_at }}</td>
                                    <td>{{ $penjualan->status }}</td>
                                    <td>
                                        @if  ($penjualan->status == 'Belum Selesai')
                                            <a href="/penjualan/transaksi/{{ $penjualan->id }}" class="btn btn-primary">Lengkapi Transaksi</a>
                                        @else
                                        <a href="{{ route('penjualan.struk', ['id' => $penjualan->id]) }}" class="btn btn-secondary">Cetak Struk</a>
                                        @endif
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
