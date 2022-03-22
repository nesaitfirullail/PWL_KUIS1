<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Stone Template - Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">

    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- HEADER -->
    @include('layouts.header')
     <!-- .site-header -->


    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Daftar Pegawai</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <table class="table table-pegawai">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peg as $p)
                    <tr>
                        <td>{{$p ->id_pegawai}}</td>
                        <td>{{$p ->nama}}</td>
                        <td>{{$p ->nomor_telepon}}</td>
                        <td>{{$p ->alamat}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        .
    </div>

    

    @include('layouts.footer')

    <script src="{{asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
    
</body>
</html>