@extends('layout.main-layout')
@section('breadcrumb', 'Kelola User')
@section('title', 'Edit Data User')
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
            <h5 class="card-title">Edit Data</h5>
            <form class="row g-3" action="{{ $ListData->id_pengguna }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Proyek</label>
                    <input type="text" class="form-control" name="nama_proyek" value="{{ $ListData->nama_proyek }}" id="exampleFormControlInput1" >
                </div>
                    </select></div>
                <div class="text-center"><a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a> <button
                        type="submit" class="btn btn-primary">Update</button> </div>
            </form>
        </div>
    </div>
@endsection
