@extends('layouts.master')

@include('layouts.header')

<div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="map-holder">
                        <div id="map_canvas" class="map-canvas" style="height: 360px;"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <form action="#" method="post">
                            <fieldset class="col-md-6">
                                <input type="text" name="name" placeholder="Name...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="email" name="email" placeholder="Email...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12">
                                <textarea name="message" id="message" rows="5" placeholder="Message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <button class="main-button">Send Message</button>
                            </fieldset>
                        </form>
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
                    <a href="#">(BE THERE RIGHT NOW)</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('js/jquery.gmap3.min.js')}}"></script>
    
    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('#map_canvas').gmap3({
                marker:{
                    address: '13.758468,100.567481' 
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>
      
    @include('layouts.footer')