<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paket_model;

class paket_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //namamodel
        $data = paket_model::all();
        return view('paket', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new paket_model();
        $data->nama = $request->nama;
        $file = $request-> file('file');
        $ext=$file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;
        $data->isi_paket = $request->isipaket;
        $data->jml_paket = $request->jmlpaket;
        $data->harga_paket = $request->harga;
        $data->save();
        return redirect()->route('paket.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = paket_model::findOrFail($id);
        return view('paket_edit',compact('data'));
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
         $data = paket_model::findOrFail($id);
        $data->nama = $request->input('nama');
        if(empty($request->file('file'))){
            $data->file = $data->file;
        }else{
            unlink('uploads/file/'.$data->file);
            $file = $request->file('file');
            $ext=$file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $data->file = $newName;
        }
         $data->isi_paket = $request->input('isipaket');
        $data->jml_paket = $request->input('jmlpaket');
        $data->harga_paket = $request->input('harga');
        $data->save;
        return redirect()->route('paket.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = paket_model::where('id',$id)->first();
        if($data->delete()){
            unlink('uploads/file/'.$data->file);
        }
        return redirect()->route('paket.index')->with('alert-success','Data berhasi dihapus!');    }
}
