<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\stock;
use Illuminate\Support\Facades\DB;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tampil Data
        // $stock = stock::orderBy('desc');
        //$stock= DB::select('select * from stock');
        $stock=stock::all();
        return view('admin.dbarang')->with('stock',$stock);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view(dbarang.create);
        // \app\stock::create($request->all());
        //  return redirect('/dbarang');
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
            'cSTKpk' => 'required',
            'cSTKdesc' => 'required',
            'nSTKbuy' => 'required'
        ]);

        stock::create([
            'cSTKpk' => $request -> cSTKpk,
            'cSTKdesc' =>$request -> cSTKdesc,
            'nSTKbuy' =>  $request -> nSTKbuy
        ]);
        return redirect(route('dbarang.index'))->with('sucsess','Data Berhasil Ditambahkan') ;
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
