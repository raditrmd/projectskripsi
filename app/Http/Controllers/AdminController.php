<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function dbarang()
    {
        return view('admin.dbarang');
    }

    public function dpenjualan()
    {
        return view('admin.dpenjualan');
    }

    public function darea()
    {
        return view('admin.darea');
    }
}
