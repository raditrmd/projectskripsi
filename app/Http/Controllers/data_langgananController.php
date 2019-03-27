<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\data_langganan;
use Illuminate\Support\Facades\DB;

class data_langgananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_langganan=data_langganan::all();
        return view('admin.dlangganan')->with('data_langganan',$data_langganan);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(dlangganan.create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Kode_langganan' => 'required',
            'Nama_langganan' => 'required',
            'Alamat' => 'required',
            'No_Tlp' => 'required',
            'Wilayah' => 'required'
        ]);

        data_langganan::create([
            'Kode_langganan' => $request -> Kode_langganan,
            'Nama_langganan' =>$request -> Nama_langganan,
            'Alamat' =>  $request -> Alamat,
            'No_Tlp' =>  $request -> No_Tlp,
            'Wilayah' =>  $request -> Wilayah
        ]);
        return redirect(route('dlangganan.index'))->with('sucsess','Data Berhasil Ditambahkan') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
