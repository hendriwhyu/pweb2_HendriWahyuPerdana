<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;


class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Proyek::all();
        return view('admin/kelolaproyek', ['ListData' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Proyek::create($request->all());
        if ($data) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Tambah Data Proyek Berhasil');
        }

        return redirect('kelolaproyek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Proyek::findOrFail($id);
        return view('admin.kelolaproyek-edit', ['ListData' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Proyek::findOrfail($id);

        $data->update($request->all());

        if ($data) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Ubah Data Proyek Berhasil');
        }
        return redirect('kelolaproyek');
    }

    public function delete($id)
    {
        $data = Proyek::findOrfail($id);
        return view('admin.kelolaproyek-delete', ['DataProyek' => $data]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyek = Proyek::findOrfail($id);
        $proyek->delete();
        if ($proyek) {
            FacadesSession::flash('status', 'success');
            FacadesSession::flash('message', 'Hapus Data Proyek Berhasil');
        }
        return redirect('kelolaproyek');
    }
}
