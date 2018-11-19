<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang_model;

class barang_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang_model::all();
        return view('barang')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new barang_model();
		$data->name = $request->name;
		$data->jenisKomposisi = $request->jenisKomposisi;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
		$data->save();
		return redirect()->route('barang.index')->with('alert-success','Berhasil Menambahkan Barang!');
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
        $data = barang_model::where('id',$id)->get();
        return view('barang_edit',compact('data'));
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
        $data = barang_model::where('id',$id)->first();
        $data->name = $request->name;
        $data->jenisKomposisi = $request->jenisKomposisi;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->save();
        return redirect()->route('barang.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = barang_model::where('id',$id)->first();
        $data->delete();
        return redirect()->route('barang.index')->with('alert-success','Data berhasil dihapus!');
    }
}
