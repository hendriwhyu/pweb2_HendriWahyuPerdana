@extends('layout.main-layout')
@section('breadcrumb', 'Kelola Proyek')
@section('title', 'Tambah Data Proyek')
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
            <h5 class="card-title">Tambah Data</h5>
            <form class="row g-3" method="post" action="kelolaproyek">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Proyek</label>
                    <input type="text" class="form-control" name="nama_proyek" id="exampleFormControlInput1" >
                </div>
                <div class="text-center"> <a href="kelolauser" class="btn btn-secondary me-2">Batal</a><button
                        type="submit" class="btn btn-primary ">Submit</button></div>
            </form>
        </div>
    </div>
@endsection
