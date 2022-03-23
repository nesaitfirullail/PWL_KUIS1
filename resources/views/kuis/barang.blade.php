<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Daftar Barang | KUIS PWL 1</title>
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
    @include('header')
    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Daftar Barang</h3>
                </div>
            </div>
        </div>
    </div>    
     <!-- .site-header -->
        <table class="table table-gambar">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $b)
                    <tr>
                        <td>{{$b ->id_barang}}</td>
                        <td>{{$b ->nama_barang}}</td>
                        <td>{{$b ->harga}}</td>
                        <td>{{$b ->stok}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    



    <script src="{{asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    

    <div class="col-md">
        <div class="page">
            tes
        </div>
    </div>
    @include('footer')
    
</body>
</html>