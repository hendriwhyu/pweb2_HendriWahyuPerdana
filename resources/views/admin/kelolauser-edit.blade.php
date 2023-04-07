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
            <form class="row g-3" action="{{ $DataUser->id_pengguna }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12"> <label for="inputNanme4" class="form-label">Username</label> <input type="text"
                        class="form-control" value="{{ $DataUser->nama_pengguna }}" name="nama_pengguna" id="inputNanme4">
                </div>
                <div class="col-12"> <label for="inputEmail4" class="form-label">Email</label> <input type="email"
                        class="form-control" value="{{ $DataUser->email }}" name="email" id="inputEmail4"></div>
                <div class="col-12"> <label for="inputPassword4" class="form-label">Password</label> <input type="password"
                        class="form-control"value="{{ $DataUser->password }}" name="password" id="inputPassword4"></div>
                <div class="col-12"> <label for="inputAddress" class="form-label">Role</label> <select class="form-select"
                        aria-label="Default select example" name="id_role">
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
                <div class="text-center"><a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a> <button
                        type="submit" class="btn btn-primary">Update</button> </div>
            </form>
        </div>
    </div>
@endsection
