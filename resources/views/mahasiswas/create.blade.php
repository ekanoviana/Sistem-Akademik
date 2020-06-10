@extends('template')

@section('main')
    <div id="input_mahasiswa">
        <h2>Tambah Data Mahasiswa</h2>
        {!! Form::open(['url'=>'mahasiswa', 'files'=>'true']) !!}
            @include('mahasiswas/form', ['submitButtonText'=>'Simpan'])
        {!! Form::close() !!}
    </div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; Polines 2020</p>
</div>
@stop