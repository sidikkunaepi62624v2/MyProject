<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_pegawai;
use App\Tunjangan;
use App\User;
use App\Pegawai;

class tunjanganpegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=User::all();
        $tunpeg=Tunjangan_pegawai::all();
        $tunjanganvar=Tunjangan::all();
        return view('tunpegfol.index', compact('tunpeg', 'tunjanganvar', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pegawaivar=Pegawai::all();
        $user=User::all();
        $tunjanganvar=Tunjangan::all();
        $tunpeg=Tunjangan_pegawai::all();
        return view('tunpegfol.create', compact('tunpeg', 'tunjanganvar','user', 'pegawaivar'));
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
        $tunpeg=request::all();
        Tunjangan_pegawai::create($tunpeg);
        return redirect('TunjanganPegawai');
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
        $user=User::all();
        $tunjanganvar=Tunjangan::all();
        $tunpeg=Tunjangan_pegawai::find($id);
        $coba=Tunjangan_pegawai::all();
        $pegawaivar=Pegawai::all();
        return view('tunpegfol.edit', compact('tunpeg', 'user', 'tunjanganvar', 'coba', 'pegawaivar'));
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
        $tunpegupdate = Request::all();
        $tunpeg= Tunjangan_pegawai::find($id);
        $tunpeg->update($tunpegupdate);
        return redirect('TunjanganPegawai');
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
        Tunjangan_pegawai::find($id)->delete();
        return redirect('TunjanganPegawai');
    }
}
