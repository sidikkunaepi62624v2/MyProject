@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tunjangan Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai/create')}}" class="btn btn-success btn-block">Tambah Tunjangan Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Tunjangan</td>
                                <td>Nama Pegawai</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunpeg as $Data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $Data->Tunjangan->kode_tunjangan }}</td>
                                    <td>{{ $Data->Pegawai->User->name }}</td>
                                    <td><a href="{{route('TunjanganPegawai.edit',$Data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['TunjanganPegawai.destroy', $Data->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
