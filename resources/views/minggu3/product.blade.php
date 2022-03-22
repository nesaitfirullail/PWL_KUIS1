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
                    <h3>Products</h3>
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="filter-controls controls">
                        <li class="filter active" data-filter="mix">All</li>
                        <li class="filter" data-filter="category-1">Music</li>
                        <li class="filter" data-filter="category-2">Creative</li>
                        <li class="filter" data-filter="category-3">Responsive</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div id="Grid">
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p1.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p1.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>First Item</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p2.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p2.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>New Second</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p3.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p3.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Number Three</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p4.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p4.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Fourth Item</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p5.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p5.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Active Five</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-3 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p6.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p6.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Another Six</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-2 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p7.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p7.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>New Seven</h4>
                        <span>Creative</span>
                    </div>
                </div>
                <div class="mix category-1 col-md-3 col-sm-6">
                    <div class="thumb-p">
                        <img src="{{asset('images/p8.jpg')}}" alt="">
                        <div class="overlay-p">
                            <a href="{{asset('images/p8.jpg')}}" data-rel="lightbox"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-p">
                        <h4>Eighth Item</h4>
                        <span>Creative</span>
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
                    <a href="contact.html">(BE THERE RIGHT NOW)</a>
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