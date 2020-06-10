<!DOCTYPE html>
<html>
<head>
	<title>Florista Flower</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>

	<h1>Florista Flower</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silakan login</p>

		{!! Form::open(['url' => 'mahasiswa']) !!}
			<div class="form-group">
				{!! Form::label('Username')!!}<br>
				{!! Form::text('username', null, ['class'=> 'form_login'])!!}
			</div>
				{!! Form::label('Password')!!}<br>
				{!! Form::text('password', null, ['class'=> 'form_login'])!!}

			<div class="form-group">
                {!! Form::submit('Login', ['class'=> 'tombol_login'])!!}
            </div>
			<br/>
		{!! Form::close()!!}
	</div>
</body>
</html>