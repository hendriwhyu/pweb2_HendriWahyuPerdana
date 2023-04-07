<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Proyek::limit(5)->get();
        return view('layout.dashboard', ['dataProyek'=> $data]);
    }
    // public function adminDashboard()
    // {
    //     return view('admin.dashboard');
    // }
    // public function petugasDashboard()
    // {
    //     return view('petugas.dashboard');
    // }
}
