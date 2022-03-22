<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Stone Template - Promotion</title>
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


    <div class="page-h promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Promotions</h3>
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="video-featured">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-holder">
                        <iframe width="860" height="480" frameborder="0" src="http://www.youtube.com/embed/TGFGEDbGThY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="promotion-s">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-left">
                        <div class="product-image">
                            <img src="images/product1.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3>DRAW PAD</h3>
                            <p>Praesent diam eros, semper vitae magna vel, semper venenatis augue. Cras id enim ultricies ligula consequat malesuada. Praesent non laoreet velit, at pretium sapien. <br><br>Nullam gravida consequat enim, ut congue ante molestie ut. In et vehicula elit. Proin vehicula nisi ante.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-right">
                        <div class="product-image">
                            <img src="images/product2.png" alt="">
                        </div>
                        <div class="product-content">
                            <h3>READY FOR CHEF</h3>
                            <p>Praesent diam eros, semper vitae magna vel, semper venenatis augue. Cras id enim ultricies ligula consequat malesuada. Praesent non laoreet velit, at pretium sapien. <br><br>Nullam gravida consequat enim, ut congue ante molestie ut. In et vehicula elit. Proin vehicula nisi ante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>NEW PRODUCT PROMOTION ?</h2>
                    <a href="{{asset('contact-us')}}">(BE THERE RIGHT NOW)</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    
	<script src="{{asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
    
</body>
</html>