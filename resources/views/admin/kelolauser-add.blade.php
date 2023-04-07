@extends('layout.main-layout')
@section('breadcrumb', 'Kelola User')
@section('title', 'Tambah Data User')
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
            <form class="row g-3" method="post" action="kelolauser">
                @csrf
                <div class="col-12"> <label for="inputNanme4" class="form-label">Username</label> <input type="text"
                        class="form-control" name="nama_pengguna" id="inputNanme4"></div>
                <div class="col-12"> <label for="inputEmail4" class="form-label">Email</label> <input type="email"
                        class="form-control" name="email" id="inputEmail4"></div>
                <div class="col-12"> <label for="inputPassword4" class="form-label">Password</label> <input type="password"
                        class="form-control" name="password" id="inputPassword4"></div>
                <div class="col-12"> <label for="inputAddress" class="form-label">Role</label> <select class="form-select"
                        aria-label="Default select example" name="id_role">
                        <option selected disabled>Pilih Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Petugas</option>
                        <option value="3">Ketua</option>
                    </select></div>
                <div class="text-center"> <a href="kelolauser" class="btn btn-secondary me-2">Batal</a><button
                        type="submit" class="btn btn-primary ">Submit</button></div>
            </form>
        </div>
    </div>
@endsection
