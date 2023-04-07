@extends('layout.main-layout')
@section('breadcrumb', 'Kelola Proyek')
@section('title', 'Data Proyek')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success mt-4" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <h5 class="card-title">Data Proyek</h5>
                <table class="table datatable">
                    <a href="kelolaproyek-add" class="btn btn-success"><i class='bx bx-plus'></i>Tambah Data</a>
                    <thead>
                        <tr>
                            <th class="col-2">No</th>
                            <th class="col-8">Nama Proyek</th>
                            <th class="col-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ListData as $data)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_proyek }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    {{-- <button class="btn btn-success"
                                        onclick="window.location.href='kelolaproyek-edit/{{ $data->id_proyek }}'"><i class='bx bxs-detail'></i></button> --}}
                                    <button class="btn btn-primary"
                                        onclick="window.location.href='kelolaproyek-edit/{{ $data->id_proyek }}'"><i
                                            class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"
                                        onclick="window.location.href='kelolaproyek-delete/{{ $data->id_proyek }}'"><i
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
