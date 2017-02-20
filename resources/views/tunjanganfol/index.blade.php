@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Tunjangan</div>

                <div class="panel-body">
                    <a href="{{url('/Tunjangan/create')}}" class="btn btn-success btn-block">Tambah Tunjangan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Tunjangan</td>
                                <td>Nama Jabatan</td>
                                <td>Nama Golongan</td>
                                <td>Status</td>
                                <td>Jumlah Anak</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($tunjanganvar as $Data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $Data->kode_tunjangan }}</td>
                                    <td>{{ $Data->Jabatan->nama_jabatan }}</td>
                                    <td>{{ $Data->Golongan->nama_golongan }}</td>
                                    <td>{{ $Data->status }}</td>
                                    <td>{{ $Data->jumlah_anak }}</td>
                                    <td>{{ $Data->besaran_uang }}</td>
                                    <td><a href="{{route('Tunjangan.edit',$Data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $Data->id]]) !!}
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
@endsection
