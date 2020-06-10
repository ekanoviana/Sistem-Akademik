<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Akademik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- memanggil Bootstrap.
    Komentar ini tidak akan tampak di browser. --}}
    <link href="{{ asset('../bootstrap-3.3.6/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('../css/style.css')}}" rel="stylesheet">
    
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class="container">
        @include('navbar')
        @yield('main')
    </div>
    @yield('footer')
    <script src="{{ asset('../js/query_2_2_1.min.js')}}"></script>
    <script src="{{ asset('../bootstrap_3_3_6/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('../js/mahasiswaapp.js')}}"></script>
</body>
</html>