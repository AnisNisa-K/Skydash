@extends('layouts.master')
@section('title', 'user')
@section('content')

    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Tambah Data User</h1>
                        <a href="/user" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                        <div class="table-responsive">
                            <br>
                            <!-- Form dimulai dari sini -->
                            <form action="/user/simpan" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Masukkan Nama"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Masukkan Nama"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan Password"
                                    required minlength="5"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="level" class="form-label">Level</label>
                                    <input type="level"
                                    class="form-control"
                                    id="level"
                                    name="level"
                                    placeholder="Masukkan Email"
                                    />
                                </div>
                                <button class="btn btn-info"><i class="bi bi-save"></i> Simpan</button>
                                <button class="btn btn-secondary" type="reset"><i class="bi bi-arrow-clockwise"></i> Bersihkan</button>
                            </form>
                            <!-- Form tutup di sini -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
