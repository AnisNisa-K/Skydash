@extends('layouts.master')
@section('title', 'edit user')
@section('content')

    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Edit Data User</h1>
                        <a href="/user" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                            <br> <br>
                            <!-- Form dimulai dari sini -->
                            <form action="/user/{{ $user->id }}/update" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama User</label>
                                    <input type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="{{ $user->name }}"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text"
                                    class="form-control"
                                    id="username"
                                    name="username"
                                    value="{{ $user->username }}"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="{{ $user->email }}"
                                    placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    value="{{ $user->password }}"
                                    placeholder=""
                                    required minlength="5"
                                    />
                                </div>
                                <button class="btn btn-info"><i class="bi bi-save"></i> Update</button>
                            </form>
                            <!-- Form tutup di sini -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
