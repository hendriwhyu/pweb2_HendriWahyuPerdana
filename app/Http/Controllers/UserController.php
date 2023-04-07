<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class UserController extends Controller
{
    public function show()
    {
        $user = User::with('role')->get();
        return view('admin/kelolauser', ['Listuser' => $user]);
    }
    public function create(UserCreateRequest $request)
    {

        $data = new User;

        $data->nama_pengguna = $request->nama_pengguna;
        $data->email = $request->email;
        $password = $request->password;
        $hashPass = Hash::make($password);
        $data->password = $hashPass;
        $data->id_role = $request->id_role;
        $data->save();

        // $data = User::create($request->all());
        if ($data) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Tambah Data User Berhasil');
        }

        return redirect('kelolauser');
    }
    public function edit($id)
    {
        $user = User::with('role')->findOrFail($id);
        return view('admin.kelolauser-edit', ['DataUser' => $user]);
    }
    public function update(UserUpdateRequest $request, $id)
    {
        $data = User::findOrfail($id)->update([
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_role' => $request->id_role,
        ]);
        // $data->update($request->all());

        if ($data) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Ubah Data User Berhasil');
        }
        return redirect('kelolauser');
    }

    public function delete($id)
    {
        $user = User::with('role')->findOrfail($id);
        return view('admin.kelolauser-delete', ['DataUser' => $user]);
    }
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $user->delete();
        if ($user) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Hapus Data User Berhasil');
        }
        return redirect('kelolauser');
    }
}
