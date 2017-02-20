<?php

namespace App\Http\Controllers;


use Validator;
use Request;
use App\Tunjangan;
use App\Jabatan;
use App\Golongan;

class tunjangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjanganvar=Tunjangan::all();
        $jabatanvar=Jabatan::all();
        $golonganvar=Golongan::all();
        return view('tunjanganfol.index', compact('tunjanganvar', 'jabatanvar', 'golonganvar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatanvar = Jabatan::all();
        $golonganvar = Golongan::all();
        return view('tunjanganfol.create', compact('jabatanvar', 'golonganvar'));
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
        $tunjanganvar=request::all();
        Tunjangan::create($tunjanganvar);
        return redirect('Tunjangan');
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
        $jabatanvar=Jabatan::all();
        $golonganvar=Golongan::all();
        $tunjanganvar=Tunjangan::find($id);
        return view('tunjanganfol.edit', compact('tunjanganvar', 'jabatanvar', 'golonganvar'));
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
        $tunjanganupdate = Request::all();
        $tunjanganvar= Tunjangan::find($id);
        $tunjanganvar->update($tunjanganupdate);
        return redirect('Tunjangan');
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
        Tunjangan::find($id)->delete();
        return redirect('Tunjangan');
    }
}
