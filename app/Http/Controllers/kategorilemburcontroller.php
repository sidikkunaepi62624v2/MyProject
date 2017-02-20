<?php

namespace App\Http\Controllers;

use Request;
use App\Kategori_lembur;
use App\Jabatan;
use App\Golongan;

class kategorilemburcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kalemv=Kategori_lembur::all();
        return view('kalemf.index', compact('kalemv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kalemv=Kategori_lembur::all();
        $jabatanv=Jabatan::all();
        $golonganv=Golongan::all();
        return view('kalemf.create', compact('kalemv', 'jabatanv', 'golonganv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kalemv=request::all();
        Kategori_lembur::create($kalemv);
        return redirect('KategoriLembur');
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
        $kalemv=Kategori_lembur::find($id);
        $jabatanv=Jabatan::all();
        $golonganv=Golongan::all();
        return view('kalemf.edit', compact('kalemv', 'jabatanv', 'golonganv'));
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
        $kalemvupdate = Request::all();
        $kalemv= Kategori_lembur::find($id);
        $kalemv->update($kalemvupdate);
        return redirect('KategoriLembur');
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
        Kategori_lembur::find($id)->delete();
        return redirect('KategoriLembur');
    }
}
