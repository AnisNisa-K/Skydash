@extends('layouts.master')
@section('title', 'User')
@section('content')

 <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data User</h1>
                    <a href="/user/tambah"class="btn btn-info"> Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nama</td>
                                    <td>Username</td>
                                    <td>Password</td>
                                    <td>Level</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td><a href="/user/{{ $user->id }}/show" class="btn btn-secondary"></a> Edit</td>
                                    <td><a href="/user/{{ $user->id }}/delete" onclick="return confirm ('Yakin data akan dihapus?')" class="btn btn-warning"></a> Hapus</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection