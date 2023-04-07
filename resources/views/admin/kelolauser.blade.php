@extends('layout.main-layout')
@section('breadcrumb', 'Kelola User')
@section('title', 'Data User')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success mt-4" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <h5 class="card-title">Data User</h5>
                <table class="table datatable">
                    <a href="kelolauser-add" class="btn btn-success"><i class='bx bx-plus'></i>Tambah Data</a>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th class="col text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Listuser as $data)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_pengguna }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->role->role }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <button class="btn btn-primary"
                                        onclick="window.location.href='kelolauser-edit/{{ $data->id_pengguna }}'"><i
                                            class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"
                                        onclick="window.location.href='kelolauser-delete/{{ $data->id_pengguna }}'"><i
                                            class='bx bxs-trash'></i></button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

@endsection
