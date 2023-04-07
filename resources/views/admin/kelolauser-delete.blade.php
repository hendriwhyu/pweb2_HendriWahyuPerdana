@extends('layout.main-layout')
@section('breadcrumb', 'Kelola User')
@section('title', 'Hapus Data User')
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
            <h5 class="card-title">Apakah anda yakin hapus {{ $DataUser->nama_pengguna }} ?</h5>
            <form class="row g-3" action="{{ $DataUser->id_pengguna }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12"> <label for="inputNanme4" class="form-label">Username</label> <input type="text"
                        class="form-control" value="{{ $DataUser->nama_pengguna }}" name="nama_pengguna" id="inputNanme4"
                        disabled></div>
                <div class="col-12"> <label for="inputEmail4" class="form-label">Email</label> <input type="email"
                        class="form-control" value="{{ $DataUser->email }}" name="email" id="inputEmail4" disabled></div>
                <div class="col-12"> <label for="inputAddress" class="form-label">Role</label> <select class="form-select"
                        aria-label="Default select example" name="id_role" disabled>
                        @if ($DataUser->role->role == 'Petugas')
                            <option value="2" active>Petugas</option>
                            <option value="1">Admin</option>
                            <option value="3">Ketua</option>
                        @elseif ($DataUser->role->role == 'Admin')
                            <option value="1" active>Admin</option>
                            <option value="2">Petugas</option>
                            <option value="3">Ketua</option>
                        @elseif ($DataUser->role->role == 'Ketua')
                            <option value="3" active>Ketua</option>
                            <option value="2">Petugas</option>
                            <option value="1">Admin</option>
                        @endif

                    </select></div>
                <div class="text-center"><a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                    <form action="kelolauser-delete/{{ $DataUser->id_pengguna }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </div>
            </form>
        </div>
    </div>
@endsection
