@extends('template')

@section('main')
    <div id="input_mahasiswa">
        <h2>Tambah Data Mahasiswa</h2>
        {!! Form::open(['url' => 'mahasiswa']) !!}
            <div class="form-group">
                {!! Form::label('nim', 'NIM:', ['class'=> 'control-label'])!!}
                {!! Form::text('nim', null, ['class'=> 'form-control'])!!}
            </div>
            <div class="form-group">
            {!! Form::label('nama', 'Nama Mahasiswa:', ['class'=> 'control-label'])!!}
                {!! Form::text('nama', null, ['class'=> 'form-control'])!!}
            </div>
            <div class="form-group">
            {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class'=> 'control-label'])!!}
                {!! Form::date('tanggal_lahir', null, ['class'=> 'form-control', 'id'=>'tanggal_lahir'])!!}
            </div>
            <div class="form-group">
            {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class'=> 'control-label'])!!}
                <div class="radio">
                    <label>{!! Form::radio('jenis_kelamin', 'L')!!}Laki-laki</label>
                </div>
                <div class="radio">
                    <label>{!! Form::radio('jenis_kelamin', 'P')!!}Perempuan</label></label>
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Simpan', ['class'=> 'btn btn-primary form-control'])!!}
            </div>
        {!! Form::close()!!}
    </div>
@endsection
@section('footer')
    <div id="footer">
        <p>&copy; Polines 2020</p>
    </div>

@stop