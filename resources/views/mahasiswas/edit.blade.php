@extends('template')

@section('main')
<div id="mahasiswa">
    <h2>Edit Data Mahasiswa</h2>
    {!! Form::model($mahasiswa, ['method' => 'PATCH', 'files' => 'true', 'action' => ['MahasiswaController@update', $mahasiswa->id]]) !!}
    @include('mahasiswas/form', ['submitButtonText'=>'Update'])
    {!! Form::close() !!}
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; Polines 2020</p>
</div>
@stop