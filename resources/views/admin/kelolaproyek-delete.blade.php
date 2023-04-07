@extends('layout.main-layout')
@section('breadcrumb', 'Kelola Proyek')
@section('title', 'Hapus Data Proyek')
@section('content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h5 class="card-title">Apakah anda yakin hapus {{ $DataProyek->nama_pengguna }} ?</h5>
            <form class="row g-3" action="{{ $DataProyek->id_pengguna }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Proyek</label>
                    <input type="text" class="form-control" name="nama_proyek" value="{{ $DataProyek->nama_proyek }}"
                        id="exampleFormControlInput1" disabled>
                </div>
                </select>
        </div>
        <div class="text-center"><a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
            <form action="kelolaproyek-delete/{{ $DataProyek->id_pengguna }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Hapus</button>

            </form>
        </div>
        </form>
    </div>
    </div>
@endsection
