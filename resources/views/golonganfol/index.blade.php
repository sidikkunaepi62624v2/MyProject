@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Golongan</div>

                <div class="panel-body">
                    <a href="{{url('/Golongan/create')}}" class="btn btn-success btn-block">Tambah Golongan</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode golongan</td>
                                <td>Nama Golongan</td>
                                <td>Besaran Uang</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($golonganvar as $Data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $Data->kode_golongan }}</td>
                                    <td>{{ $Data->nama_golongan }}</td>
                                    <td>{{ $Data->besaran_uang }}</td>
                                    <td><a href="{{route('Golongan.edit',$Data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Golongan.destroy', $Data->id]]) !!}
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
