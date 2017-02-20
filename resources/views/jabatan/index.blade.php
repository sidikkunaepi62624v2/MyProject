@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Jabatan</title>
</head>
<body>

</body>
</html>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Jabatan</div>

                <div class="panel-body">
                    <a href="{{url('/Jabatan/create')}}" class="btn btn-success btn-block">Tambah Jabatan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Jabatan</td>
                                <td>Nama Jabatan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($jabatanvar as $Data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $Data->kode_jabatan }}</td>
                                    <td>{{ $Data->nama_jabatan }}</td>
                                    <td>{{ $Data->besaran_uang }}</td>
                                    <td><a href="{{route('Jabatan.edit',$Data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $Data->id]]) !!}
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