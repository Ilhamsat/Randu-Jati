<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplierModel;

class supplier_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = supplierModel::all();
        return view('supplier',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new supplierModel();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->noHp;
        $data->jenis_supply = $request->jenisSupply;
        $data->save();
        return redirect()->route('supplier.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = supplierModel::where('id',$id)->get();
        return view('supplier_edit',compact('data'));
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
        $data = supplierModel::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->noHp;
        $data->jenis_supply = $request->jenisSupply;
        $data->save();
        return redirect()->route('supplier.index')->with('alert-success','Data berhasil diubah!');
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
